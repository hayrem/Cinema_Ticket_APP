
<div class="head_contact">
    <div class="text d-flex justify-content-center align-items-center">
        <h1 class="text-white">Contact Us</h1>
    </div>
    <form class="shadow p-3 mx-auto text-white mb-0" action="#" method="post" style="height: 80%; width:100%;;">
        <div class="address d-flex justify-content-center mt-4 p-4" style="margin: 15px 0">
                <ul class="list-unstyled mb-0" style="font-size:25px; ">
                    <li style="margin:30px;">
                        <i class="bi bi-geo-alt"></i>
                        <a href="#" style="color:white; text-decoration:none;">BP 511, Phum Tropeang Chhuk (Borey Sorla) Sangtak, Street 371, Phnom Penh</a> 
                    </li>

                    <li style="margin:30px;">
                        <i class="bi bi-telephone" ></i>
                        <a href="#" style="color:white; text-decoration:none;">+855 847 8385</a>
                    </li>

                    <li style="margin:30px;">
                        <i class="bi bi-envelope"></i>
                        <a href="#">phnompenh.cinema@gmail.com</a>
                    </li>
                    <li style="font-size:40px; margin-top:5rem;">
                        <i class="bi bi-facebook" style="margin:30px;"></i>
                        <i class="bi bi-instagram" style="margin:30px;"></i>
                        <i class="bi bi-twitter" style="margin:30px;"></i>
                        <i class="bi bi-telegram" style="margin:30px;"></i>
                    </li>
                </ul>
        </div>
            <!--Grid column-->
        
        <div class="inform p-4"style="width:70%;">
            <div class="mb-4"style="width:90%;">
                <label class="form-label">User Name</label>
                <input
                type="text" 
                class="form-control" 
                name="name"
                placeholder="Your Name" 
                value="">
                <span style="color:red;"><?= (isset($messageError['firstName'])) ? $messageError['firstName'] : "" ?></span>
            </div>
            <div class="mb-4"style="width:90%;">
                <label class="form-label">Phone Number</label>
                <input
                type="number" 
                class="form-control" 
                name="number"
                placeholder="Your phone number" 
                value="">
            </div>
            <div class="mb-4"style="width:90%;">
                <label class="form-label">Email</label>
                <input
                type="Email Address" 
                class="form-control" 
                name="email"
                placeholder="Enter you email address" 
                value="">
                <span style="color:red;"><?= (isset($messageError['email']))?$messageError['email']:"" ?></span>
            </div>
            <div class="mb-4"style="width:90%;">
                <label class="form-label"></label>
                <textarea class="form-control" style="height: 6rem;" placeholder="Message" name="message"></textarea>
            </div>

            <div class="mb-5">
                <a href="#" class="btn btn-outline-danger bg-danger text-white p-2" style="width: 90%; margin-top :20px; border-radius:10px;">Submit</a>
            </div>
        </div>
    </form>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3909.013834999073!2d104.88089491412248!3d11.550865047581027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310951add5e2cd81%3A0x171e0b69c7c6f7ba!2sPasserelles%20num%C3%A9riques%20Cambodia%20(PNC)!5e0!3m2!1sen!2skh!4v1675753940359!5m2!1sen!2skh" width="100%" height="500" style="border:0; margin:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
