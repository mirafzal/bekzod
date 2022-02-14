<?php
require 'product.modul.php';

session_start();

if (!$_SESSION['id']) {
    header('Location: ../home.php');
    exit();
}

if ($_REQUEST['method']) {
    switch ($_REQUEST['method']) {
        case 'index':
            $products = getAllProduct();
            require 'product.php';
            break;
        case 'create':
            require 'create.product.php';
            break;
        case 'store':
            if ($_POST) {
                if (($name = $_POST['name']) && ($price = $_POST['price']) && ($category_id = $_POST['category_id'])) {
                    $id = createProduct($name , $price , $category_id);
                    if ($id) {
                        header('Location: product.php?message=Kategoriya yaratildi');
                        exit();
                    }
                    header('Location: create.product.php?message=Kategoriya yaratishda xatolik yuz berdi.');
                    exit();
                }
                header('Location: create.product.php?message=Kategoriya nomini kiriting.');
                exit();
            }
            break;
        case 'edit':

            $product = getProduct($_REQUEST['id']);
            if (!$product) {
                header('Location: product.php?message=Bunday kategoriya yo\'q');
                exit();
            }
            require 'edit.products.php';
            break;
        case 'update':

            $product = getProduct($_REQUEST['id']);
            if (!$product) {
                header('Location: product.php?message=Bunday kategoriya yo\'q');
                exit();
            }
            if (updateProduct($product['id'], $_REQUEST['name'],  $_REQUEST['price'], $_REQUEST['category_id'])) {
                header('Location: product.php?message=Kategoriya yangilandi');
                exit();
            }
            header('Location: edit.product.php?message=Kategoriya yangilanishida xatolik yuz berdi.');
            exit();
            break;
        case 'delete':
            $product = getProduct($_REQUEST['id']);
            if (!$product) {
                header('Location: product.php?message=Bunday kategoriya yo\'q');
                exit();
            }
            if (deleteProduct($product['id'])) {
                header('Location: product.php?message=Kategoriya o\'chirildi');
                exit();
            }
            header('Location: product.php?message=Kategoriya o\'chirishida xatolik yuz berdi.');
            exit();
            break;
    }
}

