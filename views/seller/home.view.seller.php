<?php
require "views/partials/head.php";
?>
<div class="app-container">
  <?php require "views/partials/sidebar.php" ?>
  
  <div class="app-content">
    <?php require "views/partials/header.php" ?>
  

    <div class="container-movecards d-flex justify-content-center">

      <?php foreach ($posts as $show) : ?>
        <div class="movie-cards">

          <div class="poster">
            <img src="../../uploads/<?php echo $show['image']; ?> ">
          </div>

          <div class="details">
            <div class="title">
              <h2>
                <?php
                $length = strlen($show['title']);
                if ($length > 30) {
                  echo substr($show['title'], 0, 30) . "...";
                } else {
                  echo $show['title'];
                }
                ?>
              </h2>
              <span><?= $show['released'] . ' ' . $show['duration'] . 's' ?></span>
            </div>

            <div class="tags">
              <span class="fantasy bg-danger" style='width:115px; display:flex; justify-content:center;'>
                <a href="" style='color:white;'>BOOKING</a>
              </span>
              <span class="mystery bg-primary" style='width:115px; display:flex; justify-content:center;'>
                <a href="/detail?movie_id=<?php echo $show['movie_id'] ?>" style='color:white;'>MORE INFO</a>
              </span>
            </div>
          </div>

        </div>
      <?php endforeach; ?>
    </div>

</div>
    </body>

    </html>