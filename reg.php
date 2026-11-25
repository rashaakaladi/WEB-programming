<!DOCTYPE html>
<html>
<head>
<title>Registration Form</title>
<style>
body {
    background: #fce4ec;
    font-family: Arial;
    text-align: center;
}
.card {
    background: white;
    width: 350px;
    margin: 100px auto;
    padding: 30px;
    border-radius: 20px;
}
h2 { color: #ad1457; }
input {
    padding: 10px;
    margin: 8px;
    border: 1px solid #ddd;
    border-radius: 8px;
}
button {
    background: #c2185b;
    color: white;
    padding: 10px 25px;
    border: none;
    border-radius: 8px;
}
</style>
</head>
<body>
<div class="card">
<h2>STUDENT REGISTRATION</h2>
<form method="post">
<input type="text" name="name" placeholder="Enter Name" required><br>
<input type="email" name="email" placeholder="Enter Email" required><br>
<input type="password" name="pass" placeholder="Enter Password" required><br>
<input type="number" name="age" placeholder="Enter Age" required><br>
<button name="submit">Register</button>
</form>
<?php
if(isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $age = $_POST['age'];

    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        echo "<p>Invalid Email!</p>";
    elseif(strlen($pass) < 6)
        echo "<p>Password must be 6 characters!</p>";
    elseif($age < 18)
        echo "<p>Age must be 18 or above!</p>";
    else
        echo "<h3>Registration Successful!</h3>
        Welcome ".htmlspecialchars($name);
}
?>
</div>
</body>
</html>
