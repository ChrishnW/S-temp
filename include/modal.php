<?php include('process.php'); ?>
<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="../../include/logout.php">Logout</a>
      </div>
    </div>
  </div>
</div>

<!-- Password Change Modal -->
<div class="modal fade" id="accountChangePassModal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-primary">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Change Account Password</h5>
        <a href="#" data-dismiss="modal"><i class="fas fa-times text-dark"></i></a>
      </div>
      <div class="modal-body bg-gradient-light">
        <form action="../../include/process.php" method="post">
          <div class="col-md-12">
            <div class="form-group required">
              <label>New Password:</label>
              <input type="hidden" class="form-control" name="cp_index" id="cp_index" value="<?php echo $accounts_number?>" required>
              <input type="text" class="form-control" name="new_pass" id="new_pass" placeholder="Enter New Password" required>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group required">
              <label>Confirm Password:</label>
              <input type="text" class="form-control" name="confirm_pass" id="confirm_pass" placeholder="Re-Enter New Password" required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="cancel" class="btn btn-secondary" data-dismiss="modal"> Cancel</button>
            <button type="submit" class="btn btn-primary"> Confirm</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Password Reset Modal-->
<div class="modal fade" id="accountResetPassModal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-danger">
      <div class="modal-header bg-danger">
        <h5 class="modal-title text-white" id="exampleModalLabel">Notice</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">You're about to reset this account password to default. <br> Do you wish to contiue?</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"> Cancel</button>
        <a href="../../include/process.php?reset_account=<?php echo $accounts_number?>" class="btn btn-primary"> Confirm</a>
      </div>
    </div>
  </div>
</div>

<!-- Account Password Not Match Modal-->
<div class="modal fade" id="errorPass_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Account Update</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">The old password did not match.</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"> Back</button>
      </div>
    </div>
  </div>
</div>

<!-- Success Query Modal-->
<div class="modal fade" id="success" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Success</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">UWU</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"> Back</button>
      </div>
    </div>
  </div>
</div>

<!-- Create Account Modal -->
<div class="modal fade" id="accountCreateModal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content border-primary">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Create New Account</h5>
        <a href="#" data-dismiss="modal"><i class="fas fa-times text-dark"></i></a>
      </div>
      <div class="modal-body bg-gradient-light">
        <form class="needs-validation" action="../../include/process.php" method="POST" novalidate>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label>User Name:</label>
                <input type="text" placeholder="Enter User Name" class="form-control" name="create_create_accounts_username" id="create_accounts_username" required>
              </div>
            </div>
            <div class="col-md-4"> 
              <div class="form-group">
                <label>First Name:</label>
                <input type="text" placeholder="Enter First Name" class="form-control" name="create_accounts_fname" id="create_accounts_fname" required>
              </div>
            </div>
            <div class="col-md-4"> 
              <div class="form-group">
                <label>Last Name:</label>
                <input type="text" placeholder="Enter Last Name" class="form-control" name="create_accounts_lname" id="create_accounts_lname" required>
              </div>
            </div>
            <div class="col-md-4"> 
              <div class="form-group">
                <label>Employee ID:</label>
                <input type="text" placeholder="Enter Employee ID" class="form-control" name="create_accounts_number" id="create_accounts_number" required>
              </div>
            </div>
            <div class="col-md-4"> 
              <div class="form-group">
                <label>ID Number:</label>
                <input type="text" placeholder="Enter ID Number" class="form-control" name="create_accounts_card" id="create_accounts_card" required>
              </div>
            </div>
            <div class="col-md-4"> 
              <div class="form-group">
                <label>Access:</label>
                <select class="form-control custom-select" name="create_accounts_access" id="create_accounts_access">
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
                <label>Department:</label>
                <select class="form-control custom-select" id="create_accounts_dept" name="create_accounts_dept">
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
            <div class="col-md-4"> 
              <div class="form-group">
                <label>Section:</label>
                <select name="create_accounts_sec" id="create_accounts_sec" class="form-control custom-select">
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
            <div class="col-md-4"> 
              <div class="form-group">
                <label>E-mail:</label>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text">@</div>
                  </div>
                  <input type="text" placeholder="Enter E-mail" class="form-control" name="create_accounts_email" id="create_accounts_email" required>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal"><i class="fas fa-times-circle fa-fw"></i> Cancel</button>
            <button id="submit" type="submit" class="btn btn-success"><i class="fas fa-check fa-fw"></i> Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>