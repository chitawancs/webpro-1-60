<?php
  require 'connectdb.php' ;
  $pid = $_POST['n'] ;

  $query = "DELETE FROM product WHERE  pid='$pid' " ;

  $result = mysqli_query($dbcon,$query);

  if($result){
        echo "<script type='text/javascript'>alert('Delete Product success.');</script>" ;
        echo "<meta http-equiv='refresh' content='0;url=editproduct.php'>" ;
  }
  else {
    echo "เกิดข้อผิดพลาด". mysqli_error($dbcon);
  }
  mysqli_close($dbcon);
