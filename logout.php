<?php
session_start();
unset($_SESSION['email']);
echo "<script type='text/javascript'>alert('Logout success.');</script>" ;
echo "<meta http-equiv='refresh' content='0;url=index.php'>";
