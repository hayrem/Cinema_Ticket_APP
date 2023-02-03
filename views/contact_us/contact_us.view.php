



    <form class="shadow w-450 mx-auto mt-5 text-white" action="#" method="post" style="height: 40rem; width: 60%;">

        <div class="mx-auto "style="height: 40rem; width: 85%;">

            <h1 class="d-flex justify-content-center">Contact Us</h1><br>

            <div class="mb-4">
                <label class="form-label">User Name</label>
                <input
                type="text" 
                class="form-control" 
                name="name"
                placeholder="Your Name" 
                value="">
                <span style="color:red;"><?= (isset($messageError['firstName'])) ? $messageError['firstName'] : "" ?></span>
            </div>
            <div class="mb-4">
                <label class="form-label">Phone Number</label>
                <input
                type="number" 
                class="form-control" 
                name="number"
                placeholder="Your phone number" 
                value="">
            </div>
            <div class="mb-4">
                <label class="form-label">Email</label>
                <input
                type="Email Address" 
                class="form-control" 
                name="email"
                placeholder="Enter you email address" 
                value="">
                <span style="color:red;"><?= (isset($messageError['email']))?$messageError['email']:"" ?></span>
            </div>
            <div class="mb-4">
                <label class="form-label"></label>
                <textarea class="form-control " style="height: 6rem;" placeholder="Your message" name="message"></textarea>
            </div>

            <div class="d-flex justify-content-end mt-4">
                <a href="#" class="btn btn-outline-danger bg-danger text-white" style="width: 20%;">Submit</a>
            </div>
        </div>
    </form>
<script src="../../views/js/main.js"></script>