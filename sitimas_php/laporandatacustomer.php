<html>
	<body>
		<?php
		$conn = mysqli_connect("localhost", "root","","persediaandb");
		if (mysqli_connect_errno()){
			echo "koneksi Gagal".mysqli_connect_error();
		}
		$query = mysqli_query($conn,"SELECT * FROM tbcustomer");
		?>

		<center>
			<table width="100%" height="300" border="1" bgcolor="#00FF99">
				<tr>
					<td><table width="400" height="50" align="center" bgcolor="#999999">
			</table>
		<center>
			<b><h3> PT. SISTEM INFORMASI </h3>
			Jl. Raya Serang Km.10 Bitung-Tangerang</b>
			<hr>
			<h3>LAPORAN DATA CUSTOMER</h3>
			<table border="1" cellpadding="5" cellspacing="0" bgcolor="#999999">
				<thead>
					<tr>
                        <td><b>Kode Customer</td>					
						<td><b>Nama Customer</td>
						<td><b>Telepon</td>
						<td><b>Email</td>
						<td><b>Alamat</td>
					</tr>
				</thead>
			<tbody bgcolor="#ffffff">
				<?php
					while ($row=mysqli_fetch_array ($query))

					{
						echo"<tr>";						
							echo"<td>".$row['kdcustomer']."</td>";
							echo"<td>".$row['nmcustomer']."</td>";
							echo"<td>".$row['tlp']."</td>";
							echo"<td>".$row['email']."</td>";
                            echo"<td>".$row['alamat']."</td>";
						echo"<tr>";
					}
				?>
		</center>
			</tbody>
		</table><p>
		</center>

		<p><p>
			<center>
			<div class="Frame_Footer">
			<div class="Frame_Inside_Footer" style="background-color: blue; color: white">
			<span class="style1" style="color: white">Copyrights by Siti Mas Sangnia</span><br class="style1" />
			<span class="style1"><span class="style1">&copy; 2023 All Right Reserved</span></span><span class="style1">
			</span>
			</div>
		</table>
		<a href="menu.php">Klik disini Kembali ke Menu Utama</a>
	</body>
</html>