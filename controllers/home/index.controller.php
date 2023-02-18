<?php
$heading = "Home page";

require "models/users.model.php";
require "models/list_show.model.php";
if (isset($_COOKIE['email'])){
  if (!empty(userRole($_COOKIE['email']))){
    header ('location: /seller');
  }
}




if(empty(isset($_COOKIE['email'])) or (empty(userRole($_COOKIE['email'])))){
    require "views/partials/head.php";
    require "views/partials/nav.php";
    require "views/partials/banner.php";
    require "controllers/search/search.controller.php";
    require "views/home/index.view.php";
}
?>

<?php
require "controllers/alert/alert.controller.php";
require "database/database.php";
require "views/partials/footer.php";
?>