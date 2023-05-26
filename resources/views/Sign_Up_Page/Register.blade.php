<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register Page</title>
  <link rel="stylesheet" href="front/css/bootstrap.css">
  <link rel="stylesheet" href="css/LoginRegister.css">
  <link rel="icon" href="Image/Image/minimarket.png">
</head>

<body class="d-flex flex-column  vh-100" style="background-color: #E5E5E5;">

  <div class="container-fluid d-flex flex-column justify-content-center align-items-center mb-4 vh-100">
    <h1 class="text-center" style="font-size: 50px"">Register</h1>
    <p class=" text-center mt-4" style="font-size: 18px;">Please Fill Out This Form to Start Creating an Account</p>

      <form action="/registerAdmin" method="POST" class="w-25 mt-2 needs-validation" novalidate>
        @csrf
        <div class="mb-4 d-flex flex-row">
          <img id="Full_Name" src="Image/Vector/User.svg" class="mb-3" alt="User Icon" style="width: 15px; margin-right: 10px;">
          <div class="d-flex flex-column w-100">
            <input type="text" class="form rounded " name="username" id="Fullname_Register" placeholder="Fullname" required>
            <p id="Fullname_Register" class="pt-2 ps-1" style="color: red;"></p>
          </div>
        </div>

        <div class="mb-4 d-flex">
          <img id="Email_2" src="Image/Vector/Email.svg" class="mb-3" alt="User Icon" style="width: 15px; margin-right: 10px;">
          <div class="d-flex flex-column w-100">
            <input type="email" class="form rounded" name="email" id="Email_Register" placeholder="Email Address" required>
            <p id="Email_Register" class="pt-2 ps-1" style="color: red;"></p>
          </div>
        </div>

        <div class="mb-4 d-flex">
          <img id="Phone" src="Image/Vector/Mobile.svg" class="mb-3" alt="User Icon" style="width: 15px; margin-right: 10px;">
          <div class="d-flex flex-column w-100">
            <input type="text" class="form rounded" name="NoTelp" id="PhoneNumber_Register" placeholder="Phone Number"
              required>
              <p id="Phone_Register" class="pt-2 ps-1" style="color: red;"></p>
          </div>
        </div>

        <div class="mb-4 d-flex">
          <img id="Password" src="Image/Vector/Lock.svg" class="mb-3" alt="User Icon" style="width: 15px; margin-right: 10px;">
          <div class="d-flex flex-column w-100">
            <input type="password" class="form rounded" name="Password" id="password_Register" placeholder="Create Password"
              required>
              <p id="Password_Register" class="pt-2 ps-1" style="color: red;"></p>
          </div>
        </div>
        <a href="/login"><label class="form-check-label mb-4">Already Have An Account</label></a>
        <button id="Register-button" type="submit" class="btn btn-primary w-100 fw-semibold ">
          Register
          </button>
      </form>
  </div>
  <div id="Login-Footer" class="container-fluid ms-0 mt-auto p-0 w-100 ">
    <img id="footer-image" src="Image/Vector/Vector.svg">
  </div>
  <script src="front/js/bootstrap.bundle.js"></script>
  <script defer src="js/Register_Validation.js""></script>
</body>

</html>
