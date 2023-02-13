<div class="bg-danger d-flex align-items-center" style="height: 15vh;">
    <div class="products-area-wrapper tableView">
        <div class="products-header p-3">
            <h2>Movie Setting</h2>
        </div>
    </div>
    <form class="form-inline mx-auto d-flex " method='post' name='fsearch'>
        <input class="form-control " id="live_search" type="search" placeholder="Search for products..." aria-label="Search" name='search' value="<?= (isset($_POST['search'])) ? $_POST['search'] : "" ?>">
        <button style="border: solid white 1px;" class="btn btn-success " type="submit"><span class="material-symbols-outlined" value='search'>search</span></i></button>
    </form>
    <div class="logout me-4 mt-2">
<!-- Logout -->
    <a href="../../controllers/users/sign_out.controller.php" class="ms-4"><span class="material-symbols-outlined" style="color: while;">logout</span></a>
    </div>
</div>