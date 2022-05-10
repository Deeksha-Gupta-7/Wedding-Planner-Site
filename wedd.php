<?php
include('./config.php');
include('C:\Users\Deeksha\Desktop\final project');
$Name=$_POST['Name'];
  $email=$_POST['email'];
  $check="SELECT*FROM login WHERE `Name`= '$Name' AND `email `= '$email'";
  $result=mysqli_query($con,$check);
  if(!mysqli_num_rows($result)>0){
    $row=mysqli_fetch_assoc($result, MYSQLI_BOTH);

?>