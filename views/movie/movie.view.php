<?php
require "views/partials/head.php";
require "views/partials/nav.php";
?>

<!-- <div class="container">
        <div class="card m-3 d-flex flex-lg-row" >
            <img src="images/cat.png" class="card-img-top" style="width: 15rem;">
            <div class="card-body">
              <h4 class="card-title fw-bold">Push In Boots: The Last Wish</h4>
              <div class="d-flex align-items-center">
                <button class="bg-danger border-0 m-3" style="color: white;">HD</button>
                <button class="border-0 bg-light">8.5  ⭐</button>
                <button class="border-0 bg-light">2023. 29mn   Genre | Anemation advanture</button>
              </div>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam nihil tempora repudiandae delectus assumenda blanditiis earum laborum adipisci, sit quae eum? Iure saepe praesentium placeat nostrum, iste adipisci quisquam vitae.</p>
              <div class="" style="line-height: 10px;">
                <p>Country : Cambodia</p>
                <p>Genre : Anemation advanture</p>
                <p>Release : 2023</p>
                <p>Date show : 12/02/2023 | 5:00 PM - 7:00 PM</p>
                <p>Cinema : Cinema Ticket PNC</p>
                <a href="#" class="btn btn-danger">Booking</a>
              </div>
        </div>
    </div> -->
<!-- insert home page -->
<div class="container-fluid mb-4">
    <h2>Movies</h2>
</div>
<!-- <h3>Show</h3> -->
<div class="container  d-flex flex-wrap bg-danger container-card">
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

</div>

<?php require "views/partials/footer.php"; ?>