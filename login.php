<?php
include 'config.php'; // 

session_start();

if(isset($_POST['submit'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = md5($_POST['password']); // Hash the entered password

    $select = "SELECT * FROM user_form WHERE email = '$email'";
    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        // Verify the hashed password
        if($row['password'] == $password){
            // Authentication successful
            $_SESSION['user_id'] = $row['id']; 
            $_SESSION['user_email'] = $row['email']; 
            header('location: user_page.php'); 
            exit;
        } else {
            $error = 'Incorrect email or password!';
        }
    } else {
        $error = 'User not found!';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="rcontainer">
        <form action="" method="post">
            <h3>Login Now</h3>
            <?php
            if(isset($error)){
                echo '<span class="error-msg">' . $error . '</span>';
            }
            ?>
            <input type="email" name="email" required placeholder="Enter your email">
            <input type="password" name="password" required placeholder="Enter your password">
            <input type="submit" name="submit" value="Login now" class="form-btn">
            <p>Don't have an account? <a href="register.php">Register Now</a></p>
        </form>
    </div>
</body>
</html>
