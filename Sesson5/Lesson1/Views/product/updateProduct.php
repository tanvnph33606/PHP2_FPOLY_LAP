<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>


<body>

    <div class="container">
        <form method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Title</label>
                <input type="text" class="form-control" value="<?= $products['title'] ?>" name="title" id="exampleInputEmail1">
            </div>

            <div class="mb-3">
                <label class="form-label">Category</label>
                <select class="form-select" name="cate_id">
                    <option disabled selected>Lựa chọn danh mục</option>
                    <?php foreach ($dataCategory as $key => $value) {
                        $selected = $value['id'] == $products['cate_id'] ? 'selected' : ''
                    ?>
                        <option <?= $selected ?> value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
                    <?php } ?>

                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Price</label>
                <input type="number" class="form-control" value="<?= $products['price'] ?>" name="price" id="exampleInputPassword1">
            </div>

            <button type="submit" class="btn btn-primary">Update now</button>
        </form>
    </div>
</body>

</html>