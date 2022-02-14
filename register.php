<?php

session_start();

require 'logger.php';
$db = require 'db_connect.php';

if ($_POST) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = mysqli_prepare($db, "INSERT INTO `users` (`name`, `email`, `password`) VALUES (?, ?, ?)");
    mysqli_stmt_bind_param($stmt, 'sss', $name, $email, $password);

    if (mysqli_stmt_execute($stmt)) {
        $_SESSION['id'] = mysqli_insert_id($db);
        header('Location: home.php');
        exit();
    }

//    mylog("Error: " . $sql . "<br>" . mysqli_error($db));
    header('Location: register-view.php?message=Registratsiya jarayonida xatolik yuz berdi.');
    exit();
}