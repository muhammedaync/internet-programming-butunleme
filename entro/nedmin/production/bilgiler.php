
<?php 

include 'header.php'; 

?>

<?php require_once '../netting/baglan.php'; ?>

<style>

body {
    background: #FFFFFF;
}

</style>



<body>

<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Radyo Kullanıcıları<small>,



            </small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Ayar 1</a>
                  </li>
                  <li><a href="#">Ayar 2</a>
                  </li>
                </ul>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
	<hr>


	<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">

	<thead>
<th>S.NO</th>
<th>ID</th>
<th>Kullanıcı Adı</th>
<th>Mail</th>
<th>Şifre</th>
<th>Giriş Tarihi</th>
<th>İşlemler</th>
<th>İşlemler</th>
</thead>
<tbody>
<?php
$bilgilerimsor=$db->prepare("SELECT * from kullanicilar");
$bilgilerimsor->execute();

$say=0;

while ($bilgilerimcek=$bilgilerimsor->fetch(PDO::FETCH_ASSOC)) { $say++?>

 <tr>
 <td><?php echo $say; ?></td>
<td><?php echo $bilgilerimcek['id'] ?></td>
<td><?php echo $bilgilerimcek['kullanici_adi'] ?></td>
<td><?php echo $bilgilerimcek['email'] ?></td>
<td><?php echo $bilgilerimcek['parola'] ?></td>
<td><?php echo $bilgilerimcek['kayit_tarihi'] ?></td>
<td align="center"><a href="duzenle.php?id=<?php echo $bilgilerimcek['id'] ?>"><button class="btn btn-primary btn-xs">Düzenle</button></td></a>
<td align="center"><a href="islem1.php?id=<?php echo $bilgilerimcek['id'] ?>&kullanicilarsil=ok"><button class="btn btn-danger btn-xs">Sil</button></td></a>
 </tr>

 <?php } ?>
 </tbody>
</table>


</body>
</html>
