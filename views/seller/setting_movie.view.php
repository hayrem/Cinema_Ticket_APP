<?php
require "views/partials/head.php";
?>
<div class="app-container">
    <?php require "views/partials/sidebar.php" ?>

    <div class="app-content">
        <div class="app-content-actions">
            <input class="search-bar" placeholder="Search..." type="text">
        </div>
        <div class="products-area-wrapper tableView">
            <div class="products-header">
                <h3>Movie Setting</h3>
            </div>
        </div>

        <!--  -->
        <div class="container-movecards">
            <div class="container-fluid d-flex flex-wrap mt-4">
                <div class="card-detail">
                    <div class="card-thumbnail">
                        <img src=" https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSfG25a8pd0SlJcC8qcLX1pdeCZDouIYMd09i4llRlU8d4iRVqeedz4dOtcI4N0ThHLi2A&usqp=CAU">
                    </div>
                    <div class="card-body-detail">
                        <span class="card-title-detail"></span>
                        <p>
                            <span class="card-text bg-danger p-1 rounded text-white">HD</span>
                            <span class="card-text  p-1">⭐️</span>
                            <span class="card-text  p-1"></span>
                        </p>
                        <p class="card-text">Country:</p>
                        <p class="card-text">Genre: </p>
                        <p class="card-text">Release: </p>
                        <p class="card-text">Date show:</p>
                        <p class="card-text"></p>
                        <div class="card-description">
                            <p></p>
                        </div>
                        <div class="d-flex justify-content-between ">
                            <a href="#" class="btn btn-outline-danger bg-danger text-white">BOOKING</a>
                        </div>
                        <a href="https://youtu.be/1esRrwrmWzA"></a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    </body>

    </html>