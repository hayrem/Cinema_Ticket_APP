<?php
// $heading = "Home page";

require "models/list_show.model.php";
require "controllers/search/search.controller.php";

$heading = "Home page";

require "models/post.model.php";
// $posts = getPosts();


?>

<?php

require "database/database.php";


require "views/home/index.view.php";

