<?php

require "views/partials/head.php";
?>
<div class="app-container">
    <?php require "views/partials/sidebar.php" ?>
    
    <div class="app-content bg-dark">
        
        <?php require "views/partials/header.php" ?>

        <!--  -->

        <div class="container-movecards mt-4">

            <?php foreach ($sellerShows as $show) : ?>
                <div class="row justify-content-center mb-3">
                    <div class="col-md-12 col-xl-10">
                        <div class="card shadow-0 border rounded-3">
                            <div class="card-body p-0">
                                <div class="row">
                                    <div class="col-md-3 col-lg-3 col-xl-2 mb-4 mb-lg-0">
                                        <div class="bg-image hover-zoom ripple rounded ripple-surface">
                                            <img src="<?php echo $show["image"]; ?>" class="w-100" />
                                            <a href="#!">
                                                <div class="hover-overlay">
                                                    <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-6 p-3" style="width:65%;">
                                        <div class="col mt-1 mb-0  ">
                                            <h5 class="row"><?php echo $show["title"]; ?></h5>
                                            <span class="row mt-2"> Country: <?php echo $show["country"]; ?></span>
                                            <span class="row mt-2">Genre: <?php echo $show["genre"]; ?></span>
                                            <span class="row mt-2">Release: <?php echo $show["released"]; ?> </span>
                                        </div>
                                        <p class="row  mb-4 mb-md-0 mt-2">
                                            <?php echo $show["description"]; ?>
                                        </p>
                                    </div>
                                    <div class="col-md-6 col-lg-2 col-xl-0 border-sm-start-none border-start p-3">
                                        <div class="d-flex flex-row align-items-center mb-1">
                                            <h4 class="mb-1 me-1">$13.99</h4>
                                        </div>
                                        <div class="d-flex flex-column mt-4">
                                            <button class="btn btn-primary btn-sm" type="button"> <a href="/edit?movie_id=<?= $show['movie_id'] ?>" class="text-white">Edit</a></button>
                                            <button class="btn btn-danger btn-sm mt-2" type="button"><a type="submit" href="/seller/delete?movie_id=<?= $show['movie_id'] ?>"> DELETE</a> </button>
                                            <button class="btn btn-danger btn-sm mt-2" type="button"><a type="submit" href="controllers/seller/setting_movie.controller.php?id=<?= $show['movie_id'] ?>">Add show</a> </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>

</div>
</body>

</html>