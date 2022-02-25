<?php
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

$idd=$_GET['id'];

$sql="SELECT *FROM application WHERE id=$idd";

 $result=mysqli_query($conn,$sql);
 if(!$result){
 	//echo "Not connected";
 }else{
 	//echo "Connected";
 }
 if(mysqli_num_rows($result)>0){
 	while($row=mysqli_fetch_array($result)){
require_once('tcpdf/tcpdf.php');
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->SetTitle('Dynamic PDF');
$pdf->setCreator(PDF_CREATOR);
$pdf->setHeaderData("","",PDF_HEADER_TITLE,PDF_HEADER_STRING);
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN," ",PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA," ",PDF_FONT_SIZE_DATA));
$pdf->setPrintHeader(false);
$pdf->setAutoPageBreak(TRUE,10);
$pdf->setFont('helvetica','',12);
$pdf->AddPage();



$html='<h1 style="text-align:center;color:green">SOCIAL DEVELOPMENT ORGANIZATION</h1>
<div style="text-align:center">
   <h>VILL-CHIBITA BICHIA PART 6</h><br>
   <h>PO-CHIBITA BICHIA</h><br>
   <h>DIST-CACHAR/ASSAM-788150</h><br>
   
   ----------------------------------------------------------------------------------------------
   </div> <br><br><br>';
$pdf->writeHTML($html);

$pdf->cell(0,10," PERSONAL DETAILS",1,1,'C',0);


   $pdf->Image($row['photograph'],178,28,22,'','','');
   $pdf->cell(38,10,"NAME",1,0);
   $pdf->cell(0,10,$row['name'],1,1,'C');

    $pdf->cell(38,10,"FATHER",1,0);
   $pdf->cell(0,10,$row['father'],1,1,'C');

   $pdf->cell(38,10,"MOTHER",1,0);
   $pdf->cell(0,10,$row['mother'],1,1,'C');

   $pdf->cell(38,10,"STATE",1,0);
   $pdf->cell(0,10,$row['state'],1,1,'C');

   $pdf->cell(38,10,"DISTRIC",1,0);
   $pdf->cell(0,10,$row['distric'],1,1,'C');

   $pdf->cell(38,10,"VILLAGE",1,0);
   $pdf->cell(0,10,$row['village'],1,1,'C');

   $pdf->cell(38,10,"POST OFFICE",1,0);
   $pdf->cell(0,10,$row['post'],1,1,'C');

    $pdf->cell(38,10,"POLICE STATION",1,0);
   $pdf->cell(0,10,$row['police'],1,1,'C');

   $pdf->cell(38,10,"PIN CODE",1,0);
   $pdf->cell(0,10,$row['pin'],1,1,'C');

   $pdf->cell(38,10,"MOBILE NO",1,0);
   $pdf->cell(0,10,$row['mobile'],1,1,'C');

   $pdf->cell(38,10,"EMAIL",1,0);
   $pdf->cell(0,10,$row['email'],1,1,'C');


   $html='<br><br><p>I hereby declare that the information given above and in the
enclosed documents is true to the best of my knowledge and belief and
nothing has been concealed therein. I am well aware of the fact that if the
information given by me is proved false/not true, I will have to face the
punishment as per the law. Also, all the benefits availed by me shall be
summarily withdrawn. </p><br>
     <p style="text-align:right-10px">Name and Signature of the Applicant</p>
   <br><br>';


$pdf->writeHTML($html);
$pdf->Image($row['signature'],130,260,60,'','','');



$pdf->Output('example_001.pdf', 'I');

}
}

?>