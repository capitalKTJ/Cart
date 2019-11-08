<?php
$servername="140.123.175.101";
$username="team04";
$password="dogge";
$dbname="team04";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){die("connection Failed.");}

mysqli_set_charset($conn,"utf8");
mysql_query("SET NAME utf8");



mysqli_set_charset($conn,"utf8");
mysql_query("SET NAME utf8");

$name=$_GET["name"];
$content=$_GET["textarea"];
$SQL="INSERT INTO recommit(name,content)VALUES('$name','$content')";

if(mysqli_query($conn,$SQL)){
  
}else{echo"Error:".$SQL."<br>".$conn->error;
}
mysqli_close($conn);
header("Refresh: 0; url=recommit.php" );
?>