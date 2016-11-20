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
    $_POST['email'] = $email
    if (isset($_POST['email'])){
      $email2 = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
      if (filter_var($email2, FILTER_VALIDATE_EMAIL)){
        echo "$email is a valid email address. <br><br>";
      }else{
        echo "email is not a valid email address. <br><br>";
      }
    }
  }



 ?>
