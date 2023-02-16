<?php
require "views/partials/head.php";
?>

<div class="app-container">
    <div class="app-content">
        <!-- ----------------------- -->
    <div class="container-fluid d-flex flex-wrap mt-4">
        <div class="card-detail">
            <div class="card-thumbnail">
            <img src="../../uploads/<?php echo $movies[0]['image']; ?>">
            </div>
            <div class="card-body-detail">
            <span class="card-title-detail"><?= $movies[0]['title'] ?></span>
            <p>
                <span class="fs-6 card-text bg-danger p-1 rounded text-white">HD</span>
                <span class="card-text  p-1">⭐️</span>
                <span class="fs-5 card-text  p-1"><?= $movies[0]['released'] ?></span>
            </p>
            <p class="fs-5 card-text">Country: <?= $movies[0]['country'] ?></p>
            <p class="card-text fs-5">Genre: <?= $movies[0]['genre'] ?></p>
            <p class="card-text fs-5">Release: <?= $movies[0]['released'] ?></p>
            <div class="card-description">
                <p class="fs-5"><?= $movies[0]['description'] ?></p>
            </div>
            </div>
        </div>
        </div>
        <div class="container-fluid " style="color:white;">
        </div>
        <div class="container-fluid mt-4">
            <div class="card p-2 fs-5" style="border:solid 2px;">SELECT SHOWTIME</div>
        </div>
        <div class="container-fluid mb-4">

        <?php
        $hall = [];
        foreach ($movies as $show){
            array_push($hall ,$show['hall_name'] );
        }
        $detail = $movies[0];
        $show_date =  $movies[0]['date_show'];
        $hall = array_unique($hall);
        $index=0;
        for ($i = 0 ; $i<count($hall) ; $i++) :
        ?>
            <div class="bg-dark text-white mt-4 rounded-3 shadow p-3 mb-5rounded">
            <label for=""></label>
            <h5 class="card-header">Hall: <?= $hall[$index] ?></h5>
            <div class="card-body">
                <h5 class="card-title">Date show: <?=  $show_date?></h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <?php 
                foreach ($movies as $show){
                    if ($show['hall_name'] === $hall[$index])
                    {
                        if ($movie["time_start"] == "A11")
                        {
                            $movie["time_start"] = "11:00 AM";
                        }
                        elseif ($movie["time_start"] == "A1")
                        {
                            $movie["time_start"] = "1:00 PM";
                        }
                        elseif ($movie["time_start"] == "A3")
                        {
                            $movie["time_start"] = "3:00 PM";
                        }
                        elseif ($movie["time_start"] == "A5")
                        {
                            $movie["time_start"] = "5:00 PM";
                        }
                        elseif ($movie["time_start"] == "A7")
                        {
                            $movie["time_start"] = "7:00 PM";
                        }
                        ?>
                            <a href="seller_show_edit?movie_id=<?=$show['movie_id']?>" class="btn btn-primary " style="width: 10%;"><?= $movie["time_start"]?></a>
                        <?php
                    }
                }
                
                ?>
            </div>
            </div>
        <?php
        $index +=1; 
        endfor;?>
        </div>
    </body>
</html>