<html>
<title>
	Daftar User
</title>
<body>
<?php
	$conn = mysqli_connect("localhost","root","","persediaandb");
	if (mysqli_connect_errno()){
		echo "Koneksi Gagal".mysqli_connect_error();
	}
	$query = mysqli_query($conn,"select * from tbuser");

?>
<table width="100%" height="100%" border="1" bgcolor="skyblue">
	<tr>
		<td>
			<table width="800" height="87" border="1" align="center" bgcolor="violet">
				<center>
					<tr>
						<td width="400"><center><h1>DAFTAR USER</h1></center>
						</td>
					</tr>
				<form method="post" action="Koneksiuser.php">
			</table>

<table width="800" border="1" align="center" bgcolor="white">
	<tr>
		<td><b>Nama User</td>
		<td><b>Password</td>
		<td><b>Hapus</td>
		<td><b>Edit</td>
		<td><b>Kembali</td>
	</tr>

<?php
	while ($row=mysqli_fetch_array($query)) 
	{
		echo"<tr>";
		echo"<td>".$row["username"]."</td>";
		echo"<td>".$row["pass"]."</td>";
		echo"<td><a href =deleteuser.php?username=".$row["username"].">Delete</a></td>";
		echo"<td><a href =edituser.php?username=".$row["username"].">Edit</a></td>";
		echo"<td><a href='user.php'>Back</a></td>";
		echo "</tr>";
	}
?>
</table>
</table>
</CENTER>
<center>
	<div class="Frame_Footer">
	<div class="Frame_Inside_Footer" style="background-color: blue; color: white">
	<span class="style1" style="color: white">Copyrights by Siti Mas Sangnia</span><br class="style1" />
	<span class="style1"><span class="style1">&copy; 2023 All Right Reserved</span></span><span class="style1"></span>
	</div>
</center>
</body>
</html>