<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Sign In</title>
</head>
<body>
<?php
require_once 'connect.php';
require_once 'valid.php';

if (isset($_POST['action'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
        $successMsg = 'Login and password are correct ';
    } else {
        $errorMsg = 'Incorrect login or password ';
    }
}
?>
<div class="container">
    <form action="signin.php" method="post" class="signin-form">
        <h1 class="heading">Sign in</h1>
        <?php if (isset($successMsg)) { ?>
            <div class="alert alert-success" role="alert">
                <?php echo $successMsg; ?>
            </div>
        <?php } ?>

        <?php if (isset($errorMsg)) { ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $errorMsg; ?>
            </div>
        <?php } ?>
        <div class="form-group">
            <input type="username" name="username" class="form-control" placeholder="User Name">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <input type="hidden" name="action">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Sign in</button>
        <a href="signup.php" class="btn btn-primary btn-block">Sign up</a>
    </form>
</div>
</body>
</html>