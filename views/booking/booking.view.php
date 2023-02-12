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
                            for ($i = 1; $i <=8; $i++){
                                global $value;
                                echo 
                                "<li class='seat'>
                                    <input type='checkbox' name='seat' value='$value$i' id='$value$i' onclick='function1();' class='box'/>
                                    <label for='$value$i'>$value$i</label>
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
        <form action="" class="w-75" method='POST'>
            <span class="fs-4 mb-4">Show time detail</span>
            <div class="mb-3 mt-4">
                <label class="form-label fs-5">Hall :</label>
                <span style="color:red;"></span>
		    </div>
            <div class="mb-2">
                <label class="form-label fs-5">Seat :</label>
                <span style="color:red;" id='seat'></span>
		    </div>
            <div class="mb-2">
                <label class="form-label fs-5">Date show :</label>
                <span style="color:red;"></span>
		    </div>
            <div class="mb-2">
                <label class="form-label fs-5">Total price :</label>
                <span style="color:red;" id='total_price'></span>
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
                <span style="color:red;"><?= (isset($messageError['email'])) ?$messageError['email'] : "" ?></span>
		    </div>
            <div class="mb-3">
                <label class="form-label">Phone number</label>
                <input type="number"
                class="form-control" 
                name="phoneNumber" 
                placeholder="Enter your phone number"
                value="<?= (isset($_POST['phoneNumber'])) ? $_POST['phoneNumber'] : "" ?>">
                <span style="color:red;"><?= (isset($messageError['phoneNumber'])) ? $messageError['phoneNumber'] : "" ?></span>
            </div>
            <!-- <button class="popup-button btn btn-primary w-100 mt-4">PAYMENT</button> -->
            <input class="btn btn-primary popup-button w-100 mt-4 p-2" type="submit" name="payment" value="PAYMENT" href=""/>
            
        </form>
        
    </div>
</div>
<script>
let seatPrice=5  
function function1() {
let arr = [];
let checkboxes = document.querySelectorAll("input[type='checkbox']:checked");
for (let i = 0; i < checkboxes.length; i++) {
arr.push(checkboxes[i].value)
}
let result = document.querySelector('#seat');
result.textContent = arr;
let price = document.querySelector('#total_price')
let totalPrice = arr.length;
console.log(totalPrice);
price.textContent = totalPrice*seatPrice + '$';

}
</script>
<?php
    if (isset($_POST['payment']))
    {{if (isset($messageError)){
        if (empty($messageError)){
            require 'views/booking/payment.view.php';
        }
    }};};
?>
