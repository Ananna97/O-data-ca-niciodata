<?php 
$toemail = 'thelazyunicorn97@gmail.com';
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
if(mail($toemail, 'Subject', $message, 'From: ' . $email)) {
	echo 'Mail-ul a fost trimis cu succes.';
} else {
	echo 'A aparut o eroare in trimiterea email-ului.';
}
?>