<?php
require "views/partials/head.php";
?>
<div class="app-container">

    <?php require "views/partials/sidebar.php" ?>

    <div class="app-content">
    <?php require "views/partials/header.php" ?>

        <!--  -->
        <div class="d-flex justify-content-center align-items-center p-4" style="height: auto;">
            <form class="bg-white  p-4 shadow-lg" style="width: 80%;border-radius:10px;" method="post" enctype="multipart/form-data">
                <div class="row mb-3">
                    <div class="col">
                        <label for="exampleInputEmail1" class="form-label">Title of movie</label>
                        <input type="text" name='title' class="form-control" value="<?= (isset($_POST['title'])) ? $_POST['title'] : "" ?>">
                        <span style="color:red;"><?= (isset($messageError['title'])) ? $messageError['title'] : "<span>.</span>" ?></span>
                    </div>

                    <div class="col">
                        <label for="exampleInputPassword1" class="form-label">Genre</label>
                        <select name="genre" class="form-select p-2" aria-label="Default select example">
                            <option selected>Please select genre of movie</option>
                            <option value="Action">Action</option>
                            <option value="Adventure">Adventure</option>
                            <option value="Comedy">Comedy</option>
                            <option value="Crime and mystery">Crime and mystery</option>
                            <option value="Fantasy">Fantasy</option>
                            <option value="Historical">Historical</option>
                            <option value="Historical fiction">Historical fiction</option>
                            <option value="Horror">Horror</option>
                            <option value="Romance">Romance</option>
                            <option value="Animation">Animation</option>
                            <option value="Strategy">Strategy</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="exampleInputEmail1" class="form-label">Duration</label>
                        <input type="text" name="duration" class="form-control" value="<?= (isset($_POST['duration'])) ? $_POST['duration'] : "" ?>">
                        <span style="color:red;"><?= (isset($messageError['duration'])) ? $messageError['duration'] : "<span>.</span>" ?></span>
                    </div>
                    <div class="col mb-3">
                        <label for="exampleInputPassword1" class="form-label">Release Date</label>
                        <input type="text" name="released" class="form-control" value="<?= (isset($_POST['released'])) ? $_POST['released'] : "" ?>">
                        <span style="color:red;"><?= (isset($messageError['released'])) ? $messageError['released'] : "<span>.</span>" ?></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="exampleInputEmail1" class="form-label">Choose Country</label>
                        <select name="country" class="form-select p-2" aria-label="Default select example">
                            <option selected>Choose country</option>
                            <option value="english">English</option>
                            <option value="france">France</option>
                            <option value="khmer">Khmer</option>
                        </select>
                    </div>

                    <div class="col mb-3">
                        <label for="exampleInputEmail1" class="form-label">Choose language</label>
                        <select name="language" class="form-select p-2" aria-label="Default select example">
                            <option selected>Choose language</option>
                            <option value="english">English</option>
                            <option value="france">France</option>
                            <option value="khmer">Khmer</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="formFileSm" class="form-label">Upload poster</label>
                        <input type="file" name="image" multiple class="form-control form-control-lg">
                    </div>
                    <div class="col mb-3">
                        <label for="formFileSm" class="form-label">Upload trailer</label>
                        <input type="text" name="trailer" class="form-control form-control-lg">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                    <textarea  class="form-control" name="description" id="exampleFormControlTextarea1" style="height: 100px" rows="15" col="200"></textarea>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" name="submit" class="btn btn-primary w-100">Create</button>
                </div>
            </form>
        </div>

        </body>

        </html>