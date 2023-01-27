<?php
// $heading = "Home page";
require "views/partials/head.php";
require "views/partials/nav.php";
require "views/partials/banner.php";

require "models/list_show.model.php";
require "controllers/search/search.controller.php";

$heading = "Home page";

require "models/post.model.php";
// $posts = getPosts();
<<<<<<< HEAD
=======
require "views/home/index.view.php";
>>>>>>> 54279f54bbb92427dd9729b0da7fff811a97dcd8


?>

<?php

require "database/database.php";


require "views/home/index.view.php";

<<<<<<< HEAD
=======
        echo $id;
          
    } else {
        echo "<h6 class='text-danger text-ceter mt-3 '> no results found</h6>";
    }
}
require "views/partials/footer.php"?>
>>>>>>> 54279f54bbb92427dd9729b0da7fff811a97dcd8
