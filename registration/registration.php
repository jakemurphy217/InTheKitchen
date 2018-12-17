<?php
session_start();
include_once "./database.php";

$error = "";

echo "connected";

if(isset($_POST["submit"])){
  $username = $_POST["name"];
  $password = $_POST["password"];
  if(!empty($username) && !empty($password)){
    $username = mysqli_real_escape_string($db, $username); 
    $password = mysqli_real_escape_string($db, $password);
    
    $query = "SELECT * FROM usertable WHERE name = '$username'";
    $result = mysqli_query($db, $query);
    
    if(mysqli_num_rows($result) == 1){
      echo "Username already taken";
    } else {
      $query = "INSERT INTO usertable (name, password) VALUES('$username', '$password')";
      $result = mysqli_query($db, $query);
      echo "Registration Successful";
    }
  }
} else {
  echo "Something went wrong";
}
      
?>
