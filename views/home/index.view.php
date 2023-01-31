


<!-- insert home page -->
<div class="container-fluid mb-4 p-1 ps-5 " style="color:white;">
    <h1>Movies</h1>
</div>
<!-- <h3>Show</h3> -->
<?php if (!empty($shows)){ ?>
    <div class="container-fluid d-flex flex-wrap">

        <?php foreach ($shows as $show): ?>

        <div class="card d-flex mx-1 my-2 " style="width: 12rem;">
            <img src=" <?php  echo $show['image'];?> " width="100%" height="70%" class="card-img-top" >
            <div class="card-body" height="30%">
                <h6 class="card-title">
                    <?php
                        $length=strlen($show['title']);
                        if($length>15){
                            echo substr ($show['title'], 0,15)."...";
                        }else{
                            echo $show['title'];
                        }
                    ?>
                </h6>
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
    else
    {
        echo "<h6 class='text-danger text-ceter mt-3 container-fluid mb-4'> No results found</h6>";   
    }
?>

<!-- <section></section> -->
