<?php
require "../partials/head.php";
require "../../utils/url.php";
require "../partials/nav.php";
?>


<div class="d-flex justify-content-center align-items-center vh-100 text-white">
    	
    	<form class="shadow w-450" 
    	      action="php/login.php" 
    	      method="post">

    		<h4 class="display-4  fs-1">LOGIN</h4><br>
    		<div class="alert alert-danger" role="alert">
			</div>

		  <div class="mb-3">
		    <label class="form-label">Email</label>
		    <input type="text" 
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
		  
          <div class="d-flex">
                <p>Don't have an acoount</p>
                <a href="sign_up.view.php" class="link-secondary ms-2">Sign Up</a>
            </div>
		  <div class="contain-btn">
              <button type="submit" class="btn btn-danger">Login</button>
          </div>
		</form>
    </div>

<?php
require "../partials/footer.php";
?>