<?php
    if(!isset($_REQUEST['id'])){
        header("Location: index.php");
    }
?>

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
        <div class="order">
            <h1>訂購狀態</h1>
            <hr size="1" color="black">
            <div>您的訂單已經成功寄出</div><br> 
            <div>訂單ID是<font color="red"><?php echo $_GET['id']; ?></font>號</div><br><br><br><br>
            <a href="index_1.php" style="font-size:1.8em; font-weight:bold;">回到首頁</a>
        </div>
    </body>
</html>