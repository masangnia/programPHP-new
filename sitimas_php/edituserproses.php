<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>
    <body>
        <?php
            $username = $_POST['username'];
            $pass     = $_POST['pass'];
            //koneksi ke mysql
            $conn = mysqli_connect("localhost", "root","","persediaandb");
            if (mysqli_connect_errno()){
                echo "Koneksi Gagal".mysqli_connect_error();
            }
            $query = mysqli_query($conn,"update tbuser set username='$_POST[username]', pass='$_POST[pass]' where username='$_POST[username]'");
        ?>
            Data Sudah Di update
            <a href="daftaruser.php">Lihat Data</a>
    </body>
</html>