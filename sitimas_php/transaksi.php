<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Transaksi</title>
</head>

<body>
<CENTER>
<table width="300" height="150" border="1" bgcolor="silver">
  <tr>
    <td><table width="200" height="10" >
    </tr> <center>
<h4>PT.SISTEM INFORMASI</h4>
<b>JL.Raya Serang Km.10 Bitung-Tangerang</b>

 <CENTER>
<table width="400" border="1" bgcolor="#00FF00">
  <tr>
    <td colspan="2">INPUT DATA TRANSAKSI</td>
  </tr>
  <form method="post" action="Koneksitransaksi.php">
    <tr>
      <td width="250">KODE TRANSAKSI</td>
      <td><input name="txtkdtrx" type="text" id="txtkdtrx" size="10" /></td>
    </tr>

    <tr>
      <td width="175">KODE CUSTOMER</td>
      <td width="306"><select name="txtkdcustomer" type="text" id="txtkdcustomer" ></td>
    </tr>

    <?php
    //membuat koneksi ke database persediaandb
    $kon = mysqli_connect("localhost",'root',"","persediaandb");
    if (!$kon){
      die("Koneksi database gagal:".mysqli_connect_erorr());
    }
    // perintah sql untuk menampilkan semua data pda tabel customer
    $sql="select * from tbcustomer";

    $hasil=mysqli_query($kon,$sql);
    $no=0;
    while ($data = mysqli_fetch_array($hasil)) {
    $no++;
      ?>
      <option value="<?php echo $data['kdcustomer'];?>"><?php echo $data['kdcustomer'];?></option>
      <?php
            }
      ?>
      </select></td>
      </tr>

      <tr>


        <td>KODE BARANG </td>
        <td width="306"><select name="txtkdbarang" id="txtkdbarang"></td>
      <?php
      //membuat koneksi ke database persediaandb
      $kon = mysqli_connect("localhost",'root',"","persediaandb");
      if (!$kon) {
        die("Koneksi database gagal:".mysqli_connect_erorr());
      }
      // perintah sql untuk menampilkan semua data pada tabel jurusan
      $sql="select * from barang";

      $hasil=mysqli_query($kon,$sql);
      ?>
      </select></td>
      </tr>

      <tr>
        <td>QUANTITY</td>
        <td><input name="txtqty" type="text" id="txtqty" size="8" /></td>
      </tr>
      <tr>
        <td>TANGGAL</td>
        <td><input type="text"name="txttgl" value="<?php echo date('d-m-Y'); ?>" readonly="readonly" />
        <input type="hidden"name="txttgl" value="<?php echo date('Y-m-d'); ?>"></td>
      </tr>
      <tr><CENTER>
        <td colspan="2"><form id="form5" name="form5" method="post" action="">
         <input name="BtnSave" type="submit" id="BtnSave" value="Save" />
           <input name="BtnBatal" type="reset" id="BtnBatal" value="Batal" />
        </form>    </td></CENTER>
    </tr>
    </table></CENTER>
    <br>
<center><div class="Frame_Footer "><br>
<div class ="Frame_Inside_Footer " style="background-color: #800000; color: #FFFFFF;">
<span class="style1" style="color: #FFFFFF">Copyrights by Siti Mas Sangnia</span><br class="style1" />
<span class="style1"><span class="style1">&copy; 2023 All Rights Reserved</span></span><span class="style1"> 
</span>
</div>

</center>
</table>
</form>
</body>
</html>

