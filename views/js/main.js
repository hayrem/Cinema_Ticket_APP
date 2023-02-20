
// Credit card validation
// select seat

let seatPrice = 5;  
function function1() {
let arr = [];
let checkboxes = document.querySelectorAll("input[type='checkbox']:checked");
for (let i = 0; i < checkboxes.length; i++) {
arr.push(checkboxes[i].value)
}
if (arr.length>=10){
    document.querySelectorAll('input[type="checkbox"]:not(:checked)').forEach((element) => {
        element.disabled = true;
    });
    console.log('asdflkjasdflkjasdf');
}else{
    document.querySelectorAll('input[type="checkbox"]:not(:checked)').forEach((element) => {
        element.disabled = false;
    });
}
let result = document.querySelector('#seat');
result.textContent = arr;
let price = document.querySelector('#total_price')
let totalPrice = arr.length;
if(totalPrice == 10){
    Swal.fire({
        title: 'NOTICE',
        text: 'Seat limit exceeded, a maximum of 10 seats per transaction.',
        showClass: {
          popup: 'animate__animated animate__fadeInDown'
        },
        hideClass: {
          popup: 'animate__animated animate__fadeOutUp'
        }
      });
}
price.textContent = totalPrice*seatPrice + '$';
(getSeat(arr.length));
}
function checkIsHaveSeat(value){
    let form = document.getElementById("customer-booking-info");
    let elements = form.elements;
    for (var i = 0, len = elements.length; i < len; ++i) {
        elements[i].readOnly = value;
    }
}


// payment validation 
const formPayment = document.querySelector('.payment-container');
let inputFirstName= document.querySelector("#input-firstname");
let inputLastName= document.querySelector("#input-lastname");
let inputPhoneNumber= document.querySelector("#input-phonenumber");
let inputEmail= document.querySelector("#input-email");

let spanfirstname=document.querySelector("#firstname");
let spanlistname=document.querySelector("#lastname");
let spanemail=document.querySelector("#email");
let spanphonenumber=document.querySelector("#phonenumber");

let regex = [/^[a-zA-Z]+$/,/^[a-zA-Z]+$/,/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,5})+$/, /^[0].[0-9]{7,8}$/]

let inputForm = [inputFirstName,inputLastName,inputEmail,inputPhoneNumber]
let spanList=[spanfirstname,spanlistname,spanemail,spanphonenumber]
let messageErrorList=[
    ['Please enter your first name','First name most more that 5 letter and no digits'],
    ['Please enter your last name','First name most more that 5 letter and no digits'],
    ['Please enter your email','Invalid format and please re-enter valid email'],
    ['Please enter your phone number','Zero mush in the front and Number mush be 9 or 10 number']
]
function validationInput(value,index,regex){
    if (value != ""){
        let test = regex[index].test(value)
        if (test){
            return true;
        }else{
            return false;
        }
    }else if (value === ''){
        return 'empty';// return is value empty
    }
    
}

function validationCustomerInfo(){
    const firstname = document.getElementById("inputfirstname").value;
    const lastname = document.getElementById("inputlastname").value;
    const email = document.getElementById("inputemail").value;
    const phonenumber = document.getElementById("inputphonenumber").value;
    let listInput = [firstname,lastname,email,phonenumber]
    let index = 0
    let regexindex = 0
    let counterror = 0
    for (let value in listInput ){
        let key = validationInput(listInput[value],regexindex,regex)
       
        if (key === 'empty'){
            counterror+=1
            spanList[value].textContent = messageErrorList[index][0]
        }
        else if (key === true){
            spanList[value].textContent = '';
        }
        else{
            counterror+=1
            spanList[value].textContent = messageErrorList[index][1]
        }
        index+=1
        regexindex+=1
    }
    if ( counterror === 0 ){
        formPayment.style.display = "block";
    }
}


const  btnPayment= document.querySelector('#payment-btn');
const btnCancel = document.querySelector("#cancel");
let inputCardName= document.querySelector(".card-name-form");
let inputCardNumber= document.querySelector("card-number-form");
let inputExpired= document.querySelector(".expired-form");
let inputCvv= document.querySelector(".cvv-form");

let spanCardName=document.getElementById("cardname");
let spanCardNumber=document.getElementById("cardnumber");
let spanExpired=document.getElementById("expried");
let spanCvv=document.getElementById("CVV");

let cardName = document.getElementById('card-name').value;
let cardNumber = document.getElementById('card-number').value;
let Expired = document.getElementById('expired-input').value;
let CVV = document.getElementById('cvv-input').value;
let CardListInput = [cardName,cardNumber,Expired,CVV]


let regexcard = [/^[a-zA-Z]+$/,/^(\d{4}-)+(\d{4}-)+(\d{4}-)+(\d{4})+$/,/^(0?[1-9]|1[012])[\/\-]\d{2}$/,/^[\d]{3}$/];
let inputCardList = [inputCardName,inputCardNumber,inputExpired,inputCvv];
let spanError = [spanCardName,spanCardNumber,spanExpired,spanCvv];
let messageErrorcard= [
    ['Please enter your card name','First name most more that 5 letters and least that 20 letters'],
    ['Please enter your card number','Card number must be 16 digits'],
    ['Please enter your card expired ','Expired must be month and date'],
    ['Please enter your card cvv','Number mush be 3 digits']
];

function validationCreditCard(){
    let cardName = document.getElementById('card-name').value;
    let cardNumber = document.getElementById('card-number').value;
    let Expired = document.getElementById('expired-input').value;
    let CVV = document.getElementById('cvv-input').value;
    let CardListInput = [cardName,cardNumber,Expired,CVV]
    let index = 0
    let regexindex = 0
    let counterror = 0
    for (let value in CardListInput ){
        // let key = validationInput(listInput[value],regexindex,regex)
        let key = validationInput(CardListInput[value],regexindex,regexcard)
        console.log(key);
        console.log(CardListInput[value]);
        if (key === 'empty'){
            counterror+=1
            spanError[value].textContent = messageErrorcard[index][0]
        }
        else if (key === true){
            spanError[value].textContent = '';
        }
        else{
            counterror+=1
            spanError[value].textContent = messageErrorcard[index][1]
        }
        index+=1
        regexindex+=1
    }
    if ( counterror === 0 ){
        formPayment.style.display = "none";
        Swal.fire({
            title: 'Payment is success',
            icon: 'success',
            
          })
        location.reload();
    }
}


const card_Number = document.getElementById('card-number');
card_Number.addEventListener('keyup',function (e) {
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
function getSeat(value){
    if (value != 0 ){
        const buttonPayment = document.querySelector("#button-payment");
        buttonPayment.addEventListener('click', validationCustomerInfo);
        checkIsHaveSeat(false)
        
    }else{
        let errorSpane = document.querySelectorAll('.error');
        checkIsHaveSeat(true)
        errorSpane.textContent = '.';
    }
}
getSeat(0);
btnPayment.addEventListener('click', validationCreditCard);
btnCancel.addEventListener('click', function(){
    for (let i = 0; i < 4; i++){
        CardListInput[i].textContent = '';
        spanError[i].textContent = '';
    }
    formPayment.style.display = "none";
});
