<div class="container-fluid d-flex flex-wrap mt-4  p-3" >
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
    </div>
  </div>
</div>
<div class="container-fluid m-0 p-3" style="color:white;">
  <h1 style="padding-bottom:2%;">Trailer</h1>
  <iframe width="100%" height="500px" src="<?= $movies[0]['trailer'] ?>" style="border-radius:10px;" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>
