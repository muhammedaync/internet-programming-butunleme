<?php require_once '../netting/baglan.php'; ?>
<?php 

include 'header.php'; 

?>
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
<center>
    <h1>Kayıt işlemi</h1>
    <hr>
    </small>
    </h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">	
    <form action="islem1.php" method="POST">
		<input type="text" required="" name="kullanici_adi" placeholder="Kullanici Adınızı Giriniz...">
		<input type="email" required="" name="email" placeholder="Email Giriniz...">
		<input type="text" required="" name="parola" placeholder="Şifte Giriniz...">
		<button type="submit" name="insertislemi">Yeni Müşteri Ekle</button>
		<center>
	</form>
	<br>
</body>
</html>