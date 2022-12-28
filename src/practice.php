<div>
    <h3>
      <?php

echo "get that money man ";
echo "just a little bit...";

?>
    </h3>
  </div>

  <?php

$name = 'Sid';
$age = 12;
$has_kids = true;
$cash_on_hand = 345.75;

// var_dump() will show the value of boolean and arithmetic solutions
echo "${name} is ${age} and he has kids so in PHP it shows up as ${has_kids} ...speaking of PHP he has ${cash_on_hand} in his wallet right now!! ";

var_dump($has_kids);
?>
  </br>
  </br>
  <?php
// define use for constants that will never change.
define("HOST", "money");
echo HOST;

// to check whats inside of an array use print_r()
$numbers = [1, 33, 25, 203];
$fruits = array('apple', 'orange', 'kiwi');

print_r($numbers);
print_r($fruits);
?>
  <br>
  </br>
  <?php
// Associative Array .. kinda like an object in JavaScript
$colors = [
    1 => 'red',
    3 => 'blue',
    6 => 'green',
];

$hex = [
    'red' => '#f00',
    'blue' => '0f0',
    'green' => '#00f',
];

$person = [
    [
        'full_name' => 'Sid McClean',
        'email' => 'mccleansid@email.com',
        'association' => 'money maker',
    ],
    [
        'full_name' => 'John Doe',
        'email' => 'johndoe@email.com',
        'association' => 'secret agent',
    ],
];

echo $person[1]['association'];
var_dump(json_encode($person)); // theres also json_decode
echo $colors[6];
echo $hex['red'];
?>
<br>
</br>
<?php
// to access objects in php you can also use -> to access methods and properties of an object. The object that is using -> has to be an object that is an instance of another object.:: is to access a class's static and const items and -> is to access an instance of a class .. also known as an object
class money
{
  // property is variables .. public static etc. 
    public $has_money = "always";
    public $amount = '3456';
    const access = 'denied';
    static $location = 'Los Angeles';
// methods are function .. public static etc
    static function where_is_the_money() {
      return 'Cash Flow';
    }

    public function has_money() {
      return $this->has_money;
    }

    public function amount() {
      return $this->amount;
    }
}
$checking_money = new money();
echo $checking_money->has_money();
echo $checking_money->amount();
echo money::access;
// methods can only be called like this when static keyword is used
echo money::where_is_the_money();
echo money::$location;
?>
  </br>
  </br>
  <?php
$age = 21;

if ($age >= 18) {
    echo 'you are old enough to vote!';
} else {
    echo 'sorry you arent old enough to vote :/';
}

$t = date("F j H");
echo $t;

// empty() function can check if something is empty .. i.e database etc.
$posts = ['First Post'];

if (!empty($posts)) {
    echo $posts[0];
} else {
    echo 'No Posts!';
}

echo !empty($posts) ? $posts[0] : 'No Posts';
?>
  </br>
  </br>
  <?php
$favColor = 'green';

switch ($favColor) {
    case 'grey':
        echo 'your favorite color is grey';
        break;
    case 'black':
        echo 'your favorite color is black';
        break;
    case 'white':
        echo 'your favorite color is white';
        break;
    default:
        echo 'your favorite color isnt white, black or grey';
}

// get length of array with count() function
$posts = ['First Post', 'Second Post', 'Third Post'];

for ($x = 0; $x < count($posts); $x++) {
    echo $posts[$x];
}

foreach ($posts as $index => $post) {
    echo "${index} - ${post} <br>";
}
?>
  </br>
  </br>
  <?php
// use a global variable inside of a function using global keyword
// you're able to set default arguments for function using the equal sign $n1 = 4, $n2 = 5

$subtract = function ($n1, $n2) {
    return $n1 - $n2;
};

$multiply = fn($n1, $n2) => $n1 * $n2;

echo $subtract(15, 5);
echo $multiply(20, 20);
?>
  </br>
  </br>
  <?php
$fruits = ['apple', 'orange', 'pear', 'kiwi'];

echo count($fruits);
// search array
var_dump(in_array('apple', $fruits));
// add to array
$fruits[] = 'grape';
array_push($fruits, 'blueberry');
array_unshift($fruits, 'mango');
// remove from array
array_pop($fruits);
array_shift($fruits);
unset($fruits[1]);
// split into 2 chunks
$chunked_array = array_chunk($fruits, 2);
print_r($chunked_array);
print_r($fruits);
?>
  <br>
  </br>
  <?php
// global keywork makes variables accessible inside and outside of scopes.
global $money;
?>
