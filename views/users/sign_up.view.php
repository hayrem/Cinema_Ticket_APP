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
		           value="<?= (isset($_POST['username']))?$_POST['username']:"" ?>">
			<span style="color:red;"><?= (isset($messageError['username']))?$messageError['username']:"" ?></span>
		  </div>

		  <div class="mb-3">
		    <label class="form-label">Email</label>
		    <input type="email" 
		           class="form-control"
		           name="email"
		           value="<?= (isset($_POST['email']))?$_POST['email']:"" ?>">
			<span style="color:red;"><?= (isset($messageError['email']))?$messageError['email']:"" ?></span>
		  </div>
		  <div class="mb-3">
		    <label class="form-label">Password</label>
		    <input type="password" 
		           class="form-control"
		           name="password"
				   value="<?= (isset($_POST['password']))?$_POST['password']:"" ?>">
			<span style="color:red;"><?= (isset($messageError['password']))?$messageError['password']:"" ?></span>
		  </div>

		  <div class="mb-3">
		    <label class="form-label">Comfirm Password</label>
		    <input type="password" 
		           class="form-control"
		           name="comfirm-password"
				   value="<?= (isset($_POST['comfirm-password']))?$_POST['comfirm-password']:"" ?>">
			<span style="color:red;"><?= (isset($messageError['comfirm-password']))?$messageError['comfirm-password']:"" ?></span>
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
