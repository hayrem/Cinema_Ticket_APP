<div class="header d-flex align-items-center" style="height: 15vh;">
    <form class="form-inline mx-auto d-flex " method='post' name='fsearch'>
        <input class="form-control " id="live_search" type="search" placeholder="Search for products..." aria-label="Search" name='search' value="<?= (isset($_POST['search'])) ? $_POST['search'] : "" ?>">
        <button style="border: solid white 1px;" class="btn btn-search " type="submit"><span class="material-symbols-outlined" value='search'>search</span></i></button>
    </form>
    <div class="d-flex logout me-4 mt-2 ">
        <a href="../../controllers/users/sign_out.controller.php" class="ms-4" style="color:white"><span class="material-symbols-outlined" style="color: while;">logout</span></a>
        <a href="../../controllers/users/sign_out.controller.php" class="ms-2 mt-1" style="color:white; text-decoration: none;">Sing Out</a>
    </div>
</div>