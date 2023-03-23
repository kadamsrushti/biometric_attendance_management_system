<!DOCTYPE html>
<html>

<head>
	<title>Manage Users</title>
	<link rel="stylesheet" type="text/css" href="css/manageusers.css">
	<script src="https://code.jquery.com/jquery-3.6.4.js"
		integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
	</script>
	<script>
		$(window).on("load resize ", function () {
			var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
			$('.tbl-header').css({ 'padding-right': scrollWidth });
		}).resize();
	</script>
	
	<script src="js/manage_users.js"></script>
	<script>
		
		$(document).ready(function () {
			$.ajax({
				url: "manage_users_up.php"
			}).done(function (data) {
				$('#manage_users').html(data);
			});
		});
	</script>
</head>

<body>
	<?php include 'header.php'; ?>
	<main>
		<h1 class="slideInDown animated">Add a new User or update his information <br> or remove him</h1>
		<div class="form-style-5 slideInDown animated">
			<!-- <div class="alert">
				<label id="alert" style="display:none"></label>
			</div> -->
			<form action="process.php" method="POST" id="RegisterForm">
				<fieldset>
					<legend><span class="number">1</span> User Fingerprint ID:</legend>
					<label>Enter Fingerprint ID between 1 & 127:</label>
					<input type="number" name="fingerid" id="fingerid" placeholder="User Fingerprint ID...">
					<button type="button" name="fingerid_add" class="fingerid_add">Add Fingerprint ID</button>
				</fieldset>
				<fieldset>
					<legend><span class="number">2</span> User Info</legend>
					<input type="text" name="name" id="name" placeholder="User Name..." required>
					<input type="text" name="serialNumber" id="number" placeholder="Serial Number..." required>
					<input type="email" name="email" id="email" placeholder="User Email..." required>
				</fieldset>
				<fieldset>
					<legend><span class="number">3</span> Additional Info</legend>
					<label>
						<!-- Time In:
						<input type="time" name="timein" id="timein"> -->
						<input type="radio" name="gender" class="gender" value="Female">Female
						<input type="radio" name="gender" class="gender" value="Male" checked="checked">Male
					</label>
				</fieldset>

				<!-- <input type="submit" value="Add New User" />
				<input type="submit">
				<button type="button" name="user_add" class="user_add" onclick="addUser()">Add User</button> -->
				
			
				<button type="submit" placeholder="Add User" name="user_add" class="user_add">Add User</button>


				<button type="button" class="user_upd" onclick="updateUser()">Update User</button>
				<button type="button" name="user_rmo" class="user_rmo" onclick="removeUser()">Remove User</button>
			</form>
		</div>

		<div class="section">
			<!--User table-->
			<div class="tbl-header slideInRight animated">
				<table cellpadding="0" cellspacing="0" border="0">
					<thead>
						<tr>
							<th>S.No</th>
							<th>Finger .ID</th>
							<th>Name</th>
							<th>Gender</th>
							<!-- <th>Date</th> -->
							<!-- <th>Time in</th> -->
						</tr>
					</thead>
				</table>
			</div>
			<div class="tbl-content slideInRight animated">
				<table cellpadding="0" cellspacing="0" style="border:0;">
					<div id="manage_users"></div>
			</div>
		</div>

	</main>
	<script>


function updateUser(){
	let name=$('#name').val()
	let email=$('#email').val()
	let serialNumber=$('#number').val()
	
if(name.length<=0){
	alert("Name cannot be empty");
	return;
}
if(serialNumber.length<=0){
	alert("SerialNumber cannot be empty");
	return;
}
if(email.length<=0){
	alert("Email cannot be empty");
	return;
}


	let form=$('#RegisterForm').serialize();
	$.ajax({
		url:"manageUpdateUser.php",
			type:"POST",
			data:form,
			success:function(result){
				if(result==200){
					alert("Updated Succefully");
					window.location.replace('ManageUsers.php')
				}else if(result==404){
					alert("No Fingerprint found");					
				}else if(result==404){
					alert("Internal Server Error");					
				}
			},
	});
}

function removeUser(){
// 	alert('Remove button clicked')


let fingerId=$("#fingerid").val()
if(fingerId.length<=0){
	alert('Finger Id Cannot be empty')
	return;
}
let form=$('#RegisterForm').serialize();
	$.ajax({
		url:"manageDeleteUsers.php",
			type:"POST",
			data:form,
			success:function(result){
				if(result==200){
					alert("Deleted Succefully");
					window.location.replace('ManageUsers.php')
				}else if(result==404){
					alert("No Fingerprint found");					
				}else if(result==404){
					alert("Internal Server Error");					
				}
			},
	});
}


		</script>
</body>

</html>