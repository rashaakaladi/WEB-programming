<!DOCTYPE html>
<html>
<head>
<title>Cricket Players</title>
<style>
body { background:#fce4ec; text-align:center; font-family:Arial; }
.container { background:white; width:400px; margin:50px auto; padding:25px; border-radius:20px; }
h2 { color:#ad1457; }
table { width:100%; border-collapse:collapse; }
th { background:#c2185b; color:white; }
td,th { padding:10px; border:1px solid #ddd; }
</style>
</head>
<body>
<div class="container">
<h2>INDIAN CRICKET PLAYERS</h2>
<?php
$players=array("Virat Kohli","Rohit Sharma","MS Dhoni","Jasprit Bumrah","Hardik Pandya");

echo "<table>";
echo "<tr><th>Sl.No</th><th>Player Name</th></tr>";

$i=1;
foreach($players as $player) {
    echo "<tr><td>$i</td><td>$player</td></tr>";
    $i++;
}
echo "</table>";
?>
</div>
</body>
</html>
