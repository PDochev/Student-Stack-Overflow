<?php
require '../adlogin/check.php';
if (isset($_POST['message'])) {
    $title = 'Contact Us';
    $message = $_POST['message'];

    ini_set("SMTP", "smtp.gre.ac.uk");
    ini_set("sendmail_from", "pd6212j@gre.ac.uk");
    mail("pd6212j@gre.ac.uk", "mail test", $message);
    $output = "Thank you for your message we will get back to you shortly";
} else {
    $title = "Contact us";
    ob_start();
    include 'templates/mailform.html.php';
    $output = ob_get_clean();
}

include 'templates/layout.html.php';
