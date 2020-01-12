<?php
$dbcon = mysqli_connect('localhost','root',"","meehkeystore");
if(mysqli_connect_errno()){
  echo "ไม่สามารถติดต่อฐานข้อมูลได้". mysqli_connect_error();
}
mysqli_query($dbcon, "SET NAMES UTF8");
mysqli_set_charset($dbcon,'urf8');
