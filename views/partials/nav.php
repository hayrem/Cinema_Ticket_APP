<?php
require "head.php"
?>

<nav class="navbar navbar-expand-md navbar-light bg-light main-menu" style="box-shadow:none">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <h4 class="font-weight-bold">Logo</h4>
        </a>

        <div class="collapse navbar-collapse p-0">
            <form class="form-inline mx-auto d-flex ">
                <input class="form-control " type="search" placeholder="Search for products..." aria-label="Search">
                <button class="btn btn-success " type="submit"><span class="material-symbols-outlined">search</span></i></button>
            </form>

            <ul class="navbar-nav">
                <li class="nav-item ml-md-3">
                    <div class="btn btn-primary">
                        <a href="#" class="text-white" data-toggle="modal" data-target="#login-modal"> Log In / </a>
                        <!-- Modal login -->
                        <div class="modal fade " id="login-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content  w-100px">

                                    <div class="modal-body d-flex mt-dialog">

                                        <div class="col-md-6 col-lg-5 d-none d-md-block ">
                                            <img src="https://images-na.ssl-images-amazon.com/images/I/6138vGyCo2L._AC_UL900_SR615,900_.jpg"  alt="login form" class="img-fluid" />
                                        </div>
                                        <div class="col-md-6 col-lg-7 ">
                                            <div class="card-body p-4 p-lg-5 text-white">
                                                <div class="d-flex  mb-4">
                                                    <h3>Sign In</h3>
                                                </div>

                                                <form>

                                                    <div class="form-outline mb-4">
                                                        <label class="form-label d-flex justify-content-start" >Email address</label>
                                                        <input type="email" id="form2Example17" class="form-control form-control-lg" />
                                                    </div>

                                                    <div class="form-outline mb-4">
                                                        <label class="form-label d-flex justify-content-start " >Password</label>
                                                        <input type="password" id="form2Example27" class="form-control form-control-lg" />
                                                    </div>

                                                    <!-- Checkbox -->
                                                    <div class="form-check d-flex justify-content-start mb-3">
                                                        <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
                                                        <label class="form-check-label ms-3" for="form1Example3"> Remember me! </label>
                                                    </div>

                                                    <p class="mb-5 pb-lg-2 text-white d-flex justify-content-start" style="color: #393f81;">Don't have an account? <a href="./sign_up.view.php" style="color: #dc3545;">Sign Up</a></p>
                                                    <div class="pt-1 mb-4">
                                                        <button class="form-control form-control-lg text-white border border-danger" style="background-color: rgb(159, 4, 4)" type="button">Login</button>
                                                    </div>


                                                </form>


                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal login -->

                        <a href="" class="text-white"> Register</a>
                            

                    </div>
                </li>
                <span class="material-symbols-outlined mt-4 ms-4" data-toggle="modal" data-target="#exampleModal">account_circle </span>

                <!-- Modal manage account-->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Manage your Account</h5>
                            </div>
                            <div class="modal-body">
                                <div class="card-body d-flex flex-column">
                                    <div class="card-body bg-g mg" style="width: 27rem">
                                        <span class="material-symbols-outlined">manage_accounts</span>
                                    </div>
                                    <div class="icon mb-2 mt-4 ">
                                        <span class="material-symbols-outlined">change_circle</span>
                                        <a href="change-password.php" class="ms-4">Change Password</a><br>
                                    </div>
                                    <div class="icon1 mt-2">
                                        <span class="material-symbols-outlined ">logout</span>
                                        <a href="logout.php" class="ms-4">Logout</a>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
                 <!-- Modal manage account-->
            </ul>
        </div>

    </div>
</nav>

<nav class="navbar navbar-expand-md navbar-light bg-light sub-menu">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">MOVIE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">CINEMA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">TICKET</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>