<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Student Registration</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="css/studentRegistration.css">
</head>

<body>
    <?php include 'header.php'; ?>
    <!-- partial:index.partial.html -->
    <div class="studentRegistration-form">
        <form class="login-form">
            <h1>Register</h1>
            <div class="content">
                <div class="input-field">

                    <input type="Id" placeholder="Student Id" autocomplete="nope">
                    <br>
                    <input type="password" placeholder="Student Password" autocomplete="new-password">
                    <br>
                    <input type="contact" placeholder="Contact" autocomplete="nope">
                    <br>
                    <div class="action">
                        <button onclick="registerModal()">Clear</button>
                        <button>Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

</html>