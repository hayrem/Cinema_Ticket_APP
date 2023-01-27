<?php
require "views/partials/head.php";
?>

<div class="modal fade" id="manage_acc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-dark" id="exampleModalLabel">Manage your Account</h4>
            </div>
            <div class="modal-body p-0">

                <div class="card-profile p-0">
                    <div class="card-body p-2">
                        <div class="d-flex flex-column align-items-center text-center ">
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                            <div class="mt-3">
                                <h4 class="text-dark">John Doe</h4>
                            </div>
                        </div>
                        <div class="card-icon shadow-none bg-light rounded p-4">
                            <div class="icon mb-2 mt-4 text-dark">
                                <span class="material-symbols-outlined">change_circle</span>
                                <a href="change-password.php" class="ms-4">Change Password</a><br>
                            </div>
                            <div class="icon1 mt-2 text-dark">
                                <span class="material-symbols-outlined ">logout</span>
                                <a href="../../controllers/users/sign_out.controller.php" class="ms-4">Logout</a>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>