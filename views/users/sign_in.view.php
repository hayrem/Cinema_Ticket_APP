<?php
require "views/partials/head.php";
// require "views/partials/nav.php";

?>


<div class="d-flex justify-content-center align-items-center vh-100 text-white">

	<form class="shadow w-450" action="/sign_in" method="post">

		<h4 class="display-4  fs-1">LOGIN</h4><br>

		<div class="mb-3">
			<label class="form-label">Email</label>
			<input
			type="email" 
			class="form-control" 
			name="email" value="">
			<span style="color:red;"><?= (isset($messageError['email']))?$messageError['email']:"" ?></span>
		</div>

		<div class="mb-3">
			<label class="form-label">Password</label>
			<input type="password" 
			class="form-control" 
			name="password">
			<span style="color:red;"><?= (isset($messageError['password']))?$messageError['password']:"" ?></span>
		</div>
		<div class="form-check mb-4">
			<input class="form-check-input " type="checkbox" value="" id="remember-me" checked>
			<label class="form-check-label" for="flexCheckChecked">
				Remember me
			</label>
		</div>
		<div class="d-flex">
			<label class="form-label">Don't have an Account</label>
			<a href="/sign_up" class="link-secondary ms-2 text-primary">Sign Up</a>
		</div>
		<div class="contain-btn">
			<button type="submit" class="btn btn-danger">Login</button>
		</div>
	</form>
</div>

<?php
// require "views/partials/footer.php";
?>