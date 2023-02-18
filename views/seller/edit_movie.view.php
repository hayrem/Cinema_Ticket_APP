<?php
require "views/partials/head.php";
?>
<div class="app-container">

    <?php require "views/partials/sidebar.php"; ?>

    <div class="app-content">
        <div class="products-area-wrapper tableView">
            <div class="products-header p-4 bg-dark text-white">
                <h3>Edit movie</h3>
            </div>
        </div>


        <!--  -->
        <div class="d-flex justify-content-center align-items-center p-4" style="height: auto;">
            <form action="/seller/update" class="bg-white  p-4 shadow-lg" style="width: 80%;border-radius:10px;" method="post" enctype="multipart/form-data">
                <input type="hidden" value="<?= $editMovie['movie_id'] ?>" name="movie_id">
                <div class="row mb-3">
                    <div class="col">
                        <label for="exampleInputEmail1" class="form-label">Title of movie</label>
                        <input type="text" name='title' class="form-control" value="<?= $editMovie['title'] ?>">
                        <span style="color:red;"><?= isset($messageError['title']) ? $messageError['title'] : "<span>.</span>" ?></span>
                    </div>

                    <div class="col">
                        <label for="exampleInputPassword1" class="form-label">Genre</label>
                        <select name="genre" class="form-select p-2" aria-label="Default select example">
                          <option selected><?= $editMovie['genre'] ?></option>
                            
                            <?php   
                            $array = ['Action', 'Adventure', 'Comedy','Crime and mystery','Fantasy','Horror','Romance','Animation','Strategy'];
                            foreach ($array as $show):
                                if($editMovie['genre'] == $show){
                                    echo " ";
                                }else{
                                    echo "<option>".$show."</option>";
                                }
                            ?>
                            <?php
                                endforeach; 
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="exampleInputEmail1" class="form-label">Duration</label>
                        <input type="text" name="duration" class="form-control" value="<?= $editMovie['duration'] ?>">
                        <span style="color:red;"><?= (isset($messageError['duration'])) ? $messageError['duration'] : "<span>.</span>" ?></span>
                    </div>
                    <div class="col mb-3">
                        <label for="exampleInputPassword1" class="form-label">Release Date</label>
                        <input type="text" name="released" class="form-control" value="<?= $editMovie['released'] ?>">
                        <span style="color:red;"><?= (isset($messageError['released'])) ? $messageError['released'] : "<span>.</span>" ?></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="exampleInputEmail1" class="form-label">Choose language</label>
                        <select name="language" class="form-select p-2" aria-label="Default select example">
                        <option selected><?= $editMovie['language'] ?></option>

                            <?php   
                              $languages = ['English', 'France', 'Khmer', 'Poland', 'Portuguese'];
                              foreach ($languages as $language):
                                if($editMovie['language'] == $language){
                                    echo " ";
                                }else{
                                    echo "<option>".$language."</option>";
                                }
                              ?>
                              <?php
                                  endforeach; 
                              ?>
                        </select>
                        <span style="color:red;"><?= (isset($messageError['language'])) ? $messageError['country'] : "<span>.</span>" ?></span>


                    </div>

                    <div class="col mb-3">
                        <label for="exampleInputEmail1" class="form-label">Choose Country</label>
                        <select name="country" class="form-select p-2" aria-label="Default select example">
                        <option selected><?= $editMovie['country'] ?></option>
                            <?php   
                            $coutries = ['England', 'France', 'Khmer', 'Poland', 'Portuguese','Russian','Switzerland','Hungary','American', 'Canada','Australia','Germany','China', 'Japan'];
                            foreach ($coutries as $country):
                                if($editMovie['country'] == $country){
                                    echo " ";
                                }else{
                                    echo "<option>".$country."</option>";
                                }
                            ?>
                            <?php
                                endforeach; 
                            ?>
                        </select>
                        <span style="color:red;"><?= (isset($messageError['country'])) ? $messageError['country'] : "<span>.</span>" ?></span>


                    </div>
                </div>
                <div class="row"> 
                    <div class="col mb-3 "  >
                        
                        <label for="formFileSm" class="form-label">Upload poster</label>
                        <input type="file" name="image" class="form-control form-control-lg "  value="<?= (isset($_POST['image'])) ? $_POST['image'] : "" ?>" >                        
                        <span><?= (isset($messageError['image'])) ? $messageError['image'] : "" ?></span>
                    </div>
                    <div class="col mb-3">
                        <img class="ms-4" src="../uploads/<?=$editMovie['image']?>" alt="" style="width:80px;" >
                    </div>
                </div>
                <div>
                <label for="formFileSm" class="form-label">Upload trailer</label>
                        <input type="text" name="trailer" placeholder="URL trailer" value="<?= $editMovie['trailer'] ?>" class="form-control form-control-lg">
                        <span style="color:red;"><?= (isset($messageError['trailer'])) ? $messageError['trailer'] : "<span>.</span>" ?></span>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                    <textarea class="form-control" name="description"  id="exampleFormControlTextarea1" style="height: 100px">
                        <?= $editMovie['description'] ?> 
                    </textarea>
                    <span style="color:red;"><?= (isset($messageError['description'])) ? $messageError['description'] : "<span>.</span>" ?></span>
                </div>
                <div class="d-flex justify-content-end ">
                    <button type="submit" name="submit" class="btn btn-primary w-100 me-2 "><a class="text-white" style="text-decoration: none;" href="/seller/setting">Cencel</a></button>
                    <button type="submit" name="submit" class="btn btn-primary w-100 ">Update</button>
                </div>
            
            </form>
        </div>

        </body>

        </html>