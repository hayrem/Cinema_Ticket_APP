<?php
    require "views/partials/head.php";
    // require "utils/url.php" ;
    require "views/partials/nav.php";
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
		           name="fname"
		           value="">
			<span style="color:red;"><?= $name_err ?></span>
		  </div>

		  <div class="mb-3">
		    <label class="form-label">Email</label>
		    <input type="email" 
		           class="form-control"
		           name="email"
		           value="">
			<span style="color:red;"><?= $email_err ?></span>
		  </div>
		  <div class="mb-3">
		    <label class="form-label">Password</label>
		    <input type="password" 
		           class="form-control"
		           name="pass">
			<span style="color:red;"><?= $password_err ?></span>
		  </div>

		  <div class="mb-3">
		    <label class="form-label">Comfirm Password</label>
		    <input type="password" 
		           class="form-control"
		           name="comfirm-pass">
			<span style="color:red;"><?= $comfirm_password_err ?></span>
		  </div>
            <div class="d-flex">
				<label class="form-label">Have an Account</label>
                <a href="sign_in.view.php" class="link-secondary ms-2 text-primary">Login</a>
            </div>
		  <div class="contain-btn">
              <button type="submit" class="btn btn-danger">Sign Up</button>
          </div>
		</form>
    </div>

<?php
    require "views/partials/footer.php";
?>
