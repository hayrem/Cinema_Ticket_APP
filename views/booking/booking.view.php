<?php
$seatLetter = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I','J'];
?>
<div class="seat-container">
    <div class="container-form-seat m-0 p-0"  style="background-color: var(--app-bg);" >
        <form action="index.php" method="POST" class="seat-container m-0 p-0" >
            <div class="theatre">
                <div class="screen-side">
                    <div class="screen">Screen</div>
                    <h3 class="select-text">Please select a seat</h3>
                </div>
                <div class="exit exit--front">
                </div>
                <ol class="cabin">
                    <?php
                    $count = 1;
                    foreach ($seatLetter as $value) {
                        echo
                        "<li class='row row--$count'>
                            <ol class='cinema-seat mt-0' type='$value'>";
                        for ($i = 1; $i <= 10; $i++) {
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
                        $count += 1;
                    };

                    ?>
                </ol>
                <div class="exit exit--back">
                </div>
            </div>
        </form>
    </div>

    <div class="info-form">
        <form action="" class="w-75" method='POST' onsubmit='return false' id ='customer-booking-info'>
            <span class="fs-4 mb-4 text-white">Show time detail :</span>
            <div class="mb-3 mt-4">
                <label class="form-label fs-5 text-white">Hall : <span style="color:white;"><?= $hall ?></span></label></label>
                <span style="color:red;"></span>
            </div>
            <div class="mb-3 mt-4">
                <label class="form-label fs-5 text-white">Movie title : <span style="color:white;"><?= $getTitle ?></span></label>
                <span style="color:red;"></span>
            </div>
            <div class="mb-2">
                <label class="form-label fs-5 text-white">Seat :</label>
                <span style="color:white; " class="fs-5" id='seat'></span>
            </div>
            <div class="mb-2">
                <label class="form-label fs-5 text-white">Date show : <span style="color:white;"><?= $date_show ?></span></label></label>
                <span style="color:red;"></span>
		    </div>
            <div class="mb-2">
                <label class="form-label fs-5 text-white">Total price :</label>
                <span style="color:white;" class="fs-5" id='total_price'></span>
            </div>
            <span class="fs-4 mb-4 text-white">Customer info :</span>
            <div class="row g-3 mb-3 mt-3">
                <div class="col" id='input-firstname'>
                    <label class="form-label text-white">First name</label>
                    <input type="text" class="form-control " id='inputfirstname' placeholder="First name" aria-label="First name" name="firstName">
                    <span style="color:red;" id="firstname"><span class="error">.</span></span>
                </div>
                <div class="col" id='input-lastname'>
                    <label class="form-label text-white">Last name</label>
                    <input type="text" class="form-control " id='inputlastname' placeholder="Last name" aria-label="Last name" name="lastName">
                    <span style="color:red;" id="lastname"><span class="error">.</span></span>
                </div>
            </div>
            <div class="mb-3" id='input-email'>
                <label class="form-label text-white">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter you email address" id='inputemail'>
                <span style="color:red;" id="email"><span class="error">.</span></span>
            </div>
            <div class="mb-3" id='input-phonenumber'>
                <label class="form-label text-white">Phone number</label>
                <input type="number" class="form-control input-phonenumber" name="number" id='inputphonenumber' placeholder="Enter your phone number">
                <span style="color:red;" class="p-2" id="phonenumber"><span class="error">.</span></span>
            </div class="mb-3">
            <input class="btn btn-primary popup-button w-100 mt-4 p-2" id='button-payment' type="submit" name="payment" value="PAYMENT" href="" />

        </form>
    </div>

    <div class="d-flex justify-content-center align-items-center text-white">
        <div class="payment-container" style="width:100%;height:100%;background-color: #000000b7;">
            <form class="payment-form p-3 " style="border-radius: 30px; background-color:white;" method='POST' onsubmit='return false'>
                <h2 class="d-flex justify-content-center">Credit/Debit Card</h2>
                <div class="card_types d-flex justify-content-center" style="width: 30rem;">
                    <img class="card_img m-2" src="https://cdn-icons-png.flaticon.com/512/349/349221.png" alt="" width="10%" />
                    <img class="card_img m-2" src="https://cdn-icons-png.flaticon.com/512/349/349230.png" alt="" width="10%" />
                    <img class="card_img m-2" src="https://cdn-icons-png.flaticon.com/512/349/349228.png" alt="" width="10%" />
                    <img class="card_img m-2" src="https://img.icons8.com/fluency/512/mastercard.png" alt="" width="10%" />
                </div>
                <div class="mb-3 card-name-form">
                    <label class="form-label">Card Name</label>
                    <input type="text" class="form-control" id='card-name' placeholder="Enter your card name" name="card-name">
                    <span style="color:red;" id="cardname"><span class="error">.</span></span>
                </div>
                <div class="mb-3 card-number-form">
                    <label class="form-label ">Card Number</label>
                    <input id="card-number" class="form-control" maxlength="19" placeholder="1111-2222-3333-4444" name="card-number" placeholder="Enter your card number">
                    <span style="color:red;" id="cardnumber"><span class="error">.</span></span>
                </div>
                <div class="mb-3">
                    <div class="row g-3">
                        <div class="col expired-form">
                            <label class="form-label">Expired</label>
                            <input class="form-control" id='expired-input' maxlength='5' placeholder="MM/YY" type="text" onkeyup="formatString(event);" name="expired">
                            <span style="color:red;" id="expried"><span class="error">.</span></span>
                        </div>
                        <div class="col cvv-form">
                            <label class="form-label">CVV</label>
                            <input type="text" class="form-control" id='cvv-input' placeholder="123" maxlength="3" name="cvv" ?>
                            <span style="color:red;" id="CVV"><span class="error">.</span></span>
                        </div>
                    </div>
                    <div class="contain-btn mt-4 d-flex justify-content-between">
                        <button type="button" class="btn-payment btn btn-danger p-2" style="width:48%; border-radius:10px;" id='payment-btn'>Payment</button>
                        <button type="button" class="btn-payment btn btn-primary p-2" style="width:48%; border-radius:10px;" id='cancel'>Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="../../views/js/main.js"></script>