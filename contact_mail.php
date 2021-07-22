<?php
$toEmail = "test@gmail.com"; // Test mail
$mailHeaders = "From: " . $_POST["userName_page"] . "<". $_POST["userEmail_page"] .">\r\n";
if(mail($toEmail, $_POST["phone_page"], $_POST["content_page"], $mailHeaders)) {
print "<p class='success'>Contact Mail Sent.</p>";
} else {
print "<p class='Error'>Problem in Sending Mail.</p>";
}
?>
