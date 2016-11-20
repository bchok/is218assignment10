<?php

class MyFormValidation{

  public function sanitizeName($name){
    $_POST['name'] = $name;
    if (isset($_POST['name'])){
      echo filter_var($_POST['name'], FILTER_SANITIZE_STRING);
      echo '<br><br>';
    }
  }

  public function sanAndValEmail($email){
    $_POST['email'] = $email;
    if (isset($_POST['email'])){
      $email2 = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
      if (filter_var($email2, FILTER_VALIDATE_EMAIL)){
        echo "$email is a valid email address. <br><br>";
      }else{
        echo "email is not a valid email address. <br><br>";
      }
    }
  }
}

echo 'Was not sure how to pass the post values through my class functions on submission of the form<br>';
echo 'Therefore I just passed what the values would be into the functions to prove that the validation at least works<br><br>';

$myVal = new MyFormValidation();

echo 'This sanitizes my string with my name Brian that has html break tags before and after<br>';
$myVal->sanitizeName("<br> Brian <br>");
echo '<br> this santizes and validates my email that has break statements surrounding it<br>';
$myVal->sanAndValEmail("<br> bjc@njit.edu <br>");
echo '<br> This tries to validate an invalid email address of just random lettters<br>';
$myVal->sanAndValEmail("lkjdsflkajsd");


?>
