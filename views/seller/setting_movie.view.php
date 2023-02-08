<?php
require "views/partials/head.php";
?>
<div class="app-container">
    <div class="sidebar">
        <div class="sidebar-header">
            <div class="app-icon">

            </div>
        </div>
        <ul class="sidebar-list">
            <li class="sidebar-list-item ">
                <a href="/seller">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                        <polyline points="9 22 9 12 15 12 15 22" />
                    </svg>
                    <span>Movie list</span>
                </a>
            </li>
            <li class="sidebar-list-item active">
                <a href="/setting">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag">
                        <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z" />
                        <line x1="3" y1="6" x2="21" y2="6" />
                        <path d="M16 10a4 4 0 0 1-8 0" />
                    </svg>
                    <span>Theater sitting</span>
                </a>
            </li>
            <li class="sidebar-list-item ">
                <a href="/create">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag">
                        <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z" />
                        <line x1="3" y1="6" x2="21" y2="6" />
                        <path d="M16 10a4 4 0 0 1-8 0" />
                    </svg>
                    <span>Add new movie</span>
                </a>
            </li>
        </ul>
    </div>


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
            <?php foreach ($posts as $post): 
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
                                <a href="../../controllers/seller/edit_movie.controller.php?movie_id=<?= $post['movie_id'] ?>" class="btn btn-outline-danger bg-danger text-white"style="margin-right: 10px;">Edit</a>
                                <a href="../../controllers/seller/delete_movie.controller.php?movie_id=<?= $post['movie_id'] ?>" class="btn btn-outline-danger bg-danger text-white" >Delete</a>
                                <!-- <a href="#" class="btn btn-outline-danger bg-danger text-white">BOOKING</a> -->
                            </div>
                            <a href="https://youtu.be/1esRrwrmWzA"></a>
                        </div>
                    </div>
            </div>
            <?php endforeach;?>
        </div>

    </div>

</body>

</html>