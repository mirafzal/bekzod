<?php

session_start();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php if ($_SESSION['id']) : ?>
    <h1>xush kelibsiz</h1>
    <a href="product/product-controller.php?method=index">Produktlar</a>
    <a href="logout.php">Chiqish</a>
<?php else: ?>
    <h1>iltimos login qiling.</h1>
    <a href="register-view.php">Register</a>
    <a href="login-view.php">Login</a>
<?php endif; ?>
</body>
</html>

