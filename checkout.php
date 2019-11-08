<?php
    // include database configuration file
    include 'dbConfig.php';

    // initializ shopping cart class
    include 'Cart.php';
    $cart = new Cart;

    // redirect to home if cart is empty
    if($cart->total_items() <= 0){
        header("Location: index.php");
    }
    //echo $_SESSION['userid'];
    //$loggedinUserID = $_SESSION['userid'];

    // set customer ID in session
    //$_SESSION['sessCustomerID'] = $loggedinUserID;

    // get customer details by session customer ID
    $query = $connect->query("SELECT * FROM customer WHERE c_id = ".$_SESSION['userid']);
    $custRow = $query;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Checkout - PHP Shopping Cart Tutorial</title>
    <meta charset="utf-8">
    <!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
    <link href="css/cartstyle.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <style>
        .container{padding: 50px;
                position: relative;
  top: 50;
  bottom: 50;
  left: 50;
right:50;}
    .table{float: center;}
    .shipAddr{width: 30%;float: left;margin-left: 30px;}
    .footBtn{width: 95%;float: left;}
    .orderBtn {float: right;}
    </style>
</head>
<body>
<div>
            <div class="background">
                <canvas class="snow-canvas"></canvas>
                <div class="santa"></div>
            </div>

            <div class="foreground">
                <div class="place place-1 floor-2">
                <div class="house"></div>
                <div class="house-shadow"></div>
            </div>
            <div class="place place-2 floor-3">
                <div class="house"></div>
                <div class="house-shadow"></div>
            </div>
            <div class="place place-3 floor-1">
                <div class="house"></div>
                <div class="house-shadow"></div>
            </div>
            <div class="place place-4 floor-3">
                <div class="house"></div>
                <div class="house-shadow"></div>
            </div>
            <div class="place place-5 floor-2">
                <div class="house"></div>
                <div class="house-shadow"></div>
            </div>
            <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
            <script src="js/main.js"></script>
        <div>
<div class="container">
    <h1>我買了三尛</h1>
    <table class="table">
    <thead>
        <tr>
            <th>商品</th>
            <th>價格</th>
            <th>數量</th>
            <th>小計</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if($cart->total_items() > 0){
            //get cart items from session
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
        ?>
        <tr>
            <td><?php echo $item["name"]; ?></td>
            <td><?php echo '$'.$item["price"].' '; ?></td>
            <td><?php echo $item["qty"]; ?></td>
            <td><?php echo '$'.$item["subtotal"].' '; ?></td>
        </tr>
        <?php } }else{ ?>
        <tr><td colspan="4"><p>沒買網設不會過喔......</p></td>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="3"></td>
            <?php if($cart->total_items() > 0){ ?>
            <td class="text-center"><strong>Total <?php echo '$'.$cart->total().' '; ?></strong></td>
            <?php } ?>
        </tr>
    </tfoot>
    </table>
    
    <div class="footBtn">
        <a href="index.php" class="btn btn-warning">繼續購物~</a>
        <a href="cartAction.php?action=placeOrder" class="btn btn-success orderBtn">結帳</a>
    </div>
</div>
</body>
</html>