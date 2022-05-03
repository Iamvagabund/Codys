<?php
	$sendto = "hello@mycodys.com"; 
  $name = $_POST['name']; //
  $lastname = $_POST['lastname']; //
  $phone = $_POST['phone']; //
  $email = $_POST['email']; //
  $questions = $_POST['questions'];
  $inquiry =$_POST['inquiry']; // сохраняем данные из выподающего списка
 
// Формирование заголовка письма
  $subject = "Новое сообщение";
  $headers = "From: " . strip_tags($email) . "\r\n";
  $headers .= "Reply-To: ". strip_tags($email) . "\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
 
// Формирование тела письма
  $msg = "<html><body style='font-family:Arial,sans-serif;'>";
  $msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Cообщение с сайта</h2>\r\n";
  $msg .= "<p><strong>Имя:</strong> ".$name."</p>\r\n";
  $msg .= "<p><strong>Фамилия:</strong> ".$lastname."</p>\r\n";
  $msg .= "<p><strong>Почта:</strong> ".$email."</p>\r\n";
  $msg .= "<p><strong>Телефон:</strong> ".$phone."</p>\r\n";
  $msg .= "<p>".$inquiry."</p>\r\n";
  $msg .= "<p>".$questions."</p>\r\n";
  $msg .= "</body></html>";
// mail($sendto, $subject, $subject, $msg, $headers);
// отправка сообщения
// if(@mail($sendto, $subject, $msg, $headers)) {
 // echo "<center><img src='images/spasibo.png'></center>"; // Здесь может быть любой html код. Вместо картинки можно задать div и в нем что угодно
//  } else {
//  echo "<center><img src='images/ne-tpravleno.png'></center>"; // Здесь может быть любой html код. Вместо картинки можно задать div и в нем что угодно
 // }
 if(mail($sendto, $subject, $msg, $headers)){
        echo "sent";
    }else{
        echo "failed";
    }
?>
