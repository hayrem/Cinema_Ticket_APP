<div class="container-fluid d-flex flex-wrap">
    <?php foreach ($movies as $movie): 
    ?>
    <div class="card mb-3 " style="width: 100%;">
        <div class="row g-0 p-5 " style="margin-top: -25px;">
            <div class="col-md-4">
            <!-- <img src="..." class="img-fluid rounded-start" alt="..."> -->
            <img src=" <?php  echo $movie['image'];?>"   width="100%" height="70%" >
            </div>
            <div class="col-md-8" >
                <div class="card-body">
                    <h2 class="card-title " style="margin-top: -25px;"><?= $movie['title']?></h2>
                    <div class="card-text d-flex ">
                        <span class="card-text bg-danger p-1">HD</span>
                        <span class="card-text  p-1">⭐️</span>
                        <span class="card-text  p-1"><?= $movie['released']?></span>
                        <span class="card-text  p-1">Genre:  <?= $movie['genre']?></span>
                    </div>

                    <p class="card-text pt-4"><?= $movie['description']?></p>
                    <p class="card-text">Country: <?= $movie['country']?></p>
                    <p class="card-text">Genre: <?= $movie['genre']?></p>
                    <p class="card-text">Release: <?= $movie['released']?></p>
                    <p class="card-text">Date show: 12/02/2023 5:30</p>
                    <p class="card-text">Cinema: XXXX</p>
                    <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                </div>
                <div class="d-flex justify-content-between">
                    <a href="#" class="btn btn-outline-danger bg-danger text-white" style="margin-left: 20px;">BOOKING</a>
                </div>
            </div>
        </div>
    </div>
    
    <?php endforeach;?>
</div>