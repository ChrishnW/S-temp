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
    <div class="modal-content border-warning">
      <div class="modal-header bg-warning text-white">
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