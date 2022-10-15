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

  // use a global variable inside of a function using global keyword
  // you're able to set default arguments for function using the equal sign $n1 = 4, $n2 = 5

  ?>