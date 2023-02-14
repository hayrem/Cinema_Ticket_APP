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
                    <input type="date" name="trip-start" value="2023-01-01" min="2023-01-01" max="2023-12-31" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="exampleInputEmail1" class="form-label">Time start</label>
                        <input  class="form-control" type="time" value="00:00" id="time_start" name="time_start" min="12:00" max="18:00" required>
                    </div>
                    <div class="col mb-3">
                        <label for="exampleInputEmail1" class="form-label">Time end</label>
                        <input  class="form-control" type="time" value="00:00" id="time_start" name="time_start" min="12:00" max="18:00" required>
                    </div>
                </div>
                <div class="col mb-3">
                    <label for="exampleInputEmail1" class="form-label">Movie name</label>
                    <select class="form-select p-2" aria-label="Default select example">
                        <option selected>Open this select movie title</option>
                        <?php   
                        foreach ($shows as $show):
                        ?>
                        <option value="<?=$show['title'];?>"><?=$show['title'];?></option>
                        <?php
                            endforeach; 
                        ?>
                    </select>
                </div>
                <div class="col mb-3">
                    <label for="exampleInputEmail1" class="form-label">Hall name</label>
                    <select class="form-select p-2" aria-label="Default select example">
                        <option selected></option>
                        <?php   
                        foreach ($halls as $hall):
                        ?>
                        <option value="<?=$hall['name'];?>"><?=$hall['name'];?></option>
                        <?php
                            endforeach; 
                        ?>
                    </select>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" name="submit" class="btn btn-primary w-100">Create</button>
                </div>
            </form>
        </div>

        </body>

        </html>