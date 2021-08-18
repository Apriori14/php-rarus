<?php
$to =  'doc-14@yandex.ru';
$subj = "Форма обратной связи на PHP";
$message = 'Комментарий: '.$_POST['comment'].'<br>';
$message .= 'ФИО: '.$_POST['name'].'<br>';
$message .= 'Адрес: '.$_POST['addr'].'<br>';
$message .= 'E-mail: '.$_POST['email'].'<br>';
$message .= 'мобильный телефон: '.$_POST['tel'].'<br>';

mail($to, $subj, $message)
?>