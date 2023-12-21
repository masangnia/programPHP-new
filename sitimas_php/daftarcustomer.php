<html>
<title>
	Daftar Customer
</title>
<body>
<?php
	$conn = mysqli_connect("localhost","root","","persediaandb");
	if (mysqli_connect_errno()){
		echo "Koneksi Gagal".mysqli_connect_error();
	}
	$query = mysqli_query($conn,"select * from tbcustomer");

?>
<table width="100%" height="100%" border="1" bgcolor="skyblue">
	<tr>
		<td>
			<table width="800" height="87" border="1" align="center" bgcolor="violet">
				<center>
					<tr>
						<td width="400"><center><h1>DAFTAR CUSTOMER</h1></center>
						</td>
					</tr>
				<form method="post" action="koneksicustomer.php">
			</table>

<table width="800" border="1" align="center" bgcolor="white">
	<tr>
                        <td><b>Kode Customer</td>					
						<td><b>Nama Customer</td>
						<td><b>Telepon</td>
						<td><b>Email</td>
						<td><b>Alamat</td>
                        <td><b>Hapus<b></td>
						<td><b>Edit<b></td>
						<td><b>Kembali<b></td>                      
	</tr>

<?php
	while ($row=mysqli_fetch_array($query)) 
	{
        echo "<tr>";
        echo "<td>".$row["kdcustomer"]."</td>";
        echo "<td>".$row["nmcustomer"]."</td>";
        echo "<td>".$row["tlp"]."</td>";
        echo "<td>".$row["email"]."</td>";
        echo "<td>".$row["alamat"]."</td>";
        echo "<td><a href =deletecust.php?kdcustomer=".$row["kdcustomer"].">Delete</a></td>";
        echo "<td><a href =editcustomer.php?kdcustomer=".$row["kdcustomer"].">Edit</a></td>";
        echo "<td><a href='customer.php'>Back</a></td>";
        echo "<tr>";
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
</html>r