<!doctype html>
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
        <div class="col-3"></div>
        <div class="col-6">
            <p class="text-danger">
                <?= $_REQUEST['message'] ?? '' ?>
            </p>
            <form method="POST" action="product-controller.php">
                <div class="mb-3">
                    <input type="text" name="method" value="store" class="from-control" id="name" hidden>
                    <label for="name" class="form-label">Product Name</label>
                    <input type="text" value="<?= $product['name']  ?>" name="name" placeholder="Mahsulot nomini kiritinng ? " class="form-control"
                           id="name"
                           required>
                    <label for="name" class="form-label">Product Name</label>

                    <input type="number" name="price" value="<?= $product['price']  ?>" placeholder="Mahsulot narxini kiritinng ? " class="form-control"
                           id="name" required>
                    <label for="name" class="form-label">Product Name</label>

                    <input type="number" name="category_id" value="<?= $product['category_id']  ?>" placeholder="Mahsulot idsini  kiritinng ? "
                           class="form-control"
                           id="name" required>
                    <label for="name" class="form-label">Product Name</label>
                </div>
                <button type="submit" name="add" class="btn btn-primary">ADD</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>