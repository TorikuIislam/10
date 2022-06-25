<?php

include('connection.php');
if(isset($_POST['submit']))


{

  $name=$_POST['fname'];
  $email=$_POST['email'];
  $password=$_POST['pin'];

  $sql = "insert into users_regi (NAME, EMAIL, PASSWORD)
  VALUES ('$name', '$email', '$password')";
  $data=mysqli_query($conn,$sql);

  if($data){

    echo" Data succesfully entry";

  }
  else{
    echo"failed to entry";
  }
} 
?>
