


<!-- insert home page -->
<div class="container-fluid" style="color:white; padding:2% 0 2% 5.5%;">
    <h1>Movies</h1>
</div>
<!-- <h3>Show</h3> -->
<?php if (!empty($shows)){ ?>
    <div class="container-fluid d-flex justify-content-center flex-wrap ">

        <?php foreach ($shows as $show): ?>

        <div class="card d-flex mx-1 my-1" style="width: 12rem;">
            <img src=" <?php  echo $show['image'];?> " width="100%" height="70%" class="card-img-top mb-0" >
            <div class="card-body p-2" height="30%">
                <h6 class="card-title m-0 p-0">
                    <?php
                        $length=strlen($show['title']);
                        if($length>15){
                            echo substr ($show['title'], 0,15)."...";
                        }else{
                            echo $show['title'];
                        }
                    ?>
                </h6>
                <div class='d-flex justify-content-between align-items-center m-0 p-0' >
                    <p class="card-text"> <?= $show['released'] . ' ' . $show ['duration'].'s'?></p>
                </div>
                
                <div class="container-btn">
                    <a  href="/detail?movie_id=<?php echo $show['movie_id']?>" class="btn btn-danger" >Detail</a>  
                </div>
            </div>
        </div>

        <?php endforeach;?>
    </div>
<?php } 
    else
    {
        echo "<div class='d-flex justify-content-center'>"."<image src ='https://www.clipartmax.com/png/full/153-1533013_sorry-no-results-found.png' ></image>"."</div>";  
    }
?>

<!-- <section></section> -->
