<?php
?>
<div class="body d-flex flex-column container ">
  <?php
    foreach ( $cinemas as $cinema):
  ?>
  <div class="m-3 d-flex flex-lg-row rounded-3 shadow p-3  bg-body rounded">
        <img src="https://cdn1.vectorstock.com/i/1000x1000/90/05/movie-cinema-premiere-poster-design-template-vector-12329005.jpg" class="rounded" width="25%" height="90%">
        <div class="card-body ">
          <h4 class="card-title fw-bold"><?= $cinema['name'];?></h4>
          <p class="card-text"><?= $cinema['location'];?></p>
          <p>096 847 8385</p>
        </div>
        <div class="container-btn d-flex align-items-end p-4">
          <a href="#" class="btn btn-danger">Show Items</a>
        </div>
      </div>
    <?php endforeach ?>
</div>
<?php
    require "views/partials/footer.php";
?>
