<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login Page</title>
  <link rel="stylesheet" href="front/css/bootstrap.css" />
  <link rel="stylesheet" href="css/LoginRegister.css"/>
  <link rel="icon" href="Image/minimarket.png" />
</head>

<body class="d-flex flex-column vh-100" style="background-color: #e5e5e5">
  <div class="container-fluid d-flex flex-column justify-content-center align-items-center vh-100">
    <form action="/login" class="w-100 d-flex justify-content-center align-items-center">
      <button id="Login-button" type="submit" class="btn btn-primary w-50 fw-semibold">
        Login As Admin
      </button type="submit">
    </form>

    <form action="/loginStaff" class="w-100 d-flex justify-content-center align-items-center">
    <button id="Login-button" type="submit" class="btn btn-primary w-50 fw-semibold mt-5">
        Login As Staff
    </button>
    </form>
  </div>
  <div id="Login-Footer" class="container-fluid ms-0 mt-auto p-0">
    <img id="footer-image" src="Env/Vector/Vector.svg" />
  </div>
  <script src="Env/bootstrap/js/bootstrap.bundle.js"></script>
  <script defer src="Env/js/Login_Validation.js"></script>
</body>

</html>
