<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<div class="container mt-4">
    <div class="row">
        <?php if ($_SESSION['id']) : ?>
            <h1>xush kelibsiz</h1>
        <?php else: ?>
            <h1>iltimos login qiling.</h1>
        <?php endif; ?>
        <div class="col-3"></div>
        <div class="col-6">
            <a href="create.product.php">ADD PRODUCT</a>
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>PRICE</th>
                    <th>CATEGORY ID</th>
                    <th>BUTTON</th>
                </tr>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?= $product['id'] ?> </td>
                        <td><?= $product['name'] ?> </td>
                        <td><?= $product['price'] ?> </td>
                        <td><?= $product['category_id'] ?> </td>
                        <td>
                            <a href="product-controller.php?method=edit&id=<?= $product['id'] ?>"
                               class="btn btn-danger">Edit</a>
                            <a href="product-controller.php?method=delete&id=<?= $product['id'] ?>"
                               class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>
</body>
</html>