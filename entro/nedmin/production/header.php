<?php
ob_start();
session_start();
include '../netting/baglan.php';
$kullanicisor=$db->prepare("SELECT * FROM adminkullanici where kullanici_mail=:mail");
$kullanicisor->execute(array(
  'mail' => $_SESSION['kullanici_mail']
  ));
$say=$kullanicisor->rowCount();
$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);
if ($say==0) {

  Header("Location:login.php?durum=izinsiz");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>RADYO 53</title>
  <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
  <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
  <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
  <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
  <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
  <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
  <link href="../build/css/custom.min.css" rel="stylesheet">
</head>
<body class="nav-md"> 
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="clearfix"></div>
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="images/user.png" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Hoşgeldin</span>
              <h2><?php echo $kullanicicek['kullanici_adsoyad'] ?></h2>
            </div>
          </div>
          <br />
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>YETKİLİ</h3>
              <ul class="nav side-menu">
                <li><a href="index.php"><i class="fa fa-home"></i> Admin Anasayfa </a></li>
                <li><a href="kullanici.php"><i class="glyphicon glyphicon-inbox"></i>  Admin Bilgileri </a></li>
                <li><a href="adminekle.php"><i class="glyphicon glyphicon-plus"></i>  Admin Kayıt İşlemi </a></li>
                <li><a href="bilgiler.php"><i class="glyphicon glyphicon-inbox"></i>  Müşteri Bilgileri </a></li>
                <li><a href="index1.php"><i class="glyphicon glyphicon-plus"></i>  Müşteri Kayıt İşlemi </a></li>
                <li><a href="radyoekleme.php"><i class="glyphicon glyphicon-plus"></i>  Radyo Ekleme</a></li>
           </ul>
         </div>
       </div>
    </div>
  </div>
  <div class="top_nav">
    <div class="nav_menu">
      <nav>
        <div class="nav toggle">
          <a id="menu_toggle"><i class="fa fa-bars"></i></a>
        </div>
        <ul class="nav navbar-nav navbar-right">
          <li class="">
            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
              <img src="images/user.png" alt=""><?php echo $kullanicicek['kullanici_adsoyad'] ?>
              <span class=" fa fa-angle-down"></span>
            </a>
            <ul class="dropdown-menu dropdown-usermenu pull-right">                         
              <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Güvenli Çıkış</a></li>
            </ul>
          </li>         
        </ul>
      </nav>
    </div>
  </div>