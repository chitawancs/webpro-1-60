<?php
  require 'connectdb.php' ;
  $pname = $_POST['pname'];
  $info = $_POST['info'];
  $price = $_POST['price'];
  $pphoto = $_POST['pphoto'];
  $query = "INSERT INTO product (pname,info,price,pphoto) VALUE ('$pname','$info','$price','$pphoto')" ;
  $result = mysqli_query($dbcon,$query);

  if($result){
        echo "<script type='text/javascript'>alert('Add Product success.');</script>" ;
        echo "<meta http-equiv='refresh' content='0;url=addproduct.php'>" ;
  }
  else {
    echo "เกิดข้อผิดพลาด". mysqli_error($dbcon);
  }

  mysqli_close($dbcon);
