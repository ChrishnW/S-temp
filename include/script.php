<!-- Bootstrap core JavaScript-->
<script src="../../assets/vendor/jquery/jquery.min.js"></script>
<script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="../../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="../../assets/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="../../assets/vendor/chart.js/Chart.min.js"></script>
<script src="../../assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="../../assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="../../assets/js/demo/datatables-demo.js"></script>
<script src="../../assets/js/demo/chart-area-demo.js"></script>
<script src="../../assets/js/demo/chart-pie-demo.js"></script>
<script src="../../assets/js/demo/chart-bar-demo.js"></script>

<script>
  // Account Edit
  function account_edit(element) {
    var user_id = element.value;
    var username_temp = element.getAttribute("data-username");
    var fname_temp = element.getAttribute("data-fname");
    var lname_temp = element.getAttribute("data-lname");
    var email_temp = element.getAttribute("data-email");
    var empnum_temp = element.getAttribute("data-emp_num");
    var card_temp = element.getAttribute("data-card");
    var access_temp = element.getAttribute("data-access");
    $(document).ready(function() {
      $('#accounteditModal').modal('show');
      document.getElementById('accounts_username').value = username_temp;
      document.getElementById('accounts_fname').value = fname_temp;
      document.getElementById('accounts_lname').value = lname_temp;
      document.getElementById('accounts_email').value = email_temp;
      document.getElementById('accounts_number').value = empnum_temp;
      document.getElementById('accounts_card').value = card_temp;
      document.getElementById('accounts_access').innerHTML = access_temp;
    })
  }
</script>

<!-- Modals -->
<?php include('modal.php') ?>