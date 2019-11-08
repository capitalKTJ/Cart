<?php
$servername="140.123.175.101";
$username="team04";
$password="dogge";
$dbname="team04";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){die("connection Failed.");}


mysqli_set_charset($conn,"utf8");
mysql_query("SET NAME utf8");

$user=$_GET["user"];
$password=$_GET["password"];
$email=$_GET["email"];
$phone=$_GET["phone"];
$sex=$_GET["sex"];

$SQL="UPDATE customer Set password='$password',email='$email',phone='$phone',sex='$sex'WHERE name='$user'";

if(mysqli_query($conn,$SQL)){
  
}else{echo"Error:".$SQL."<br>".$conn->error;
}
mysqli_close($conn);

header("Refresh: 0; url=index.php" );//兩秒之後跳轉到登入頁面 

?>