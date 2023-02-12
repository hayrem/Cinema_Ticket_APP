
<div class="d-flex justify-content-center align-items-center text-white"  >
    <div class="payment-container" style="width:100%;height:100%;background-color: #000000b7;" >
       <form class="payment-form p-3 " style="border-radius: 30px; background-color:white;" method="post" action="/payment" >
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
                    class="form-control" placeholder="Enter your card name" name="card-name" 
                    value="<?= (isset($_POST['card-name'])) ? $_POST['card-name'] : "" ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Card Number</label>
                    <input id="card_number" class="form-control" pattern="(\d{4}\s?){4}" maxlength="19" placeholder="1111-2222-3333-4444"  name="card-number" 
                    placeholder="Enter your card number"
                    value="<?= (isset($_POST['card-number'])) ? $_POST['card-number'] : "" ?>">
                </div>
            <div class="mb-3">
                <div class="row g-3">
                    <div class="col">
                        <label class="form-label">Expired</label>
                        <input class="form-control"  maxlength='5' placeholder="MM/YY" type="text" onkeyup="formatString(event);" name="expired"
                        value="<?= (isset($_POST['expried'])) ? $_POST['expried'] : "" ?>">
                    </div>
                    <div class="col">
                        <label class="form-label">CVV</label>
                        <input type="text" class="form-control" placeholder="123" maxlength="3"  name="cvv" 
                        value="<?= (isset($_POST['cvv'])) ? $_POST['cvv'] : "" ?>">
                    </div>
                </div>
                <div class="contain-btn mt-4">
                    <button type="submit" class="btn-payment btn btn-danger p-2" style="width:100%; border-radius:10px;" >Payment</button>
                </div>
            </div>
	    </form> 
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