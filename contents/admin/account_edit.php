<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <?php include('../../include/link.php');
  $page = 'User Management \ Account Edit' ?>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include('../../include/sidebar_admin.php'); ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php include('../../include/header_admin.php'); ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

        <div class="card shadow mb-4 border-primary">
            <div class="card-header py-3 bg-primary">
                <h6 class="m-0 font-weight-bold text-white">Account Edit</h6>
            </div>
            <div class="card-body bg-gradient-light">
              <form class="needs-validation" action="../../include/process.php" method="POST" novalidate>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>User Name:</label>
                      <input type="text" placeholder="Account Series Number" class="form-control" name="accounts_index" id="accounts_index" value="<?php echo $accounts_number ?>" required>
                      <input type="text" placeholder="Enter User Name" class="form-control" name="accounts_username" id="accounts_username" value="<?php echo $employee_username ?>" disabled required>
                    </div>
                  </div>
                  <div class="col-md-4"> 
                    <div class="form-group">
                      <label>First Name:</label>
                      <input type="text" placeholder="Enter First Name" class="form-control" name="accounts_fname" id="accounts_fname"  value="<?php echo $employee_fname ?>" required>
                    </div>
                  </div>
                  <div class="col-md-4"> 
                    <div class="form-group">
                      <label>Last Name:</label>
                      <input type="text" placeholder="Enter Last Name" class="form-control" name="accounts_lname" id="accounts_lname"  value="<?php echo $employee_lname ?>" required>
                    </div>
                  </div>
                  <div class="col-md-4"> 
                    <div class="form-group">
                      <label>Employee ID:</label>
                      <input type="text" placeholder="Enter Employee ID" class="form-control" name="accounts_number" id="accounts_number"  value="<?php echo $employee_id ?>" required>
                    </div>
                  </div>
                  <div class="col-md-4"> 
                    <div class="form-group">
                      <label>ID Number:</label>
                      <input type="text" placeholder="Enter ID Number" class="form-control" name="accounts_card" id="accounts_card"  value="<?php echo $employee_card ?>" required>
                    </div>
                  </div>
                  <div class="col-md-4"> 
                    <div class="form-group">
                      <label>Access:</label>
                      <select class="form-control custom-select" name="accounts_access" id="accounts_access">
                        <?php
                          $con->next_result();
                          $sql = mysqli_query($con, "SELECT * FROM access");
                          if (mysqli_num_rows($sql) > 0) {
                            while ($row = mysqli_fetch_assoc($sql)) {
                              if (strtoupper($row['access']) == $account_access) { $label = '[Current]'; $select = 'selected'; } else { $label = ''; $select = '';}?>
                              <option value='<?php echo $row['id'] ?>' <?php echo $select ?>><?php echo strtoupper($row['access']).' '.$label ?></option>
                            <?php }
                          } ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4"> 
                    <div class="form-group">
                      <label>Status:</label>
                      <select class="form-control custom-select" name="accounts_status" id="accounts_status">
                        <?php if ($account_status == 1) {?>
                        <option value='1' selected>ACTIVE [Current]</option>
                        <option value='0'>DEACTIVE</option>
                        <?php } elseif ($account_status == 0) { ?>
                        <option value='1'>ACTIVE</option>
                        <option value='0' selected>DEACTIVE [Current]</option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <?php 
                    if ($account_access == 'HEAD'){?>
                    <div class="col-md-4"> 
                      <div class="form-group">
                        <label>Department:</label>
                        <select class="form-control custom-select" id="accounts_dept" name="accounts_dept">
                          <?php
                            $con->next_result();
                            $sql = mysqli_query($con,"SELECT * FROM department WHERE status='1'"); 
                            if(mysqli_num_rows($sql)>0){
                              while($row=mysqli_fetch_assoc($sql)){
                                if ($row['dept_name'] == $account_department) { $label = '[Current]'; $select = 'selected'; } else { $label = ''; $select = '';}?>
                                <option value='<?php echo $row['dept_name'] ?>' <?php echo $select ?>><?php echo $row['dept_name'].' '.$label ?></option>
                              <?php }
                            } ?>
                        </select>
                      </div>
                    </div>
                  <?php } else {?>
                    <div class="col-md-5"> 
                      <div class="form-group">
                        <label>Department:</label>
                        <select class="form-control custom-select" id="accounts_dept" name="accounts_dept" disabled>
                          <?php
                            $con->next_result();
                            $sql = mysqli_query($con,"SELECT * FROM department WHERE status='1'"); 
                            if(mysqli_num_rows($sql)>0){
                              while($row=mysqli_fetch_assoc($sql)){
                                if ($row['dept_name'] == $account_department) { $label = '[Current]'; $select = 'selected'; } else { $label = ''; $select = '';}?>
                                <option value='<?php echo $row['dept_name'] ?>' <?php echo $select ?>><?php echo $row['dept_name'].' '.$label ?></option>
                              <?php }
                            } ?>
                        </select>
                      </div>
                    </div>
                  <?php }?>
                  <?php 
                    if ($account_access != 'HEAD'){?>
                    <div class="col-md-3"> 
                      <div class="form-group">
                        <label>Section:</label>
                        <select name="accounts_sec" id="accounts_sec" class="form-control custom-select">
                          <?php
                            $con->next_result();
                            $sql = mysqli_query($con,"SELECT * FROM section WHERE status='1'"); 
                            if(mysqli_num_rows($sql)>0){
                              while($row=mysqli_fetch_assoc($sql)){
                                if ($row['sec_name'] == $account_section) { $label = '[Current]'; $select = 'selected'; } else { $label = ''; $select = '';}?>
                                <option value='<?php echo $row['sec_id'] ?>' <?php echo $select ?>><?php echo $row['sec_name'].' '.$label ?></option>
                              <?php }
                            } ?>
                        </select>
                      </div>
                    </div>
                  <?php }
                  ?>
                  <div class="col-md-6"> 
                    <div class="form-group">
                      <label>E-mail:</label>
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text">@</div>
                        </div>
                        <input type="text" placeholder="Enter E-mail" class="form-control" name="accounts_email" id="accounts_email"  value="<?php echo $employee_email ?>" required>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <label>Account:</label>
                    <span class='button btn btn-danger form-control shadow' data-toggle="modal" data-target="#accountResetPassModal"><i class="fas fa-undo fa-fw"></i> Reset Password</a>
                  </div>
                  <div class="col-md-3">
                    <label>Account:</label>
                    <span class='button btn btn-warning form-control shadow' data-toggle="modal" data-target="#accountChangePassModal"><i class="fas fa-unlock-alt fa-fw"></i> Change Password</span>
                  </div>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" onclick="history.back()"><i class="fas fa-times-circle fa-fw"></i> Cancel</button>
                  <button id="submit" type="submit" class="btn btn-success"><i class="fas fa-check fa-fw"></i> Submit</button>
                </div>
              </form>
            </div>
        </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Scripts here -->
  <?php include('../../include/script.php'); ?>
  <!-- Scripts end -->

</body>

</html>