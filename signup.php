<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Sign Up</title>
</head>
<body>
<?php
require_once 'connect.php';
require_once 'valid.php';

if (isset($_POST['action'])) {
    $username = clean($_POST['username']);
    $email = clean($_POST['email']);
    $password = clean($_POST['password']);
    $passwordRpt = clean($_POST['password-rpt']);
    $firstName = clean($_POST['firstname']);
    $lastName = clean($_POST['lastname']);
    $age = clean($_POST['age']);
    $gender = clean($_POST['gender']);

    if (valid($username, $email, $password, $passwordRpt, $firstName, $lastName, $age)) {

        $password = md5($password);

        $sql = "INSERT INTO users (username, email, password, firstname, lastname, age, gender)
                    VALUES ('$username', '$email', '$password', '$firstName', '$lastName', '$age', '$gender')";

        $result = $connect->query($sql);
    }

    if ($result) {
        $successMsg = 'Registration successfully';
    } else {
        $errorMsg = 'The entered data is incorrect!';
    }
}
?>
<div class="container">
    <form action="signup.php" method="post" class="signup-form">
        <h1 class="heading">Sign up</h1>
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

        <?php if ($emptyFieldErrorFlag) { ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $emptyFieldErrorMessage; ?>
            </div>
        <?php } ?>

        <?php if ($lengthErrorFlag) { ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $lengthErrorMessage; ?>
            </div>
        <?php } ?>

        <div class="form-group">
            <input type="username" name="username" class="form-control" placeholder="User Name">
            <input type="email" name="email" class="form-control" placeholder="Email" aria-describedby="emaillHelp">
            <small id="emaillHelp" class="form-text text-muted">We'll never share your email with anyone else</small>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password" id="password">
            <input type="password" name="password-rpt" class="form-control" placeholder="Repeat password"
                   aria-describedby="passwordlHelp">
            <small id="passwordHelp" class="form-text text-muted">From 4 to 8 charachters</small>
        </div>

        <?php if ($passwordErrorFlag) { ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $passwordErrorMessage; ?>
            </div>
        <?php } ?>

        <div class="form-group">
            <label for="firstname">Name</label>
            <input type="text" name="firstname" class="form-control" placeholder="First name" id="firstname">
            <input type="text" name="lastname" class="form-control" placeholder="Last name"
                   aria-describedby="namelHelp">
            <small id="passwordHelp" class="form-text text-muted">From 3 to 50 charachters</small>
        </div>

        <div class="form-group">
            <label for="age">Age</label>
            <input type="text" name="age" class="form-control" placeholder="Age" id="age">
        </div>

        <?php if ($ageErrorFlag) { ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $ageErrorMessage; ?>
            </div>
        <?php } ?>

        <div class="form-group">
            <div class="form-check">
                <input type="radio" name="gender" class="form-check-input" id="male" value="male" checked>
                <label class="form-check-label" for="male">Male</label>
            </div>
            <div class="form-check">
                <input type="radio" name="gender" class="form-check-input" id="female" value="female">
                <label class="form-check-label" for="female">Female</label>
            </div>
        </div>
        <input type="hidden" name="action">
        <button type="submit" class="btn btn-primary btn-block">Sign up</button>
        <a href="signin.php" class="btn btn-primary btn-block">Sign in</a>
    </form>
</div>
</body>
</html>