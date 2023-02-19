<?php
// require "views/partials/head.php";
session_start();

// $_COOKIE['firstName'] = "hello";
// $_SESSION['firstName'] = "world";
// $_SESSION['lastName'] = "hello world";
// if (isset($_SESSION['firstName']) && isset($_SESSION['lastName'])) {
?>
    <?= isset($_SESSION['firstName'])? $_SESSION['firstName'] : "" ?>


<div class="modal fade" id="manage_acc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="top:8%;">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-dark" id="exampleModalLabel">Manage your Account</h4>
            </div>
            <div class="modal-body p-0">

                <div class="card-profile p-0" >
                <div class="card-body p-2">
                        <div class="d-flex flex-column align-items-center text-center ">
                            <?php if (empty($_COOKIE['image'])){
                                ?>
                                    <!-- <span class="material-symbols-outlined mx-2"  data-toggle="modal" data-target="#manage_acc">account_circle </span> -->
                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                                <?php }else{
                                ?>
                                <!-- <img src="uploads/<?=($_COOKIE['image'])?>" class="rounded-circle" width="50"  data-toggle="modal" data-target="#manage_acc"> -->
                                <!-- <img src="uploads/<?=($_COOKIE['image'])?>" alt="Admin" class="rounded-circle" width="150"> -->
                                <img src="uploads/<?=($_COOKIE['image'])?>" class="rounded-circle" width="150" height="150" data-toggle="modal" data-target="#manage_acc">

                                <?php
                            }
                            ?> 
                            <div class="mt-3">
                                <h4 class="text-dark"><?= isset($_COOKIE['firstName'])? $_COOKIE['firstName'] : "No user account" ?>
                                <?= isset($_COOKIE['lastName'])? $_COOKIE['lastName'] : "" ?></h4>
                            </div>
                        </div>
                        <div class="card-icon shadow-none bg-light rounded p-4" >
                            <div class="icon mb-2 text-dark d-flex align-item-center "style ="width:100%;height:100%;">
                                <span class="material-symbols-outlined text-dark">change_circle</span>
                                <a class="<?= urlIs('/reset')?> nav-link" href="/reset" style="color: blue;" >Change Password</a>
                            </div>
                            <!-- <div class="icon mb-2 text-dark d-flex align-item-center">
                                <span class="material-symbols-outlined">change_circle</span>
                                <a class="<?= urlIs('/editPf')?> nav-link" href="/editPf">Edit Profile</a>
                            </div> -->

                            <div class="icon1 mt-2 text-dark d-flex align-item-center" style ="width:100%;height:100%;">
                                <span class="material-symbols-outlined text-dark">logout</span>
                                <a href="../../controllers/users/sign_out.controller.php" class="ms-2" style="text-decoration: none;">Logout</a>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
