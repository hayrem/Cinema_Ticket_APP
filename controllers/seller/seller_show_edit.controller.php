<?php
require "models/seller_list_show.model.php";
require "models/list_show.model.php";


$showId = $_GET["show_id"] ? $_GET["show_id"] : null; //get id from quẻry to ínert to fuction get id show 

$showEdit = getShowIdToEdit($showId);
print_r ($showEdit);


if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $dateShow = $_POST["date_show"];
    $timeStart = $_POST["time_start"];
    $hall = $_POST["hall"];
    $show_id = $_POST["show_id"];

    echo $dateShow;
    echo $timeStart;
    echo $hall;
    echo $show_id;
    
    if(!empty($dateShow) and !empty($timeStart) and !empty($hall) and !empty($dateShow)){
        editShow($dateShow, $timeStart,$hall,$dateShow, $show_id);
        header("location:/seller/setting");
    }
    
    
}
require("views/seller/seller_show_edit.view.php");

