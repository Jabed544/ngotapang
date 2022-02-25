<?php
session_start();
$conn=mysqli_connect("localhost:3307","Jabed","Jab@1201");
if(!$conn){
  //echo " Not connect to the server";
}else{
  //echo " Successfully connect to server";
}
$database=mysqli_select_db($conn,"sdomember");
if($database){
  //echo " Select database";
}else{
  //echo "Not select database";
}
$password=$_GET['passwod'];

$sql="SELECT *FROM members WHERE password='$password'";

 $result=mysqli_query($conn,$sql);
 if(!$result){
  //echo "Not connected";
 }else{
  //echo "Connected";
 }
 if(mysqli_num_rows($result)>0){
  while($row=mysqli_fetch_array($result)){
     $_SESSION['password']=$row['password'];
    echo $row['password'];
  }
}else{
  echo "no";
}
?>