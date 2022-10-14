<?php

echo "get that money man ";
echo "just a little bit...";

?>

<?php

$name = 'Sid';
$age = 12;
$has_kids = true;
$cash_on_hand = 345.75;
// var_dump() will show the value of boolean and arithmetic solutions

echo "${name} is ${age} and he has kids so in PHP it shows up as ${has_kids} ...speaking of PHP he has ${cash_on_hand} in his wallet right now!! ";
// define use for constants that will never change.
define("HOST", "money");
echo HOST;
