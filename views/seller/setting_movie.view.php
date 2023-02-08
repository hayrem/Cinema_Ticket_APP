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
                <?php
                $sellerShows=sellerShowMovie();
                 foreach ($sellerShows as $show): ?>
                    <div class="card-detail">
                        <div class="card-thumbnail">
                            <img src=" <?php echo $show["image"]; ?>">
                        </div>
                        <div class="card-body-detail">
                            <span class="card-title-detail"><?php echo $show["title"];?></span>
                            <p>
                                <span class="card-text bg-danger p-1 rounded text-white">HD</span>
                                <span class="card-text  p-1">⭐️</span>
                                <span class="card-text  p-1"></span>
                            </p>
                            <p class="card-text">Country: <?php echo $show["country"];?></p>
                            <p class="card-text">Genre: <?php echo $show["genre"]; ?> </p>
                            <p class="card-text">Release: <?php echo $show["released"]; ?> </p>
                            <p class="card-text">Date show: <?php echo $show["date"]; ?></p>
                            <p class="card-text"> <?php echo $show["name"]; ?></p>
                            <p class="card-text"><?php echo $show["description"]; ?></p>
                            <p class="card-text"></p>
                            <div class="card-description">
                                <p></p>
                            </div>
                            <div class="d-flex justify-content-between ">
                                <a href="#" class="btn btn-outline-danger bg-danger text-white">BOOKING</a>
                                <a type="submit" href="controllers/seller/setting_movie.controller.php?id=<?php echo $show['movie_id']?>"> DELETE</a>  
                            </div>
                            <a href="https://youtu.be/1esRrwrmWzA"></a>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>

</div>
</body>

    </html>