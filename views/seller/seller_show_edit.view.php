<?php
require "views/partials/head.php";
?>
<div class="app-container">

    <?php require "views/partials/sidebar.php" ?>

    <div class="app-content">
    <?php require "views/partials/header.php" ?>

        <!--  -->
        <div class="d-flex justify-content-center align-items-center p-4" style="height: auto;">
            <form class="bg-white  p-4 shadow-lg " style="width: 80%;border-radius:10px;" method="post">
                <input type="hidden" value="<?= $showEdit['show_id'] ?>" name="show_id">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Date show</label>
                    <input type="date" name="date_show" value="<?=$showEdit["date_show"]?>" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label class="form-label">Time start</label>
                        <select name="time_start" id="time_start" class="form-select p-2" aria-label="Default select example" >
                            <option selected><?=$showEdit["time_start"]?></option>
                            <option value="11:00 AM" >11:00 AM</option>
                            <option value="1:00 PM">1:00 PM</option>
                            <option value="3:00 PM">3:00 PM</option>
                            <option value="5:00 PM">5:00 PM</option>
                            <option value="7:00 PM">7:00 PM</option>
                        </select>
                    </div>
                </div>
                
                <div class="col mb-3">
                    <label for="exampleInputEmail1" class="form-label">Hall name</label>
                    <select name="hall" class="form-select p-2" aria-label="Default select example">
                        <?php   
                        foreach ($showId as $show):
                        ?>
                        <option selected><?=$showEdit["hall_id"]?></option>
                        <?php
                            endforeach; 
                        ?>
                        <option value="1">A</option>
                        <option value="2">B</option>
                        <option value="3">C</option>
                        <option value="4">D</option>
    
                    </select>
                </div>
                <div class="d-flex justify-content-between w-100%">
                    <button type="submit" name="submit" class="btn btn-primary me-2" style="width: 50%;background-color: red; border : none;"><a href="/seller/setting" class="text-white"  style="text-decoration: none; ">Cancel</a></button>
                    <button type="submit" name="submit" class="btn btn-primary " style="width: 50%;">Update</button>
                </div>
            </form>
        </div>

        </body>
 </html>

