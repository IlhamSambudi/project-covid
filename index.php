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
        .pilih {
            border: 0;
            font-family: "News701 BT";
            padding: 1%;
            color: white;
            background: none;
            font-size: 15pt;
            float: center;
            width: 30%;
            margin-bottom: 1%;
            border-radius: 24px;
            outline: none;
            border: 2px solid white;
            text-align: center;

        }
    </style>
</head>


<body>
<br><br>
<br><br>
    <div class="form">
        <span class="welcome">My Website</span>
        <form>
            <input class="pilih" type="button" value="Login" onclick="location='lg.php'"/>
            <br><br>
            <input class="pilih" type="button" value="Get Started" onclick="location='rg.php'"/>

        </form>
    </div>

</body>