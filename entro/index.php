<?php
include("baglantii.php");
ob_start();
session_start();

$ayarsor=$db->prepare("SELECT * FROM kullanicilar where id=:id");
$ayarsor->execute(array(
  'id' => 0
  ));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);
$kullanicisor=$db->prepare("SELECT * FROM kullanicilar where email=:mail");
$kullanicisor->execute(array(
  'mail' => $_SESSION['email']
  ));
$say=$kullanicisor->rowCount();
$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);
if ($say==0) {

  Header("Location:login.php?durum=izinsiz");

exit;
}
?>
<?php   
include 'navbar.php';
?>   
<div id="about" class="about">
  <div class="container">
    <div class="row display_boxflex">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="about-box">
          <h2>Radyo 53</h2>
          <p>Adıyla Türkiye’yi  frekansıyla Bursa’yı kucaklayan Radyo Türk,  çeyrek asra yakın zamandır yayın hayatını kesintisiz şekilde sürdürmektedir. Geniş kitlelere sahip, tecrübeli programcılarının yayınlarını  karasal ve dijital olarak  dinleyicilerine güçlü bir şekilde ulaştrmaktadır.  Güncel müzikler, gündemi takip eden yayınlar ve dinleyici seçimleri Radyo Türk’ün yoğun olarak dinlenmesine ve reklamveren firmalar tarafından tercih edilmesine sebep olmuştur.
Teknolijinin tüm yeniliklerini takip ederek  , kendimizi sürekli yenilemek,  ayrıca her kitleye hitap eden  yayınlarımızı sizlerin talepleri doğrultusunda sürdürmek en büyük dileğimiz.  İçinde bulunduğumuz güzel şehrin önemli bir frekansı aynı zamanda ülkemizin  önemli bir medya kuruluşu olarak 7 gün 24 saat sizlerleyiz</p>
          <a href="Javascript:void(0)">Read More</a>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="about-box">
          <figure><img src="images/about.png" alt="#" /></figure>
        </div>
      </div>
    </div>
  </div>
</div>
<section class="vh-40" style="background-color: #FFFFFF;">
  <div class="container py-1 h-50">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-md-80 col-lg-50 col-xl-60">
        <div class="card" style="border-radius: 15px;">
          <div class="card-body p-4">
            <div class="d-flex text-black">            
              <div class="flex-grow-1 ms-3">
                <div class="d-flex justify-content-start rounded-3 p-2 mb-2"
                  style="background-color: #efefef;">
                  <div class="px-3">
                    <p class="small text-muted mb-1">Mail</p>
                    <p class="mb-0"><?php echo $kullanicicek ['email']  ?></p>
                  </div>               
                <div class="d-flex pt-1">
                <li class="nav-item">
                <a class="nav-link" href="logout.php">Çıkış</a></li>
                 </div>
                 </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div id="upcoming" class="upcoming">
  <div class="container-fluid padding_left3">
    <div class="row display_boxflex">
      <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
       <div class="box_text">
          <div class="titlepage">
            <h2>Upcoming Concerts</h2>
          </div>
          <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it lookIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look</p>
          <a href="Javascript:void(0)">Read More</a>
        </div>
      </div> 
    
      <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 border_right">
         <div class="upcomimg">
           <figure><img src="images/up.jpg" alt="#"/></figure>
        </div>
          </div>
  </div>
    </div>
</div>

          <script src="js/jquery.min.js"></script>
          <script src="js/popper.min.js"></script>
          <script src="js/bootstrap.bundle.min.js"></script>
          <script src="js/jquery-3.0.0.min.js"></script>
          <script src="js/plugin.js"></script>
          <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
          <script src="js/custom.js"></script>
          <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>
</html>