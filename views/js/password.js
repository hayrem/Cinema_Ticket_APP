const togglePassword = document.querySelector("#togglePassword");
const password = document.querySelector("#password");

togglePassword.addEventListener("click", function () {
    // toggle the type attribute
    const type = password.getAttribute("type") === "password" ? "text" : "password";
    password.setAttribute("type", type);
    
    // toggle the icon
    this.classList.toggle("bi-eye");
});

// prevent sign submit
const sign = document.querySelector(".sign");
sign.addEventListener('submit', function (e) {
    e.preventDefault();
});

Payment//
$(document).ready(function() {
    $('.popup-button').click(function(e) {
      $('.wrapper').fadeIn(200);
      $('.popup-box').removeClass('transform-out').addClass('transform-in');
  
      e.preventDefault();
    });
  
    $('.popup-close').click(function(e) {
      $('.wrapper').fadeOut(200);
      $('.popup-box').removeClass('transform-in').addClass('transform-out');
  
      e.preventDefault();
    });
  });
