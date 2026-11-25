<!DOCTYPE html>
<html>
<head>
<title>Electricity Bill</title>
<style>
body {
    background: #fce4ec;
    font-family: Arial;
    text-align: center;
}
.container {
    background: white;
    width: 350px;
    margin: 60px auto;
    padding: 30px;
    border-radius: 20px;
}
h2 { color: #ad1457; }
input {
    padding: 10px;
    margin: 10px;
    border: 1px solid #ddd;
    border-radius: 8px;
}
button {
    background: #c2185b;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
}
.details {
    text-align: left;
    line-height: 1.8;
}
</style>
</head>
<body>
<div class="container">
<h2>ELECTRICITY BILL</h2>
<form method="post">
<input type="text" name="name" placeholder="Consumer Name" required><br>
<input type="text" name="id" placeholder="Consumer ID" required><br>
<input type="number" name="units" placeholder="Units Consumed" min="0" required><br>
<button type="submit" name="submit">Generate Bill</button>
</form>
<?php
if(isset($_POST['submit'])) {
    $name = htmlspecialchars($_POST['name']);
    $id = htmlspecialchars($_POST['id']);
    $u = (int)$_POST['units'];

    if($u <= 100)
        $bill = $u * 1.5;
    elseif($u <= 200)
        $bill = 150 + ($u-100)*5;
    elseif($u <= 300)
        $bill = 650 + ($u-200)*11;
    else
        $bill = 1750 + ($u-300)*6;

    $fixed = 50;
    $duty = $bill * 0.10;
    $fuel = $u * 0.10;
    $tax = $bill * 0.05;
    $total = $bill + $fixed + $duty + $fuel + $tax;
?>
<hr>
<div class="details">
<h3 style="color:#ad1457;text-align:center;">Bill Details</h3>
<b>Consumer Name:</b> <?= $name ?><br>
<b>Consumer ID:</b> <?= $id ?><br>
<b>Units Consumed:</b> <?= $u ?><br>
<hr>
<b>Energy Charge:</b> Rs.<?= number_format($bill,2) ?><br>
<b>Fixed Charge:</b> Rs.<?= number_format($fixed,2) ?><br>
<b>Electricity Duty:</b> Rs.<?= number_format($duty,2) ?><br>
<b>Fuel Charge:</b> Rs.<?= number_format($fuel,2) ?><br>
<b>Additional Tax:</b> Rs.<?= number_format($tax,2) ?><br>
<hr>
<h3 style="color:#ad1457;">Total Bill: Rs.<?= number_format($total,2) ?></h3>
</div>
<?php } ?>
</div>
</body>
</html>
