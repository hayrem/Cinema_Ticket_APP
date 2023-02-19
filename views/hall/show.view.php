
<h1 style="color:white; margin-left: 70px; padding-top: 30px; text-align: center; margin-left: -30px; font-weight: bold;"> 
Wellcome to Hall
<?php 
    foreach ($nameHalls as $nameHall): 
        echo $nameHall['hall_name']; 
    endforeach
?> 
</h1>

<div class="container-fluid d-flex flex-wrap mt-4">
<?php foreach ($hallShows as $hallShow):
  if($hallShow['post']!=1){
    echo "";
  }else{
    ?> 
  <div class="card-detail mt-4" style="height: 40vh;">
    <div class="card-thumbnail" style="width: 15%;">
      <img style="width: 100%;" src="../../uploads/<?=$hallShow['image'];?> ">
    </div>
    <div class="card-body-detail">
      <span class="card-title-detail"><?= $hallShow['title'] ?></span>
      <p>
        <span class="fs-6 card-text bg-danger p-1 rounded text-white">HD</span>
        <span class="card-text  p-1">⭐️</span>
        <!-- <span class="fs-5 card-text  p-1"><?= $hallShow['released'] ?></span> -->
      </p>
      <!-- <p class="fs-5 card-text">Country: <?= $hallShow['country'] ?></p> 
      <p class="card-text fs-5">Genre: <?= $hallShow['genre'] ?></p>
      <p class="card-text fs-5">Release: <?= $hallShow['released'] ?></p>  -->
      <div class="card-description">
        <p class="fs-5"><?=$hallShow['description'] ?></p>
      </div>
        <a href="/select_show_time?movie_id=<?=$hallShow['movie_id']?>&hall_name=<?=$show['hall_name']?>" class="btn btn-primary mb-4">SHOW ITEMS</a>
    </div>
  </div>
  <?php }?>
  <?php endforeach;?>
</div>