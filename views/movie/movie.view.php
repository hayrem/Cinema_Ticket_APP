<?php 
$country_list = ["USA","France","Thailand","England","China","Vietnam","Khmer","Italy","Germany","Hongkong","Korea"];
$genre_list = ["Action","Adventure","Animation","Anime","Asian Dramas","Biography",
                "Documentary","Drama","Family","Fantasy","History","Crime","Horror",
                "Mystery","Romance","Sci-Fi","Sport","Thriller","War","Western","Music"];
?>
<div class="d-flex me-4 pt-2" style="margin-left:61% ;">
    <button class="border-0 m-1 p-2 d-flex align-items-center justify-content-around bg-dark" style="width: 10rem; color:white; border-radius:5px;"> Sort by <span>.</span><a href="">Title</a></button>
    <select class='m-1 p-2 bg-dark'name="country" id="country" style="color:white; border-radius:5px; border:none;">
        <option value="none" selected disabled hidden>Country</option>
        <?php
            foreach($country_list as $country){
                echo "<option value='$country'>$country</option>";
            }
        ?>
    </select> 
    <select name='year' id='year' class='selectpicker p-2 m-1 bg-dark'  style="color:white; border-radius:5px;border:none;">;
        <option value='none' selected disabled hidden>Year</option>
            <?php 
                for ($i = 2023; $i >= 1992; $i--) {
                    echo "<option value='$i' >$i</option>";
                } 
            ?>
    </select>
    <select class='m-1 p-2 bg-dark' name='genre' id='genre' style="color:white; border-radius:5px; border:none;">
        <option value='none' selected disabled hidden>All Genre</option>
        <?php 
            foreach($genre_list as $genre){
                echo "<option value='$genre'>$genre</option>";
            }
        ?>
    </select>
</div>