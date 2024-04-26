<?php
  include('connect.php');
  include('auth.php');
  
  $con->next_result();
  $query = mysqli_query($con,"SELECT * FROM accounts INNER JOIN access ON access.id=accounts.access WHERE username = '$username'");
  $result = mysqli_fetch_assoc($query);
  header("location: ".$result['link']."");
?>