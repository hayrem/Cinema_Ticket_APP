
<h1 style="color:white; margin-left: 70px; padding-top: 30px; text-align: center; margin-left: -30px; font-weight: bold;"> 
Wellcome to 
<?php 
    foreach ($nameHalls as $nameHall): 
        echo $nameHall['name']; 
    endforeach
?> 
</h1>
<div class="container mt-5 d-flex flex-row flex-wrap justify-content-between ">
    <?php foreach ($hallShows as $hallShow): 
    ?> 

    <div class="d-flex m-4">
        <div class="card-thumbnail ">
            <img src=" <?php  echo $hallShow['image'];?>">
        </div>
        <div class="card-body-detail" style="margin-top: -25px;">
            <h2 class="card-text" style="font-weight: bold"><?= $hallShow['title']?></h2>
            <span class="card-text">Total Seat: <?= $hallShow['description']?></span>
            <div class="d-flex justify-content-between pb-4 " style="margin-top: 20px;">
                <a href="#" class="btn btn-outline-danger bg-danger text-white">BOOKING</a>
            </div>

        </div>
    </div>
   
    <div class="card-thumbnail text-white" style="margin-top: 20px;">
    <!-- d-flex flex-column text-white justify-content-end -->
        <p class="card-text">show ID: <?= $hallShow['show_id']?></p>
        <p class="card-text">Date show: <?= $hallShow['date']?></p>
        <p class="card-text">Time: <span style="color:red">start:</span><?= $hallShow['time_start']?>,  <span style="color:red">end:</span> <?= $hallShow['time_end']?></p>
        <p class="card-text">Total Seat: <?= $hallShow['total_seat']?></p>
    </div>

 
    <?php endforeach;?>
</div>