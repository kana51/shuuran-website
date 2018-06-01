<?php
//データ取得
$name = isset($_POST["name"])? $_POST["name"]: "";
$hira = isset($_POST["hira"])? $_POST["hira"]: "";
$zip11 = isset($_POST["zip11"])? $_POST["zip11"]: "";
$addr11 = isset($_POST["addr11"])? $_POST["addr11"]: "";
$tel = isset($_POST["tel"])? $_POST["tel"]: "";
$fax = isset($_POST["fax"])? $_POST["fax"]: "";
$email = isset($_POST["email"])? $_POST["email"]: "";
$class = isset($_POST["class"])? $_POST["class"]: "";
$date = isset($_POST["date"])? $_POST["date"]: "";
$keikenn = isset($_POST["keikenn"])? $_POST["keikenn"]: "";
$riyu = isset($_POST["riyu"])? $_POST["riyu"]: "";
$request = isset($_POST["request"])? $_POST["request"]: "";

//画面表示
?>



<!doctype html>
<html lang="jp">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>書道教室のお問い合わせ | 舟蘭 Official Site</title>
  <link href="https://fonts.googleapis.com/earlyaccess/sawarabimincho.css" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="responsive.css">
  <link rel="stylesheet" href="pagestyle.css">
  <link rel="stylesheet" href="orderform.css">
  <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
</head>
<body>
  <header>
    <!-- pc-only -->
    <div class="pc-only">
      <div class="container">
        <div class="icon">
          <a href="index.html"><img src="pics/logo.png" id="logo"></a>
        </div>
        <div class="menu">
          <ul>
            <li><a href="about.html" class="about">About</a></li>
            <li><a href="gallery.html" class="gallery">Gallery</a></li>
            <li><a href="school.html" class="school">School</a></li>
            <li><a href="ecstore.html" class="onlinestore">Online Store</a></li>
            <li><a href="ordermade.html" class="ordermade">Order Made</a></li>
            <li><a href="contact.html" class="contact">Contact</a></li>
            <li><a href="news.html" class="news">News</a></li>
          </ul>
        </div>
      </div><!-- end container -->
    </div><!-- end pc-only -->


    <!-- sp-only -->
    <div class="sp-only">
      <nav class="navbar navbar-default navbar-fixed-top">
        <!-- nav-header -->
        <div class="navbar-header">
            <!-- logo -->
          <a href="index.html"><img src="pics/logo.png" id="logo-img"></a>
            <!-- toggle -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#top-nav">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div><!-- end nav-header -->
        <!-- top menu -->
        <div class="collapse navbar-collapse" id="top-nav">
            <!-- left -->
            <ul class="nav navbar-nav">
              <li><a href="about.html" class="about">About</a></li>
              <li><a href="gallery.html" class="gallery">Gallery</a></li>
              <li><a href="school.html" class="school">School</a></li>
              <li><a href="ecstore.html" class="onlinestore">Online Store</a></li>
              <li><a href="ordermade.html" class="ordermade">Order Made</a></li>
              <li><a href="contact.html" class="contact">Contact</a></li>
              <li><a href="news.html" class="news">News</a></li>
            </ul>
        </div><!-- end top menu -->
      </nav><!-- end nav -->
    </div><!-- end sp-only -->
  </header>


  <!-- order-form -->
    <div class="content-wrapper">
      <div class="container">
        <div class="content-title">
          <h4>体験教室お申込み・ご相談（内容確認）</h4>
        </div>
      </div><!-- end container -->

      <div class="contact-container">
        <div class="mod-dl-table">
          <form name="form1" action="./mail2.php" method="post">

          <input type="hidden" name="name" value="<?php echo htmlspecialchars($name, ENT_QUOTES, "utf-8");?>">
          <input type="hidden" name="hira" value="<?php echo htmlspecialchars($hira, ENT_QUOTES, "utf-8");?>">
          <input type="hidden" name="zip11" value="<?php echo htmlspecialchars($zip11, ENT_QUOTES, "utf-8");?>">
          <input type="hidden" name="addr11" value="<?php echo htmlspecialchars($addr11, ENT_QUOTES, "utf-8");?>">
          <input type="hidden" name="tel" value="<?php echo htmlspecialchars($tel, ENT_QUOTES, "utf-8");?>">
          <input type="hidden" name="fax" value="<?php echo htmlspecialchars($fax, ENT_QUOTES, "utf-8");?>">
          <input type="hidden" name="email" value="<?php echo htmlspecialchars($email, ENT_QUOTES, "utf-8");?>">
          <input type="hidden" name="class" value="<?php echo htmlspecialchars($class, ENT_QUOTES, "utf-8");?>">
          <input type="hidden" name="date" value="<?php echo htmlspecialchars($date, ENT_QUOTES, "utf-8");?>">
          <input type="hidden" name="keikenn" value="<?php echo htmlspecialchars($keikenn, ENT_QUOTES, "utf-8");?>">
          <input type="hidden" name="riyu" value="<?php echo htmlspecialchars($riyu, ENT_QUOTES, "utf-8");?>">
          <input type="hidden" name="request" value="<?php echo htmlspecialchars($request, ENT_QUOTES, "utf-8");?>">

          <dl>
            <h5>お客様情報をご確認ください</h5>
            <!-- お名前 -->
            <dt>お名前</dt>
            <dd>
              <?php echo htmlspecialchars($name, ENT_QUOTES, "utf-8"); ?>
            </dd>

            <!-- おなまえ -->
            <dt>おなまえ</dt>
            <dd>
              <?php echo htmlspecialchars($hira, ENT_QUOTES, "utf-8"); ?>
            </dd>

            <!-- 郵便番号 -->
            <dt>郵便番号</dt>
            <dd>
              <?php echo htmlspecialchars($zip11, ENT_QUOTES, "utf-8"); ?>
            </dd>

            <!-- 住所 -->
            <dt>ご住所</dt>
            <dd>
              <?php echo htmlspecialchars($addr11, ENT_QUOTES, "utf-8"); ?>
            </dd>

            <!-- 電話番号 -->
            <dt>電話番号</dt>
            <dd>
              <?php echo htmlspecialchars($tel, ENT_QUOTES, "utf-8"); ?>
            </dd>

            <!-- FAX番号 -->
            <dt>FAX番号</dt>
            <dd>
              <?php echo htmlspecialchars($fax, ENT_QUOTES, "utf-8"); ?>
            </dd>

            <!-- メールアドレス -->
            <dt>メールアドレス</dt>
            <dd>
             <?php echo htmlspecialchars($email, ENT_QUOTES, "utf-8"); ?>
            </dd>
          </dl>
          <dl>
            <h5>ご希望の体験教室についてご確認ください</h5>

            <!-- ご希望クラス -->
            <dt>ご希望クラス</dt>
            <dd>
              <?php echo htmlspecialchars($class, ENT_QUOTES, "utf-8"); ?>
            </dd>

            <!-- 体験希望日 -->
            <dt>体験希望日</dt>
            <dd>
              <?php echo htmlspecialchars($date, ENT_QUOTES, "utf-8"); ?>
            </dd>

            <!-- 書道の経験 -->
            <dt>書道のご経験</dt>
            <dd>
              <?php echo htmlspecialchars($keikenn, ENT_QUOTES, "utf-8"); ?>
            </dd>

            <!-- 習ったことのある書体 -->
            <dt>習ったことのある書体</dt>
            <dd>
              <?php
              if( isset( $_POST[ 'riyu' ] ) ){
              	$cbx_values = $_POST[ 'riyu' ];

              	//選択されたラジオボタンの value の内容を表示する
              	for( $i = 0; $i < count( $cbx_values ); $i ++ ){
              		print "{$cbx_values[$i]}　";
              	}
              }
              ?>
            </dd>



            <!-- 質問・相談 -->
            <dt>ご質問・ご相談</dt>
            <dd>
              <?php echo htmlspecialchars($request, ENT_QUOTES, "utf-8"); ?>
            </dd>
          </dl>
          <input type="button" name="back_btn" value="戻る" onclick="form1.action='./schoolform.php'; form1.submit();" class="submit">
          <input type="submit" name="next_btn" value="Submit" class="submit">
        </form>
      </div>
    </div>
  </div><!-- end content-wrapper -->



  <p id="pageTop"><a href="#"><i class="fa fa-chevron-up"></i></a></p>

  <!-- footer -->
  <footer>
    <div class="container">
      <div class="footer-left">
        <a herf="index.html"><img src="pics/logo.png" id="footer-logo"></a>
        <ul class="shop-info">
          <li class="time">10:00 〜 19:00</li>
          <li class="tell">TEL：03−1234−5678</li>
          <li>お問合せは<a href="#" class="contact-link-footer">こちら</a></li>
        </ul>
        <div class="footer-icon sp-only">
          <p>＼ Follow Me!! ／</p>
          <ul class="footer-sns">
            <li><a href="#" id="fb-footer"><i class="fab fa-facebook-f"></i></i></a></li>
            <li><a href="#" id="tw-footer"><i class="fab fa-twitter"></i></i></a></li>
          </ul>
        </div>
      </div>
      <div class="footer-right pc-only">
        <ul class="footer-menu">
          <li><a href="about.html" class="about">About</a></li>
          <li><a href="gallery.html" class="gallery">Gallery</a></li>
          <li><a href="school.html" class="school">School</a></li>
          <li><a href="ecstore.html" class="onlinestore">Online Store</a></li>
          <li><a href="ordermade.html" class="ordermade">Order Made</a></li>
          <li><a href="contact.html" class="contact">Contact</a></li>
          <li><a href="news.html" class="news">News</a></li>
        </ul>
      </div>
    </div>
  </footer>


  <!-- script -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</body>
</html>
