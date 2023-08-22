<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="frontend/assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="frontend/assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="frontend/assets/modules/bootstrap-social/bootstrap-social.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="frontend/assets/css/style.css">
  <link rel="stylesheet" href="frontend/assets/css/components.css">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="frontend/assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Login</h4></div>

              <div class="card-body">
               <form method="POST" action="{{route('login')}}" class="needs-validation" novalidate="">
                @csrf
                <div class="form-group d-flex justify-content-between align-content-center">
                    <label class="m-2" for="email">Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your email
                    </div>
                  </div>

                  <div class="form-group d-block">

                    <div class="form-group d-flex justify-content-between align-content-center">
                      <label class="m-2"  for="password" class="control-label">Password</label>
                      <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                      <div class="invalid-feedback">
                      please fill in your password
                      </div>
                    </div>
                  </div>

                  <div class="d-flex justify-content-between m-3">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                      <label class="custom-control-label" for="remember-me">Remember Me</label>
                    </div>
                    <div class="float-right">
                        <a href="{{route('password.request')}}" class="text-small">
                          Forgot Password?
                        </a>
                      </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
                <div class="mt-5 text-muted text-center">
              Don't have an account? <a href="{{route('register')}}">Create One</a>
            </div>
              </div>
            </div>
            <div class="simple-footer">
              Copyright &copy; Stisla 2018
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="frontend/assets/modules/jquery.min.js"></script>
  <script src="frontend/assets/modules/popper.js"></script>
  <script src="frontend/assets/modules/tooltip.js"></script>
  <script src="frontend/assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="frontend/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="frontend/assets/modules/moment.min.js"></script>
  <script src="frontend/assets/js/stisla.js"></script>

  <!-- JS Libraies -->

  <!-- Page Specific JS File -->

  <!-- Template JS File -->
  <script src="frontend/assets/js/scripts.js"></script>
  <script src="frontend/assets/js/custom.js"></script>
</body>
</html>frontend/
