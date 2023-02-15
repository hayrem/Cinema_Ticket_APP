<div class="container-fluid d-flex flex-wrap mt-4">
  <div class="card-detail">
    <div class="card-thumbnail">
      <img src="../../uploads/<?php echo $movies[0]['image']; ?>">
    </div>
    <div class="card-body-detail">
      <span class="card-title-detail"><?= $movies[0]['title'] ?></span>
      <p>
        <span class="fs-6 card-text bg-danger p-1 rounded text-white">HD</span>
        <span class="card-text  p-1">⭐️</span>
        <span class="fs-5 card-text  p-1"><?= $movies[0]['released'] ?></span>
      </p>
      <p class="fs-5 card-text">Country: <?= $movies[0]['country'] ?></p>
      <p class="card-text fs-5">Genre: <?= $movies[0]['genre'] ?></p>
      <p class="card-text fs-5">Release: <?= $movies[0]['released'] ?></p>
      <div class="card-description">
        <p class="fs-5"><?= $movies[0]['description'] ?></p>
      </div>
      <div class="d-flex justify-content-between ">
        <a href="/booking?movie_id" class="btn btn-outline-danger bg-danger text-white">BOOKING</a>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid " style="color:white;">
  <h1 style="padding-bottom:2%;">Trailer</h1>
  <iframe width="100%" height="500px" src="<?= $movies[0]['trailer'] ?>" style="border-radius:10px;" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>
<div class="container-fluid mt-4">
    <div class="card p-2 fs-5" style="border:solid 2px;">SELECT SHOWTIME</div>
</div>
<div class="container-fluid ">

  <?php
  foreach ($movies as $movie) :
  ?>
    <div class="bg-dark text-white mt-4 rounded-3">
      <h5 class="card-header">Hall: <?= $movie['hall_name'] ?></h5>
      <div class="card-body">
        <h5 class="card-title">Date show: <?= $movie['date_show'] ?></h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="/booking?movie_id=<?= $movie['movie_id']?>" class="btn btn-primary " style="width: 10%;">2:30</a>
      </div>
    </div>
    <?php endforeach; ?>
</div>
