<?php
//データ取得
$name = isset($_POST["name"])? $_POST["name"]: "";
$hira = isset($_POST["hira"])? $_POST["hira"]: "";
$zip11 = isset($_POST["zip11"])? $_POST["zip11"]: "";
$addr11 = isset($_POST["addr11"])? $_POST["addr11"]: "";
$tel = isset($_POST["tel"])? $_POST["tel"]: "";
$fax = isset($_POST["fax"])? $_POST["fax"]: "";
$email = isset($_POST["email"])? $_POST["email"]: "";
$select = isset($_POST["select"])? $_POST["select"]: "";
$request = isset($_POST["request"])? $_POST["request"]: "";

//画面表示
?>



<!doctype html>
<html lang="jp">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="書道家「舟蘭」のサイトです。5歳より書道を始め、2016年より活動開始。東京都内で書道教室やワークショップの開講、デザイン書道やロゴなど筆文字の販売をしています。">
  <meta name="keywords" content="書道,書道家,毛筆,硬筆,ペン字,筆文字,デザイン書道,習字,書道教室,ワークショップ,習い事,少人数,書作品,ギフト,プレゼント,企業,インテリア,大人,東京,板橋区,新宿区">
  <title>その他お問い合わせ | 舟蘭 Official Site</title>
  <link href="https://fonts.googleapis.com/earlyaccess/sawarabimincho.css" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/responsive.css">
  <link rel="stylesheet" type="text/css" href="css/pagestyle.css">
  <link rel="stylesheet" type="text/css" href="css/orderform.css">


  <script type="text/javascript" src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>


</head>
<body>
  <header>
    <!-- pc-only -->
    <div class="pc-only">
      <div class="container">
        <div class="icon">
          <a href="index.html"><img src="pics/page-img/logo.png" id="logo"></a>
        </div>
        <div class="menu">
          <ul>
            <li><a href="about.html" class="about">About</a></li>
            <li><a href="gallery.html" class="gallery">Gallery</a></li>
            <li><a href="school.html" class="school">School</a></li>
            <li><a href="ecstore.html" class="onlinestore">Online Store</a></li>
            <li><a href="ordermade.html" class="ordermade">Order Made</a></li>
            <li><a href="index.html#contact" class="contact">Contact</a></li>
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
          <a href="index.html"><img src="pics/page-img/logo.png" id="logo-img"></a>
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
              <li><a href="index.html#contact" class="contact">Contact</a></li>
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
          <form name="form1" action="./mail3.php" method="post">

          <input type="hidden" name="name" value="<?php echo htmlspecialchars($name, ENT_QUOTES, "utf-8");?>">
          <input type="hidden" name="hira" value="<?php echo htmlspecialchars($hira, ENT_QUOTES, "utf-8");?>">
          <input type="hidden" name="zip11" value="<?php echo htmlspecialchars($zip11, ENT_QUOTES, "utf-8");?>">
          <input type="hidden" name="addr11" value="<?php echo htmlspecialchars($addr11, ENT_QUOTES, "utf-8");?>">
          <input type="hidden" name="tel" value="<?php echo htmlspecialchars($tel, ENT_QUOTES, "utf-8");?>">
          <input type="hidden" name="fax" value="<?php echo htmlspecialchars($fax, ENT_QUOTES, "utf-8");?>">
          <input type="hidden" name="email" value="<?php echo htmlspecialchars($email, ENT_QUOTES, "utf-8");?>">
          <input type="hidden" name="select" value="<?php echo htmlspecialchars($select, ENT_QUOTES, "utf-8");?>">
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
            <h5>お問い合わせ内容についてご確認ください</h5>

            <!-- お問い合わせ種目 -->
            <dt>お問い合わせ種目</dt>
            <dd>
              <?php echo htmlspecialchars($select, ENT_QUOTES, "utf-8"); ?>
            </dd>



            <!-- 内容 -->
            <dt>お問い合わせ内容</dt>
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
        <a herf="index.html"><img src="pics/page-img/logo.png" id="footer-logo"></a>
        <ul class="shop-info">
          <li class="time">10:00 〜 19:00</li>
          <li class="tell">TEL：03−1234−5678</li>
          <li>お問合せは<a href="index.html#contact" class="contact-link-footer">こちら</a></li>
        </ul>
        <div class="footer-icon sp-only">
          <p>＼ Follow Me!! ／</p>
          <ul class="footer-sns">
            <li><a href="http://www.facebook.com/share.php?u=https://hirashimatakumi.com/blog/1384.html" rel="nofollow" target="_blank" id="fb-footer"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="http://twitter.com/share?text=%E8%88%9F%E8%98%ADOfficialSite&url=https://hirashimatakumi.com/blog/1384.html&hashtags=#shuuran,#舟蘭" rel="nofollow" id="tw-footer"><i class="fab fa-twitter"></i></a></li>
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
          <li><a href="index.html#contact" class="contact">Contact</a></li>
          <li><a href="news.html" class="news">News</a></li>
        </ul>
      </div>
    </div>
  </footer>


  <!-- script -->
 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</body>
</html>
