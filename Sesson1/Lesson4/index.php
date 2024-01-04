<?php

function calculateFactorial($n)
{
    if ($n < 0) {
        return "Nhap so duong";
    } elseif ($n == 0 || $n == 1) {
        return 1;
    } else {
        $result = 1;
        for ($i = 2; $i <= $n; $i++) {
            $result *= $i;
        }
        return $result;
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['n']) && !empty($_POST['n'])) {
        $n = $_POST['n'];
        $result = calculateFactorial($n);
    } else {
        echo '<h2 style="color: red;">Please enter n</h2>';
    }
}

?>
<h1>Factorial</h1>

<form action="" method="post">
    <label for="n">n:</label><br>
    <input type="text" id="n" name="n" placeholder="ex: 10"><br><br>
    <?php
    if (isset($result) && !empty($result)) {

    ?>
        <p>Result: <b><?= $result ?></b> </p>
    <?php } ?>
    <button type="submit">Calculate</button>
</form>