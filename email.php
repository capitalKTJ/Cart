<?php 
$servername="140.123.175.101";
$username="team04";
$password="dogge";
$dbname="team04";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){die("connection Failed.");}

$user=$_POST["name"];
$password=$_POST["email"];
$email=$_POST["message"];

$SQL="INSERT INTO commit(name,email,content)VALUES('$user','$password','$email')";

if(mysqli_query($conn,$SQL)){
  
}else{echo"Error:".$SQL."<br>".$conn->error;
}
mysqli_close($conn);
echo "新增成功"; 
header("Refresh: 2; url=index_1.php" );
?>