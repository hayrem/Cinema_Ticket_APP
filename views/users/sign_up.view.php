<?php
    require "views/partials/head.php";
    // require "views/partials/nav.php";
?>

<div class="login d-flex justify-content-center align-items-center vh-100 text-white">
	<!-- <div class="img  w-25">
		<img src="../../assets/login.svg" width="100%" alt="">
	</div> -->
    	<form class="shadow w-450" 
    	      action="/sign_up" 
    	      method="post">

    		<h4 class="display-4  fs-1">Create Account</h4><br>
		<!-- <label for=""></label> -->
		  <div class="mb-3">
		    <label class="form-label">Username</label>
		    <input type="text" 
		           class="form-control"
		           name="username"
		           value="">
			<span style="color:red;"><?= (isset($name_err['username']))?$name_err['username']:"" ?></span>
		  </div>

		  <div class="mb-3">
		    <label class="form-label">Email</label>
		    <input type="email" 
		           class="form-control"
		           name="email"
		           value="">
			<span style="color:red;"><?= (isset($email_err['email']))?$email_err['email']:"" ?></span>
		  </div>
		  <div class="mb-3">
		    <label class="form-label">Password</label>
		    <input type="password" 
		           class="form-control"
		           name="password">
			<span style="color:red;"><?= (isset($password_err['password']))?$password_err['password']:"" ?></span>
		  </div>

		  <div class="mb-3">
		    <label class="form-label">Comfirm Password</label>
		    <input type="password" 
		           class="form-control"
		           name="comfirm-password">
			<span style="color:red;"><?= (isset($comfirm_password_err['comfirm-password']))?$comfirm_password_err['comfirm-password']:"" ?></span>
		  </div>
            <div class="d-flex">
				<label class="form-label">Have an Account</label>
                <a href="/sign_in" class="link-secondary ms-2 text-primary">Login</a>
            </div>
		  <div class="contain-btn">
              <button type="submit" class="btn btn-danger">Sign Up</button>
          </div>
		</form>
    </div>

<?php
    // require "views/partials/footer.php";
?>
