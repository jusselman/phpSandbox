<?php

// for($i = 0; $i < 10; $i++) {
//   echo 'Number ' .$i;
//   echo '<br>';
// };

  // $i = 0;
  //
  // while($i < 10) {
  //   echo $i;
  //   echo '<br>';
  //   $i++;
  // }

  // $people = array('Brad', 'Jose', 'William');
  //
  // foreach($people as $person) {
  //   echo $person;
  //   echo '<br>';
  // }

  $people = array('Brad' => 'bad@gmail.com', 'Jose' => 'jose@gmail.com', 'William' => 'william@gmail.com');

  foreach($people as $person => $email) {
    echo $person. ': ' .$email;
    echo '<br>';
  }

?>
