<?php require "head.php"?>

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
                    <div class="btn btn-primary ">
                        <a href="#" class="text-white"> Log In / </a>
                        <a href="" class="text-white"> Register</a>
                    </div>
                </li>
                <span class="material-symbols-outlined mt-4 ms-4" data-toggle="modal" data-target="#exampleModal">account_circle </span>
              
                <!-- Modal -->
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
                <!-- modal -->
            </ul>
        </div>

    </div>
</nav>

<nav class="navbar navbar-expand-md navbar-light bg-light sub-menu">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Movie</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cinema</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Ticket</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
