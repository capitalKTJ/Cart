<?php
session_start();
?>
<?php
$servername="140.123.175.101";
$username="team04";
$password="dogge";
$dbname="team04";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){die("connection Failed.");}

mysqli_set_charset($conn,"utf8");
mysql_query("SET NAME utf8");

                                                   
$name=$_POST["username"];                                 
$password=$_POST["passwd"];                      

$sql="select `name`,`password` from admin where name='$name' and password='$password'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    $_SESSION['name']=$name;                      
    $_SESSION['password']=$password; 
    header("Refresh: 0; url=recommit.php" );
    }else{
    echo "你沒有這個權限"; 
    header("Refresh: 2; url=gerent.php" );//兩秒之後跳轉到登入頁面 
    }
    mysqli_close($conn);
    ?>