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
<?php if (!empty($search) and !empty($shows)){ ?>
    
    
    <div class="container  d-flex flex-wrap  justify-content-between container-card">
        <?php foreach ($shows as $show) : ?>
            <div class="card" style="width: 13.5rem;">
                <img src=" <?php echo $show['image']; ?> " width="20%" height="70%" class="card-img-top">
                <div class="card-body h-25">
                    <h6 class="card-title"><?= $show['title'] ?></h6>
                    <p class="card-text"> <?= $show['released'] . ' ' . $show['duration'] . 's' ?></p>
                    <a href="#" class="btn btn-primary">Booking</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        
<?php } 
else{
 echo "<h6 class='text-danger text-ceter mt-3 container-fluid mb-4'> No results found</h6>";   
}
?>
<?php require "views/partials/footer.php"; ?>
