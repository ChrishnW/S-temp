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

<!-- Account Edit Modal-->
<div class="modal fade" id="accounteditModal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
    <div class="modal-content border-primary">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="exampleModalLabel">Account Edit</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="className" name="form" id="form" action="exe.php" method="POST">
          <div class="row">
            <div class="col-md-4 .ml-auto"> 
              <div data-toggle="validator" class="form-group required">
                <label>User Name:</label><span class="pull-right help-block with-errors" style="margin: 0px; font-size: 11px;"></span>
                <input type="text" placeholder="Enter User Name" class="form-control" name="accounts_username" id="accounts_username" pattern="[a-zA-Z0-9-/ ]+" data-error="Invalid input!" value="<?php echo $username; ?>">
                <input type="hidden" class="form-control" name="id" id="id" required>
              </div>
            </div>
            <div class="col-md-4 .ml-auto"> 
              <div data-toggle="validator" class="form-group required">
                <label>First Name:</label><span class="pull-right help-block with-errors" style="margin: 0px; font-size: 11px;"></span>
                <input type="text" placeholder="Enter First Name" class="form-control" name="accounts_fname" id="accounts_fname" pattern="[a-zA-Z0-9-/ ]+" data-error="Invalid input!">
              </div>
            </div>
            <div class="col-md-4 .ml-auto"> 
              <div data-toggle="validator" class="form-group required">
                <label>Last Name:</label><span class="pull-right help-block with-errors" style="margin: 0px; font-size: 11px;"></span>
                <input type="text" placeholder="Enter Last Name" class="form-control" name="accounts_lname" id="accounts_lname" pattern="[a-zA-Z0-9-/ ]+" data-error="Invalid input!">
              </div>
            </div>
            <div class="col-md-4 .ml-auto"> 
              <div data-toggle="validator" class="form-group required">
                <label>Card Number:</label><span class="pull-right help-block with-errors" style="margin: 0px; font-size: 11px;"></span>
                <input type="text" placeholder="Enter Card Number" class="form-control" name="accounts_card" id="accounts_card" value="<?php echo $card; ?>">
              </div>
            </div>
            <div class="col-md-4 .ml-auto"> 
              <div data-toggle="validator" class="form-group required">
                <label>E-mail:</label><span class="pull-right help-block with-errors" style="margin: 0px; font-size: 11px;"></span>
                <input type="text" placeholder="Enter E-mail" class="form-control" name="accounts_email" id="accounts_email" value="<?php echo $email; ?>">
              </div>
            </div>
            <div class="col-md-4 .ml-auto"> 
              <div data-toggle="validator" class="form-group required">
                <label>Access:</label><span class="pull-right help-block with-errors" style="margin: 0px; font-size: 11px;"></span>
                <select name="accounts_access" id="accounts_access" class="form-control selectpicker show-menu-arrow" data-live-search="true">
                  <?php
                    $con->next_result();
                    $sql = mysqli_query($con, "SELECT * FROM access");
                    if (mysqli_num_rows($sql) > 0) {
                      while ($row = mysqli_fetch_assoc($sql)) {
                        $access_id1 = $row['id'];
                        $access1 = $row['access'];
                        echo "<option value='" . $access_id1 . "'>" . strtoupper($access1) . "</option>";
                      }
                    } 
                  ?>
                </select>
              </div>
            </div>
            <div class="col-md-4 .ml-auto"> 
              <div data-toggle="validator" class="form-group required">
                <label>Department:</label><span class="pull-right help-block with-errors" style="margin: 0px; font-size: 11px;"></span>
                <select name="accounts_access" id="accounts_access" class="form-control selectpicker show-menu-arrow" data-live-search="true">
                  <?php
                    $con->next_result();
                    $sql = mysqli_query($con, "SELECT * FROM department WHERE status=1 ORDER BY dept_name ASC");
                    if (mysqli_num_rows($sql) > 0) {
                      while ($row = mysqli_fetch_assoc($sql)) {
                        $id = $row['id'];
                        $dept_id = $row['dept_id'];
                        $dept_name = strtolower($row['dept_name']);
                        echo "<option value='" . $id . "'>" . ucwords($dept_name) . ' | ' . $dept_id ."</option>";
                      }
                    } 
                  ?>
                </select>
              </div>
            </div>
            <div class="col-md-4 .ml-auto"> 
              <div data-toggle="validator" class="form-group required">
                <label>Section:</label><span class="pull-right help-block with-errors" style="margin: 0px; font-size: 11px;"></span>
                <select name="accounts_access" id="accounts_access" class="form-control selectpicker show-menu-arrow" data-live-search="true">
                  <?php
                    $con->next_result();
                    $sql = mysqli_query($con, "SELECT * FROM section WHERE status=1 ORDER BY dept_id");
                    if (mysqli_num_rows($sql) > 0) {
                      while ($row = mysqli_fetch_assoc($sql)) {
                        $id = $row['id'];
                        $sec_id = $row['sec_id'];
                        $sec_name = strtolower($row['sec_name']);
                        echo "<option value='" . $id . "'>" . ucwords($sec_name) . "</option>";
                      }
                    } 
                  ?>
                </select>
              </div>
            </div>
            <div class="col-md-4 .ml-auto"> 
              <div class="form-group required">
                <label>Status:</label><span class="pull-right help-block with-errors" style="margin: 0px; font-size: 11px;"></span>
                <select name="accounts_status" id="accounts_status" class="form-control selectpicker show-menu-arrow" data-live-search="true">
                    <option selected value='0'>INACTIVE</option>
                    <option value='1'>ACTIVE</option>";
                </select>
              </div>
            </div>
            <div class="col-md-4 .ml-auto"> 
              <div class="form-group">
                <a href="#" class='button btn btn-primary'><i class="fas fa-undo"></i> Reset Password</a>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="../../include/logout.php">Logout</a>
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