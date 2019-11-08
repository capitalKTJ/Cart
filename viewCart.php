<?php
    // initializ shopping cart class
    include 'Cart.php';
    $cart = new Cart;
?>

<html lang="en">
    <head>
        <title>View Cart - PHP Shopping Cart Tutorial</title>
        <meta charset="utf-8">
        <!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
        <link href="css/cartstyle.css" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/main.css">
        <style>
            .container{padding: 50px;
                position: absolute;
                top: 50;
                bottom: 50;
                left: 50;
                right:50;}
            input[type="number"]{width: 20%;}
            .orderBtn {float: right;}
        </style>
        <script>
        function updateCartItem(obj,id){
            $.get("cartAction.php", {action:"updateCartItem", id:id, qty:obj.value}, function(data){
                if(data == 'ok'){
                    location.reload();
                }else{
                    alert('Cart update failed, please try again.');
                }
            });
        }
        </script>
        
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
            <h1>購物車</h1>
            <table class="table">
            <thead>
                <tr>
                    <th>商品</th>
                    <th>價格</th>
                    <th>數量</th>
                    <th>小計</th>
                    <th>&nbsp;</th>
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
                    <td><input type="number" class="form-control text-center" value="<?php echo $item["qty"]; ?>" onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')"></td>
                    <td><?php echo '$'.$item["subtotal"].' '; ?></td>
                    <td>
                        <a href="cartAction.php?action=removeCartItem&id=<?php echo $item["rowid"]; ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')"><img src="images/delete.png" style="width:16px;height:16px;"></a>
                    </td>
                </tr>
                <?php } }else{ ?>
                <tr><td colspan="5"><p>您的購物車空空的耶.....</p></td>
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
                <a href="index.php" class="btn btn-warning">繼續購物～</a>
                <a href="checkout.php" class="btn btn-success orderBtn">結帳</a>
            </div>
        </div>
    </body>
</html>