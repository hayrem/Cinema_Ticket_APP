<?php
// require ('models/list_show.model.php');
echo "Wellcome bii";
require("views/seller/create_movie.view.php");
if (isset($_POST['submit']))
{
    $mv_title = $_POST['title'];
    $mv_genre = $_POST['genre'];
    $mv_country = $_POST['country'];
    $mv_duration = $_POST['duration'];
    $mv_language = $_POST['language'];
    $mv_released = $_POST['released'];
    $mv_image = $_POST['image'];
    $mv_description =$_POST['description'];
    $mv_trailer = $_POST['trailer'];
    // $show_date =$_POST['date'];
    // $show_time_start = $_POST['time_start'];
    // $show_time_end =$_POST['time_end'];
    // $hallName = $_POST['name'];
    // $total_seat = $mv_title_POST['total_seat'];

    echo "<h3>".$mv_title."</h3>";
    echo "<h3>".$mv_genre."</h3>";
    echo "<h3>".$mv_country."</h3>";
    echo "<h3>".$mv_duration."</h3>";
    echo "<h3>".$mv_language."</h3>";
    echo "<h3>".$mv_released."</h3>";
    echo "<h3>".$mv_image."</h3>";
    echo "<h3>".$mv_description."</h3>";
    echo "<h3>".$mv_trailer."</h3>";
}

// addNewMovie( $title, $genre,  $mv_country, $mv_duration, $mv_language, $mv_released, $mv_image, $mv_description,  $mv_trailer) ;
?>

