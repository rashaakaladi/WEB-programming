<html>
<head>
<title>Students</title>
<style>
body { background:#fce4ec; text-align:center; font-family:Arial; }
.container { background:white; width:300px; margin:50px auto; padding:20px; border-radius:20px; }
h3 { color:#ad1457; }
</style>
</head>
<body>
<div class="container">
<?php
$a=array("Anu","Rahul","Meera","Arun","Sneha");
echo "<h3>Original</h3>"; print_r($a);
asort($a);
echo "<h3>Ascending</h3>"; print_r($a);
arsort($a);
echo "<h3>Descending</h3>"; print_r($a);
?>
</div>
</body>
</html>
