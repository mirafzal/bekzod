<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<div class="container mt-4">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <p class="text-danger">
                <?= $_REQUEST['message'] ?? '' ?>
            </p>
            <form action="product-controller.php" method="POST">
                <div class="mb-3">
                    <input type="text" value="<?= $product['id'] ?>" class="form-control" id="name" name="id" hidden>
                    <input type="text" value="update" class="form-control" id="name" name="method" hidden>
                    <label for="name" class="form-label">Category Name</label>
                    <input type="text" value="<?= $product['name'] ?>" placeholder="Mahsulot nomini kiriting" class="form-control" id="name" name="name" required>
                    <label for="name"  class="form-label">Category Price</label>
                    <input type="text" value="<?= $product['price'] ?>" placeholder="Mahsulot narxini kiriting" class="form-control" id="name" name="price" required>
                    <label for="name" class="form-label">Category id</label>
                    <input type="text" value="<?= $product['category_id'] ?>" placeholder="Mahsulot idsini kiriting" class="form-control" id="name" name="category_id" required>
                </div>
                <button type="submit" name="add" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>