<?php

$text = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Тестируем кнопку</title>
</head>
<body>
    <iframe src="https://yoomoney.ru/quickpay/button-widget?targets=%D0%9E%D0%BF%D0%BB%D0%B0%D1%82%D0%B0&default-sum=1000&button-text=12&yoomoney-payment-type=on&button-size=l&button-color=black&fio=on&mail=on&successURL=https%3A%2F%2Fviking-bo.ru%2F&quickpay=small&account=4100135241180&" width="227" height="48" frameborder="0" allowtransparency="true" scrolling="no"></iframe>
</body>
</html>';

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=urf-8' . "\r\n";

if (mail('dj-valeriya@yandex.ru', 'Тестируем кнопку', $text, $headers)) {
  echo 'Письмо принятно к отправке.';
} else {
  echo 'Чет не хочет отправлять';
}
