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
    <style>

    </style>
</head>

<body>

    <br><br>
    <div class="form">
        <span class="welcome">Negative!</span><br>
        <?php
        session_start();
        $us = isset($_SESSION['username']) ? $_SESSION['username'] : 0;

        ?>
        <span class="tt">
            HAI!!!<?php echo $_SESSION['username']; ?>
        </span>
        <span class="text">
            <br>
            <br>
            Dari survey kami Anda memiliki kemungkinan kecil mengidap virus COVID-19
            <br><br>
            Jaga kesehatan dan kebersihan anda
            <br>
            #stayathome
            <br>
            #staysafe
            <br>
            #keephappy:)
        </span>

    </div>
</body>

</html>