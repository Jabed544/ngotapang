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
 $postoffice=$_POST['post'];
 $city=$_POST['city'];
 $pin=$_POST['pin'];
 $mobile=$_POST['mobile'];
 $email=$_POST['email'];
 $adhar=$_POST['adhar'];
 $voter=$_POST['voteridno'];
 $pan=$_POST['panno'];
 $house=$_POST['houseno'];
 $ration=$_POST['ration'];
 $username=$_POST['user'];
 $password=$_POST['pass'];

$adharimage=$_FILES['adrimage'];
$voterimage=$_FILES['votrimage'];
$photograph=$_FILES['photo'];

$filename=$adharimage['name'];
$filepath=$adharimage['tmp_name'];
$fileerror=$adharimage['error'];
  if($fileerror==0){
  	$imageadhar='webimage/'.$filename;
  	move_uploaded_file($filepath, $imageadhar);
  }
$filename=$voterimage['name'];
$filepath=$voterimage['tmp_name'];
$fileerror=$voterimage['error'];
  if($fileerror==0){
  	$imagevoter='webimage/'.$filename;
  	move_uploaded_file($filepath, $imagevoter);
  }
$filename=$photograph['name'];
$filepath=$photograph['tmp_name'];
$fileerror=$photograph['error'];
  if($fileerror==0){
  	$photo='webimage/'.$filename;
  	move_uploaded_file($filepath, $photo);
  }
}
  $sql="INSERT INTO members(name,father,mother,state,distric,village,post,city,pin,mobile,email,adhar,voter,pan,house,ration,user,password,adharimage,voterimage,photograph)

VALUES('$name','$father','$mother','$state','$distric','$village','$postoffice','$city','$pin','$mobile','$email','$adhar','$voter','$pan','$house','$ration','$username','$password','$imageadhar','$imagevoter','$photo')";

if(!mysqli_query($conn,$sql)){
	echo "DATA NO INSERTED";
}else{
	echo "DATA INSERTED SUCCESSFULLY";
}
  
?>