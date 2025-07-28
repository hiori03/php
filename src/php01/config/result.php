<?php
$text = htmlspecialchars($_POST["text"], ENT_QUOTES);
$radio = htmlspecialchars($_POST["radio"], ENT_QUOTES);
$number = htmlspecialchars($_POST["number"], ENT_QUOTES);

print "私の名前は、" . $text . "<br>";
print "ご希望の商品は、" . $radio . "<br>";
print "注文数は、" . $number;