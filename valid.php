<?php
function clean($value)
{
    $value = str_replace(' ', '', $value);
    $value = stripcslashes($value);
    $value = strip_tags($value);
    return $value;
}

function check_length($value, $min, $max)
{
    $result = (mb_strlen($value) < $min || mb_strlen($value) > $max);
    return !$result;
}

$emptyFieldErrorFlag = false;
$lengthErrorFlag = false ;
$passwordErrorFlag = false;
$ageErrorFlag = false;

$emptyFieldErrorMessage = 'There are empty fields';
$lengthErrorMessage = 'Invalid string length';
$passwordErrorMessage = 'Password and confirm do not match';
$ageErrorMessage = 'Non numeric age value';


function valid($username, $email, $password, $passwordRpt, $firstName, $lastName, $age)
{
    global $emptyFieldErrorFlag, $lengthErrorFlag, $passwordErrorFlag, $ageErrorFlag;

    if (!empty($username) && !empty($email) && !empty($password) && !empty($passwordRpt) &&
        !empty($firstName) && !empty($lastName) && !empty($age)) {
        $emptyFieldErrorFlag = false;
    } else {
        $emptyFieldErrorFlag = true;
    }

    if (check_length($username, 4, 50) && check_length($email, 6, 50) &&
        check_length($password, 4, 8) && check_length($passwordRpt, 4, 8) &&
        check_length($firstName, 3, 50) && check_length($lastName, 3, 50) &&
        check_length($age, 1, 3)) {
        $lengthErrorFlag = false;
    } else {
        $lengthErrorFlag = true;
    }

    if ($password === $passwordRpt) {
        $passwordErrorFlag = false;
    } else {
        $passwordErrorFlag = true;
    }

    if (is_numeric($age)) {
        $ageErrorFlag = false;
    } else {
        $ageErrorFlag = true;
    }

    if (!$emptyFieldErrorFlag && !$lengthErrorFlag && !$passwordErrorFlag && !$ageErrorFlag) {
        return true;
    }
}