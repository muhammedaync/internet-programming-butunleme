

<?php
include_once('connection.php');
include 'navbar.php';

if (isset($_GET['page_no']) && $_GET['page_no'] !== ""){
    $page_no = $_GET['page_no'];
} else {
    $page_no = 1;
}

$total_records_per_page = 5;

$offset = ($page_no - 1) * $total_records_per_page;

$previous_page =  $page_no - 1;

$next_page = $page_no + 1;

$result_count = mysqli_query($conn, "SELECT COUNT(*) as total_records FROM
sesveresimdeğiştirmek") or die(mysqli_error($conn));

$records = mysqli_fetch_array($result_count);

$total_records = $records['total_records'];

$total_no_of_pages = ceil($total_records / $total_records_per_page);


$sql = "SELECT * FROM sesveresimdeğiştirmek LIMIT $offset ,
$total_records_per_page";

$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <div class="container mt-5">
    <h1>PHP Pagination</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Employee ID</th>
                <th>Department</th>
</tr>
</thead>
<tbody>
    <?php
    require 'conn.php';
    $query = mysqli_query($conn, "SELECT * FROM `sesVEresimDeğiştirmek`") or die(mysqli_error());
    $fetch = mysqli_fetch_array($query);
    while ($row = mysqli_fetch_array($result)) {
      $row1 = $row['sesBağlantıAdres']; 
      ?>
<tr>
                <td><?= $row['ses_id']; ?></td>
                <td><?= $row['sesİSİM']; ?></td>
                <td><?= "<div class='radyo-box'><audio controls ><source src='$row1'  type='audio/ogg'></audio></div>"; ?> </td>
                <td><img src="<?php echo $row['resim']?>" height="80" width="100"/></td>
</tr>
<?php }
mysqli_close($conn) ?>
</tbody> 
</table>

<nav aria-label="Page navigation example">
  <ul class="pagination">


    <li class="page-item"><a class="page-link <?= ($page_no <= 1) ?
    'disabled' : ''; ?> " <?= ($page_no > 1) ? 'href=?page_no=' . 
    $previous_page : ''; ?>>Previous</a></li>


    <?php for ($counter = 1; $counter <= $total_no_of_pages; $counter
    ++) { ?>

        <?php if ($page_no != $counter) { ?>
    <li class="page-item"><a class="page-link" href="?
    page_no=<?= $counter; ?>"><?= $counter; ?></a></li>
    <?php } else { ?>
        <li class="page-item"><a class="page-link active"><?=
         $counter; ?></a></li>
    <?php } ?>
    <?php } ?>


    <li class="page-item"><a class="page-link <?= ($page_no >= 
    $total_no_of_pages) ? 'disabled' : ''; ?>" <?= ($page_no <
    $total_no_of_pages) ? 'href=?page_no=' . $next_page : ''; ?>
    >Next</a></li>


  </ul>
</nav>
<div class="p-10">
    <strong>Page <?= $page_no; ?> of <?=
    $total_no_of_pages; ?></strong>
</div>
</div>

</body>
</html>