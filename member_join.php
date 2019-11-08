<?php 
    $servername="140.123.175.101";
    $username="team04";
    $password="dogge";
    $dbname="team04";
    $conn=mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn){die("connection Failed.");}
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
    </head>

    <body>        
        <div class="o_n_major1">
            <div class="n_major1">新增使用者</div>
        </div><br>
        <div class="o_newMem">
            <div class="newMem">
                <form action="insert1.php"method="get">
                    帳號：<input type="text" name="user"><br>
                    密碼：<input type="text" name="password"><br>
                    信箱：<input type="text" name="email"><br>
                    電話：<input type="text" name="phone"><br>
                    性別：<input type="text" name="sex"><br>
                    <input type="submit" value="新增使用者" >
                    <input type="reset" value="重填資料" >
                </form>
            </div>
        </div>        
    </body>
</html>

