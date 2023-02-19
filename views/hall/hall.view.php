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
      foreach ($halls as $hall):
    ?>
    <div class="m-3 d-flex flex-lg-row rounded-3 shadow p-0  bg-body rounded">
      <div class="w-25 bg-image hover-zoom ripple rounded ripple-surface">
        <!-- <img src="https://cdn1.vectorstock.com/i/1000x1000/90/05/movie-cinema-premiere-poster-design-template-vector-12329005.jpg" class="rounded w-100"> -->
        <img src="https://www.hollywoodreporter.com/wp-content/uploads/2022/11/01_Exterior_1-copy.jpg?w=1296" class="rounded w-100">
      </div>
          <div class="card-body p-4">
            <h4 class="card-title fw-bold">Hall: <?= $hall['hall_name'];?></h4>
            <p class="card-text mt-4 fs-5">Total seat: <?= $hall['total_seat'];?></p>
          </div>
          <div class="container-btn d-flex align-items-end p-4">
            <!-- <a href="#" class="btn btn-danger">Show Items</a> -->
            <a  href="/hallShow?hall_id=<?php echo $hall['hall_id']?>" class="btn btn-danger text-white" >Show Items</a>  
          </div>
        </div>
      <?php endforeach ?>
  </div>
</div>
<?php
    require "views/partials/footer.php";
?>
