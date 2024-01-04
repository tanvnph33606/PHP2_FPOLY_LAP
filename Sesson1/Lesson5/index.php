<?php

function calculatePower($n, $exponent)
{
    if ($exponent < 0) {
        return "Vui long nhap so mu duong.";
    } elseif ($exponent == 0) {
        return 1;
    } else {
        $result = 1;
        for ($i = 1; $i <= $exponent; $i++) {
            $result *= $n;
        }
        return $result;
    }
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['n']) && !empty($_POST['n']) && isset($_POST['exponent']) && !empty($_POST['exponent'])) {
        $n = $_POST['n'];
        $exponent = $_POST['exponent'];
        $result = calculatePower($n, $exponent);
    } else {
        echo '<h2 style="color: red;">Please enter n and exponent </h2>';
    }
}

?>
<h1>Power</h1>

<form action="" method="post">
    <label for="n">n:</label><br>
    <input type="text" id="n" name="n" placeholder="ex: 10"><br><br>
    <label for="exponent">exponent:</label><br>
    <input type="text" id="exponent" name="exponent" placeholder="ex: 2"><br><br>
    <?php
    if (isset($result) && !empty($result)) {

    ?>
        <p>Result: <b><?= $result ?></b> </p>
    <?php } ?>
    <button type="submit">Calculate</button>
</form>