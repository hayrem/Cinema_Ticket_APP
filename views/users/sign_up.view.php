<?php
    require "../partials/head.php";
    require "../../utils/url.php" ;
    require "../partials/nav.php";
?>

<div class="login d-flex justify-content-center align-items-center vh-100 text-white">
    	
    	<form class="shadow w-450" 
    	      action="php/signup.php" 
    	      method="post">

    		<h4 class="display-4  fs-1">Create Account</h4><br>
    		
        

		 
    		<!-- <div class="alert alert-success" role="alert">
			 
			</div> -->
		   
		  <div class="mb-3">
		    <label class="form-label">Username</label>
		    <input type="text" 
		           class="form-control"
		           name="fname"
		           value="">
		  </div>

		  <div class="mb-3">
		    <label class="form-label">Email</label>
		    <input type="email" 
		           class="form-control"
		           name="email"
		           value="">
		  </div>
		  <div class="mb-3">
		    <label class="form-label">Password</label>
		    <input type="password" 
		           class="form-control"
		           name="pass">
		  </div>

		  <div class="mb-3">
		    <label class="form-label">Comfirm Password</label>
		    <input type="password" 
		           class="form-control"
		           name="pass">
		  </div>
            <div class="d-flex">
                <p>Have an acoount</p>
                <a href="sign_in.view.php" class="link-secondary ms-2">Login</a>
            </div>
		  <div class="contain-btn">
              <button type="submit" class="btn btn-danger">Sign Up</button>
          </div>
		</form>
    </div>

<?php
    require "../partials/footer.php";
?>