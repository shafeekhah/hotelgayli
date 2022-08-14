<?php
 
 function sendMail($data){
 
	$name = $data['name'];
	$subject = $data['subject'];
	$email = $data['email'];
	$tel = $data['tel'];
	$message = $data['message'];
 
 
 
// multiple recipients
$to  = 'booking@hotellinaya.com'; // note the comma


// heading
$heading = 'Hotel Gayli Anuradhapura you have Inquiry';

$message2 = '
<p> <strong>Name: </strong><span style="color:red;">'.$name.'</span></p>
<p> <strong>Subject: </strong><span style="color:red;">'.$subject.'</span></p>
<p> <strong>Email Address: </strong><span style="color:red;">'.$email.'</span></p>
<p> <strong>Phone: </strong><span style="color:red;">'.$tel.'</span></p>
<p> <strong>Message: </strong><span style="color:red;">'.$message.'</span></p>
 

';

// To send HTML mail, the Content-type header must be set
$headers  = 'From: shafeekahamed27@gmail.com'."\r\n";
$headers .= 'Reply-To: no-reply@example.com' . "\r\n";
$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
/*
$headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
$headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";
*/

if(mail($to, $heading, $message2, $headers)){


 return true; 

	
}
 else return false;
 }
?>
