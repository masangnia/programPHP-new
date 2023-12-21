<htm<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Barang</title>
</head>

<body>
    <?php

    // Koneksi ke mysql
    $conn = mysqli_connect("localhost","root","","persediaandb");

    if (mysqli_connect_errno()) {
        echo "Koneksi Gagal" . mysqli_connect_errno();
    }

    $query = mysqli_query($conn, "SELECT * from tbcustomer WHERE kdcustomer='$_GET[kdcustomer]'"); 
    $row = mysqli_fetch_array($query);

    ?>

    <form action="editcustproses.php" method="post">
        <td>
            <pre>
                kdcustomer  : <input type="text" name="kdcustomer" value="<?php echo $row['kdcustomer']; ?>">
                nmcustomer  : <input type="text" name="nmcustomer" value="<?php echo $row['nmcustomer']; ?>">
                tlp         : <input type="text" name="tlp"   value="<?php echo $row['tlp']; ?>">
                email       : <input type="text" name="email"    value="<?php echo $row['email']; ?>">
                alamat     : <input type="text" name="alamat"   value="<?php echo $row['alamat']; ?>">
                <input type="submit" value="Update">
            </pre>
        </td>
    </form>
</body>

</html>