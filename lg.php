<!DOCTYPE html>
<html lang="en">

<?php include 'config.php' ?>
<?php include 'navbar.php' ?>
<head>
    <title>COVID-19</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="display.css">
    <link rel="stylesheet" href="http://localhost/covid/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://kit.fontawasome.com/a076d05399.js  ">
</head>


<body>
<br><br><br>
    <div class="form">
        <span class="welcome">Login</span>
        <form action="login.php" method="POST">
            <input class="input" type="text" name="username" placeholder="Username"><br>
            <input class="input" type="password" name="password" placeholder="Password"><br>
            <br>
            <input class="enter" type="submit" name="login" placeholder="Login"><br>
            <br>
            
            
        </form>
    </div>

</body>

</html>
<?php
include 'config.php';
if (@$_POST['simpan']) {
    $username = @$_POST['username'];
    $password = @$_POST['password'];

    mysqli_query($koneksi, "INSERT into identitas(username,password) values ('$username,  $password')");
}
?>
