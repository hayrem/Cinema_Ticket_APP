
<div class="head_contact"style="height: 45rem;width: 100%;">
    <div class="text d-flex justify-content-center align-items-center">
        <h1 class="text-white">Contact Us</h1>
    </div>

    <form class="shadow w-450 mx-auto text-white " action="#" method="post" style="height: 45rem;width: 100%;">
        <div class="address col-md-3 text-center ">
                <ul class="list-unstyled mb-0"style="font-size-30px;">
                    <li><i class="bi bi-geo-alt"></i>
                        <p>San Francisco, CA 94126, USA</p>
                    </li>

                    <li><i class="bi bi-telephone"></i>
                        <p>+ 01 234 567 89</p>
                    </li>

                    <li><i class="bi bi-envelope"></i>
                        <p>contact@mdbootstrap.com</p>
                    </li>
                </ul>
        </div>
            <!--Grid column-->
        
        <div class="inform mx-auto "style="width:70%;">
            <div class="mb-4"style="width:80%;">
                <label class="form-label">User Name</label>
                <input
                type="text" 
                class="form-control" 
                name="name"
                placeholder="Your Name" 
                value="">
                <span style="color:red;"><?= (isset($messageError['firstName'])) ? $messageError['firstName'] : "" ?></span>
            </div>
            <div class="mb-4"style="width:80%;">
                <label class="form-label">Phone Number</label>
                <input
                type="number" 
                class="form-control" 
                name="number"
                placeholder="Your phone number" 
                value="">
            </div>
            <div class="mb-4"style="width:80%;">
                <label class="form-label">Email</label>
                <input
                type="Email Address" 
                class="form-control" 
                name="email"
                placeholder="Enter you email address" 
                value="">
                <span style="color:red;"><?= (isset($messageError['email']))?$messageError['email']:"" ?></span>
            </div>
            <div class="mb-4"style="width:80%;">
                <label class="form-label"></label>
                <textarea class="form-control " style="height: 6rem;" placeholder="Your message" name="message"></textarea>
            </div>

            <div class="mb-5">
                <a href="#" class="btn btn-outline-danger bg-danger text-white" style="width: 80%;">Submit</a>
            </div>
        </div>
    </form>
</div>
<script src="../../views/js/main.js"></script>