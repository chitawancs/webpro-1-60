<?php
  require 'connectdb.php' ;
  $pname = $_POST['pname'];
  $info = $_POST['info'];
  $price = $_POST['price'];
  $pphoto = $_POST['pphoto'];
  $pid = $_POST['n'] ;

  if($pphoto == "")
  {
      $query = "UPDATE  product SET  pname= '$pname', info = '$info',price = '$price' where pid=$pid" ;
  }
  else {
      $query = "UPDATE  product SET  pname= '$pname', info = '$info',price = '$price',pphoto = '$pphoto' where pid=$pid" ;
  }
  $result = mysqli_query($dbcon,$query);

  if($result){
        echo "<script type='text/javascript'>alert('Edit Product success.');</script>" ;
        echo "<meta http-equiv='refresh' content='0;url=editproduct.php'>" ;
  }
  else {
    echo "เกิดข้อผิดพลาด". mysqli_error($dbcon);
  }
  mysqli_close($dbcon);
