<!DOCTYPE html>
<html>
  <?php include 'header.php'; ?>
  <head>
    <meta charset="UTF-8">
    <title>Admin Registration</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="css/adminRegistration.css">
  </head>
  
<body>
  <!-- partial:index.partial.html -->
  <div class="adminRegistration-form">
    <form class="login-form">
      <h1>Admin Register</h1>
      <div class="content">
        <div class="input-field">
		<div>
		<input type="Id" placeholder="Admin Id"  name="Id" autocomplete="nope" value="" >
		</div>
		<div>
		<input type="password" name="password" placeholder="Admin Password" autocomplete="new-password" value="">
		<!-- </div> autocomplete="new-password"
    <button type="clear" placeholder="Clear" name="clear_button" class="clear_button">Clear</button>
		<button type="submit" placeholder="Submit" name="submit_button" class="submitButton">Submit</button>
        </div> -->
      </div> 
      <div class="action">
        <button onclick="registerModal()">Clear</button>
        
        <button type="submit" name="submit">Submit</button>
      </div>
    </form>

    
	
	
      </div>
</body>

<?php include 'adminRegistration_conf.php';?>
<?php


if (isset($_POST['submit'])) {
submit();


}
?>
</html>