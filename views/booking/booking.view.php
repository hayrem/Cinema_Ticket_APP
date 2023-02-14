<?php 
    $seatLetter=['A','B','C','D','E','F','G','H','J'];
?>
<?php foreach ($halls as $movie): 
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
                <label class="form-label fs-5">Hall :<?php echo $movie["hall_name"]; ?></label>
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
<?php endforeach ?>
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
            
$messageError = [];
// function validation($data): string
// {
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
//     return $data;
    
// }
if (isset($_POST['payment-btn']))
{if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    
    $cardName = validation($_POST["card-name"]);
    $cardNumber = validation($_POST["card-number"]);
    $expired = validation($_POST["expired"]);
    $cvv = validation($_POST["cvv"]);
    if(empty($cardName)){
        $messageError["firstName"] = "Please enter your card name";
    }elseif(!preg_match("/^[a-zA-Z\d]+$/",$cardName))
    {
        $messageError["card-name"] = 'Card name most more that 5 letters and least that 20 letters';
    }
    if(empty($cardNumber)){
        $messageError["card-number"] = "Please enter your card number";
    }elseif(!preg_match("/^(?:4[0-9]{12}(?:[0-9]{3})?|5[1-5][0-9]{14})$/",$cardNumber))
    {
        $messageError["card-number"] = 'Card number must be 16 digits';
    }
    if(empty($expired))
    {
        $messageError["expired"] = "Please enter your expired";
    } 
    elseif (!preg_match("/^(0?[1-9]|1[0-2])([0-9]{2})$/",$expired))
    {
        $messageError["expired"] = "Expired must be only 4 digits"; 
    }
    if (empty($cvv)){
        $messageError['cvv'] = 'Please enter your cvv';
    }
    elseif (!preg_match("/^([1-9]\/|[2-9])$/",$cvv)){
        $messageError['cvv'] = 'CVV must be 3 digits';
    }
}}

        }
    }};};
?>
