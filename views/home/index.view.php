<?php
require "views/partials/head.php";
require "views/partials/nav.php";
require "views/partials/banner.php";
?>


<!-- insert home page -->
<div class="container-fluid mb-4">
    <h2>Trending</h2>
</div>
<!-- <h3>Show</h3> -->


<div class="container  d-flex flex-wrap  container-card">
    <?php foreach ($shows as $show) : ?>
        <div class="card" style="width: 15rem;">
            <img src=" <?php echo $show['image']; ?> " width="20%" height="70%" class="card-img-top">
            <div class="card-body h-25">
                <h5 class="card-title"><?= $show['title'] ?></h5>
                <p class="card-text"> <?= $show['released'] . ' ' . $show['duration'] . 's' ?></p>
                <a href="#" class="btn btn-primary">Booking</a>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?php require "views/partials/footer.php" ?>