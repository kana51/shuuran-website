<?php
//データ取得
$naiyou = isset($_POST["naiyou"])? $_POST["naiyou"]: "";
$name = isset($_POST["name"])? $_POST["name"]: "";
$hira = isset($_POST["hira"])? $_POST["hira"]: "";
$zip11 = isset($_POST["zip11"])? $_POST["zip11"]: "";
$addr11 = isset($_POST["addr11"])? $_POST["addr11"]: "";
$tel = isset($_POST["tel"])? $_POST["tel"]: "";
$fax = isset($_POST["fax"])? $_POST["fax"]: "";
$mail = isset($_POST["mail"])? $_POST["mail"]: "";
$item = isset($_POST["item"])? $_POST["item"]: "";
$date = isset($_POST["date"])? $_POST["date"]: "";
$use = isset($_POST["use"])? $_POST["use"]: "";
$text = isset($_POST["text"])? $_POST["text"]: "";
$image = isset($_POST["image"])? $_POST["image"]: "";
$ready = isset($_POST["ready"])? $_POST["ready"]: "";
$layout = isset($_POST["layout"])? $_POST["layout"]: "";
$request = isset($_POST["request"])? $_POST["request"]: "";


//-- メール送信
$success_to_customer = false;
$success_to_admin = false;
$admin_mail = "kana.51.tachi@gmail.com";

//-- 文字コード
mb_language("Japanese");
mb_internal_encoding("utf-8");

//-- 本文作成
$body =$name."様\nお問い合わせいただきありがとうございます。\n\n以下の内容でお問い合わせを受付いたしました。担当よりご連絡いたしますので、今しばらくお待ち下さいませ。\n\n";
$body .= "==== お問い合わせ内容====\n";
$body .= "【".$naiyou."】\n";
$body .= "[ご依頼予定商品]\n";
$body .= $item."\n";
$body .= "\n";
$body .= "[納品希望日]\n";
$body .= $date."\n";
$body .= "\n";
$body .= "[ご用途]\n";
$body .= $use."\n";
$body .= "\n";
$body .= "[お書きする文字]\n";
$body .= $text."\n";
$body .= "\n";
$body .= "[希望スタイル]\n";
$body .= $image."\n";
$body .= "\n";
$body .= "[出来上がり]\n";
$body .= $ready."\n";
$body .= "\n";
$body .= "[レイアウト]\n";
$body .= $layout."\n";
$body .= "\n";
$body .= "[ご要望・ご質問]\n";
$body .= $request."\n";
$body .= "\n";
$body .= "−−−−−−−−−−−−−−−−−−−−−−−\n\n";
$body .= "※こちらのメールはお問い合わせフォームよりお問い合わせ頂いた方へ自動送信しております。\n";
$body .= "※本メールを受信した日より、2日を過ぎても当店より連絡がない場合は、大変お手数ではございますが、下記まで直接ご連絡くださいますようお願い申し上げます。\n";
$body .= "※このメールにお心あたりのない場合には、誠に恐れ入りますが、下記お問い合わせ先へご連絡いただけますようお願いいたします。\n\n";
$body .= "=======================\n";
$body .= "舟蘭\n";
$body .= "電話番号：00-0000-0000（受付時間：10時〜18時）\n";
$body .= "メールアドレス：shuuran@.co.jp\n";
$body .= "ホームページ：shuuran.jp\n";
$body .= "=======================\n";


//-- 管理者メール
$admin_body = "舟蘭サイトよりお問い合わせがあります。\n";
$admin_body .= "==== お問い合わせ内容====\n";
$admin_body .= "お問い合わせ内容：$naiyou\n";
$admin_body .= "【お客様情報】\n";
$admin_body .= "お名前：".$name."\n";
$admin_body .= "おなまえ：".$hira."\n";
$admin_body .= "郵便番号：".$zip11."\n";
$admin_body .= "ご住所：".$addr11."\n";
$admin_body .= "電話番号：".$tel."\n";
$admin_body .= "FAX番号：".$fax."\n";
$admin_body .= "メールアドレス：".$mail."\n";
$admin_body .= "\n";
$admin_body .= "【商品について】\n";
$admin_body .= "[ご依頼予定商品]\n";
$admin_body .= $item."\n";
$admin_body .= "\n";
$admin_body .= "[納品希望日]\n";
$admin_body .= $date."\n";
$admin_body .= "\n";
$admin_body .= "[ご用途]\n";
$admin_body .= $use."\n";
$admin_body .= "\n";
$admin_body .= "[お書きする文字]\n";
$admin_body .= $text."\n";
$admin_body .= "\n";
$admin_body .= "[希望スタイル]\n";
$admin_body .= $image."\n";
$admin_body .= "\n";
$admin_body .= "[出来上がり]\n";
$admin_body .= $ready."\n";
$admin_body .= "\n";
$admin_body .= "[レイアウト]\n";
$admin_body .= $layout."\n";
$admin_body .= "\n";
$admin_body .= "[ご要望・ご質問]\n";
$admin_body .= $request."\n";
$admin_body .= "\n";



//-- 送信処理（ユーザー）
$to = $mail;
$header = "From: ".$admin_mail;
$subject = "【舟蘭】お問い合わせありがとうございます。";
if (mb_send_mail($to, $subject, $body, $header)) {
  $success_to_customer = true;
}

//-- 送信処理（管理者）
if ($success_to_customer) {
  $to = $admin_mail;
  $header = "From: ".$admin_mail;
  $subject = "webよりお問い合わせがあります。";
  if (mb_send_mail($to, $subject, $admin_body, $header)) {
    $success_to_admin = true;
  }
}

//画面表示
?>



<!doctype html>
<html lang="jp">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>お問い合わせ | Official Site</title>
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
        <?php if($success_to_customer && $success_to_admin) { ?>
          <h4>お問い合わせ完了しました。</h4>
          <p>お問い合わせありがとうございます。<br>
          24時間以内にご連絡いたしますので、しばらくお待ち下さい。</p>
        <?php } ?>

        <?php if(!$success_to_customer || !$success_to_admin) { ?>
          <h4>お問い合わせに失敗しました。</h4>
          <p>送信に失敗しました。<br>
          お手数ですが、shuuran@.co.jpまでお問い合わせください。</p>
        <?php } ?>
      </div>
    </div><!-- end container -->
  </div><!-- content-wrapper -->



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
