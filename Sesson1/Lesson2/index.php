<?php
session_start();

//products
if (!isset($_SESSION['products'])) {
    $_SESSION['products'] = [
        [
            'id' => 190234521,
            'title' => 'Máy tính',
            'price' => 1000000,
            'description' => 'Máy tính xa màn hình',
        ],
    ];
}

// add new product
if (isset($_POST['addNewProductSubmit'])) {
    if (isset($_POST['title']) && isset($_POST['price']) && isset($_POST['description'])) {
        $newProduct = [
            'id' => time(),
            'title' => $_POST['title'],
            'price' => $_POST['price'],
            'description' => $_POST['description'],
        ];
        $_SESSION['products'][] = $newProduct;
    } else {
        echo 'Please enter field';
    }
}

// search contact
$searchResult = [];
if (isset($_POST['searchSubmit'])) {
    if (isset($_POST['searchName'])) {
        $searchName = $_POST['searchName'];
        foreach ($_SESSION['products'] as $key => $value) {
            if ($value['id'] == $searchName) {
                $searchResult[] = $value;
            }
        }
    }
}



?>

<!-- View add new product -->
<h1>Add new product</h1>

<form action="" method="post">
    <label for="title">Title:</label><br>
    <input type="text" id="title" name="title"><br><br>
    <label for="price">price:</label><br>
    <input type="number" id="price" name="price"><br><br>
    <label for="description">Description:</label><br>
    <textarea name="description" id="description" cols="30" rows="10"></textarea><br><br>
    <button type="submit" name="addNewProductSubmit">Add new product</button>
</form>

<!-- View list product -->
<h1>List product</h1>
<table border="1">
    <thead>
        <tr>
            <th>id</th>
            <th>Title</th>
            <th>Price</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($_SESSION['products'] as $key => $value) {
        ?>
            <tr>
                <td><?= $value['id'] ?></td>
                <td><?= $value['title'] ?></td>
                <td><?= $value['price'] ?></td>
                <td><?= $value['description'] ?></td>
                <!-- <td>text1.3</td> -->
            </tr>
        <?php } ?>

    </tbody>
</table>

<!-- View search product -->
<h1>Search product</h1>

<form action="" method="post">
    <input type="text" name="searchName"><br><br>
    <button type="submit" name="searchSubmit">Search product</button>
</form>

<!-- View search result -->
<?php
if (!empty($searchResult)) {


?>
    <table border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>Title</th>
                <th>Price</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($searchResult as $key => $value) {
            ?>
                <tr>
                    <td><?= $value['id'] ?></td>
                    <td><?= $value['title'] ?></td>
                    <td><?= $value['price'] ?></td>
                    <td><?= $value['description'] ?></td>
                </tr>
            <?php } ?>

        </tbody>
    </table>
<?php } ?>