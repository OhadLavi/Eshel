<?php

if(isset($_POST['Email'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED

    $email_to = "sales@u-new.co.il";

    $email_subject = "פניה ממבקר באתר U-new";

    function died($error) {

        // your error code can go here

        echo "We are very sorry, but there were error(s) found with the form you submitted.";

        echo "These errors appear below.<br /><br />";

        echo $error."<br /><br />";

        echo "Please go back and fix these errors.<br /><br />";

        die();

    }

    // validation expected data exists

    if(!isset($_POST['FirstName']) ||
    !isset($_POST['PhoneNumber']) ||
    !isset($_POST['Email']) ||
    !isset($_POST['Comments'])) {

        died('We are sorry, but there appears to be a problem with the form you submitted.');
    }

    $first_name = $_POST['FirstName'];
    $telephone = $_POST['PhoneNumber'];
    $email_from = $_POST['Email'];
    $comments = $_POST['Comments'];

    $error_message = "";

    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

  if(!preg_match($email_exp,$email_from)) {

    $error_message .= 'אנא הכנס אימייל תקין.<br />';

  }

  if(strlen($comments) < 2) {

    $error_message .= 'אנא הכנס תגובה מתאימה.<br />';

  }

  if(strlen($error_message) > 0) {

    died($error_message);

  }

    $email_message = "\n";



    function clean_string($string) {

      $bad = array("content-type","bcc:","to:","cc:","href");

      return str_replace($bad,"",$string);

    }


    $email_message .= "שם מלא: ".clean_string($first_name)."\n";

    $email_message .= "Email: ".clean_string($email_from)."\n";

    $email_message .= "טלפון: ".clean_string($telephone)."\n";

    $email_message .= "הערות: ".clean_string($comments)."\n";

// create email headers

$headers = 'From: '.$email_from."\r\n".

'Reply-To: '.$email_from."\r\n" .

'X-Mailer: PHP/' . phpversion();

if (@mail($email_to, $email_subject, $email_message, $headers))
{
  ?> <script type="text/javascript" language="JavaScript"> alert("המייל נשלח בהצלחה! ניצור עמך קשר בקרוב!"); </script> <?php
} 
else 
{
  ?> <script type="text/javascript" language="JavaScript"> alert("התרחשה שגיאה, המייל לא נשלח"); </script> <?php
}

}
else
{
echo "not set";
}
?>
<script type="text/javascript" language="JavaScript">
    setTimeout(function () {
                      location.href = 'contact.php'; 
               }, 10);
</script>