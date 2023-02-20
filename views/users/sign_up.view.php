
<div>
	<button style=" position:absolute; left:50px; top:10px; padding:10px; width:100px; border-radius:10px;"><a href="/">Back</a></button>
</div>
<div class="login d-flex justify-content-center align-items-center vh-100 text-white">
	<!-- <div class="img  w-25">
		<img src="../../assets/login.svg" width="100%" alt="">
	</div> -->
	<form class="shadow w-450" action="/sign_up" method="post" enctype="multipart/form-data">

		<h4 class="display-4  fs-1">Create Account</h4><br>
		<!-- <label for=""></label> -->
		<div class="mb-2">
			<div class="row g-3">
				<div class="col">
					<label class="form-label">First name</label>
					<input type="text" 
					class="form-control" 
					placeholder="First name" 
					aria-label="First name"
					name="firstName"
					value="<?= (isset($_POST['firstName'])) ? $_POST['firstName'] : "" ?>">
					<span class="message-eroor" style="color:red;"><?= (isset($messageError['firstName'])) ? $messageError['firstName'] : "<span>.</span>" ?></span>
				</div>
				<div class="col">
					<label class="form-label">Last name</label>
					<input
					type="text" 
					class="form-control" 
					placeholder="Last name" 
					aria-label="Last name"
					name="lastName"
					value="<?= (isset($_POST['lastName'])) ? $_POST['lastName'] : "" ?>">
					<span class="message-eroor" style="color:red;"><?= (isset($messageError['lastName'])) ? $messageError['lastName'] : "<span>.</span>" ?></span>
				</div>
			</div>
		</div>

		<div class="mb-2">
			<label class="form-label">Email</label>
			<input type="email" 
			class="form-control"
			name="email"
			placeholder="Enter you email address" 
			value="<?= (isset($_POST['email'])) ? $_POST['email'] : "" ?>">
			<span class="message-eroor" style="color:red;"><?= (isset($messageError['email'])) ? $messageError['email'] : "<span>.</span>" ?></span>
		</div>
		<div class="mb-2">
			<label class="form-label">Password</label>
			<input type="password"
			class="form-control" 
			name="password" 
			value="<?= (isset($_POST['password'])) ? $_POST['password'] : "" ?>">
			<span class="message-eroor" style="color:red;"><?= (isset($messageError['password'])) ? $messageError['password'] : "<span>.</span>" ?></span>
		</div>
		<div class="sign mb-2">
			<label class="form-label">Comfirm Password</label>
			<div class="input">
				<input type="password"
				id="password" 
				class="form-control" 
				name="comfirm-password" 
				value="<?= (isset($_POST['comfirm-password'])) ? $_POST['comfirm-password'] : "" ?>">
				<i class="bi bi-eye-slash" id="togglePassword"></i>
			</div>
			<span class="message-eroor" style="color:red;"><?= (isset($messageError['comfirm-password'])) ? $messageError['comfirm-password'] : "<span>.</span>" ?></span>
		</div>
		<div>
			<label class="form-label">Upload profile</label>
			<input type="file" name="image" class="form-control form-control-lg">
		</div>
		<span class="message-eroor" style="color:red;"><?= (isset($messageError['profile'])) ? $messageError['profile'] : "<span>.</span>" ?></span>
		<div class="contain-btn mt-4">
			<button type="submit" name="submit" class="btn btn-danger ">Sign Up</button>
		</div>

		<div class="d-flex mt-3 ">
			<label class="form-label">Have an account</label>
			<a href="/sign_in" class="link-secondary ms-2 text-primary">Sign in</a>
		</div>
	</form>
</div>
<script src="../../views/js/password.js"></script>