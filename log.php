<?php
session_start();
include("connect.php");
$e = $_POST['inputEmail1'] ;
$p = $_POST['inputPassword1'];
$sql = "SELECT * FROM member WHERE (email = '$e' AND password = '$p')";
  	$objQuery = mysqli_query($conn,$sql) or die ("Error Query [".$sql."]");
		$result = $conn->query($sql);
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()) {
				 if($e==$row["email"]&&$p==$row["password"]){
			        echo "<script type='text/javascript'>alert('Login success.');</script>" ;
              $_SESSION['email'] = $e ;
              if($e=='admin' && $p=='1234')
              {
                echo "<meta http-equiv='refresh' content='0;url=indexadmin.php'>" ;
              }
              else
              {
                echo "<meta http-equiv='refresh' content='0;url=indexsuccess.php'>" ;
              }
				 }
			}
		}else{
			 echo "<script type='text/javascript'>alert('Login failed!!');</script>" ;
       echo "<meta http-equiv='refresh' content='0;url=index.php'>" ;
		}
