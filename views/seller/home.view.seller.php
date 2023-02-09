<?php
    require "views/partials/head.php";
?>
  <div class="app-container">
    <?php require "views/partials/sidebar.php" ?>

    <div class="app-content">
      <div class="app-content-actions">
        <input class="search-bar" placeholder="Search..." type="text">
      </div>
      <div class="products-area-wrapper tableView">
        <div class="products-header">
            <h3>Movie list</h3>
        </div>
    </div>

        <!--  -->

    <div class="container-movecards">
      
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
                     <a href="/setting?movie_id=<?php echo $show['movie_id']?>">MORE INFO</a>   
                    </span>
                </div>
            </div>
          </div>
      </div>
      <?php endforeach;?>

    </div>
 

</body>
</html>