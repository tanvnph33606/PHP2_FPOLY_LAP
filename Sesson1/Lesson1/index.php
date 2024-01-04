<?php
session_start();

//phonebook
if (!isset($_SESSION['phoneBook'])) {
    $_SESSION['phoneBook'] = [
        [
            'name' => 'Hung',
            'phone' => '0332225690',
        ],
    ];
}

// add new contact
if (isset($_POST['addNewContactSubmit'])) {
    if (isset($_POST['fullname']) && isset($_POST['phoneNumber'])) {
        $newContact = [
            'name' => $_POST['fullname'],
            'phone' => $_POST['phoneNumber'],
        ];
        $_SESSION['phoneBook'][] = $newContact;
    } else {
        echo 'Please enter fullname and phone number';
    }
}

// search contact
$searchResult = [];
if (isset($_POST['searchSubmit'])) {
    if (isset($_POST['searchName'])) {
        $searchName = $_POST['searchName'];
        foreach ($_SESSION['phoneBook'] as $key => $value) {
            if ($value['name'] == $searchName) {
                $searchResult[] = $value;
            }
        }
    }
}



?>

<!-- View add new contact -->
<h1>Add new contact</h1>

<form action="" method="post">
    <label for="fullname">Fullname:</label><br>
    <input type="text" id="fullname" name="fullname"><br><br>
    <label for="phoneNumber">Phone number:</label><br>
    <input type="tel" id="phoneNumber" name="phoneNumber"><br><br>
    <button type="submit" name="addNewContactSubmit">Add new contact</button>
</form>

<!-- View list contact -->
<h1>List contact</h1>
<table border="1">
    <thead>
        <tr>
            <th>Fullname</th>
            <th>Phone number</th>
            <!-- <th>Action</th> -->
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($_SESSION['phoneBook'] as $key => $value) {
        ?>
            <tr>
                <td><?= $value['name'] ?></td>
                <td><?= $value['phone'] ?></td>
                <!-- <td>text1.3</td> -->
            </tr>
        <?php } ?>

    </tbody>
</table>

<!-- View search contact -->
<h1>Search contact</h1>

<form action="" method="post">
    <input type="text" name="searchName"><br><br>
    <button type="submit" name="searchSubmit">Search contact</button>
</form>

<!-- View search result -->
<?php
if (!empty($searchResult)) {


?>
    <table border="1">
        <thead>
            <tr>
                <th>Fullname</th>
                <th>Phone number</th>
                <!-- <th>Action</th> -->
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($searchResult as $key => $value) {
            ?>
                <tr>
                    <td><?= $value['name'] ?></td>
                    <td><?= $value['phone'] ?></td>
                    <!-- <td>text1.3</td> -->
                </tr>
            <?php } ?>

        </tbody>
    </table>
<?php } ?>