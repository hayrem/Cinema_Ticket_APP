<?php
require "views/partials/head.php";
require "views/partials/nav.php";
require "views/partials/banner.php";
require "models/list_show.model.php"
?>


<!-- insert home page -->
<div class="container-fluid mb-4">
    <h2>Trending</h2>
</div>
<!-- <h3>Show</h3> -->
<div class="container-fluid d-flex flex-wrap">

    <?php foreach ($shows as $show): ?>

    <div class="card me-3" style="width: 14rem;">
        <img src=" <?php  echo $show['image'];?> " width="20%" height="70%" class="card-img-top" >
        <div class="card-body">
            <h5 class="card-title"><?= $show['titile']?></h5>
            <p class="card-text"> <?= $show['released']?>.<? $show ['duration']?></p>
            <a href="#" class="btn btn-danger">Booking</a>
        </div>
    </div>

    <?php endforeach;?>

    <div class="card  me-3" style="width: 14rem;">
        <img src="https://bst.icons8.com/wp-content/themes/icons8/app/uploads/2019/05/poster-for-movie.png" width="20%" height="70%" class="card-img-top" >
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">2023 : 2h:10nm</p>
            <a href="#" class="btn btn-danger">Booking</a>
        </div>
    </div>
    <div class="card  me-4" style="width: 14rem;">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZ2uitlTiOhC868Y6Y_mLwRAtgFi1tZ92_Y2bwIJ2zguP4dpI-8dWNc_8ZBmd4Wr1m2AI&usqp=CAU" width="20%" height="70%" class="card-img-top" >
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">2023 : 2h:10nm</p>
            <a href="#" class="btn btn-danger">Booking</a>
        </div>
    </div>
    <div class="card  me-4" style="width: 14rem;">
        <img src="https://webneel.com/daily/sites/default/files/images/daily/09-2019/2-movie-poster-design-aladdin-disney-glossy-composite.jpg" width="20%" height="70%" class="card-img-top" >
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">2023 : 2h:10nm</p>
            <a href="#" class="btn btn-danger">Booking</a>
        </div>
    </div>
    <div class="card  me-4" style="width: 14rem;">
        <img src="https://lumiere-a.akamaihd.net/v1/images/p_blackwidow_21043_v2_6d1b73b8.jpeg" width="20%" height="70%" class="card-img-top" >
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">2023 : 2h:10nm</p>
            <a href="#" class="btn btn-danger">Booking</a>
        </div>
    </div>


</div>


<?php require "views/partials/footer.php" ?>
