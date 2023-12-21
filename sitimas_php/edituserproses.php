<html>
    <body>
        <?php
            $username = $_POST['username'];
            $pass = $_POST['pass'];
            $conn = mysqli_connect("localhost", "root","","persediaandb");
            if (mysqli_connect_errno()) 
            {
                echo "Koneksi Gagal".mysqli_connect_error();
            }
            $query = mysqli_query($conn, "UPDATE user SET username = '$_POST[username]', pass = '$_POST[pass]' WHERE username = '$_POST[username]'");
        ?>
            Data Sudah Diupdate
            <a href="daftaruser.php">Lihat Data</a>
    </body>
</html>