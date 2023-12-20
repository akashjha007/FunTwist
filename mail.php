<!-- mail contact us -->
<?php
if(isset($_POST['contact-us'])){

$first_name=$_POST['first-name-2'];
$last_name=$_POST['last-name-2'];
$email=$_POST['email-2'];
$phone=$_POST['phone-2'];
$message=$_POST['message-2'];



    $to = "	akashjaikvik@gmail.com";
    $subject = "Mail From enquiry";
    $msg ="
    <html>
<body>
      <table  width='680' align='center' cellspacing='5' cellpadding='5' style='border:2px solid #000;'>
    <tr><td colspan='2' align='center' width='680' style='font-size:20px;border:1px solid #000;'>Enquiry Form</td></tr>
	
     <tr bgcolor='#f2f2f2'><td width='400' align='left'style='background-color:#111;border:2px #fff solid; margin:3px; color:#fff'>First Name</td><td width='280' align='left'style='background-color:#111; margin:3px;border:2px #fff solid; color:#fff'>$first_name</td></tr>
     <tr bgcolor='#f2f2f2'><td width='400' align='left'style='background-color:#111;border:2px #fff solid; margin:3px; color:#fff'>Last Name</td><td width='280' align='left'style='background-color:#111; margin:3px;border:2px #fff solid; color:#fff'>$last_name</td></tr>
     <tr bgcolor='#f2f2f2'><td width='400' align='left'style='background-color:#111;border:2px #fff solid; margin:3px; color:#fff'>Email</td><td width='280' align='left'style='background-color:#111; margin:3px;border:2px #fff solid; color:#fff'>$email</td></tr>
     <tr bgcolor='#f2f2f2'><td width='400' align='left'style='background-color:#111;border:2px #fff solid; margin:3px; color:#fff'>Mobile Number</td><td width='280' align='left'style='background-color:#111; margin:3px;border:2px #fff solid; color:#fff'>$phone</td></tr>
     <tr bgcolor='#f2f2f2'><td width='400' align='left'style='background-color:#111;border:2px #fff solid; margin:3px; color:#fff'>Message</td><td width='280' align='left'style='background-color:#111; margin:3px;border:2px #fff solid; color:#fff'>$message</td></tr>

  </table>
    </body>
    </html>"
    ;
    $headers = "From:$email \r\n";
    $headers  .= 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    if($email!=NULL){
        mail($to,$subject,$msg,$headers);
        echo "<script type=\"text/javascript\">alert('Mail Sent Successfull');</script>";

    }
    else{
        echo "<script type=\"text/javascript\">alert('Mail Not Sent Kindly Refill It');</script>";
    }

    }
    ?>
