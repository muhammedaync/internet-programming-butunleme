
<?php 
include 'navbar.php';
?>




<div class="backgro_mh">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="heding">
           <h2>RADYOLAR</h2>
        </div>
      </div>
    </div>
  </div>
</div>
<center>
<form method="post">
 <label>Search</label>
 <input type="text" name="search">
 <input type="submit" name="submit">
</form>
<center>
<?php 
$con = new PDO("mysql:host=localhost;dbname=ses",'root','');

if (isset($_POST["submit"])) {
  $str = $_POST["search"];
  $sth = $con->prepare("SELECT * FROM `sesveresimdeğiştirmek` WHERE sesİSİM = '$str'");

  $sth->setFetchMode(PDO:: FETCH_OBJ);
  $sth -> execute();

  if($row = $sth->fetch())
  {
    ?>
    <br><br>
    <div class="container mt-4">
    <table class="table">
      <tr>
        <th>ID</th>
        <th>Radyo İsmi</th>
        <th>Radyo Sesi</th>
        <th>Resim</th>
  </tr>
  <tr>
        <td><?php echo $row->ses_id; ?></td>
        <td><?php echo $row->sesİSİM; ?></td>
        <td><?php echo "<div class='radyo-box'><audio controls ><source src='$row->sesBağlantıAdres'  type='audio/ogg'></audio></div>"; ?></td>
        <td><img src="<?php echo $row->resim; ?>" height="80" width="100"/></td>
  </tr>
  </table>
  <?php
  }
  
  else {
    echo "Name Does not exist";
  }
}
?>
</div>
<br><br><br>
<?php
require 'conn.php';
$query = mysqli_query($conn, "SELECT * FROM `sesVEresimDeğiştirmek`") or die(mysqli_error());
$fetch = mysqli_fetch_array($query);
while($row=mysqli_fetch_array($query))
    {  
      $row1 = $row['sesBağlantıAdres'];
      $img = $row['resim'];
      echo "<div class='radyo-box'><img class='radyo-image' src='$img' alt='' srcset=''><audio controls ><source src='$row1'  type='audio/ogg'>Your browser does not support the audio element.</audio></div>";
      
    }

?>


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