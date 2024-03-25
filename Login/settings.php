<?php
session_start(); // Start the session to access session variables
require_once "database.php"; // Assuming your database connection file is named "database.php"

// Initialize $email variable
$email = "";

// Check if the session variable for email is set
if (isset($_SESSION["email"])) {
    // Retrieve the email from the session and assign it to $email
    $email = $_SESSION["email"];
} else {
    // If the session variable for email is not set, redirect the user to the login page
    header("Location: login.php");
    exit(); // Terminate script execution after redirecting
}

// Fetch user information from the database based on the email
$sql = "SELECT * FROM users WHERE email = ?";
$stmt = mysqli_stmt_init($conn);

if (mysqli_stmt_prepare($stmt, $sql)) {
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    // Fetch user data
    $user = mysqli_fetch_assoc($result);

    // Close the statement
    mysqli_stmt_close($stmt);
} else {
    // If there's an error preparing the SQL statement, display an error message
    echo "<div class='alert alert-danger'>Failed to retrieve user information.</div>";
    exit(); // Terminate script execution
}

if (isset($_POST["delete"])) {
    // Retrieve email and password from the form
    $password = $_POST["password"];

    // Hash the password (assuming you have hashed passwords in your database)
    $passwordHash = hash('sha256', $password);

    // Prepare SQL statement to delete the user account
    $sql = "DELETE FROM users WHERE email = ? AND password = ?";
    $stmt = mysqli_stmt_init($conn);

    if (mysqli_stmt_prepare($stmt, $sql)) {
        // Bind parameters and execute the statement
        mysqli_stmt_bind_param($stmt, "ss", $email, $passwordHash);
        mysqli_stmt_execute($stmt);

        // Check if any rows affected (account deleted)
        if (mysqli_stmt_affected_rows($stmt) > 0) {
            echo "<div class='alert alert-success'>Your account has been deleted successfully.</div>";
            // You may want to redirect the user to a confirmation page or log them out
            // For example:
            // header("Location: account_deleted.php");
            // exit();
        } else {
            echo "<div class='alert alert-danger'>Failed to delete your account. Please check your credentials.</div>";
        }
    } else {
        echo "<div class='alert alert-danger'>Failed to prepare statement.</div>";
    }

    // Close the statement and the database connection
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Account</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h3>User Settings</h3>
        <p>Your current email address: <?php echo $email; ?></p>
        <form action="" method="post">
            <div class="form-group">
                <label for="password">Enter Your Password to Delete Account</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="form-btn">
                <button type="submit" class="btn btn-danger" name="delete"
                    onclick="return confirm('Are you sure you want to delete your account? This action cannot be undone.');">Delete
                    Account</button>
            </div>
        </form>
        <br>
        <div>
            <p>Already Registered? <a href="logout.php">Logout</a></p>
        </div>
    </div>
</body>

</html>