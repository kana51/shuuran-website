<?php

//mailer利用
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';


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
  $result = "";
  if($riyu!=""){
    foreach($riyu as $row){
    	$result .= $row."  ";
    }
  }

$request = isset($_POST["request"])? $_POST["request"]: "";


//社内用メール設定
$body1 = <<<EOT
ご担当者様
お客様より以下内容で、書道教室のお問い合わせがありました。
ご対応のほどよろしくお願いいたします。


――お客様情報――――
【お名前】{$name}
【おなまえ】{$hira}
【郵便番号】{$zip11}
【住所】{$addr11}
【電話番号】{$tel}
【FAX番号】{$fax}
【メールアドレス】{$email}
――お問い合わせ内容―――――
【ご希望クラス】{$class}
【体験希望日】{$date}
【書道のご経験】{$keikenn}
【習ったことのある書体】{$result}\n
【ご質問・ご相談】{$request}\n
EOT;

//お客さま用メール設定
$body2 =  <<<EOT
{$name}様
お問い合わせいただきありがとうございました。

こちらのメールは自動送信されています。
後日担当者よりご連絡させていただきます。

――お客様情報――――
【お名前】{$name}
【おなまえ】{$hira}
【郵便番号】{$zip11}
【住所】{$addr11}
【電話番号】{$tel}
【FAX番号】{$fax}
【メールアドレス】{$email}
――お問い合わせ内容―――――
【ご希望クラス】{$class}
【体験希望日】{$date}
【書道のご経験】{$keikenn}
【習ったことのある書体】{$result}\n
【ご質問・ご相談】{$request}\n

*********************************************
このメールに関するお問い合わせ先：舟蘭
TEL:000-000-0000
*********************************************
EOT;




// //送信元設定（舟蘭）
$itj_email = "shuuran.info@gmail.com";
$itj_password = "koufuukai2015";
$itj_name = "舟蘭";


//社内(info)/////////////////////////////////////////////////////////////////
//phpmailer利用
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 0;//debugするときは3にするとよい
//gmailの設定
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->CharSet = "UTF-8";
$mail->Username = $itj_email;
$mail->Password = $itj_password;
$mail->setFrom($itj_email, $itj_name);
$mail->addReplyTo($itj_email, $itj_name);


//送信先
$to = $itj_email;
$toName = $itj_name;
$subject = "書道教室のお問い合わせがありました";
$mail->addAddress($itj_email, $itj_name);
$mail->Subject = $subject;
$mail->Body = $body1;

?>


<!doctype html>
<html lang="jp">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="書道家「舟蘭」のサイトです。5歳より書道を始め、2016年より活動開始。東京都内で書道教室やワークショップの開講、デザイン書道やロゴなど筆文字の販売をしています。">
  <meta name="keywords" content="書道,書道家,毛筆,硬筆,ペン字,筆文字,デザイン書道,習字,書道教室,ワークショップ,習い事,少人数,書作品,ギフト,プレゼント,企業,インテリア,大人,東京,板橋区,新宿区">
  <title>舟蘭 | Official Site</title>
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
              <li><a href="index.html#contact" class="contact">Contact</a></li>
              <li><a href="news.html" class="news">News</a></li>
            </ul>
        </div><!-- end top menu -->
      </nav><!-- end nav -->
    </div><!-- end sp-only -->
  </header>


  <div class="content-wrapper">
    <div class="container">
    <div class="content-title">
      <h4>Contact.</h4>
    </div>
    <div class="content-text">
      <?php
        if (!$mail->send()) {

          echo "メール送信に失敗しました。: " . $mail->ErrorInfo;

        } else {

          //問い合わせした人///////////////////////////////////////////////////////////////////
          //phpmailer利用
           $mail = new PHPMailer;
           $mail->isSMTP();
           $mail->SMTPDebug = 0;//debugするときは3にするとよい
           //gmailの設定
           $mail->Host = 'smtp.gmail.com';
           $mail->Port = 587;
           $mail->SMTPSecure = 'tls';
           $mail->SMTPAuth = true;
           $mail->CharSet = "UTF-8";
           $mail->Username = $itj_email;
           $mail->Password = $itj_password;
           $mail->setFrom($itj_email, $itj_name);
           $mail->addReplyTo($itj_email, $itj_name);
          //
           //送信先
           $to = $email;
           $toName = $name;
           $subject = "お問い合わせありがとうございます";
           $mail->addAddress($to, $toName);
           $mail->Subject = $subject;
           $mail->Body = $body2;

          if (!$mail->send()) {
              echo "メール送信に失敗しました。<br>お手数ですが、もう一度最初からやり直してください。" ;
          } else {
              echo "お問い合わせありがとうございました。<br>担当者よりご連絡させていただきますので、今しばらくお待ち下さい。";

          }
          ///////////////////////////////////////////////////////////////////

        }
      ?>
    </div>
  </div><!--end container -->
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</body>
</html>

<?php
function save_mail($mail)
{
    //You can change 'Sent Mail' to any other folder or tag
    $path = "{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail";
    //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
    $imapStream = imap_open($path, $mail->Username, $mail->Password);
    $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
    imap_close($imapStream);
    return $result;
}
?>
