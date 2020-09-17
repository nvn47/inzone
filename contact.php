

<?php 
if(isset($_POST['submit']))
{
$name = $_POST['name'];
$email = $_POST['email'];
$phone=$_POST['phone'];

$message = $_POST['txt'];

		


//$submit = $_POST['submit'];

$subject="ENSIGNSURVEILLANCE ";
$to='info@killantspestcontrol.com'; 

	
	$body=
	"<table width='65%' border='0' style='font-family:tahoma;' align='center' cellpadding='5' cellspacing='2' border='1' bordercolor='#000000'>
		<tr>
		  <td colspan='2' bgcolor='#F2AC0E'><font style='color:#000000; font-weight:bold; font-family:tahoma;' >ENSIGNSURVEILLANCE </font></td>
  </tr>
		
		<tr>
			<td width='50%' align='right' bgcolor='#FFF5D6'>Name</td>
			<td  bgcolor='#FFF5D6'>$name</td>
		</tr>
		<tr>
			<td align='right' bgcolor='#FFF5D6'>Email</td>
			<td bgcolor='#FFF5D6'>$email</td>
		</tr>
		<tr>
			<td align='right' bgcolor='#FFF5D6'>Mobile</td>
			<td bgcolor='#FFF5D6'>$phone</td>
		</tr>
		
		
		<tr>
			<td align='right' bgcolor='#FFF5D6'>Comments</td>
			<td bgcolor='#FFF5D6'>$message</td>
		</tr>
		
		</table>";
	
    /* echo $body ;
	 exit;*/
	

   //********mail headers and subject to client******	
	/*$headers ="From: $email \n";
	$headers .="\r\nContent-type: text/html";*/
	
	  $headers ="From: $email \n";
   $headers .= "MIME-Version: 1.0\r\n";
   $headers .= "Content-type: text/html;charset=iso-8859-1\r\n";
   $headers .= "X-Priority: 1\r\n";
   $headers .= "X-MSMail-Priority: High\r\n";
   $headers .= "X-Mailer: Just My Server\r\n";
   
   
 if(mail($to,$subject,$body,$headers)){ 
 //echo "<script>alert('Message Submitted successfully');</script>"; 
 echo "<script>alert('Message Submitted successfully'); window.location = 'contact.html';</script>"; 	
	
 }
 else{
 echo "<script>alert('Something Wrong..!'); window.location = 'contact-mail.php';</script>"; 
}
}
?>		