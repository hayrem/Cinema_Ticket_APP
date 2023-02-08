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
        <div class="container-fluid d-flex flex-wrap mt-4">
            <?php foreach ($sellerPost as $post): 
            ?>
            <div class="card mb-3 " style="height: 35rem; width: 100%;">
                <div class="row g-0 p-5 " style="margin-top: -25px;">
                    <div class="col-md-4">
                    <!-- <img src="..." class="img-fluid rounded-start" alt="..."> -->
                    <img src=" <?php  echo $post['image'];?>"   width="100%" height="75%" class="rounded card-img-top">
                    </div>
                    <div class="col-md-8" >
                        <div class="card-body ms-4">
                            <h2 class="card-title " style="margin-top: -25px;"><?= $post['title']?></h2>
                            <div class="card-text d-flex ">
                                <span class="card-text bg-danger p-1 rounded text-white">HD</span>
                                <span class="card-text  p-1">⭐️</span>
                                <span class="card-text  p-1"><?= $post['released']?></span>
                                <span class="card-text  p-1">Genre:  <?= $post['genre']?></span>
                            </div>

                            <p class="card-text pt-4"><?= $post['description']?></p>
                            <p class="card-text">Country: <?= $post['country']?></p>
                            <p class="card-text">Genre: <?= $post['genre']?></p>
                            <p class="card-text">Release: <?= $post['released']?></p>
                            <p class="card-text">Date show: 12/02/2023 5:30</p>
                            <p class="card-text">Cinema: XXXX</p>
                            <div class="d-flex justify-content-center ">
                                <a href="/edit?movie_id=<?= $post['movie_id'] ?>" class="btn btn-outline-danger bg-danger text-white"style="margin-right: 10px;">Edit</a>
                                <a href="../../controllers/seller/delete_movie.controller.php?movie_id=<?= $post['movie_id'] ?>" class="btn btn-outline-danger bg-danger text-white" >Delete</a>
                                <!-- <a href="#" class="btn btn-outline-danger bg-danger text-white">BOOKING</a> -->
                            </div>
                            <a href="https://youtu.be/1esRrwrmWzA"></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
        </div>

    </div>

    </body>

    </html>