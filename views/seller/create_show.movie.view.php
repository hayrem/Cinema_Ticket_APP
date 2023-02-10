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
                <h3>Add new movie</h3>
            </div>
        </div>

        <div class="form-createmovie p-4">
            <form class="bg-white  p-4 shadow-lg " style="width: 80%;border-radius:10px;" method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Date show</label>
                    <input type="text" name="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <span style="color:red;"><?= (isset($messageError['date'])) ? $messageError['date'] : "<span>.</span>" ?></span>

                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Time start</label>
                    <input type="text" name="time_start" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <span style="color:red;"><?= (isset($messageError['time_start'])) ? $messageError['time_start'] : "<span>.</span>" ?></span>

                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Time end</label>
                    <input type="text" name="time_end" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <span style="color:red;"><?= (isset($messageError['time_end'])) ? $messageError['time_end'] : "<span>.</span>" ?></span>

                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Movie ID</label>
                    <input type="number" name="movie_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <span style="color:red;"><?= (isset($messageError['movie_id'])) ? $messageError['movie_id'] : "<span>.</span>" ?></span>

                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Hall ID</label>
                    <input type="number" name="cinema_hall_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <span style="color:red;"><?= (isset($messageError['cinema_hall_id'])) ? $messageError['cinema_hall_id'] : "<span>.</span>" ?></span>

                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" name="submit" class="btn btn-primary w-100">Create</button>
                </div>
            </form>
        </div>

        </body>

        </html>