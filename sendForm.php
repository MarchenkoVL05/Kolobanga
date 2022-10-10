<?php

require 'phpmailer/PHPMailer.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$place = $_POST['place'];

$message = "Заявка с сайта:\n<br>
\n<br>
Имя:{$name},\n<br>
Почта:{$email},\n<br>
Город:{$city},\n<br>
Телефон:{$phone},\n<br>
Наименование учреждения:{$place}\n<br>
";

// Создаем письмо
$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->CharSet = "utf-8";
$mail->setFrom('kolobanga-site', 'Заявка'); 
$mail->addAddress('avsform@kolobanga.ru');
$mail->Subject = 'Заявка с сайта';                       
// html текст письма
$mail->msgHTML($message);
// Отправляем
if ($mail->send()) {
  echo "<script>alert('Заявка отправлена')</script>";
} else {
  echo "<script>alert('Что-то пошло не так :(')</script>";
} 

?>
