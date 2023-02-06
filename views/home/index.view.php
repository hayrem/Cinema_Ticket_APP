<!-- insert home page -->
<div class="container-fluid" style="color:white; padding:2% 0 2% 5.5%;">
    <h1>Movies</h1>
</div>
<!-- <h3>Show</h3> -->

<?php if (!empty($shows)){ ?>

<sectionm class="container-movecards">

    <?php foreach ($shows as $show): ?>
        <div class="movie-cards">

            <div class="poster">
                <img src="<?php  echo $show['image'];?> ">
            </div>

            <div class="details">
                <div class="title">
                    <h2>
                        <?php
                            $length=strlen($show['title']);
                            if($length>15){
                                echo substr ($show['title'], 0,15)."...";
                            }else{
                                echo $show['title'];
                            }
                        ?>
                    </h2>
                    <span><?= $show['released'] . ' ' . $show ['duration'].'s'?></span>
                </div>

                <div class="tags">
                    <span class="fantasy">
                      <a href="">BOOKING</a>  
                    </span>
                    <span class="mystery">
                     <a href="/detail?movie_id=<?php echo $show['movie_id']?>">MORE INFO</a>   
                    </span>
                </div>
            </div>

        </div>
        <?php endforeach;?>
</section>
<?php } 
    else
    {
        echo "<div class='d-flex justify-content-center'>"."<image src ='https://www.clipartmax.com/png/full/153-1533013_sorry-no-results-found.png' ></image>"."</div>";  
    }
?>