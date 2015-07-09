<?
$con = mysql_connect("localhost","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("huifu", $con);
include('conn.php');
$check_query = mysql_query("SELECT * FROM user where username='"+$_POST["username"]+"' and password='"+$_POST["password"]+"' limit 1");
if($result=mysql_fetch_array($check_query)){
		 echo "ok";
	
}else{
	echo "用户名或密码错误";
	
}
mysql_close($con);
?>