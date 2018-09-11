<?php
  include "views/header.php";

  if(isset($_POST['submit'])) {
    update();
  }
?>

  <h1>UPDATE</h1>
  <form action="update.php" method="post" >
      <input type="text" name="username" placeholder="username" >
      <input type="password" name="password" placeholder="password" >
      <select name="id" id="">
        <?php
        showAllData();
        ?>
      </select>
      <input type="submit" name="submit" value="UPDATE" >
  </form>
  <?php
  include 'views/footer.php';
  ?>


