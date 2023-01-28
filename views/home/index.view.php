


<!-- insert home page -->
<div class="container-fluid mb-4 bg-dark " style="background:#330000;">
    <h2>Trending</h2>
</div>
<!-- <h3>Show</h3> -->
<?php if (!empty($search) and !empty($shows)){ ?>
    <div class="container-fluid d-flex flex-wrap ">

        <?php foreach ($shows as $show): ?>

        <div class="card me-3 " style="width: 16rem;">
            <img src=" <?php  echo $show['image'];?> " width="100%" height="70%" class="card-img-top" >
            <div class="card-body" height="30%">
                <h6 class="card-title"><?= $show['title']?></h6>
                <div class='d-flex justify-content-between align-items-center' >
                    <p class="card-text"> <?= $show['released'] . ' ' . $show ['duration'].'s'?></p>
                </div>
                <div class="container-btn">
                    <a  href="/detail?movie_id=<?php echo $show['movie_id']?>" class="btn btn-danger">Detail</a>  
                </div>
            </div>
        </div>

        <?php endforeach;?>
    </div>
    <?php } 
else{
 echo "<h6 class='text-danger text-ceter mt-3 container-fluid mb-4'> No results found</h6>";   
}?>

<!-- <section></section> -->
