<?php
//データ取得
$naiyou = isset($_POST["naiyou"])? $_POST["naiyou"]: "";
$name = isset($_POST["name"])? $_POST["name"]: "";
$hira = isset($_POST["hira"])? $_POST["hira"]: "";
$zip11 = isset($_POST["zip11"])? $_POST["zip11"]: "";
$addr11 = isset($_POST["addr11"])? $_POST["addr11"]: "";
$tel = isset($_POST["tel"])? $_POST["tel"]: "";
$fax = isset($_POST["fax"])? $_POST["fax"]: "";
$email = isset($_POST["email"])? $_POST["email"]: "";
$item = isset($_POST["item"])? $_POST["item"]: "";
$date = isset($_POST["date"])? $_POST["date"]: "";
$use = isset($_POST["use"])? $_POST["use"]: "";
$text = isset($_POST["text"])? $_POST["text"]: "";
$image = isset($_POST["image"])? $_POST["image"]: "";
$ready = isset($_POST["ready"])? $_POST["ready"]: "";
$layout = isset($_POST["layout"])? $_POST["layout"]: "";
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
  <title>オーダーメイドお問い合わせ | Official Site</title>
  <link href="https://fonts.googleapis.com/earlyaccess/sawarabimincho.css" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
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
        <h4>お見積り・お問い合わせ</h4>
      </div>
    </div><!-- end container -->

    <div class="contact-container">
      <div class="mod-dl-table">
        <form name="form1" action="./orderconfirm.php" method="post">
            <dl>
            <!-- お問い合わせ内容 -->
            <dt>お問い合わせ項目<span class="mod-icon-inquiry">必須</span></dt>
            <dd>
              <input type="radio" name="naiyou" value="お見積り" checked="checked" id="input-radio">お見積り
              <br>
              <input type="radio" name="naiyou" value="ご注文" id="input-radio">ご注文
            </dd>

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
            <h5>商品についてご記入ください</h5>

            <!-- 依頼予定商品 -->
            <dt>ご依頼予定商品<span class="mod-icon-inquiry">必須</span></dt>
            <dd>
              <select class="custom-select my-1 mr-sm-2" name="item" id="inlineFormCustomSelectPref" value="<?php echo htmlspecialchars($item, ENT_QUOTES, "utf-8"); ?>" required>
                <option selected>選択してください</option>
                <option value="ハガキ">ハガキ</option>
                <option value="色紙（命名書等）">色紙（命名書等）</option>
                <option value="筆文字Ｔシャツ">筆文字Ｔシャツ</option>
                <option value="筆文字デザイン（肉筆）">筆文字デザイン（肉筆）</option>
                <option value="筆文字デザイン（データ）">筆文字デザイン（データ）</option>
                <option value="書作品（額）">書作品（額）</option>
                <option value="書作品（掛け軸）">書作品（掛け軸）</option>
                <option value="筆耕（宛名書き）">筆耕（宛名書き）</option>
                <option value="その他（ご要望欄へご記入）">その他（ご要望欄へご記入）</option>
              </select>
            </dd>

            <!-- 納品希望日 -->
            <dt>納品希望日<span class="mod-icon-inquiry">必須</span></dt>
            <dd>
              <div class="form-group" id="datepicker-default">
                  <div class="input-group date">
                    <input type="text" name="date" class="form-control" value="<?php echo htmlspecialchars($date, ENT_QUOTES, "utf-8"); ?>" required>
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                  </div>
              </div>
              <br>
              ※納品の最短目安は<a href="ordermade.html#flowdate" id="blue">こちら</a>
            </dd>

            <!-- 用途 -->
            <dt>ご用途<span class="mod-icon-inquiry">必須</span></dt>
            <dd>
              <input type="text" name="use" value="<?php echo htmlspecialchars($use, ENT_QUOTES, "utf-8"); ?>" id="input-font" required>
            </dd>

            <!-- 書く文字 -->
            <dt>お書きする文字<span class="mod-icon-inquiry">必須</span></dt>
            <dd>
              <textarea name="text" required><?php echo htmlspecialchars($text, ENT_QUOTES, "utf-8"); ?></textarea>
            </dd>

            <!-- 希望スタイル -->
            <dt>希望スタイル<span class="mod-icon-inquiry">必須</span></dt>
            <dd>
              <input type="radio" name="image" value="かわいい" checked="checked" id="input-radio">かわいい
              <br>
              <input type="radio" name="image" value="かっこいい" id="input-radio">かっこいい
              <br>
              <input type="radio" name="image" value="その他（備考欄）" id="input-radio">その他（備考欄へ記載ください。）
            </dd>

            <!-- 出来上がり -->
            <dt>出来上がり</dt>
            <dd>
              <textarea name="ready" placeholder="当店のご紹介している中でイメージに近い作品がありましたらご記入ください。"><?php echo htmlspecialchars($ready, ENT_QUOTES, "utf-8"); ?></textarea>
            </dd>

            <!-- レイアウト -->
            <dt>レイアウト<span class="mod-icon-inquiry">必須</span></dt>
            <dd>
              <input type="radio" name="layout" value="縦書き" checked="checked" id="input-radio">縦書き
              <br>
              <input type="radio" name="layout" value="横書き" id="input-radio">横書き
            </dd>

            <!-- 要望・質問 -->
            <dt>備考欄<span class="mod-icon-inquiry">必須</span></dt>
            <dd>
              <textarea name="request" placeholder="ご予算、仕上がりサイズ、その他の出来上がりのイメージなどお知らせください。" required><?php echo htmlspecialchars($request, ENT_QUOTES, "utf-8"); ?></textarea>
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
  <script type="text/javascript" src="bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <script type="text/javascript" src="bootstrap-datepicker/dist/locales/bootstrap-datepicker.ja.min.js"></script>
  <script type="text/javascript">
  $(function(){
      //Default
      $('#datepicker-default .date').datepicker({
          format: "yyyy年mm月dd日",
          language: 'ja',
          autoclose: true
      });

  });
  </script>
</body>
</html>
