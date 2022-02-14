<?php

require 'logger.php';

function getAllProduct() {
    $db = require 'db_connect.php';

    $sql = "SELECT * FROM `product`";
    $result = mysqli_query($db, $sql);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function getProduct($id) {
    $db = require 'db_connect.php';
    $sql = "SELECT * FROM `product` WHERE `id` = '$id' LIMIT 1";
    $result = mysqli_query($db, $sql);
    return mysqli_fetch_assoc($result);
}

function createProduct($name, $price, $category_id) {
    $db = require 'db_connect.php';

    $sql = "INSERT INTO `product` ( `name`, `price`, `category_id`) VALUES ('$name', '$price', '$category_id')";

    if (mysqli_query($db, $sql)) {
        return mysqli_insert_id($db);
    }

    mylog("Error: " . $sql . "<br>" . mysqli_error($db));
    return 0;
}

function deleteProduct($id) {
    $db = require 'db_connect.php';

    $sql = "DELETE FROM `product` WHERE `product`.`id` = '$id'";

    if (mysqli_query($db, $sql)) {
        return true;
    }

    mylog("Error: " . $sql . "<br>" . mysqli_error($db));
    return false;
}

function updateProduct($id, $name , $price ,$category_id) {
    $db = require 'db_connect.php';

    $sql = "UPDATE `product` SET `name` = '$name', `price` = '$price', `category_id` = '$category_id' WHERE `product`.`id` = '$id'";

    if (mysqli_query($db, $sql)) {
        return true;
    }

    mylog("Error: " . $sql . "<br>" . mysqli_error($db));
    return false;
}