<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>網站會員系統</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
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
  <table>
    <tr>
      <td colspan="3" class="tdaline"><a href="index_1.php"><img src="images/2764811.jpg" alt="會員系統"></a</td>
    </tr>

    <tr>
      <td class="tdbline">
        <tr valign="top">
          <td class="tdrline">
            <div id="mem_descri">
              <p class="title">歡迎光臨網站<b><u><font color="red" size="5">管理者</font></u></b>系統</p>
              <p>感謝各位來到管理者系統， 所有的管理者功能都必須經由登入後才能使用，請您在右方視窗中執行登入動作。</p>
              <span class="heading_2"> 本管理者系統擁有以下的功能：</span><br><br>
              <ol>
                <li>新增商品</li>
                <li>刪除商品</li>
              </ol>
              <span class="heading_2">請各位管理者遵守以下規則： </span><br><br>
              <ol>
                <li> 遵守政府的各項有關法律法規。</li>
                <li> 不得在發佈任何色情非法， 以及危害國家安全的言論。</li>
                <li>嚴禁連結有關政治， 色情， 宗教， 迷信等違法訊息。</li>
                <li> 承擔一切因您的行為而直接或間接導致的民事或刑事法律責任。</li>
                <li> 互相尊重， 遵守互聯網絡道德；嚴禁互相惡意攻擊， 漫罵。</li>
              </ol>
            </div>
          </td>

          <td id="tdSize">
          <div id="o_regbox">
            <div class="regbox">
                <?php if(isset($_GET["errMsg"]) && ($_GET["errMsg"]=="1")){?>
                  <div class="errDiv"> 登入帳號或密碼錯誤！</div>
                <?php }?>

                <p class="heading_1">登入管理者系統</p>
                <form name="form1" method="post" action="123456.php">
                  <p>帳號：<br>
                    <input name="username" type="text" class="logintextbox" id="username" value="">
                  </p>
                  <p>密碼：<br>
                    <input name="passwd" type="password" class="logintextbox" id="passwd" value="">
                  </p>
                  <p align="center"><input type="submit" name="button" id="button" value="登入系統"></p>
                </form>
            </div>
          </div>
        </td>
  </body>
</html>
