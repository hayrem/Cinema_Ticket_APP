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

        <?php foreach ($sellerShows as $show): ?>

        <div class="container-movecards">

            <div class="container-fluid d-flex flex-wrap mt-4">
                    <div class="card-detail">
                        <div class="card-thumbnail">
                            <img src=" <?php echo $show["image"]; ?>">
                        </div>
                        <div class="card-body-detail">
                            <span class="card-title-detail"></span>
                            <p>
                                <span class="card-text bg-danger p-1 rounded text-white">HD</span>
                                <span class="card-text  p-1">⭐️</span>
                                <span class="card-text  p-1"></span>
                            </p>
                            <p class="card-text">Country: <?php echo $show["country"];?></p>
                            <p class="card-text">Genre: <?php echo $show["genre"]; ?> </p>
                            <p class="card-text">Release: <?php echo $show["released"]; ?> </p>
                            <p class="card-text">Date show: <?php echo $show["duration"]; ?></p>
                            <p class="card-text">Date show: <?php echo $show["name"]; ?></p>
                            <p class="card-text"></p>
                            <div class="card-description">
                                <p></p>
                            </div>
                            <div class="d-flex justify-content-between ">
                                <a href="#" class="btn btn-outline-danger bg-danger text-white">BOOKING</a>
                                <a type="submit" href="setting?movie_id=<?php echo $show['movie_id']?>"> DELETE</a>  
                            </div>
                            <a href="https://youtu.be/1esRrwrmWzA"></a>
                        </div>
                    </div>
            </div>
        </div>

    </div>
    <?php endforeach ?>
</body>

</html>