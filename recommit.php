<?php
    $servername="140.123.175.101";
    $username="team04";
    $password="dogge";
    $dbname="team04";
    $conn=mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn){die("connection Failed.");}

    mysqli_set_charset($conn,"utf8");
    mysql_query("SET NAME utf8");

    $sql = "SELECT * FROM commit ORDER BY 'name'"; //SQL 語法
    $result = mysqli_query($conn, $sql) or die("Error");

    $data_nums = mysqli_num_rows($result); //統計總比數
    $per = 5; //每頁顯示項目數量
    $pages = ceil($data_nums/$per); //取得不小於值的下一個整數
    if (!isset($_GET["page"])){ //假如$_GET["page"]未設置
        $page=1; //則在此設定起始頁數
    } else {
        $page = intval($_GET["page"]); //確認頁數只能夠是數值資料
    }
    $start = ($page-1)*$per; //每一頁開始的資料序號
    $result = mysqli_query($conn, $sql.' LIMIT '.$start.', '.$per) or die("Error");
?>

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>到八仙玩水囉</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/init.js"></script>
    </head>
    
<table class="showCom1">
    <tr>
        <th colspan="4" style="font-size:25px;">回覆訊息</th>
    </tr>
    <tr>
        <th>姓名</th>
        <th>信箱</th>
        <th>內容</th>
    </tr>

    <?php
        //輸出資料內容
        while ($row = mysqli_fetch_array ($result))
        {
            $name = $row['name'];
            $email = $row['email'];
            $CONTENT = $row['content'];
        
            echo '
            <tr>
                <td>'. $name .'</td>
                <td>'. $email .'</td>
                <td>'. $CONTENT .'</td>
            </tr>';
        }
    ?>
</table><br>
    
<center>
    <?php
        //分頁頁碼
        echo "<br /><a href=?page=1>首頁</a> ";
        
        for( $i=1 ; $i<=$pages ; $i++ ) {
            if ( $page-5 < $i && $i < $page+5 ) {
                echo "<a href=?page=".$i.">".$i."</a> ";
            }
        } 
        echo "<a href=?page=".$pages.">末頁</a>，第". $page ."頁/共". $pages ."頁<br/>";

        echo '共 '.$data_nums.' 筆<br>';
        
    ?>
</center>
<hr size="2" color="gray">

<html>
    <head></head>
    <body>
        <div class="o_newMem">
            <div class="newmem">
                <form action="recommit2.php"method="get">
                    名字:<input type="text" name="name"><br>
                    回覆內容:
                    <textarea name="textarea" rows="5" cols="30"></textarea><br>
                    <input type="submit" value="回覆" >
                    <input type="reset" value="reset" >
                </form>
            </div>
        </div><br>    

        <center><a href="upload.php" style="font-size:1.5em; color:blue">→ 遊樂園的票的新增</a></center>
    </body>
</html>