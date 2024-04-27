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

<div class="modal fade" id="accounteditModal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
    <div class="modal-content border-primary">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Account Edit</h5>
        <a href="#" data-dismiss="modal"><i class="fas fa-times text-dark"></i></a>
      </div>
      <div class="modal-body bg-gradient-light">
        <form class="className" name="form" id="form" action="../../include/process.php" method="POST">
          <div class="row">
            <div class="col-md-4">
              <div class="form-group required">
                <label>User Name:</label>
                <input type="text" placeholder="Enter User Name" class="form-control" name="accounts_username" id="accounts_username" pattern="[a-zA-Z0-9-/ ]+" data-error="Invalid input!">
                <input type="hidden" class="form-control" name="id" id="id" required>
              </div>
            </div>
            <div class="col-md-4"> 
              <div class="form-group required">
                <label>First Name:</label>
                <input type="text" placeholder="Enter First Name" class="form-control" name="accounts_fname" id="accounts_fname" pattern="[a-zA-Z0-9-/ ]+" data-error="Invalid input!">
              </div>
            </div>
            <div class="col-md-4"> 
              <div class="form-group required">
                <label>Last Name:</label>
                <input type="text" placeholder="Enter Last Name" class="form-control" name="accounts_lname" id="accounts_lname" pattern="[a-zA-Z0-9-/ ]+" data-error="Invalid input!">
              </div>
            </div>
            <div class="col-md-4"> 
              <div class="form-group required">
                <label>Employee ID:</label>
                <input type="text" placeholder="Enter Employee ID" class="form-control" name="accounts_number" id="accounts_number">
              </div>
            </div>
            <div class="col-md-4"> 
              <div class="form-group required">
                <label>ID Number:</label>
                <input type="text" placeholder="Enter ID Number" class="form-control" name="accounts_card" id="accounts_card">
              </div>
            </div>
            <div class="col-md-4"> 
              <div class="form-group required">
                <label>Access:</label>
                <select name="accounts_access" id="accounts_access" class="form-control">
                  <option value='<?php echo $account_access?>' selected><i id='accounts_access'>[Selected]</i></option>
                  <?php
                    $con->next_result();
                    $sql = mysqli_query($con, "SELECT * FROM access");
                    if (mysqli_num_rows($sql) > 0) {
                      while ($row = mysqli_fetch_assoc($sql)) {
                        $access_select = strtoupper($row['access']);
                        echo "<option value='" . $access_select . "'>" . $access_select . "</option>";
                      }
                    } 
                  ?>
                </select>
              </div>
            </div>
            <div class="col-md-4"> 
              <div class="form-group required">
                <label>Status:</label>
                <select name="accounts_status" id="accounts_status" class="form-control">
                    <option selected value='0'>INACTIVE</option>
                    <option value='1'>ACTIVE</option>";
                </select>
              </div>
            </div>
            <div class="col-md-4"> 
              <div class="form-group required">
                <label>Department:</label>
                <select class="form-control">
                    <option value="" selected></option>
                </select>
              </div>
            </div>
            <div class="col-md-4"> 
              <div class="form-group required">
                <label>Section:</label>
                <select name="accounts_access" id="accounts_access" class="form-control">

                </select>
              </div>
            </div>
            <div class="col-md-6"> 
              <div class="form-group required">
                <label>E-mail:</label>
                <input type="text" placeholder="Enter E-mail" class="form-control" name="accounts_email" id="accounts_email">
              </div>
            </div>
            <div class="col-md-3">
              <label>Account:</label>
              <a href="#" class='button btn btn-danger form-control'><i class="fas fa-undo fa-fw"></i> Reset Password</a>
            </div>
            <div class="col-md-3">
              <label>Account:</label>
              <a href="#" class='button btn btn-warning form-control shadow' data-toggle="modal" data-target="#logoutModal"><i class="fas fa-unlock-alt fa-fw"></i> Change Password</a>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="../../include/logout.php">Submit</a>
          </div>
        </form>
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