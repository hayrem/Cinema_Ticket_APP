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
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Date show</label>
                    <input type="date" name="date_show" value="<?=$edit["date_show"]?>" min="2023-01-01" max="2023-12-31" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label class="form-label">Time start</label>
                        <!-- <input  type="time" value="00:00"   min="12:00" max="18:00"  > -->
                        <select name="time_start" id="time_start" class="form-select p-2" aria-label="Default select example"" >
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
                            <option selected><?=$show["time_start"] ?></option>
                            <?php
                                endforeach; 
                            ?>
                            <option>Select new time</option>
                            <option value="A11">11:00 AM</option>
                            <option value="A1">1:00 PM</option>
                            <option value="A3">3:00 PM</option>
                            <option value="A5">5:00 PM</option>
                            <option value="A7">7:00 PM</option>
                        </select>
                    </div>
                </div>
                
                <div class="col mb-3">
                    <label for="exampleInputEmail1" class="form-label">Hall name</label>
                    <select class="form-select p-2" aria-label="Default select example">
                        <?php   
                        foreach ($showId as $show):
                        ?>
                        <option selected><?=$show["hall_name"] ?></option>
                        <?php
                            endforeach; 
                        ?>
                        <?php   
                        foreach ($shows as $show):
                        ?>
                        <option selected><?=$show["hall_name"] ?></option>
                        <?php
                            endforeach; 
                        ?>
                    </select>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" name="submit" class="btn btn-primary w-100">Update</button>
                </div>
            </form>
        </div>

    </body>
</html>