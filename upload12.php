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


if(isset($_SESSION['name'])){
	$sql = "SELECT id, name, image, price, information, count FROM product"; // select語法
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) { //如果select的資料大於0筆

		echo '
		<html lang="en">
			<head>
				<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
				<title>Order Success - PHP Shopping Cart Tutorial</title>
				<meta http-equiv="content-type" content="text/html; charset=utf-8" />
				<meta name="description" content=""/>
				<meta name="keywords" content=""/>
				<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
				<script src="js/jquery.min.js"></script>
				<script src="js/skel.min.js"></script>
				<script src="js/init.js"></script>        
				<meta charset="utf-8">
				<link href="style.css" rel="stylesheet" type="text/css">
			</head>

			<body>
			<div class="o_dele">
				<div class="dele">刪除商品</div>
				<center>
					<form method="post" action="delete1.php">
						<table class="showCom1">
							<tr>
								<th colspan="8" style="font-size:25px;">最新消息</th>
							</tr>
							<tr>
								<th>編號</th>
								<th>名字</th>
								<th>圖片</th>
								<th>價格</th>
								<th>資訊</th>
								<th>數目</th>
								<th>刪除</th>
								<th></th>
							</tr>
				</center>
			</div>			
			</body>
		</html>		
		';

		while($row = mysqli_fetch_assoc($result)) {
        	echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["image"]. "</td><td>" . $row["price"]. "</td><td>" . $row["information"]. "</td><td>" . $row["count"]. "</td><td>" .
        	'<td><input type="checkbox" name="checkbox[]" value='.$row["id"].' /></td></tr>';
	    }

	    echo "</table>";
        echo '<center><input type="submit" value="送出刪除" id="submit"/></center>';
        echo "</form>";
           echo'<form method="get" action="upload.php">
           <center><input type="submit" value="繼續新增" id="submit"/></center>
           </form>';
           echo'<form method="get" action="index_1.php">
           <center><input type="submit" value="登出" id="submit"/></center>
           </form>';
	} else {
	    echo "0 results";
	}

	mysqli_close($conn);}
	else{
		//echo"無權使用此頁面";
		//header("Refresh: 2; url=.php");
	}
?>