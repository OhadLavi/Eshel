<?php
// Set content type and charset
header('Content-Type: text/html; charset=UTF-8');

// Get form data
$name = $_POST['FirstName'] ?? '';
$email = $_POST['Email'] ?? '';
$phone = $_POST['PhoneNumber'] ?? '';
$message = $_POST['Comments'] ?? '';

// Validate required fields
if (empty($name) || empty($phone)) {
    die('Required fields are missing');
}

// Email configuration
$to = 'sales@pisgat-makosh.co.il';
$subject = 'התקבלה פניה מעמוד צור קשר - pisgat-makosh.co.il';
$from = 'donotreply@pisgat-makosh.co.il';

// Create email body
$mailBody = "<div style='font-family:arial;font-size:12px;color:#333;direction:rtl;text-align:right'>";
$mailBody .= "<div style='font-weight:bold;padding-bottom:10px;'>שם</div>";
$mailBody .= "<div style='padding-bottom:10px;'>" . htmlspecialchars($name) . "</div>";
$mailBody .= "<div style='font-weight:bold;padding-bottom:10px;'>אימייל</div>";
$mailBody .= "<div style='padding-bottom:10px;'>" . htmlspecialchars($email) . "</div>";
$mailBody .= "<div style='font-weight:bold;padding-bottom:10px;'>טלפון</div>";
$mailBody .= "<div style='padding-bottom:10px;'>" . htmlspecialchars($phone) . "</div>";
$mailBody .= "<div style='font-weight:bold;padding-bottom:10px;'>הודעה</div>";
$mailBody .= "<div style='padding-bottom:10px;'>" . htmlspecialchars($message) . "</div>";
$mailBody .= "</div>";

// Email headers
$headers = array(
    'From' => $from,
    'Reply-To' => $email,
    'X-Mailer' => 'PHP/' . phpversion(),
    'Content-Type' => 'text/html; charset=UTF-8'
);

// Send email
$mailSent = mail($to, $subject, $mailBody, $headers);

if ($mailSent) {
    // Redirect to success page
    header('Location: contact-return.php');
    exit;
} else {
    // Handle error
    echo 'Error sending email. Please try again.';
}
?>
