<?php
  require 'connectdb.php' ;
  $email = $_POST['input_email'];
  $password = $_POST['inputPassword1'];
  $mname = $_POST['inputFname1'];
  $mnameL = $_POST['inputLnam'];
  $address = $_POST['address'];
  $name = $mname." ".$mnameL ;
  echo $name;
  $query = "INSERT INTO member (email,password,mname,address) VALUE ('$email','$password','$name','$address')" ;
  $result = mysqli_query($dbcon,$query);

  if($result){
    echo "<script type='text/javascript'>alert('Register success.');</script>" ;
    echo "<meta http-equiv='refresh' content='0;url=index.php'>" ;
  }
  else {
    echo "เกิดข้อผิดพลาด". mysqli_error($dbcon);
  }

  mysqli_close($dbcon);
