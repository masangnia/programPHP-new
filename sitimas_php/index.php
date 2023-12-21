
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login</title>
<style type="text/css">
<!--
.Style1 {color: #F3F3F3}
-->
</style>
</head>

<body>
<CENTER>
<table width="600" height="150" border="1" bgcolor="#00FF99">
  <tr>
    <td><table width="200" height="10" >
      <center></tr>
<h4>PT.SISTEM INFORMASI</h4>
<b>JL.Raya Serang Km.10 Bitung-Tangerang</b>

<hr>
<?php
$error='';
$username="";
$pass="";

if(isset($_POST['cmdlogin']))
{
    $username = $_POST['txtuser'];
    $pass     = $_POST['txtpassword'];
    
    if ($username=="")
    {	
    	$error='User Name Belum Diisi';
    }
    elseif ($pass=="")
    {
    	$error='Password Belum Diisi';
    }
    else
    {
    	//Perintah membandingkan dengan table login
	include "sql.php";
	//$pass=md5($pass);
	
	$my_sql = mysqli_query ($conn, "SELECT * FROM tbuser where username LIKE '$username' AND pass LIKE '$pass'");
	$cek = mysqli_num_rows($my_sql);

	if ($cek <> 0)
	{
		echo "Anda Berhasil....";
		echo "<meta http-equiv=\"refresh\" content=\"2;url=./menu.php\">";
		$_SESSION['nama']=$username;
		$_SESSION['password']=$pass;
		//incloude ='menu.php';
		}
		else
		{
			echo "Coba Lagi";
			echo "<meta http-equiv=\"refresh\" content=\"2;url=./index.php\">";
		}
    }
}
if(!isset($_POST['cmdlogin']) || $error!="")
{
	if ($error!="")
	{
		echo "<center>$error</center>";
	} 
     
?>
<style type="text/css">
<!--

.style2 {font-weight: bold; color: #FF0000;}
-->
</style>


<div id="main"> 
  <div align="center">Application Login</div>
  <div align="center">
    <table width="195" height="156" border="0" align="center">
      <tr>
        <td width="210" height="20" align="center"><form id="form1" name="form1" method="post" action="">
          <table width="233" height="90" border="0" cellpadding="8" cellspacing="0">
            <tr bgcolor="silver">
              <td>Username</td>
              <td width="139" bgcolor="silver"><label for="txtuser"></label>
                  <input name="txtuser" type="text" id="txtuser" size="15" maxlength="15" /></td>
            </tr>
            <tr bgcolor="silver">
              <td height="15" bgcolor="silver">Password</td>
              <td bgcolor="silver"><label for="txtpassword"></label>
                  <input name="txtpassword" type="password" id="txtpassword" size="15" maxlength="15" /></td>
            </tr>
            <tr bgcolor="#CC9933">
              <td height="30" bgcolor="silver"><input type="submit" name="cmdlogin" id="cmdlogin" value="Login"/></td>
              <td bgcolor="silver"><input type="reset" name="cmdbatal" id="cmdbatal" value="Cancel" /></td>
          </table>
        </form></td>
      </tr>
      
   
  </div>
</div><div align="center">
  <?php
}
?>
</div>

</table><p>
<br>
<center><div class="Frame_Footer "><br>
<div class ="Frame_Inside_Footer " style="background-color: #800000; color: #FFFFFF;">
<span class="style1" style="color: #FFFFFF">Copyrights by MSiti Mas Sangnia</span><br class="style1" />
<span class="style1"><span class="style1">&copy; 2023 All Rights Reserved</span></span><span class="style1"> 
</span>
</div>
</center>
</table>
</body>
</html>
