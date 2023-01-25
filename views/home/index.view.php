<?php
require "../partials/head.php";
require "../partials/nav.php";
require "../partials/banner.php";
require "../models/list_show.model.php";
?>

<!-- insert home page -->
<div class="container-fluid mb-4">
    <h2>Trending</h2>
</div>
<!-- <h3>Show</h3> -->
<div class="container-fluid d-flex flex-wrap">

<?php foreach ($shows as $show):?>
    <div class="card me-3" style="width: 14rem;">
        <img src='<?php echo $show['image'];?>' width="20%" height="70%" class="card-img-top" >
        <div class="card-body">
            <h5 class="card-title"><?php echo $show['title']?></h5>
            <p class="card-text"><?php echo $show['released']." ".$show['duration']?></p>
            <a href="#" class="btn btn-danger">Booking</a>
        </div>
    </div>
    <?php endforeach?>
</div>

<?php require "../partials/footer.php" ?>