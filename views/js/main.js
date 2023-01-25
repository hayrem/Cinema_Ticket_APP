const myModal = new bootstap.Modal('#register');

document.querySelector('.btn-close').addEventListener('click', ()=>{
    myModal.hide();
});


$(document).ready(function(){
    $('#live_search').keyup(function(){
        let input = $(this).val();
        // alert(input);//get data from jQuery input field
        if(input != ''){
            $.ajax({
                url:"livesearch.php",
                method:"POST",
                data:{input:input},
                success:function(data){
                    $("#searchresult").html(data);
                    $("#searchresult").css("display","block");
                }
            });
           
        }else{
                $("#searchresult").css("display","none");
            }
    });
});
