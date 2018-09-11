<?php include "views/header.php" ?>


<form action="index.php" method="post" >
      <input type="text" name="username" placeholder="username" >
      <input type="password" name="password" placeholder="password" >
      <input type="submit" name="submit" value="submit" >
  </form>
<?php
  if(isset($_POST['submit'])) {
    $sent = $_POST;

    $username = $sent["username"];
    $password = $sent["password"];

    echo $username . "<br>" .  $password . "<br>" ;

    $connection = mysqli_connect('localhost', 'root', 'root', 'mydatabase');

    if($connection) {
      echo "Connected to Database";
    } else {
      die("Database Connection failed");
    };

    $query = "SELECT * FROM users";

    $result = mysqli_query($connection, $query);

    if(!$result) {
      die('Query FAILED' . mysqli_error());
    } else {
      echo "<br>" .  $result;
    }
  }
  include "views/footer.php";
?>