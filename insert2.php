<?php
$servername="140.123.175.101";
$username="team04";
$password="dogge";
$dbname="team04";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){die("connection Failed.");}


mysqli_set_charset($conn,"utf8");
mysql_query("SET NAME utf8");

$name=$_GET["p_name"];
$price=$_GET["price"];
$info=$_GET["information"];
$num=$_GET["number"];
$image=$_GET["file"];
$SQL="INSERT INTO product(name,image,price,information,count)VALUES('$name','$image','$price','$info','$num')";

if(mysqli_query($conn,$SQL)){
  
}else{echo"Error:".$SQL."<br>".$conn->error;
}
mysqli_close($conn);
echo "新增成功"; 
header("Refresh: 0; url=upload12.php" );//兩秒之後跳轉到登入頁面 

?>