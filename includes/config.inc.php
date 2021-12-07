<?php
  session_start();
  $servername = "127.0.0.1";
  $dBUsername = "lab1";
  $dBPassword = "password";
  $dBName = "hostel-management";
 // session_start();
 //"192.168.56.1","lab1","password"
  $conn=mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

  if (!$conn) {
    die("Connection Failed: ".mysqli_connect_error());
  }
?>