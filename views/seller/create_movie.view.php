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
                        <input type="text" placeholder="Enter title of movie" name='title' class="form-control" value="<?= (isset($_POST['title'])) ? $_POST['title'] : "" ?>">
                        <span style="color:red;"><?= (isset($messageError['title'])) ? $messageError['title'] : "<span>.</span>" ?></span>
                    </div>

                    <div class="col">
                        <label for="exampleInputPassword1" class="form-label">Genre</label>
                        <select name="genre" id="genre" class="form-select p-2" aria-label="Default select example">
                            <option value="">Please select genre of movie</option>
                            <?php   
                            $array = ['Action', 'Adventure', 'Comedy','Crime and mystery','Fantasy','Horror','Romance','Animation','Strategy'];
                            foreach ($array as $show):
                                echo "<option>".$show."</option>";
                            ?>
                            <?php
                                endforeach; 
                            ?>
                        </select>
                        <script type="text/javascript">
                            document.getElementById('genre').value = "<?php echo $_GET['genre'];?>";
                        </script>
                        <span style="color:red;"><?= (isset($messageError['genre'])) ? $messageError['genre'] : "<span>.</span>" ?></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="exampleInputEmail1" class="form-label">Duration</label>
                        <input type="text" placeholder="Enter duration of movie" name="duration" class="form-control" value="<?= (isset($_POST['duration'])) ? $_POST['duration'] : "" ?>">
                        <span style="color:red;"><?= (isset($messageError['duration'])) ? $messageError['duration'] : "<span>.</span>" ?></span>
                    </div>
                    <div class="col mb-3">
                        <label for="exampleInputPassword1" class="form-label">Release Date</label>
                        <input type="text" placeholder="Enter releas date of movie" name="released" class="form-control" value="<?= (isset($_POST['released'])) ? $_POST['released'] : "" ?>">
                        <span style="color:red;"><?= (isset($messageError['released'])) ? $messageError['released'] : "<span>.</span>" ?></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="exampleInputEmail1" class="form-label">Choose Country</label>
                        <select name="country" class="form-select p-2" aria-label="Default select example">
                        <option value="">Please select Choose Country</option>
                        <?php   
                              $countries = ['English', 'France', 'Khmer', 'Poland', 'Portuguese'];
                              foreach ($countries as $country)
                                {
                                    echo "<option>".$country."</option>";
                                }
                        ?>
                        </select>
                        <span style="color:red;"><?= (isset($messageError['country'])) ? $messageError['country'] : "<span>.</span>" ?></span>
                    </div>

                    <div class="col mb-3">
                        <label for="exampleInputEmail1" class="form-label">Choose language</label>
                        <select name="language" class="form-select p-2" aria-label="Default select example">
                        <option value="">Please select Choose language</option>
                        <?php   
                              $languages = ['English', 'France', 'Khmer', 'Poland', 'Portuguese'];
                              foreach ($languages as $language)
                                {
                                    echo "<option>".$language."</option>";
                                }
                        ?>
                        </select>
                        <span style="color:red;"><?= (isset($messageError['language'])) ? $messageError['language'] : "<span>.</span>" ?></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="formFileSm" class="form-label">Upload poster</label>
                        <input type="file" name="image" multiple class="form-control form-control-lg">
                        <span style="color:red;"><?= (isset($messageError['image'])) ? $messageError['image'] : "<span>.</span>" ?></span>
                    </div>
                    <div class="col mb-3">
                        <label for="formFileSm" class="form-label">Upload trailer</label>
                        <input type="text" placeholder="Upload URL" name="trailer" class="form-control form-control-lg">
                        <span style="color:red;"><?= (isset($messageError['trailer'])) ? $messageError['trailer'] : "<span>.</span>" ?></span>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                    <textarea  class="form-control" placeholder="Enter description" name="description" id="exampleFormControlTextarea1" style="height: 100px" rows="15" col="200"></textarea>
                </div>
                <span style="color:red;"><?= (isset($messageError['description'])) ? $messageError['description'] : "<span>.</span>" ?></span>
                <div class="d-flex justify-content-end">

                    <button type="submit" name="submit" class="btn btn-danger w-100 mt-4 bg-danger"><a href="/seller/setting" class="text-white" style="text-decoration: none;">Cancel</a></button>
                    <button type="submit" name="submit" class="btn btn-primary w-100 mt-4 ms-2">Create</button>
                </div>
            </form>
        </div>

        </body>

        </html>