<?php
  $db_host		= 'localhost';
  $db_user		= 'gtms';
  $db_database	= 'gtms'; //db name
  $db_pass		= 'p@55w0rd$$$'; //db password

  $con = mysqli_connect($db_host,$db_user,$db_pass,$db_database) or die('<script>alert("Error 400 Bad Request!"); history.back();</script>');
?>