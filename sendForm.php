<?php

require 'phpmailer/PHPMailer.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$place = $_POST['place'];

$message = "Заявка с сайта:\n<br>
Имя:{$name},\n<br>
Почта:{$email},\n<br>
Город:{$city},\n<br>
Телефон:{$phone},\n<br>
Наименование учреждения:{$place},\n<br>
";

// Создаем письмо
$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->setFrom('kolobanga-site', 'Заявка'); 
$mail->addAddress('avsform@kolobanga.ru');  
$mail->Subject = 'Заявка с сайта';                       
// html текст письма
$mail->msgHTML($message);
// Отправляем
if ($mail->send()) {
  echo 'Письмо отправлено!';
} else {
  echo 'Ошибка: ' . $mail->ErrorInfo;
} 

?>
