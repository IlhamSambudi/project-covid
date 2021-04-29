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
    <link rel="stylesheet" href="http://localhost/loginregister/js/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://kit.fontawasome.com/a076d05399.js  ">
</head>

<body>

    <div class="form">
        <span class="welcome"> Registration</span>
        <form method="post">
            <input class="input" type="text" name="nama" placeholder="Nama"><br>
            <input class="input" type="text" name="alamat" placeholder="Alamat"><br>
            <input class="input" type="int" name="no" placeholder="No. tlp"><br>
            <input class="input" type="text" name="username" placeholder="Username"><br>
            <input class="input" type="password" name="password" placeholder="Password"><br>
         
                <span class="welcome">Answer The Question</span>
                <span class="text">
                    <br>
                    1. Apakah akhir - akhir ini suhu anda berkisaran 37-38 derajat celcius?
                    <br>
                    <input type="radio" name="a" value=1 />yes
                    <input type="radio" name="a" value=0 />no

                    <br>
                    <br>
                    2. Apakah anda mengalami gejala seperti batuk kering dan flu?
                    <br>
                    <input type="radio" name="b" value=1 />yes
                    <input type="radio" name="b" value=0 />no

                    <br>
                    <br>
                    3. Apakah anda berinteraksi dengan orang lain akhir - akhir ini?
                    <br>
                    <input type="radio" name="c" value=1 />yes
                    <input type="radio" name="c" value=0 />no

                    <br>
                    <br>
                    4. Apakah anda merasa kelelahan dan lemas akhir - akhir ini?
                    <br>
                    <input type="radio" name="d" value=1 />yes
                    <input type="radio" name="d" value=0 />no

                    <br>
                    <br>
                    5. Apakah anda mengalami gejala sesak nafas dan tenggorokan sakit?
                    <br>
                    <input type="radio" name="e" value=1 />yes
                    <input type="radio" name="e" value=0 />no
                    <br>
                    <br>
                    <input class="enter" type="submit" name="simpan" value="Done">
                    <br>
                    <br>
            
        </form>
    </div>

</body>

</html>
<?php
include 'config.php';

if (@$_POST['simpan']) {
    $nama = @$_POST['nama'];
    $alamat = @$_POST['alamat'];
    $no = @$_POST['no'];
    $username = @$_POST['username'];
    $password = @$_POST['password'];
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $d = $_POST['d'];
    $e = $_POST['e'];
    $total = $a + $b + $c + $d + $e;

    $x = $koneksi;

    if ($x) {
        if ($total >= 3) {
            mysqli_query($koneksi, "INSERT INTO identitas (nama, alamat, no,status, username,password) 
            values ('$nama','$alamat','$no','Positive' ,'$username', '$password')");
        } else {
            mysqli_query($koneksi, "INSERT INTO identitas (nama, alamat, no,status, username,password) 
            values ('$nama','$alamat','$no','Negative' ,'$username', '$password')");
        };
        echo "<div class='form'><a href='lg.php'><h3> Success </h3></a></div>";
    } else {
        echo "failed";
    }
}


?>