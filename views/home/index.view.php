<!-- insert home page -->
<div class="container-fluid d-flex" style="color:white;padding:0;">
    <h1 class=" mx-3">Movies</h1>
</div>
<!-- <h3>Show</h3> -->

<?php 
if (!empty($shows)){ ?>

<div class="container-movecards">

    <?php foreach ($posts  as $show): ?>
        <div class="movie-cards">

            <div class="poster">
                <img src="../../uploads/<?php  echo $show['image'];?> ">
            </div>

            <div class="details">
                <div class="title">
                    <h2>
                        <?php
                            $length=strlen($show['title']);
                            if($length>30){
                                echo substr ($show['title'], 0,30)."...";
                            }else{
                                echo $show['title'];
                            }
                        ?>
                    </h2>
                    <span><?= $show['released'] . ' ' . $show ['duration'].'s'?></span>
                </div>

                <div class="tags">
                    <span class="fantasy bg-danger" style='width:115px; display:flex; justify-content:center;'>
                      <a href="/select_show_time?movie_id=<?php echo $show['movie_id']?>" style='color:white;text-decoration: none;'>BOOKING</a>  
                    </span>
                    <span class="mystery bg-primary" style='width:115px; display:flex; justify-content:center;'>
                        <a href="/detail?movie_id=<?php echo $show['movie_id']?>" style='color:white;text-decoration: none;'>MORE INFO</a>  
                    </span>
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