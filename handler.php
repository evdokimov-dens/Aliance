<?php
$user_name = htmlspecialchars($_POST["username"]);
$user_phone = htmlspecialchars($_POST["userphone"]);

$token = "8217896563:AAHskE9Oeb3IY6hD1wsFF76Vgpxjmks8RnY";
$chat_id = "-4829809047";

$formData = array (
  "Клиент: " => $user_name,
  "Телефон: " => $user_phone
);

foreach($formData as $key => $value) {
  $text .= $key . "<b>" . urlencode($value) . "</b>" . "%0A";
}

fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text={$text}&parse_mode=html", "r");

echo "Привет, " . $user_name . "<br>";
echo "Ваш телефон: " . $user_phone;