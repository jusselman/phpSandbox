<?php

// $num = 5;
//
// if($num == 5) {
//   echo '5 passed';
// } elseif($num == 6) {
// }  else {
//     echo 'did not pass';
//
// }

// Nesting //
// $num = 7;

// if($num > 5) {
//   if($num <10 ) {
//     echo "$num passed";
//   }
// }


// Logical Operators //

 // AND - && //
 // OR - || //
 // XOR - ONE HAS TO BE TRUE //

// if($num > 4 XOR $num < 10) {
//   echo "$num passed";
// }
// NOTHING DISPLAYS ABOVE BECAUSE BOTH ARE TRUE //

#SWICH --

  $favColor = 'green';

  switch($favColor) {
    case 'red':
    echo 'Your favorite color is red';
    break;
    case 'blue':
    echo 'Your favorite color is blue';
    break;
    case 'green':
    echo 'Your favorite color is green';
    break;
    default:
    echo 'Your favorite color is something else';

  }

?>
