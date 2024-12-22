<?php
$profile = htmlspecialchars($_POST["onamae"], ENT_QUOTES);
$menu = htmlspecialchars($_POST["set"], ENT_QUOTES);
$value = htmlspecialchars($_POST["order"], ENT_QUOTES);

echo "私の名前は、" . $profile . "<br>";
echo "ご希望の商品は、" . $menu . "<br>";
echo "注文数は、" . $value;