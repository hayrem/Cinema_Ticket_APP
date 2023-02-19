<?php

require "views/partials/head.php";
?>
<div class="app-container">
    <?php require "views/partials/sidebar.php" ?>

    <div class="app-content bg-dark">

        <?php require "views/partials/header.php" ?>

        <!--  -->

        <div class="container-fluid d-flex flex-wrap mt-4">
            <div class="d-flex mt-1 me-0 p-0 " style="margin:auto;width:50%;justify-content:flex-end;">
                <button class="btn btn-danger btn-sm mt-2 p-1 fs-5" style="width:40%" type="button"><a href="/seller/create_movie" style=" text-decoration: none;color:white;">Create movie</a></button>
            </div>
            <?php foreach ($listmovies as $show) : ?>
                <div class="card-detail mt-4" style="height: 20vh;">
                    <div class="card-thumbnail" style="width: 15%; ">
                        <img style="background-image: url(pic1x.png);" src="../uploads/<?= $show['image'] ?>" />
                    </div>
                    <div class="card-body-detail p-4 w-50">
                        <h5 class="row ms-1"><?= $show["title"]; ?></h5>
                        <div class="card-description">
                            <!-- <p class="fs-5"><?= $hallShow['description'] ?></p> -->
                        </div>
                        <form method="post" class="table_content_form" action="" onsubmit='return false'>
                            <?php
                            if ($show['post'] === 0) {
                            ?>
                                <button class="btn btn-danger btn-sm mt-2" style="width: 210%;" type="submit" id="<?= $show['movie_id'] ?>" onclick='myFunction("<?= $show["movie_id"] ?>");'>Post</button>
                            <?php
                            } else {
                            ?>
                                <button class="btn btn-primary btn-sm mt-2" style="width: 100%;" type="submit" id="<?= $show['movie_id'] ?>">Areadly Post</button>
                            <?php
                            }
                            ?>
                        </form>
                    </div>

                    <div class="d-flex flex-column mt-0 w-50 p-4 mt-2">
                        <div class="delete mb-3">
                            <span class="material-symbols-outlined me-2">edit</span>
                            <a type="submit" href="/seller/edit_show?movie_id=<?= $show['movie_id'] ?>" style=" text-decoration: none;color:white;">Edit show</a> 
                        </div>
                            <div class="delete mb-2">
                            <span class="material-symbols-outlined me-2">add_circle</span>
                            <a href="/seller/create_show?movie_id=<?= $show['movie_id'] ?>" style=" text-decoration: none;color:white;"> Create show</a>
                        </div>
                    </div>
                    <div class="w-50 p-4 d-flex flex-column mt-2 ">
                        <div class="delete mb-3">
                            <span class="material-symbols-outlined me-2">edit</span>
                            <a href="/seller/edit?movie_id=<?= $show['movie_id'] ?>" style=" text-decoration: none;color:white;">Edit movie</a>
                        </div>
                        <div class="delete mb-2">
                            <span class="material-symbols-outlined me-2">delete</span>
                            <a type="button" style=" text-decoration: none;color:red;" id="<?= $show['movie_id'] ?>" onclick='deleteShow("<?= $show["movie_id"] ?>");'>Delete movie</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
    function deleteShow(movieID) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: '<a href="/seller/delete?movie_id=' + movieID + '" style="color:white; text-decoration: none;">Yes, delete it!</a>'
        })
    }

    function myFunction(movieID) {
        Swal.fire({
            title: 'Your post has been success',
            icon: 'success',
            confirmButtonColor: '#3085d6',
            confirmButtonText: '<a href="/seller/setting?movie_id=' + movieID + '&postnow=1" style="color:white; text-decoration: none;">OK</a>'
        });

    }
</script>
</body>

</html>