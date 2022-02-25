<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  <meta name="description" content="Free Web tutorials">
  <meta name="keywords" content="HTML, CSS, JavaScript">
  <meta name="author" content="John Doe">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style/style.css">
  <link rel="stylesheet" type="text/css" href="style/profile.css">
	<title></title>
</head>
<body>
<div class="responsive_nav">
     <div class="navigation">
        <a href="index.html">HOME</a>
         <a>ABOUT</a>
         <a>SERVICE</a>
         <a>MEMBERS</a>
         <a>MANAGEMENT</a>
         <button onclick="memberlogin()"style="font-size:12px;height:25px;background-color:#16A085 ;">MEMBER LOGIN</button>
     </div>

 </div>
 <div class="responsive_name">
     <div class="name">
        <img src="image/screnshoot.jpg">
     </div>
 </div>
 <?php 
 session_start();
$password=$_SESSION['password'];
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

$sql="SELECT *FROM members WHERE password=$password";

 $result=mysqli_query($conn,$sql);
 if(!$result){
 	//echo "Not connected";
 }else{
 	//echo "Connected";
 }
 if(mysqli_num_rows($result)>0){
 	while($row=mysqli_fetch_array($result)){
    
?>

<div class="responsive_servicelist">
    <div class="allboxes">
        <div class="profile">
        <h3 style="color:red;text-align: center;">PROFILE</h3>
       <img src="<?php echo $row['photograph']?>"width="100"height="100">
       <p>NAME:<?php echo $row['name'];?></p>
       <p>FATHER:<?php echo $row['father'];?></p>
       <p>MOTHER:<?php echo $row['mother'];?></p>
       <p>STATE:<?php echo $row['state'];?></p>
       <p>DISTRIC:<?php echo $row['distric'];?></p>
       <p>VILLAGE:<?php echo $row['village'];?></p>
       <p>POST:<?php echo $row['post'];?></p>
       <p>PIN:<?php echo $row['pin'];?></p>
       <p>MOBILE:<?php echo $row['mobile'];?></p>
       <p>EMAIL:<?php echo $row['email'];?></p>
        </div>
        <div class="box_1">
            <h3 style="text-align:center">WELCOME</h3>
           HI ! <?php echo $row['name'] ?>
            <p>Looking for some already great color combinations? Our color chart features flat design colors, Google's Material design scheme and the classic web safe color palette, all with Hex color codes.Looking for some already great color combinations? Our color chart features flat design colors, Google's Material design scheme and the classic web safe color palette, all with Hex color codes.Looking for some already great color combinations? Our color chart features flat design colors, Google's Material design scheme and the classic web safe color palette, all with Hex color codes.Looking for some already great color combinations? Our color chart features flat design colors, Google's Material design scheme and the classic web safe color palette, all with Hex color codes. </p>

        </div>
        <div class="box">
            <p>All participant of next program are listed here you can download all applicant form and call them for farther informatin . </p>
            <h2 style="text-align:center"><a href="applicantList.php">CLECK HERE</a></h2>
        </div>
        <div class="box">
            <p>Looking for some already great color combinations? Our color chart features flat design colors, Google's Material design scheme and the classic web safe color palette, all with Hex color codes. </p>
            <h2 style="text-align:center">SERVICE...</h2>
        </div>
        <div class="box">
            <p>Looking for some already great color combinations? Our color chart features flat design colors, Google's Material design scheme and the classic web safe color palette, all with Hex color codes. </p>
            <h2 style="text-align:center">SERVICE...</h2>
        </div>
        <div class="box">
            <p>Looking for some already great color combinations? Our color chart features flat design colors, Google's Material design scheme and the classic web safe color palette, all with Hex color codes. </p>
            <h2 style="text-align:center">SERVICE...</h2>
        </div>
        <div class="box">
            <p>Looking for some already great color combinations? Our color chart features flat design colors, Google's Material design scheme and the classic web safe color palette, all with Hex color codes. </p>
            <h2 style="text-align:center">SERVICE...</h2>
        </div>
        <div class="box">
            <p>Looking for some already great color combinations? Our color chart features flat design colors, Google's Material design scheme and the classic web safe color palette, all with Hex color codes. </p>
            <h2 style="text-align:center">SERVICE...</h2>
        </div>
        <div class="box">
            <p>Looking for some already great color combinations? Our color chart features flat design colors, Google's Material design scheme and the classic web safe color palette, all with Hex color codes. </p>
            <h2 style="text-align:center">SERVICE...</h2>
        </div>
        <div class="box">
            <p>Looking for some already great color combinations? Our color chart features flat design colors, Google's Material design scheme and the classic web safe color palette, all with Hex color codes. </p>
            <h2 style="text-align:center">SERVICE...</h2>
        </div>
        <div class="box">
            <p>Looking for some already great color combinations? Our color chart features flat design colors, Google's Material design scheme and the classic web safe color palette, all with Hex color codes. </p>
            <h2 style="text-align:center">SERVICE...</h2>
        </div>
        <div class="box">
            <p>Looking for some already great color combinations? Our color chart features flat design colors, Google's Material design scheme and the classic web safe color palette, all with Hex color codes. </p>
            <h2 style="text-align:center">SERVICE</h2>
        </div>
    </div>
</div>
<footer class="responsive_footer">
    <div class="footer_size">
            <div class="content">
            <li>ABOUT</li>
            <li>ABOUT</li>
            <li>ABOUT</li>
            <li>ABOUT</li>
         </div>
         <div class="content">
            <li>ABOUT</li>
            <li>ABOUT</li>
            <li>ABOUT</li>
            <li>ABOUT</li>
            <div class="author">
             <p>DESIGN AND DEVELOPED BY</p>
             <p>JABED HUSSAIN BARBHUIYA</p>
         </div>
         </div>
         <div class="content">
            <li>ABOUT</li>
            <li>ABOUT</li>
            <li>ABOUT</li>
            <li>ABOUT</li>
         </div>
    </div>
 </footer>
  <?php
    }
   }
?>
</body>
</html>