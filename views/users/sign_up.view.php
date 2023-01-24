<?php
require("../partials/head.php");
?>


    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
            <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
                <div class="col-md-6 col-lg-5 d-none d-md-block">
                    <img src="https://images-na.ssl-images-amazon.com/images/I/6138vGyCo2L._AC_UL900_SR615,900_.jpg"
                    alt="login form" class="img-fluid"/>
                </div>
                <div class="col-md-6 col-lg-7 d-flex align-items-center" style="background-color: #FFFFFF;">
                <div class="card-body p-1 p-lg-5 text-white " style="background-color: #000000;">
                    <form >

                        <div class="d-flex align-items-center">
                            <span class="h1 fw-bold mb-0" style="margin-top: -8px;">Sign Up</span>
                        </div>

                        <p class="mb-1 pb-lg-2 text-white" style="color: #393f81;">Have an account? <a href="./sign_up.view.php"
                        style="color: #dc3545;">Sign In</a></p>

                        <div class="form-outline mb-2">
                            <label class="form-label" for="form2Example17">Username</label>
                            <input type="email" id="form2Example17" class="form-control" />
                        </div>

                        <div class="form-outline mb-2">
                            <label class="form-label" for="form2Example17">Email</label>
                            <input type="email" id="form2Example17" class="form-control" />
                        </div>
            

                        <div class="form-outline mb-2">
                            <label class="form-label" for="form2Example27">Password</label>
                            <input type="password" id="form2Example27" class="form-control" />
                        </div>

                        <div class="form-outline mb-2">
                            <label class="form-label" for="form2Example27">Comfirm Password</label>
                            <input type="password" id="form2Example27" class="form-control" />
                        </div>

                        <div class="form-outline mb-2">
                            <input type="checkbox"/>
                            <label class="form-label" >remember me</label>
                        </div>

                        <div>
                        <button class="form-control text-white border border-danger" style="background-color: rgb(159, 4, 4)" type="button">Sing Up</button>
                        </div>

                    </form>

                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>

<?php
    require("../partials/footer.php");
?>