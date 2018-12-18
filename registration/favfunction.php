<?php
session_start();
//header('location:Login.php');
$con = mysqli_connect('localhost','root','','registration');
if(!$con){
  die("db error");
}

if(isset($_GET["recipe_id"])){
  $recipe_id = $_GET["recipe_id"];
  if(!empty($recipe_id)){
    $recipe_id = mysqli_real_escape_string($con, $recipe_id);
    $user_id = $_SESSION['user_id'];
      
    $query = "SELECT * FROM favorites WHERE user_id = '$user_id' && recipe_id = '$recipe_id'";
    $result = mysqli_query($con, $query);
    
    if(mysqli_num_rows($result) == 1){
      echo "Already added";
    } else {
      $query = "INSERT INTO favorites (user_id, recipe_id) VALUES('$user_id', '$recipe_id')";
      $result = mysqli_query($con, $query);
        
      echo "Success";
    }
  }
} else {
  echo "Something went wrong";
}
      
?>