<?php
  
  $db = mysqli_connect('localhost','root','','login_form_basic');

  if($db == false){
    die("Error:".mysqli_connect_error($db));
  }

?>