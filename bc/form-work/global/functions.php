<?php
  include "db.php";

  function create() {
    global $connection;
    $sent = $_POST;

    $username = $sent["username"];
    $password = $sent["password"];

    $connection = mysqli_connect('localhost', 'root', 'root', 'mydatabase');

    if($connection) {
      echo "Connected to Database:<br>";
    } else {
      die("Database Connection failed");
    };

    $query = "INSERT INTO users(username,password) ";
    $query .= "VALUES ('$username', '$password')";

    $result = mysqli_query($connection, $query);

    if(!$result) {
      die('Query FAILED' . mysqli_error());
    } else {
      echo $result . " row successfully added";
    }
  }

  function showAllData() {
    global $connection;

    $query ="SELECT * FROM users";


    $result = mysqli_query($connection, $query);
    if(!$result) {
      die('query FAILED' . mysqli_error());
    }
    while($row = mysqli_fetch_assoc($result)) {
      $id = $row['Id'];

      echo "<option value='$id'>$id</option>";
    }
  }

  function update() {
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "UPDATE users SET ";
    $query .= "username = '$username', ";
    $query .= "password = '$password' ";
    $query .= "WHERE Id = $id";

    $result = mysqli_query($connection, $query);
    if(!$result) {
      die("Query FAILED: ". mysqli_error($connection));
    }
  }

  function delete() {
    global $connection;
    $id = $_POST["id"];

    $query = "DELETE FROM `users` WHERE `users`";
    $query .= ".`Id` = '$id'";

    $result = mysqli_query($connection, $query);
    if(!$result) {
      die("QUERY FAILED: " . mysqli_error($connection));
    }
  }

?>