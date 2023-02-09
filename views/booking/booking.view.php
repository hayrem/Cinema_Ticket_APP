<?php 
    $seatLetter=['A','B','C','D','E','F','G','H','J'];
?>
<div class="seat-container">
    <div class="container-form-seat">
    <form action="index.php" method="POST" class="">
        <div class="theatre">
            <div class="screen-side">
                <div class="screen">Screen</div>
                <h3 class="select-text">Please select a seat</h3>
            </div>
            <div class="exit exit--front">
            </div>
            <ol class="cabin">
                <?php
                    $count=1;
                    foreach ($seatLetter as $value)
                    {
                        echo
                        "<li class='row row--$count'>
                            <ol class='cinema-seat mt-0' type='$value'>";
                            for ($i = 1; $i <=9; $i++){
                                global $value;
                                echo 
                                "<li class='seat'>
                                    <input type='checkbox' name='seat' value='$i$value' id='$i$value'/>
                                    <label for='$i$value'>$i$value</label>
                                </li>";
                            };
                        echo 
                        "</li>
                        </ol>";
                        $count+=1;

                    };

                ?>
            </ol>
            <div class="exit exit--back">
            </div>
        </div>
    </form>
    </div>

    <div class="info-form">
        <form action="" class="w-75">
            <span class="fs-4 mb-4">Show time detail</span>
            <div class="mb-3 mt-4">
                <label class="form-label fs-5">Hall :</label>
                <span style="color:red;"></span>
		    </div>
            <div class="mb-2">
                <label class="form-label fs-5">Seat :</label>
                <span style="color:red;"></span>
		    </div>
            <div class="mb-2">
                <label class="form-label fs-5">Date show :</label>
                <span style="color:red;"></span>
		    </div>
            <div class="mb-2">
                <label class="form-label fs-5">Total price :</label>
                <span style="color:red;"></span>
		    </div>
            <span class="fs-4 mb-4">Customer info</span>
            <div class="row g-3 mb-3 mt-3">
                <div class="col">
                    <label class="form-label">First name</label>
                    <input type="text" class="form-control" placeholder="First name" aria-label="First name" name="firstName" value="<?= (isset($_POST['firstName'])) ? $_POST['firstName'] : "" ?>">
                    <span style="color:red;"><?= (isset($messageError['firstName'])) ? $messageError['firstName'] : "" ?></span>
                </div>
                <div class="col">
                    <label class="form-label">Last name</label>
                    <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" name="lastName" value="<?= (isset($_POST['lastName'])) ? $_POST['lastName'] : "" ?>">
                    <span style="color:red;"><?= (isset($messageError['lastName'])) ? $messageError['lastName'] : "" ?></span>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" 
                class="form-control"
                name="email"
                placeholder="Enter you email address" 
                value="<?= (isset($_POST['email'])) ? $_POST['email'] : "" ?>">
                <span style="color:red;"><?= (isset($messageError['email'])) ?
                $messageError['email'] : "" ?></span>
		    </div>
            <div class="mb-3">
                <label class="form-label">Phone number</label>
                <input type="number"
                class="form-control" 
                name="number" 
                placeholder="Enter your phone number"
                value="<?= (isset($_POST['password'])) ? $_POST['password'] : "" ?>">
                <span style="color:red;"><?= (isset($messageError['password'])) ? $messageError['password'] : "" ?></span>
            </div class="mb-3">
            <div>
                <label class="form-label">Seat</label>
                <div id="result"></div>  
                <script>  
                    $(document).ready(function(){  
                        $('#submit').click(function(){  
                            var languages = [];  
                            $('.get_value').each(function(){  
                                    if($(this).is(":checked"))  
                                    {  
                                        languages.push($(this).val());  
                                    }  
                            });  
                            languages = languages.toString();  
                            $.ajax({  
                                    url:"insert.php",  
                                    method:"POST",  
                                    data:{languages:languages},  
                                    success:function(data){  
                                        $('#result').html(data);  
                                    }  
                            });  
                        });  
                    });  
                </script>  
            </div>
            <!-- <button class="popup-button btn btn-primary w-100 mt-4">PAYMENT</button> -->
            <button class="popup-button">PAYMENT</button>
        </form>
        <div class="wrapper">
        <div class="popup-box">
            <h2>Credit/Debit Card</h2>
            <div class="card_types">
                <img class="card_img" src="https://cdn-icons-png.flaticon.com/512/349/349221.png" alt="" width="10%"/>
                <img class="card_img" src="https://cdn-icons-png.flaticon.com/512/349/349230.png" alt=""  width="10%"/>
                <img class="card_img" src="https://cdn-icons-png.flaticon.com/512/349/349228.png" alt=""  width="10%"/>
                <img class="card_img" src="https://img.icons8.com/fluency/512/mastercard.png" alt=""  width="10%"/>
              </div>
            <a class="close-button popup-close" href="#">x</a>
            <div class="form-group">
                <form method="post">
                    <input type="text" name="Name" required placeholder="Card Name">
                    <input type="text" name="Name" required placeholder="Card Number">
                    <div>
                        <input type="text" name="Name" value="" placeholder="Expire" maxlength="4" />
                        <input type="text" name="Name" value="" placeholder="CVC" maxlength="3" />
                    </div>
                    <button type="submit" id="subscribe">SUBSCRIBE</button>
                </form>
            </div>
        </div>
    </div>
    </div>
</div>
<script src="../js/main.js"></script>