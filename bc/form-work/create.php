<?php include "views/header.php" ?>
<h1>Create User</h1>

<form action="create.php" method="post" >
      <input type="text" name="username" placeholder="username" >
      <input type="password" name="password" placeholder="password" >
      <input type="submit" name="submit" value="submit" >
  </form>
<?php
  if(isset($_POST['submit'])) {
    create();
  }
  include "views/footer.php";
?>