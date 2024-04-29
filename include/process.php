<?php
  include('connect.php');

  if(isset($_GET['account_id'])){
    $con->next_result();
    $user_id = $_GET['account_id'];
    $query  = mysqli_query($con, "SELECT accounts.fname, accounts.lname, accounts.file_name , accounts.username, accounts.email, section.sec_name, access.access, accounts.status, accounts.id, department.dept_name, accounts.card, accounts.employee_id, department.dept_id FROM accounts JOIN section ON accounts.sec_id=section.sec_id JOIN access on accounts.access=access.id JOIN department ON department.dept_id=section.dept_id WHERE accounts.id='$user_id'");       
    $row    = mysqli_fetch_assoc($query);
    $accounts_number    = $row['id'];
    $employee_username  = $row['username'];
    $employee_id        = $row['employee_id'];
    $employee_card      = $row['card'];
    $employee_fname     = $row['fname'];
    $employee_lname     = $row['lname'];
    $employee_email     = $row['email'];
    $account_access     = strtoupper($row['access']);
    $account_section    = $row['sec_name'];
    $account_department = $row['dept_name'];
    $account_status     = $row['status'];
    $account_dept_id    = $row['dept_id'];
  }

  if(isset($_POST['accounts_index'])){
    $con->next_result();
    $emp_index    = $_POST["accounts_index"];
    $emp_username = isset($_POST['accounts_username']);
    $emp_fname    = $_POST['accounts_fname'];
    $emp_lname    = $_POST['accounts_lname'];
    $emp_id       = $_POST['accounts_number'];
    $emp_card     = $_POST['accounts_card'];
    $emp_access   = $_POST['accounts_access'];
    $emp_dept     = isset($_POST['accounts_dept']);
    $emp_sec      = $_POST['accounts_sec'];
    $emp_status   = $_POST['accounts_status'];
    $emp_email    = $_POST['accounts_email'];

    $check = mysqli_query($con, "SELECT * FROM accounts WHERE id='$emp_index'");
    $check_row = mysqli_num_rows($check);
    if ($check_row>0){
      $query  = "UPDATE accounts SET status='$emp_status', employee_id=UPPER('$emp_id'), card='$emp_card', fname='$emp_fname', lname='$emp_lname', access='$emp_access', sec_id='$emp_sec' WHERE id='$emp_index'";
      $result = mysqli_query($con, $query);
      echo '<script>alert("Success")</script>';
      echo '<script>history.back()</script>';
    }
  }

  if(isset($_GET['reset_account'])){
    $con->next_result();
    $pass_index        = $_GET['reset_account'];
    $default_pass      = '12345';
    $hash_default_pass = password_hash($default_pass, PASSWORD_DEFAULT);
    $update = "UPDATE accounts SET password='$hash_default_pass' WHERE id='$pass_index'";
    $result = mysqli_query($con, $update);
    echo '<script>alert("Success")</script>';
    echo '<script>history.back()</script>';
  }

  if(isset($_POST['new_pass'])){
    $con->next_result();
    $cp_index = $_POST['cp_index'];
    $new_pass_temp = $_POST['new_pass'];
    $con_pass_temp = $_POST['confirm_pass'];
    $new_pass = password_hash($new_pass_temp, PASSWORD_DEFAULT);
    if ($new_pass_temp == $con_pass_temp){
      $update = "UPDATE accounts SET password='$new_pass' WHERE id='$cp_index'";
      $result = mysqli_query($con, $update);
      echo '<script>alert("Success")</script>';
      echo '<script>history.back()</script>';
    }
  }

?>