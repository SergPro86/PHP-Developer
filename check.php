<?php
    //print_r($_POST);
    $email = $_POST['email'];
    $message = $_POST['message'];

    $error = '';
    if (trim($email) == '' )
        $error = 'Ввведите ваш Email';
    elseif (trim($message) == '')
        $error = 'Введите ваше сообщение';
    elseif (strlen($message) < 10)
        $error = 'Сообщение должно быть больше 10-ти символов';

    if ($error != '') {
      echo $error;
      exit;
    }

      $subject = "=?utf-8?B?".base64_encode("Системное сообщение")."?=";
      $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";
    mail('generationp86@gmail.com', $subject, $message, $headers);

    header("Location: /about.php");
 ?>
