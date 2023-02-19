<div class="container-fluid text-white  p-0 ">
<nav class="navbar navbar-expand-md navbar-light  main-menu p-0" style="background:#072f4e;">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="../../assets/phnom-penh-cinema-low-resolution-logo-color-on-transparent-background.png" alt="" width="60px">
        </a>

        <div class="collapse navbar-collapse p-0">
            <form class="form-inline mx-auto d-flex " method='post'>
                <input class="form-control " 
                id="live_search" 
                type="search" 
                placeholder="Search for products..." 
                aria-label="Search" 
                name='search'
                value="<?= (isset($_POST['search'])) ? $_POST['search'] : "" ?>">
                <button style="border: solid white 1px;" class="btn btn-search "  type="submit"><span class="material-symbols-outlined" value='search'>search</span></i></button>
            </form>

            <ul class="navbar-nav">

                    <?php

                        if(empty($_COOKIE['firstName'])
                        && empty ($_COOKIE['lastName'])
                        && empty($_COOKIE['email']))
                        {
                            ?>
                            
                                <li class = 'navbar-item ml-md-3'>

                                    <div class='btn btn-primary'>
                                         <!-- sign in  -->
                                        <a href='sign_in' class='<?= urlIs('/sign_in') ?>text-white'>Sign In/</a>
                                        <!-- register  -->
                                        <a href='sign_up' class='<?= urlIs('/sign_up') ?>text-white'>Register</a>
                                    </div>

                                </li>
                            <?php
                        }else{
                            ?>
                                <div class="d-flex " style="width:100%;justify-content:center; align-items:center; gap:10px">
                                <?php if (empty($_COOKIE['image'])){
                                    ?>
                                     <span class="material-symbols-outlined mx-2"  data-toggle="modal" data-target="#manage_acc">account_circle </span>
                                    <?php
                                }else{
                                    ?>
                                    <img src="uploads/<?=($_COOKIE['image'])?>" style="border: solid 1px white;" class="rounded-circle" width="40" height="40" data-toggle="modal" data-target="#manage_acc">


                                    <?php
                                }
                                ?> 
                                    <h5 class='m-0 p-0' style="padding-right: 10px;"><?= isset($_COOKIE['firstName'])? $_COOKIE['firstName'] : "" ?></h5>  
                                </div>
                                
                                <?php require "views/users/manage_acc.view.php"; ?>
                            <?php

                        }

                    ?>
                  
            </ul>
        </div>

    </div>
</nav>
<nav class="navbar navbar-expand-md text-white p-0 m-0" style="background:#072f4e;">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item me-4"> 
                    <a class="<?= urlIs('/') ? 'active bg-dark text-white ' : '' ?> nav-link" href="/">HOME</a>
                </li>
                <li class="nav-item me-4">
                    <a class="<?= urlIs('/movie') ? 'active bg-dark text-white' : '' ?> nav-link" href="/movie">MOVIE</a>
                </li>
                <li class="nav-item me-4">
                    <a class="<?= urlIs('/cinema') ? 'active bg-dark text-white' : '' ?> nav-link" href="/cinema">CINEMA</a>
                </li>
                <li class="nav-item me-4">
                    <a class="<?= urlIs('/ticket') ? 'active bg-dark text-white' : '' ?> nav-link" href="/ticket">TICKET</a>
                </li>
                <li class="nav-item me-4">
                    <a class="<?= urlIs('/contact') ? 'active bg-dark text-white' : '' ?> nav-link" href="/contact">CONTACT US</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
