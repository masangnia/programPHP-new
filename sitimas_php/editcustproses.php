<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Customer</title>
</head>

<body>
    <?php
    		$kdcustomer = $_POST['kdcustomer'];
            $mcustomer = $_POST['nmcustomer'];
            $tlp = $_POST['tlp'];
            $email = $_POST['email'];
            $alamat = $_POST['alamat'];
    // Koneksi ke mysql
    $conn = mysqli_connect ("localhost","root","","persediaandb");
    if (mysqli_connect_errno()){
        echo "Koneksi Gagal".mysqli_connect_error();
    }
    $query = mysqli_query($conn,"update tbcustomer set nmcustomer='$_POST[nmcustomer]', tlp='$_POST[tlp]', email='$_POST[email]', alamat='$_POST[alamat]' where kdcustomer='$_POST[kdcustomer]'");
    ?>
    data sudah di update
    <a href = "daftarcustomer.php">lihat data</a>
</body>
</html>