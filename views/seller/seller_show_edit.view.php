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
                        <!-- <input  type="time" value="00:00"   min="12:00" max="18:00"  > -->
                        <select name="time_start" id="time_start" class="form-select p-2" aria-label="Default select example" >
                            <?php   
                            foreach ($showId as $show):
                                if ($show["time_start"] == "A11")
                                {
                                    $show["time_start"] = "11:00 AM";
                                }
                                elseif ($show["time_start"] == "A1")
                                {
                                    $show["time_start"] = "1:00 PM";
                                }
                                elseif ($show["time_start"] == "A3")
                                {
                                    $show["time_start"] = "3:00 PM";
                                }
                                elseif ($show["time_start"] == "A5")
                                {
                                    $show["time_start"] = "5:00 PM";
                                }
                                elseif ($show["time_start"] == "A7")
                                {
                                    $show["time_start"] = "7:00 PM";
                                }
                            ?>
                            <option selected><?=$showEdit["ime_start"]?></option>
                            <?php
                                endforeach; 
                            ?>
                            <!-- <option>Select new time</option> -->
                            <option value= 11 >11:00 AM</option>
                            <!-- <option value="A1">1:00 PM</option>
                            <option value="A3">3:00 PM</option>
                            <option value="A5">5:00 PM</option>
                            <option value="A7">7:00 PM</option> -->
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
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
    
                    </select>
                </div>
                <div class="d-flex justify-content-between w-100%">
                    <button type="submit" name="submit" class="btn btn-primary " style="width: 20%;background-color: red; border : none;"><a href="/seller/setting" class="text-white"  style="text-decoration: none; ">Cancel</a></button>
                    <button type="submit" name="submit" class="btn btn-primary " style="width: 20%;">Update</button>
                </div>
            </form>
        </div>

        </body>
 </html>