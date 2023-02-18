<?php

require "views/partials/head.php";
?>
<div class="app-container">
    <?php require "views/partials/sidebar.php" ?>
    
    <div class="app-content bg-dark">
        
        <?php require "views/partials/header.php" ?>

        <!--  -->
    <div class="d-flex mt-4 me-4 p-1 " style="justify-content: end;">
        <a class="btn btn-primary" style="margin-right: 6rem;">Create new movie</a>
    </div>
        <div class="container-movecards mt-4">

            <?php foreach ($listmovies as $show) : ?>
                <div class="row justify-content-center mb-3" style="width: 120%;">
                    <div class="col-md-12 col-xl-10">
                        <div class="card shadow-0 border rounded-3">
                            <div class="card-body p-0">
                                <div class="row">
                                    <div class="col-md-3 col-lg-3 col-xl-2 mb-4 mb-lg-0">
                                        <div class="bg-image hover-zoom ripple rounded ripple-surface">
                                            <img src="../uploads/<?=$show['image'] ?>" class="w-100" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-6 p-3" style="width:65%;">
                                        <div class="col mt-1 mb-0">
                                            <h5 class="row"><?php echo $show["title"]; ?></h5>
                                            <span class="row mt-2"> Country: <?php echo $show["country"]; ?></span>
                                            <span class="row mt-2">Genre: <?php echo $show["genre"]; ?></span>
                                            <span class="row mt-2 mb-0">Release: <?php echo $show["released"]; ?> </span><br><br>
                                            <!-- submit post movie -->
                                            <form method="post" class="table_content_form" action="" onsubmit='return false'>
                                                <!-- <input type="hidden" name="postnow" value="1"/> -->
                                                <?php
                                                    if ($show['post'] === 0){
                                                    ?> 
                                                        <button class="btn btn-danger btn-sm mt-2" style="width: 20%;" type="submit" id="<?=$show['movie_id'] ?>" onclick='myFunction("<?=$show["movie_id"] ?>");'>Post</button>    
                                                    <?php
                                                    }else{
                                                    ?>
                                                        <button class="btn btn-primary btn-sm mt-2" style="width: 20%;" type="submit" id="<?=$show['movie_id'] ?>" >Areadly Post</button>    
                                                    <?php
                                                    }
                                                ?>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-2 col-xl-0 border-sm-start-none border-start p-3">
                                        <!-- <div class="d-flex flex-row align-items-center mb-1">
                                            <h4 class="mb-1 me-1">$13.99</h4>
                                        </div> -->
                                        <div class="d-flex flex-column mt-0">
                                            <button class="btn btn-primary btn-sm" type="button"> <a href="/seller/edit?movie_id=<?= $show['movie_id'] ?>" style=" text-decoration: none;color:white;">Edit</a></button>
                                            <button class="btn btn-danger btn-sm mt-2" type="button" id="<?=$show['movie_id'] ?>" onclick='deleteShow("<?=$show["movie_id"] ?>");'>Delete </button>
                                            <button class="btn btn-danger btn-sm mt-2" type="button"><a type="submit" href="/seller/create_show?movie_id=<?= $show['movie_id'] ?>" style=" text-decoration: none;color:white;">Add show</a> </button>
                                            <button class="btn btn-danger btn-sm mt-2" type="button"><a type="submit" href="/seller/edit_show?movie_id=<?= $show['movie_id'] ?>" style=" text-decoration: none;color:white;">Edit show</a> </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>

    function deleteShow(movieID){
        Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: '<a href="/seller/delete?movie_id='+movieID + '" style="color:white; text-decoration: none;">Yes, delete it!</a>'
        })
    }

    function myFunction(movieID){
        Swal.fire({
        title: 'Your post has been success',
        icon: 'success',
        confirmButtonColor: '#3085d6',
        confirmButtonText: '<a href="/seller/setting?movie_id='+movieID +'&postnow=1" style="color:white; text-decoration: none;">OK</a>'
        });
        
    }
 
</script>
</body>

</html>