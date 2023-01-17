<?php 
include 'navbar.php';
?>
<div class="backgro_mh">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="heding">
           <h2>HABERLER</h2>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="upcoming" class="upcoming">
  <div class="container-fluid padding_left3">
    <div class="row display_boxflex">
      <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
       <div class="box_text">
      <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 border_right">
      <?php
$kur = simplexml_load_file("https://www.tcmb.gov.tr/kurlar/today.xml");

foreach ($kur -> Currency as $cur) {
	if ($cur["Kod"] == "USD") {
		$usdAlis  = $cur -> ForexBuying;
		$usdSatis = $cur -> ForexSelling;
	}

	if ($cur["Kod"] == "EUR") {
		$eurAlis  = $cur -> ForexBuying;
		$eurAlis = $cur -> ForexSelling;
	}
  if ($cur["Kod"] == "AUD") {
		$audAlis  = $cur -> ForexBuying;
		$audAlis = $cur -> ForexSelling;
	}
  if ($cur["Kod"] == "GBP") {
		$gbpAlis  = $cur -> ForexBuying;
		$gbpAlis = $cur -> ForexSelling;
	}
  if ($cur["Kod"] == "GBP") {
		$gbpAlis  = $cur -> ForexBuying;
		$gbpAlis = $cur -> ForexSelling;
	}
  if ($cur["Kod"] == "KWD") {
		$kwdAlis  = $cur -> ForexBuying;
		$kwdAlis = $cur -> ForexSelling;
	}
}
?>
          </div>
          </div>
          <div style="width:15% float:left">
            <h3>Döviz Kuru</h3>
            <hr>
            <b>USD Alış: </b> <?php echo $usdAlis; ?> <br>
            <b>USD Satış: </b> <?php echo $usdSatis; ?>
            <hr>
            <b>EURO Alış: </b> <?php echo $eurAlis; ?> <br>
            <b>EURO Satış: </b> <?php echo $eurAlis; ?>
            <hr>
            <b>AUD Alış: </b> <?php echo $audAlis; ?> <br>
            <b>AUD Satış: </b> <?php echo $audAlis; ?>
            <hr>
	          <b>GBP Alış: </b> <?php echo $gbpAlis; ?> <br>
	          <b>GBP Satış: </b> <?php echo $gbpAlis; ?>
            <hr>
           <b>KWD Alış: </b> <?php echo $kwdAlis; ?> <br>
	         <b>KWD Satış: </b> <?php echo $kwdAlis; ?>
           
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