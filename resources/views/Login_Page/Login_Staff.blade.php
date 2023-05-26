<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Page</title>
  <link rel="stylesheet" href="front/css/bootstrap.css">
  <link rel="stylesheet" href="css/LoginRegister.css">
  <link rel="icon" href="Image/minimarket.png">
</head>

<body class="d-flex flex-column vh-100" style="background-color: #E5E5E5;">
  <div class="container-fluid d-flex flex-column justify-content-center align-items-center vh-100">
    <h1 class="text-center" style="font-size: 50px">Login As Staff</h1>
      <p class=" mt-4" style="font-size: 18px;">Please input username and password before login</p>


      <form action="Staff_Payment" method="get" class="w-25 mt-2 needs-validation" novalidate>
        @csrf
        <div class="mb-4 d-flex flex-row">
          <img id="user-icon" src="Image/Vector/User.svg" class="icon" alt="User Icon" style="width: 15px; margin-right: 10px;">
          <div class="d-flex flex-column w-100">
            <input type="text" class="form rounded  " id="Username_Login" placeholder="Username" required >
            <p id="Username_Valid" class="pt-2 ps-1" style="color: red;">
            </p>
          </div>
        </div>
        <!--Test Comment-->

        <div class="mb-4 d-flex">
          <img id="password-icon" src="Image/Vector/Lock.svg" class="icon" alt="User Icon" style="width: 15px; margin-right: 10px;">
          <div class="d-flex flex-column w-100">
            <input type="password" class="form rounded " id="Password_Login" placeholder="Password" required>
            <p id="Password_Valid" class=" pt-2 ps-1" style="color: red;">
            </p>

          </div>
        </div>
        <a href="/register"><label class="form-check-label mb-4">Dont have an account
            yet?</label></a>
        <button id="Login-button" type="submit" class="btn btn-primary w-100 fw-semibold">
            Login
        </button>
      </form>
  </div>
  <div id="Login-Footer" class="container-fluid ms-0 mt-auto p-0">
    <img id="footer-image" src="../Env/Vector/Vector.svg">
  </div>
  <script src="front/js/bootstrap.bundle.js"></script>
  <script defer src="js/Login_Validation.js"></script>
</body>

</html>
