<div class="container-fluid mt-4">
    <div class="card p-2 fs-5" style="border:solid 2px;">SELECT SHOWTIME</div>
</div>

<div class="container-fluid mb-4">

<?php
$hall = [];
$show_date = [];
foreach ($movies as $show){
    array_push($hall ,$show['hall_name'] );
    array_push($show_date ,$show['date_show'] );
}
$detail = $movies[0];
$hall = array_unique($hall);
$hall = array_values($hall);
$show_date = array_unique($show_date);
$show_date = array_values($show_date);
if(array_key_exists('hall_name',$_GET)){
    $hall = [$_GET['hall_name']];
}
for ($i = 0 ; $i<count($show_date) ; $i++) :
    $found = FALSE;
    for ($index = 0 ; $index<count($hall) ; $index++) :
        foreach ($movies as $show){
            if ($show['date_show'] === $show_date[$i] and $show['hall_name'] === $hall[$index])
            $found = TRUE;
        }
    endfor;
    if ($found){
?>
        <div class=" text-white mt-4 rounded-3 shadow p-3 ">
        <h5 class="card-title">Date show: <?= $show_date[$i]?></h5>

        <?php
        for ($index = 0 ; $index<count($hall) ; $index++) :
            $found = FALSE;
            foreach ($movies as $show){
                if ($show['date_show'] === $show_date[$i] and $show['hall_name'] === $hall[$index])
                $found = TRUE;
            }
            if ($found){
        ?>
                <div class="bg-dark text-white mt-4 rounded-3 shadow p-3 mb-5rounded">
                <!-- <label for=""><?= $detail['hall_id'] ?></label> -->
                    <h5 class="card-header">Hall: <?= $hall[$index] ?></h5>
                    <div class="card-body">
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <?php 
                        foreach ($movies as $show){
                            if ($show['hall_name'] === $hall[$index] and $show['date_show'] === $show_date[$i]){
                            ?>
                                <a href="/booking?movie_id=<?=$show['movie_id']?> &hall_id=<?=$show['hall_name']?> &date_show=<?=$show_date[$i]?>&title=<?=$show['title']?>" class="btn btn-primary " style="width: 10%;"><?=$show['time_start']?></a>
                            <?php
                            }
                        }
                        
                        ?>
                    </div>
                </div>
        <?php
            }
        endfor;
        echo "</div>";
    };
endfor;?>
  
</div>
