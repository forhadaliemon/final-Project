<?php
# create database connection
$connect = mysqli_connect("localhost","root","","loginsystem");

if(!empty($_POST["email"])) {
  $query = "SELECT * FROM users WHERE email='" . $_POST["email"] . "'";
  $result = mysqli_query($connect,$query);
  $count = mysqli_num_rows($result);
  if($count>0) {
    echo "<span style='color:red'> Sorry This Email already exists .</span>";
    echo "<script>$('#submit').prop('disabled',true);</script>";
  }else{
    echo "<span style='color:green'> Email available for Registration .</span>";
    echo "<script>$('#submit').prop('disabled',false);</script>";
  }
}

if(!empty($_POST["contact"])) {
  $query = "SELECT * FROM users WHERE contactno='" . $_POST["contact"] . "'";
  $result = mysqli_query($connect,$query);
  $count = mysqli_num_rows($result);
  if($count>0) {
    echo "<span style='color:red'> Sorry This Contact already exists .</span>";
    echo "<script>$('#submit').prop('disabled',true);</script>";
  }else{
    echo "<span style='color:green'> Email available for Registration .</span>";
    echo "<script>$('#submit').prop('disabled',false);</script>";
  }
}
?>