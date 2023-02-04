<?php
?>
<div class = "d-flex ms-4">
  <div class="head mt-2">
    <div class="text-white ">
      <h1>PP CINEMA</h1>
      <p>Street 1003, Phnom Penh (Aeon Mall Sen Sok) Aeon Sen Sok</p>
    </div>
    <div style="width:100%;">
      <img src="https://filmfare.wwmindia.com/content/2020/may/multiplex41589991541.jpg" alt="" style="width:100%;">
    </div>
  </div>
  <div class="body d-flex flex-column container ">
    <?php
      foreach ( $halls as $hall):
    ?>
    <div class="m-3 d-flex flex-lg-row rounded-3 shadow p-3  bg-body rounded">
          <img src="https://cdn1.vectorstock.com/i/1000x1000/90/05/movie-cinema-premiere-poster-design-template-vector-12329005.jpg" class="rounded" width="25%" height="90%">
          <div class="card-body ">
            <h4 class="card-title fw-bold"><?= $hall['name'];?></h4>
            <p class="card-text">Total seat: <?= $hall['total_seat'];?></p>
          </div>
          <div class="container-btn d-flex align-items-end p-4">
            <a href="#" class="btn btn-danger">Show Items</a>
          </div>
        </div>
      <?php endforeach ?>
  </div>
</div>
<?php
    require "views/partials/footer.php";
?>
