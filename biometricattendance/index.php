<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'>
  <link rel="stylesheet" href="css/login.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
  <?php include 'header.php'; ?>
  <!-- partial:index.partial.html -->
  <div class="login-form">
    <form>
      <h1>Login</h1>
      <div class="content">
        <div class="input-field">
          <input type="email" placeholder="Email" autocomplete="nope">
          <input type="password" placeholder="Password" autocomplete="new-password">
          <select name="choice" id="dropDown">
            <option value="first">Select</option>
            <option value="second">Admin LogIn</option>
            <option value="third">Student LogIn</option>
          </select><br>
        </div>
      </div>



    </form>

      <div class="action">
        <button onclick="registerModal()">Register</button>
        <button>Sign in</button>
      </div>
  </div>
  <!-- partial -->
  <script>
    function registerModal() {
      Swal.fire({
  title: 'Register as',
  showDenyButton: true,
  confirmButtonText: 'Admin',
  denyButtonText: `Student`,
}).then((result) => {
  /* Read more about isConfirmed, isDenied below */
  if (result.isConfirmed) {
    
    window.location.replace('adminRegistration.php');
  } else if (result.isDenied) {
    window.location.replace('studentRegistration.php');
  }
})


    }
  </script>
</body>

</html>
