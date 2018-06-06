<p id="pageTop"><a href="#"><i class="fa fa-chevron-up"></i></a></p>

<!-- footer -->
<footer>
  <div class="container">
    <div class="footer-left">
      <a herf="index.html"><img src="pics/page-img/logo.png" id="footer-logo"></a>
      <ul class="shop-info">
        <li class="time">10:00 〜 19:00</li>
        <li class="tell">TEL：03−1234−5678</li>
        <li>お問合せは<a href="#contact" class="contact-link-footer">こちら</a></li>
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
        <li><a href="#contact" class="contact">Contact</a></li>
        <li><a href="news.html" class="news">News</a></li>
      </ul>
    </div>
  </div>
</footer>


 <!-- script -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- lightbox -->
<script type="text/javascript" src="lightbox2-master/dist/js/lightbox.js"></script>

<script type="text/javascript">
  lightbox.option({
      /*オプションの記述の例*/
      'wrapAround': true,
      'alwaysShowNavOnTouchDevices': true
      })
</script>




 <!-- slideshow -->
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

 <!-- back to top -->
  $(function(){
  var topBtn=$('#pageTop');
  topBtn.hide();

  $(window).scroll(function(){
    if($(this).scrollTop()>80){
      //---- 画面を80pxスクロールしたら、ボタンを表示する
      topBtn.fadeIn();
    }else{
      //---- 画面が80pxより上なら、ボタンを表示しない
      topBtn.fadeOut();
    }
  });

  topBtn.click(function(){
    $('body,html').animate({
    scrollTop: 0},500);
    return false;
    });
  });
</script>

</body>
</html>
