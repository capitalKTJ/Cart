<?php
    // include database configuration file
    include 'dbConfig.php';
?>

<html lang="en">
    <head>
        <title>PHP Shopping Cart Tutorial</title>
        <meta charset="utf-8">
        <!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
        <link href="css/cartstyle.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            .container{padding: 50px;}
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
            <a href="viewCart.php" class="cart-link" title="View Cart"><img src="images/cart.png" style="width:50px;height:50px;float:right;z-index:200;"></a><br><hr size="1">
            <div id="products" class="row list-group">
                <?php
                //get rows query
                $query = $connect->query("SELECT * FROM product ORDER BY id ASC LIMIT 10");
                if($query->num_rows > 0){ 
                    while($row = $query->fetch_assoc()){
                ?>
                <div class="item col-lg-4">
                    <div class="thumbnail">
                        <div style="height:300px;border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:28px 16px 10px;" align="center">  
                            <img src="<?php echo $row["image"]; ?>" class="img-responsive" style="width:134px;height:116px;"/><br />
                            <h4 class="text-info"><?php echo $row["name"]; ?></h4>
                            <!--<p class="list-group-item-text"><?php //echo $row["description"]; ?></p>-->
                            <h4 class="text-danger"><?php echo '$'.$row["price"].' '; ?></h4>
                            <a class="btn btn-success" href="cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>">放到購物車</a>
                        </div>
                    </div>
                </div>
                <?php } }else{ ?>
                <p>尚無商品......</p>
                <?php } ?>
            </div>
        </div>
    </body>
</html>