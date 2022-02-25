<?php 
$conn=mysqli_connect("localhost:3307","jabed","Jab@1201");
if(!$conn){
   echo "NOT CONNECT TO THE SERVER";
}else{
	echo "CONNECT TO SERVER";
}
$database=mysqli_select_db($conn,"sdomember");
 if($database){
 	echo "CONNECT TO THE DATABASE";
 }else{
 	echo "DATABASE NOT SELECTED";
 }
 if(isset($_POST['submit'])){
 $name=$_POST['name'];
 $father=$_POST['fname'];
 $mother=$_POST['mname'];
 $state=$_POST['state'];
 $distric=$_POST['distric'];
 $village=$_POST['village'];
 $postoffice=$_POST['postoffice'];
 $police=$_POST['pstation'];
 $pin=$_POST['pincode'];
 $mobile=$_POST['mobile'];
 $email=$_POST['email'];
 $adhar=$_POST['adharno'];
 $voter=$_POST['voter'];
 $account=$_POST['account'];
 $con_account=$_POST['conformaccount'];
 $ifsc=$_POST['ifsc'];
 $name_account=$_POST['name_account'];
 $username=$_POST['user'];
 $password=$_POST['pass'];

$adharimage=$_FILES['adrimage'];
$voterimage=$_FILES['votrimage'];
$photograph=$_FILES['photo'];
$signature=$_FILES['signature'];

$filename=$adharimage['name'];
$filepath=$adharimage['tmp_name'];
$fileerror=$adharimage['error'];
  if($fileerror==0){
   $imageadhar='applicationimage/'.$filename;
   move_uploaded_file($filepath, $imageadhar);
  }
$filename=$voterimage['name'];
$filepath=$voterimage['tmp_name'];
$fileerror=$voterimage['error'];
  if($fileerror==0){
   $imagevoter='applicationimage/'.$filename;
   move_uploaded_file($filepath, $imagevoter);
  }
$filename=$photograph['name'];
$filepath=$photograph['tmp_name'];
$fileerror=$photograph['error'];
  if($fileerror==0){
   $photo='applicationimage/'.$filename;
   move_uploaded_file($filepath, $photo);
  }
  $filename=$signature['name'];
$filepath=$signature['tmp_name'];
$fileerror=$signature['error'];
  if($fileerror==0){
   $signature_image='applicationimage/'.$filename;
   move_uploaded_file($filepath, $signature_image);
  }
}
 $sql="INSERT INTO application(name,father,mother,state,distric,village,post,police,pin,mobile,email,adhar,voter,account,conf_account,ifsc,account_name,user,password,adharimage,voterimage,photograph,signature   )

VALUES('$name','$father','$mother','$state','$distric','$village','$postoffice','$police','$pin','$mobile','$email','$adhar','$voter','$account','$con_account','$ifsc','$name_account','$username','$password','$imageadhar','$imagevoter','$photo','$signature_image')";

if(!mysqli_query($conn,$sql)){
   echo "DATA NO INSERTED";
}else{
   echo "DATA INSERTED SUCCESSFULLY";
}
  
 
?>
