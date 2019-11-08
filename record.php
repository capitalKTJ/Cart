<?php
    // initializ shopping cart class
    include 'dbConfig.php';
    include 'Cart.php';
    $cart = new Cart;
?>

<html lang="en">
    <head>
        <title>Record</title>
        <meta charset="UTF-8">
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
        <meta name="keywords" content="" />
        <link href="style.css" rel="stylesheet" type="text/css">
        <!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
        
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
        <script src="js/init.js"></script>
    </head>

    <body>
        <div class="container1">
            <h1>購買紀錄</h1>            
            <table class="showCom1">
                <thead>
                    <tr>
                        <th>時間</th>
                        <th>產品</th>
                        <th>數量</th>
                        <th>小計</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $loggedinUserID = $_SESSION['userid'];
                        //get rows query
                        $query = $connect->query("SELECT * FROM orders NATURAL JOIN order_items WHERE c_id = '$loggedinUserID'");
                        if($query->num_rows > 0){ 
                            while($row = $query->fetch_assoc()){
                        
                        //$data = $connect->query("SELECT * FROM orders NATURAL JOIN order_items");
                        //if(mysql_num_rows($data) > 0){
                            //for($i=1;$i<=mysql_num_rows($data);$i++){
                                //$item=mysql_fetch_row($data);
                    ?>
                    <tr>
                        <td><?php echo $row["created"]; ?></td>
                        <td><?php echo '$'.$row["id"].' '; ?></td>
                        <td><?php echo $row["quantity"]; ?></td>
                        <td><?php echo '$'.$row["total"].' '; ?></td>
                    </tr>                    
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3"></td>
                        <td class="text-center"><strong>Total <?php echo '$'.$row["total_price"].' '; ?></strong></td>   
                    </tr>
                    <?php } }else{ ?>
                    <tr><td colspan="4"><p>沒有紀錄.....</p></td>
                    <?php } ?>
                </tfoot>
            </table><br>
            <div class="footBtn">
                <center><a href="index_1.php" style="font-size:1.8em; color:blue; font-weight:bold">→ 回到首頁</a></center>
            </div>
        </div>
    </body>
</html>