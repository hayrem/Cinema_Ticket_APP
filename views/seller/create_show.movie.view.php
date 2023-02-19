<?php
require "views/partials/head.php";
?>
<div class="app-container">

    <?php require "views/partials/sidebar.php" ?>

    <div class="app-content">
    <?php require "views/partials/header.php" ?>

        
        <div class="d-flex justify-content-center align-items-center p-4" style="height: auto;">
            <form class="bg-white  p-4 shadow-lg " style="width: 80%;border-radius:10px;" method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Date show</label>
                    <input type="date" name="date" value="2023-01-01" min="2023-01-01" max="2023-12-31" class="form-control" id="exampleInputEmail1">
                    <span style="color:red;"><?= (isset($messageError['date'])) ? $messageError['date'] : "<span>.</span>" ?></span>
                </div>
                <div class="col mb-3">
                    <label for="exampleInputEmail1" class="form-label">Hall name</label>
                    <select name="hall" class="form-select p-2" aria-label="Default select example">
                        <option value="">Open this select hall name</option>
                        <?php   
                        foreach ($halls as $hall):
                        ?>
                        <option value="<?=$hall['hall_id'];?>"><?=$hall['hall_name'];?></option>
                        <?php
                            endforeach; 
                        ?>
                    </select>
                    <span style="color:red;"><?= (isset($messageError['hall'])) ? $messageError['hall'] : "<span>.</span>" ?></span>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label class="form-label">Time start</label>
                        <select name="time_start" id="time_start" class="form-select p-2" aria-label="Default select example" >
                            <option value="" >Select Time Start</option>
                            <option value="11:00 AM">11:00 AM</option>
                            <option value="1:00 PM">1:00 PM</option>
                            <option value="3:00 PM">3:00 PM</option>
                            <option value="5:00 PM">5:00 PM</option>
                            <option value="7:00 PM">7:00 PM</option>
                        </select>
                        <span style="color:red;"><?= (isset($messageError['time_start'])) ? $messageError['time_start'] : "<span>.</span>" ?></span>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" name="submit" class="btn btn-primary w-100"><a class="text-white" href="/seller/setting" style="text-decoration: none;">Cancel</a></button>
                    <button type="submit" name="submit" class="btn btn-primary w-100 ms-2">Create</button>
                </div>
            </form>
        </div>

        </body>

        </html>