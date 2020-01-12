<?php
  require 'connectdb.php' ;
  $mname = $_POST['mname'];
  $address = $_POST['address'];
  $visa  = $_POST['visa'];
  $mid = $_POST['m'] ;

  $query = "UPDATE  member SET  mname= '$mname', address = '$address',visa = '$visa' where mid = $mid" ;

  $result = mysqli_query($dbcon,$query);

  if($result){
        echo "<script type='text/javascript'>alert('Edit Profile success.');</script>" ;
        echo "<meta http-equiv='refresh' content='0;url=profile.php'>" ;
  }
  else {
    echo "เกิดข้อผิดพลาด". mysqli_error($dbcon);
  }
  mysqli_close($dbcon);
