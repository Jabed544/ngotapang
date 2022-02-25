<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  <meta name="description" content="Free Web tutorials">
  <meta name="keywords" content="HTML, CSS, JavaScript">
  <meta name="author" content="John Doe">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style/style.css">
	<title></title>
    <style type="text/css">
        .table{
            width: 100%;
            height:100%;
            display: flex;
            justify-content:center;
            border-collapse:collapse;
            font-size:100%;
            text-align:center;
    
        }
        .resp_table{
            width:90%;
            height:100%;
            background-color:white;
            display:flex;
            justify-content:center;
        }
        .table_sise{
            width:100%;
            height:100%;
            font-size:100%;
        }

    th{ 
        border:1px solid green;
        height:40px;
      
    }
    td{
        height:40px;
        color:blue;
        border:1px solid green;
        background-color:#D5F5E3;
      
    }       
        
    </style>
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
 $conn=mysqli_connect("localhost:3307","jabed","jabed@1201");
 $database=mysqli_select_db($conn,"sdomember");

 $sql="SELECT *FROM application";
 $result=mysqli_query($conn,$sql);
 if(mysqli_num_rows($result)>0){
  ?>
  <h2 style="text-align: center;">ALL APPLICANT DETAILS</h2>
<div class="table">
    <div class="resp_table">
    <table class="table_sise">
        <tr>
            <td>SL NO</td>
            <td>NAME</td>
            <td>MOBILE NO</td>
            <td>EMAIL</td>
            <td>VILLAGE</td>
            <td>DISTRIC</td>
            <td>PRINT</td>
        </tr>
        <?php
       while($row=mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<th>".$row['id']."</th>";
        echo "<th>".$row['name']."</th>";
        echo "<th>".$row['mobile']."</th>";
        echo "<th>".$row['email']."</th>";
        echo "<th>".$row['village']."</th>";
        echo "<th>".$row['distric']."</th>";    

        echo '<th style="color:blue"><a href ="makepdf.php?id='.$row['id'].'">VEIW</a></th>';
        

        echo "<tr>";
       }
        ?>
    </table>
   </div>
</div>


<?php 
   }
?>
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
</body>
</html>