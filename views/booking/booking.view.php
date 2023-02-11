<?php 
    $seatLetter=['A','B','C','D','E','F','G','H','J'];
?>
<script>
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
    price.textContent = totalPrice*5 + '$';

}
</script>
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
        <form action="" class="w-75">
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
<div class="login d-flex justify-content-center align-items-center vh-100 text-white">
  <form class="shadow p-3 bg-primary" style="border-radius: 30px; opacity:0.7;" method="post">
    <h2 class="d-flex justify-content-center">Credit/Debit Card</h2>
    <div class="card_types d-flex justify-content-center" style="width: 30rem;">
        <img class="card_img m-2" src="https://cdn-icons-png.flaticon.com/512/349/349221.png" alt="" width="10%"/>
        <img class="card_img m-2" src="https://cdn-icons-png.flaticon.com/512/349/349230.png" alt=""  width="10%"/>
        <img class="card_img m-2" src="https://cdn-icons-png.flaticon.com/512/349/349228.png" alt=""  width="10%"/>
        <img class="card_img m-2" src="https://img.icons8.com/fluency/512/mastercard.png" alt=""  width="10%"/>
    </div>
		<div class="mb-3">
			<label class="form-label">Card Name</label>
			<input type="text" 
			class="form-control" placeholder="Card Name">
		</div>
		<div class="mb-3">
			<label class="form-label">Card Number</label>
			<input id="card_number" class="form-control" pattern="(\d{4}\s?){4}" maxlength="19" placeholder="1111-2222-3333-4444">
		</div>
    <div class="mb-3">
			<div class="row g-3">
				<div class="col">
					<label class="form-label">Expired</label>
          <input class="form-control"  maxlength='5' placeholder="MM/YY" type="text" onkeyup="formatString(event);">
          
				</div>
				<div class="col">
					<label class="form-label">CVV</label>
					<input type="text" class="form-control" placeholder="123" maxlength="3">
				</div>
			</div>
		</div>
		<div class="contain-btn mt-4">
			<button type="submit" class="btn btn-danger p-2" style="width:100%; border-radius:10px;">Payment</button>
		</div>
	</form>
</div>
</div>
</div>
</div>

<script>
  card_number.addEventListener('keyup',function (e) {
  if (e.keyCode !== 8) {
      if (this.value.length === 4 || this.value.length === 9 || this.value.length === 14) {
      this.value = this.value += '-';
      }
  }
  });
  function formatString(e) {
  var inputChar = String.fromCharCode(event.keyCode);
  var code = event.keyCode;
  var allowedKeys = [8];
  if (allowedKeys.indexOf(code) !== -1) {
    return;
  }

  event.target.value = event.target.value.replace(
    /^([1-9]\/|[2-9])$/g, '0$1/' // 3 > 03/
  ).replace(
    /^(0[1-9]|1[0-2])$/g, '$1/' // 11 > 11/
  ).replace(
    /^([0-1])([3-9])$/g, '0$1/$2' // 13 > 01/3
  ).replace(
    /^(0?[1-9]|1[0-2])([0-9]{2})$/g, '$1/$2' // 141 > 01/41
  ).replace(
    /^([0]+)\/|[0]+$/g, '0' // 0/ > 0 and 00 > 0
  ).replace(
    /[^\d\/]|^[\/]*$/g, '' // To allow only digits and `/`
  ).replace(
    /\/\//g, '/' // Prevent entering more than 1 `/`
  );
}
</script>
<!-- <script src="../js/main.js"></script> -->
