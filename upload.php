<?php
    $servername="140.123.175.101";
    $username="team04";
    $password="dogge";
    $dbname="team04";
    $conn=mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn){die("connection Failed.");}
    //echo "Connected successfully"; //連線成功，則印出此行
    //設置mysql執行編碼為utf-8
    mysqli_query($conn,"set names utf8");
    //新增圖片到資料庫
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>網站會員系統</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content=""/>
        <meta name="keywords" content=""/>
        <!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
        <script src="js/jquery.min.js"></script>
        <script src="js/skel.min.js"></script>
        <script src="js/init.js"></script>
        <noscript>
            <link rel="stylesheet" href="css/skel.css" />
            <link rel="stylesheet" href="css/style.css" /> 
            <link rel="stylesheet" href="css/style-xlarge.css" />
        </noscript>
    </head>

    <body>
        <div class="o_n_major1">
            <div class="t_major1">遊樂園的票的新增</div>
        </div><br>
        <div class="o_newMem">
            <div class="newTic">
                <form action="insert2.php" method="get">
                    圖片：<input type="file" name="file" id="file"><br><br>
                    名稱：<input type="text" name="p_name" id="p_name"><br>
                    價錢：<input type="text" name="price"><br>
                    門票資訊：<input type="text" name="information"><br>
                    數量：<select name="number">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                          </select> <br>

                    <input type="submit" name="submit" value="提交"/>
                </form>
            </div>
        </div>   
    </body>
</html>