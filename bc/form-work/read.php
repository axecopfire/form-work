
<?php
  include "views/header.php";

  $query ="SELECT * FROM users";

  $result = mysqli_query($connection, $query);

  if(!$result) {
    die('query FAILED' . mysqli_error());
  }
?>

<h1>READ</h1>
<?php
while($row = mysqli_fetch_assoc($result)) {
  ?>
  <pre>
  <?php
  // mysqli_fetch_row
  print_r($row);
  ?>
  </pre>
  <?php
}

?>


<?php include 'views/footer.php'; ?>


html:5