<?php
  include('connect.php');
  include('auth.php');

  $user_id = $_POST['user_id'];
  // if(isset($_POST['user_id'])){
  //   $con->next_result();
  //   $user_id = $_POST['user_id'];
  //   $query = mysqli_query($con,"SELECT accounts.fname, accounts.lname, accounts.file_name , accounts.username, accounts.email, section.sec_name, access.access, accounts.status, accounts.id, department.dept_name, accounts.card, accounts.employee_id FROM accounts JOIN section ON accounts.sec_id=section.sec_id JOIN access on accounts.access=access.id JOIN department ON department.dept_id=section.dept_id WHERE accounts.id='$user_id'");       
  //   $row= mysqli_fetch_assoc($query);
  //   $employee_username  = $row['username'];
  //   $employee_id        = $row['employee_id'];
  //   $employee_card      = $row['card'];
  //   $employee_fname     = $row['fname'];
  //   $employee_lname     = $row['lname'];
  //   $employee_email     = $row['email'];
  //   $account_access     = strtoupper($row['access']);
  //   $account_section    = $row['sec_name'];
  //   $account_department = $row['dept_name'];
  //   $account_status     = $row['status'];
  // }
?>