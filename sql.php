<?php
$host = "localhost";
$username = "deepak_guru";
$password = "guruguru";
$dbname = "kranti";
$conn = mysqli_connect($host, $username, $password, $dbname);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  die();
  }
  $sql = "ALTER TABLE `participants_` CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT;";
  mysqli_query($conn,$sql);




?>
