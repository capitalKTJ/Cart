<?php
	$servername="140.123.175.101";
    $username="team04";
    $password="dogge";
    $dbname="team04";
    $conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){die("connection Failed.");}
echo "connection Success <br>";

	$check = $_POST['checkbox'];
	
	foreach($check as $value){
		$sql = "DELETE FROM product WHERE id = $value";
		mysqli_query($conn, $sql);
	}

	header("Refresh: 0; url=upload.php");
	mysqli_close($conn);
?>