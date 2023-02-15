<?php
 if (!(isset($_COOKIE['firstName']))){
    ?>
    <script>
        setTimeout(() => {
            Swal.fire({
            position: 'top-end',
            title: 'Please login your account',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: '<a href="/sign_in" style="color:white;">Login</a>',
            
            })
        }, 20000);
        
    </script>
    
    <?php
 }

 
