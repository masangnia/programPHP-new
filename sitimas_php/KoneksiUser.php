<?php
	// Koneksi ke mysql
	$conn = mysqli_connect("localhost", "root", "", "persediaandb");

	if (mysqli_connect_errno()) {
		echo "Koneksi Gagal".mysqli_connect_error();
	}

	{
		$vusername = $_POST['txtusername'];
		$vpass = $_POST['txtpass'];
	
		{
			$query = mysqli_query($conn, "insert into tbuser (username, pass) values('$vusername', '$vpass')");
			if ($query)
				echo "Input Data Sukses<br>";
			else
				echo "Input Data Gagal<br>";
		}
		// header("location:menu.php");
	}
?>