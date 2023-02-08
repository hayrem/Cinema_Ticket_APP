<?php
require "views/partials/head.php";
?>
<div class="app-container">
    <?php
    require "views/partials/sidebar.php";

    ?>

    <div class="app-content">
        <div class="app-content-actions">
            <input class="search-bar" placeholder="Search..." type="text">
        </div>
        <div class="products-area-wrapper tableView">
            <div class="products-header">
                <h3>Edit movie</h3>
            </div>
        </div>
        <div class="form-createmovie p-4">
            <form class="bg-white  p-4 shadow-lg" style="width: 80%;border-radius:10px;" method="post">
                <div class="row mb-3">
                    <div class="col">
                        <label for="exampleInputEmail1" class="form-label">Title of movie</label>
                        <input type="text" name='title' class="form-control" value="<?= (isset($_POST['title'])) ? $_POST['title'] : "" ?>">
                        <span style="color:red;"><?= (isset($messageError['title'])) ? $messageError['title'] : "<span>.</span>" ?></span>
                    </div>

                    <div class="col">
                        <label for="exampleInputPassword1" class="form-label">Genre</label>
                        <input type="text" name="genre" class="form-control" value="<?= (isset($_POST['genre'])) ? $_POST['genre'] : "" ?>">
                        <span style="color:red;"><?= (isset($messageError['genre'])) ? $messageError['genre'] : "<span>.</span>" ?></span>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Duration</label>
                    <input type="text" name="duration" class="form-control" value="<?= (isset($_POST['duration'])) ? $_POST['duration'] : "" ?>">
                    <span style="color:red;"><?= (isset($messageError['duration'])) ? $messageError['duration'] : "<span>.</span>" ?></span>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Release Date</label>
                    <input type="year" name="released" class="form-control" value="<?= (isset($_POST['released'])) ? $_POST['released'] : "" ?>">
                    <span style="color:red;"><?= (isset($messageError['released'])) ? $messageError['released'] : "<span>.</span>" ?></span>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="exampleInputEmail1" class="form-label">Choose Country</label>
                        <select class="form-select p-2" aria-label="Default select example">
                            <option selected>Choose country</option>
                            <option value="english">English</option>
                            <option value="france">France</option>
                            <option value="khmer">Khmer</option>
                        </select>
                    </div>

                    <div class="col mb-3">
                        <label for="exampleInputEmail1" class="form-label">Choose language</label>
                        <select class="form-select p-2" aria-label="Default select example">
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
                        <input type="file" name="image" class="form-control form-control-lg">
                    </div>
                    <div class="col mb-3">
                        <label for="formFileSm" class="form-label">Upload trailer</label>
                        <input type="file" name="trailer" class="form-control form-control-lg">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="15" col="200"></textarea>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" name="submit" class="btn btn-primary w-100">Create</button>
                </div>
            </form>
        </div>


    </div>
</div>

</body>

</html>