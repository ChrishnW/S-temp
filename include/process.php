<?php
  include('auth.php');
  include('connect.php');
  
  if(isset($_SESSION['SESS_MEMBER_ID'])){
    $con->next_result();
    $query = mysqli_query($con, "SELECT * FROM accounts INNER JOIN  section ON section.sec_id=accounts.sec_id WHERE username='$username' ");
    if (mysqli_num_rows($query)>0) { 
      while ($row = $query->fetch_assoc()) {
        $fname = $row['fname'];
        $employee_name_temp = strtolower($row['fname'].' '.$row['lname']);
        $employee_name = ucwords($employee_name_temp);
        $card = $row['card'];
        $email = $row['email'];
        $sec = $row['sec_name'];
        if (empty($row["file_name"])) {
          $imageURL = '../../assets/img/user-profiles/nologo.png';
        }
        else {
          $imageURL = '../../../assets/img/user-profiles/'.$row["file_name"];
        }
      }
    }
  }

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
    else {
      echo '<script>alert("Password not match!")</script>';
      echo '<script>history.back()</script>';
    }
  }

  if(isset($_GET['dep_id'])){
    $con->next_result();
    $dep_id = $_GET['dep_id'];
    $query  = mysqli_query($con, "SELECT * FROM department WHERE id='$dep_id'");       
    $row    = mysqli_fetch_assoc($query);
    $department_id     = $row['id'];
    $department_code   = $row['dept_id'];
    $department_name   = $row['dept_name'];
    $department_status = $row['status'];
  }

  if(isset($_POST['department_id'])){
    $con->next_result();
    $dep_id      = $_POST['department_id'];
    $dep_code    = $_POST['department_code'];
    $dep_name    = $_POST['department_name'];
    $dep_status  = $_POST['department_status'];
    $check = mysqli_query($con,"SELECT * FROM department WHERE dept_id='$dep_code' AND dept_name='$dep_name' AND status='$dep_status'");
    $check_row = mysqli_num_rows($check);
    if ($check_row > 0){
      echo '<script>alert("Failed")</script>';
      echo '<script>history.back()</script>';
    }
    else {
      $update = "UPDATE department SET dept_id='$dep_code', dept_name=UPPER('$dep_name'), status='$dep_status' WHERE id='$dep_id'";
      $result = mysqli_query($con, $update);
      echo '<script>alert("Success")</script>';
      echo '<script>history.back()</script>';
    }
  }

  if(isset($_GET['sc_id'])){
    $con->next_result();
    $sc_id = $_GET['sc_id'];
    $query  = mysqli_query($con, "SELECT * FROM section WHERE id='$sc_id'");       
    $row    = mysqli_fetch_assoc($query);
    $sec_id     = $row['id'];
    $sec_code   = $row['sec_id'];
    $sec_name   = $row['sec_name'];
    $sec_dept   = $row['dept_id'];
    $sec_status = $row['status'];
  }

  if(isset($_POST['section_id'])){
    $con->next_result();
    $sec_id      = $_POST['section_id'];
    $sec_code    = $_POST['section_code'];
    $sec_name    = $_POST['section_name'];
    $sec_dept    = $_POST['section_dept'];
    $sec_status  = $_POST['section_status'];
    $check = mysqli_query($con,"SELECT * FROM section WHERE sec_id='$sec_code' AND sec_name='$sec_name' AND dept_id='$sec_dept' AND status='$sec_status'");
    $check_row = mysqli_num_rows($check);
    if ($check_row > 0){
      echo '<script>alert("Failed")</script>';
      echo '<script>history.back()</script>';
    }
    else {
      $update = "UPDATE section SET sec_id=UPPER('$sec_code'), sec_name=UPPER('$sec_name'), dept_id='$sec_dept', status='$sec_status' WHERE id='$sec_id'";
      $result = mysqli_query($con, $update);
      echo '<script>alert("Success")</script>';
      echo '<script>history.back()</script>';
    }
  }

  include('modal.php');
?>