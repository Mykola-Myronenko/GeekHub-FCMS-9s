<?php
$servername = '127.0.0.1';
$username = 'root';
$password = '';
$dbname = 'homework_db';

$connect = new mysqli($servername, $username, $password, $dbname);
if ($connect->connect_error) {
    die('Connection failed: ' . $connect->connect_error);
}