<?php



function sumAndAverage($arr)
{
    // echo '<pre>';
    // print_r($arr);
    // echo '</pre>';

    $sum = 0;
    $average = 0;
    foreach ($arr as $key => $value) {
        $sum += $value;
    }
    $average = $sum / count($arr);
    return [
        'sum' => $sum,
        'average' => $average
    ];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['arr']) && !empty($_POST['arr'])) {
        $arr = $_POST['arr'] ?? 0;
        $arr = explode(',', $arr);
        $result = sumAndAverage($arr);
    } else {
        echo '<h2 style="color: red;">Please enter arr</h2>';
    }
}





?>

<h1>Sum and average</h1>

<form action="" method="post">
    <label for="arr">arr:</label><br>
    <input type="text" id="arr" name="arr" placeholder="ex: 1,2,3,4,5"><br><br>
    <?php
    if (isset($result) && !empty($result)) {

    ?>
        <p>Sum: <b><?= $result['sum'] ?></b> </p>
        <p>Average: <b><?= $result['average'] ?></b> </p>
    <?php } ?>
    <button type="submit">Calculate</button>
</form>