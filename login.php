<?php

session_start();

require 'logger.php';
$db = require 'db_connect.php';

if ($_POST) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = mysqli_prepare($db, "SELECT * FROM `users` WHERE `email` = ? LIMIT 1");
    mysqli_stmt_bind_param($stmt, 'ss', $email);

    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) === 1) {
        $user = mysqli_fetch_assoc($result);
        if (password_verify($password, $user['password'])) {
            $_SESSION['id'] = $user['id'];
            header('Location: home.php');
            exit();
        }
    }

    header('Location: login-view.php?message=Login yoki parol xato.');
    exit();
}