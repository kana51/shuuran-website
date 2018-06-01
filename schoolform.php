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
  <title>書道教室のお問い合わせ | Official Site</title>
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
        <h4>体験教室のお申込み・ご相談</h4>
      </div>
    </div><!-- end container -->

    <div class="contact-container">
      <div class="mod-dl-table">
        <form name="form1" action="./schoolconfirm.php" method="post">
            <dl>
            <h5>お客様情報をご記入ください</h5>
            <!-- お名前 -->
            <dt>お名前 <span class="mod-icon-inquiry">必須</span></dt>
            <dd>
              <input type="text" name="name" value="<?php echo htmlspecialchars($name, ENT_QUOTES, "utf-8"); ?>" id="input-name" required>
            </dd>

            <!-- おなまえ -->
            <dt>おなまえ<span class="mod-icon-inquiry">必須</span></dt>
            <dd>
              <input type="text" name="hira" value="<?php echo htmlspecialchars($hira, ENT_QUOTES, "utf-8"); ?>" id="input-name" required>
            </dd>

            <!-- 郵便番号 -->
            <dt>郵便番号<span class="mod-icon-inquiry">必須</span></dt>
            <dd>
              <input type="text" name="zip11" size="10" maxlength="8" onKeyUp="AjaxZip3.zip2addr(this,'','addr11','addr11');" value="<?php echo htmlspecialchars($zip11, ENT_QUOTES, "utf-8"); ?>"  placeholder="(例)1230001" id="zip" required>
            </dd>

            <!-- 住所 -->
            <dt>ご住所<span class="mod-icon-inquiry">必須</span></dt>
            <dd>
              <input type="text" name="addr11" size="60" value="<?php echo htmlspecialchars($addr11, ENT_QUOTES, "utf-8"); ?>" id="input-address" required>
            </dd>

            <!-- 電話番号 -->
            <dt>電話番号<span class="mod-icon-inquiry">必須</span></dt>
            <dd>
              <input type="tel" name="tel" value="<?php echo htmlspecialchars($tel, ENT_QUOTES, "utf-8"); ?>" id="input-tel" placeholder="(例)08012345678" required>
            </dd>

            <!-- FAX番号 -->
            <dt>FAX番号</dt>
            <dd>
              <input type="tel" name="fax" value="<?php echo htmlspecialchars($fax, ENT_QUOTES, "utf-8"); ?>" id="input-fax" placeholder="(例)08012345678">
            </dd>

            <!-- メールアドレス -->
            <dt>メールアドレス<span class="mod-icon-inquiry">必須</span></dt>
            <dd>
              <input type="email" name="email" value="<?php echo htmlspecialchars($email, ENT_QUOTES, "utf-8"); ?>" id="input-mail" required>
            </dd>
          </dl>
          <dl>
            <h5>ご希望の体験教室についてご記入ください</h5>

            <!-- ご希望・ご依頼クラス -->
            <dt>ご希望クラス<span class="mod-icon-inquiry">必須</span></dt>
            <dd>
              <select class="custom-select my-1 mr-sm-2" name="class" id="inlineFormCustomSelectPref" value="<?php echo htmlspecialchars($class, ENT_QUOTES, "utf-8"); ?>" required>
                <option selected>選択してください</option>
                <option value="お稽古コース（板橋）">お稽古コース（板橋）</option>
                <option value="通信教育コース">通信教育コース</option>
                <option value="出張レッスン">出張レッスン</option>
                <option value="筆文字デザイン（肉筆）">筆文字デザイン（肉筆）</option>
                <option value="プライベートレッスン">プライベートレッスン
                <option value="マンツーマンレッスン">マンツーマンレッスン</option>
              </select>
            </dd>

            <!-- 体験希望日 -->
            <dt>体験希望日<span class="mod-icon-inquiry">必須</span></dt>
            <dd>
              ※お稽古コースをご希望の方は下記より選択ください。<br>
              火曜日
              <input type="radio" name="date" value="火曜13時" checked="checked" id="input-radio">13時
              <input type="radio" name="date" value="火曜19時" id="input-radio">19時
              <br>
              土曜日
              <input type="radio" name="date" value="土曜13時" id="input-radio">13時
              <input type="radio" name="date" value="土曜19時" id="input-radio">19時
              <br>
            </dd>

            <!-- 書道経験 -->
            <dt>書道のご経験<span class="mod-icon-inquiry">必須</span></dt>
            <dd>
              <input type="radio" name="keikenn" value="あり" checked="checked" id="input-radio">あり
              <br>
              <input type="radio" name="keikenn" value="なし" id="input-radio">なし
            </dd>

            <!-- 習ったことのある書体 -->
            <dt>習ったことのある書体<br>（複数選択可）</dt>
            <dd>
              <input type="checkbox" name="riyu[]" value="楷書" id="checkbox">楷書<br>
              <input type="checkbox" name="riyu[]" value="行書" id="checkbox">行書<br>
              <input type="checkbox" name="riyu[]" value="草書" id="checkbox">草書<br>
              <input type="checkbox" name="riyu[]" value="仮名" id="checkbox">仮名<br>
              <input type="checkbox" name="riyu[]" value="添書" id="checkbox">添書<br>
              <input type="checkbox" name="riyu[]" value="隷書" id="checkbox">隷書<br>
              <input type="checkbox" name="riyu[]" value="その他" id="checkbox">その他
            </dd>

            <!-- 要望・質問 -->
            <dt>ご質問・ご相談</dt>
            <dd>
              <textarea name="request" placeholder="ご質問、ご不明点等ありましたらご記入ください。" required><?php echo htmlspecialchars($request, ENT_QUOTES, "utf-8"); ?></textarea>
            </dd>
          </dl>
          <input type="submit" name="next_btn" value="Submit" class="submit">
        </form>
      </div><!-- end mod-dl-table -->
    </div><!-- end contact-container -->
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

  <script>
      $(function(){
          $.datepicker.setDefaults( $.datepicker.regional[ "ja" ] );
          $("#datepicker").datepicker();
      });
  </script>

  <script type="text/javascript">

    function slideSwitch() {
      var $active = $('#slideshow img.active');

      if ( $active.length == 0 ) $active = $('#slideshow img:last');

      var $next =  $active.next().length ? $active.next()
        : $('#slideshow img:first');

      $active.addClass('last-active');

      $next.css({opacity: 0.0})
        .addClass('active')
        .animate({opacity: 1.0}, 1000, function() {
             $active.removeClass('active last-active');
      });
    }


    $(function() {
    setInterval( "slideSwitch()", 4000 );
    });
  </script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.1/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js"></script>
  <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/redmond/jquery-ui.css">

  <script>
    $(function() {
      $("#datepicker").datepicker();
    });

    $(function(){
      $("#datepicker").datepicker();
      $("#datepicker").datepicker("option", "showOn", 'both');
      $("#datepicker").datepicker("option", "buttonImageOnly", true);
      $("#datepicker").datepicker("option", "buttonImage", 'ico_calendar.png');
    });
  </script>

</body>
</html>
