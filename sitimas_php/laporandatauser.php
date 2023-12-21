<html>
	<body>
		<?php
		$conn = mysqli_connect("localhost", "root","","persediaandb");
		if (mysqli_connect_errno()){
			echo "koneksi Gagal".mysqli_connect_error();
		}
		$query = mysqli_query($conn,"SELECT * FROM user");
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
			<h3>LAPORAN DATA USER</h3>
			<table border="1" cellpadding="5" cellspacing="0" bgcolor="#999999">
				<thead>
					<tr>
						<td><b>Nama User</td>
						<td><b>Password</td>
					</tr>
				</thead>
			<tbody bgcolor="#ffffff">
				<?php
					while ($row=mysqli_fetch_array ($query))

					{
						echo"<tr>";
							echo"<td>".$row['username']."</td>";
							echo"<td>".$row['pass']."</td>";
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
		<a href="user.php">Klik disini Kembali ke Menu Utama</a>
	</body>
</html>