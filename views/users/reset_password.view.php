<?php
// session_start();
require "views/partials/head.php";
// no require form index 
// if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>
<div class="d-flex justify-content-center align-items-center vh-100 text-white">

	<form class="shadow w-450" action="/reset" method="post">

		<h2>Change Password</h2>

		<div class="mb-3">
			<label class="form-label">Old Password</label><br>
			<input 
			type="password" 
			class="form-control" 
			name="oldpassword" 
			placeholder="Enter your old password" 
			value="<?= (isset($_POST['oldpassword'])) ? $_POST['oldpassword'] : "" ?>">
			<span style="color:red;"><?= (isset($messageError['oldpassword'])) ? $messageError['oldpassword'] : " " ?></span>
		</div>

		<div class="mb-3">
			<label class="form-label">New Password</label>
			<input type="password" 
			class="form-control" 
			name="newpassword" 
			placeholder='Enter your new password'
			value="<?= (isset($_POST['newpassword'])) ? $_POST['newpassword'] : "" ?>">
			<span style="color:red;"><?= (isset($messageError['newpassword'])) ? $messageError['newpassword'] : " " ?></span>
		</div>
		<div class="mb-3">
			<label class="form-label">Confirm New Password</label>
			<input type="password" 
			name="confirmnewpassword" 
			class="form-control" 
			placeholder="Confirm New Password" 
			value="<?= (isset($_POST['confirmnewpassword'])) ? $_POST['confirmnewpassword'] : "" ?>">
			<span style="color:red;"><?= (isset($messageError['confirmnewpassword'])) ? $messageError['confirmnewpassword'] : " " ?></span>
		</div>
		<div class="d-flex justify-content-end">
			<button type="sumbit" class="btn btn-primary">Change</button>
			<button class="btn "><a href="/" class="text-white">Cancel</a></button>
		</div>
	</form>
</div>


<?php
?>
<script src="../../views/js/password.js"></script>