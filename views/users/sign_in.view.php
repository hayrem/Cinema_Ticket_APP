<?php
require "views/partials/head.php";
?>


<div class="d-flex justify-content-center align-items-center vh-100 text-white">

	<form class="shadow w-450" action="/sign_in" method="post">

		<h4 class="display-4  fs-1">Sign in</h4><br>

		<div class="mb-3">
			<label class="form-label">Email</label>
			<input
			type="email" 
			class="form-control" 
			name="email"
			placeholder="Enter you email address" 
			value="<?= (isset($_POST['email']))?$_POST['email']:"" ?>">
			<span class="message-eroor" style="color:red;"><?= (isset($messageError['email']))?$messageError['email']:"<span>.</span>" ?></span>
		</div>

		<div class="sign mb-3">
			<label class="form-label">Password</label>
			<div class="input">
				<input type="password" 
				id="password"
				class="form-control" 
				name="password"
				value="<?= (isset($_POST['password']))?$_POST['password']:"" ?>">
				<i class="bi bi-eye-slash" id="togglePassword"></i>
			</div>
			<span class="message-eroor" style="color:red;"><?= (isset($messageError['password']))?$messageError['password']:"<span>.</span>"?></span>
		</div>
		<div class="form-check mb-4">
			<input class="form-check-input " type="checkbox" 
			value="remember" 
			id="remember" 
			name="remember">
			<label class="form-check-label" for="flexCheckChecked" >Remember me</label>
		</div>
		<div class="contain-btn mt-3 ">
			<button type="submit" class="btn btn-danger p-2">Sign in</button>
			<!-- <button type="submit" class="btn btn-danger mt-4 bg-primary " style="border: none;">
				<a href="/" class="link-secondary ms-2 text-primary text-white " style="text-decoration: none;">Cencel</a>
			</button> -->
		</div>
		<div class="d-flex mt-4">
			<label class="form-label">Don't have an account</label>
			<a href="/sign_up" class="link-secondary ms-2 text-primary">Sign Up</a>
		</div>
	</form>
</div>
<script src="../../views/js/password.js"></script>