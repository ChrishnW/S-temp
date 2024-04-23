<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <?php include('include/link.php');
        include('include/login.php'); ?>
</head>

<body class="bg-gradient-primary">
  <div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                  </div>
                  <label style="color:red;"><?php echo $error; ?></label>
                  <form action="" class="user" data-toggle="validator" method="POST">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="username" name="username" autocomplete="off" placeholder="Enter User ID..." required autofocus />
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password" required />
                      <small class="form-text text-danger d-none" id="password-caps-warning">Warning: Caps lock enabled</small>
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck" />
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <button type="submit" name="submit" value="submit" class="btn btn-primary btn-user btn-block"> Login</button>
                  </form>
                  <hr />
                  <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="register.html">Create an Account!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Scripts here -->
  <?php include('include/script.php'); ?>
  <script>
    const passwordInput = document.getElementById('password');
    const capsWarning = document.getElementById('password-caps-warning');

    passwordInput.addEventListener('keyup', (event) => {
      if (event.getModifierState('CapsLock')) {
        capsWarning.classList.remove('d-none'); // Show the warning
      }
      else {
        capsWarning.classList.add('d-none'); // Hide the warning
      }
    });
  </script>
  <!-- Scripts end -->

</body>

</html>