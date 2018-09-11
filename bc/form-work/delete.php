<?php
  include "views/header.php";

  if(isset($_POST["submit"])) {
    delete();
  }
?>

<form action="deletE.php" method="post"  >
  <select name="id">
    <?php showAllData() ?>
  </select>
  <input type="submit" name="submit" value="submit" >
</form>


<?php include "views/footer.php" ?>