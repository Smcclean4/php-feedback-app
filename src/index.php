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

var_dump($has_kids);

// define use for constants that will never change.
define("HOST", "money");
echo HOST;

// to check whats inside of an array use print_r()
$numbers = [1, 33, 25, 203];
$fruits = array('apple', 'orange', 'kiwi');

print_r($numbers);
print_r($fruits);

// Associative Array .. kinda like an object in JavaScript
$colors = [
  1 => 'red',
  3 => 'blue',
  6 => 'green'
];

$hex = [
  'red' => '#f00',
  'blue' => '0f0',
  'green' => '#00f'
];

$person = [
  [
    'full_name' => 'Sid McClean',
    'email' => 'mccleansid@email.com',
    'association' => 'money maker'
  ],
  [
    'full_name' => 'John Doe',
    'email' => 'johndoe@email.com',
    'association' => 'secret agent'
  ]
];

echo $person[1]['association'];
var_dump(json_encode($person)); // theres also json_decode
echo $colors[6];
echo $hex['red'];
