
<?php

session_start();

$con = mysqli_connect('localhost','root','');

if(!$con){
    die("db error");
}

mysqli_select_db($con, 'userreg' );


if(isset($_POST["send"])){
    
$name = $_POST['user'];
$pass = $_POST['password'];

$s = " SELECT * FROM UserTable WHERE name ='$name' ";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "username already exsists";
}  
else{
    $reg = "insert into UserTable(name , password,) values('$name', '$pass')";
    
    mysqli_query($con, $reg);
    
    echo "Registration Successful";
}
}
?>
