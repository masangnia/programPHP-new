<htm<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>

    <body>
        <?php
            $conn = mysqli_connect("localhost", "root","","persediaandb");
            if (mysqli_connect_errno()) 
            {
                echo "Koneksi Gagal".mysqli_connect_error();
            }
                $query = mysqli_query($conn, "SELECT * from tbuser WHERE username='$_GET[username]'"); 
                $row = mysqli_fetch_array($query); 
            ?>

            <form action="edituserproses.php" method="post">
                <td>
                    <pre>
                        username: <input type="text" name="username" value="<?php echo $row['username']; ?>">
                        pass    : <input type="text" name="pass"     value="<?php echo $row['pass']; ?>">
                        <input type="submit" value="Update"/>
                    </pre>
                </td>
            </form>
    </body>
</html>