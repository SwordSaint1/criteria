<script type="text/javascript">
$(function () {    
    load_top_4_mr();
    load_top_4_ms();
    load_top_4_gay();
    setInterval(load_top_4_mr, 10000);
    setInterval(load_top_4_ms, 10000);
    setInterval(load_top_4_gay, 10000);
    best_in_prod_top1_mr();
    best_in_prod_top1_ms();
    best_in_prod_top1_gay();
    best_in_casual_top1_mr();
    best_in_casual_top1_ms();
    best_in_casual_top1_gay();
    best_in_ramp_top1_mr();
    best_in_ramp_top1_ms();
    best_in_ramp_top1_gay();
    best_in_swim_top1_mr();
    best_in_swim_top1_ms();
    best_in_long_gown();
    best_in_smile_mr();
    best_in_smile_ms();
    best_in_smile_gay();
    final_round_top4mr();
    final_round_top4ms();
    final_round_top4gay();
});


const load_top_4_mr =()=>{
    $.ajax({
            url: '../../process/processor.php',
            type: 'POST',
            cache: false,
            data:{
                method: 'fetch_top4_mr',
            },success:function(response){
             document.getElementById('top4_mr').innerHTML = response;
            }
        });
}

const load_top_4_ms =()=>{
    $.ajax({
            url: '../../process/processor.php',
            type: 'POST',
            cache: false,
            data:{
                method: 'fetch_top4_ms',
            },success:function(response){
             document.getElementById('top4_ms').innerHTML = response;
            }
        });
}

const load_top_4_gay =()=>{
    $.ajax({
            url: '../../process/processor.php',
            type: 'POST',
            cache: false,
            data:{
                method: 'fetch_top4_gay',
            },success:function(response){
             document.getElementById('top4_gay').innerHTML = response;
            }
        });
}

const print_top4 =()=>{
      window.open('print_top4.php?_blank');  
}

const print_best_in_prod =()=>{
    window.open('print_best_in_prod.php?_blank');  
}

const print_best_in_casual =()=>{
     window.open('print_best_in_casual.php?_blank');  
}

const print_best_in_ramp =()=>{
    window.open('print_best_in_ramp.php?_blank');  
}

const print_best_in_swim =()=>{
    window.open('print_best_in_swim.php?_blank');  
}

const best_in_prod_top1_mr =()=>{
    $.ajax({
            url: '../../process/processor.php',
            type: 'POST',
            cache: false,
            data:{
                method: 'best_in_prod_top1_mr',
            },success:function(response){
             document.getElementById('best_in_prod_mr_top1').innerHTML = response;
            }
    });
}

const best_in_prod_top1_ms =()=>{
    $.ajax({
            url: '../../process/processor.php',
            type: 'POST',
            cache: false,
            data:{
                method: 'best_in_prod_top1_ms',
            },success:function(response){
             document.getElementById('best_in_prod_ms_top1').innerHTML = response;
            }
    });
}

const best_in_prod_top1_gay =()=>{
    $.ajax({
            url: '../../process/processor.php',
            type: 'POST',
            cache: false,
            data:{
                method: 'best_in_prod_top1_gay',
            },success:function(response){
             document.getElementById('best_in_prod_gay_top1').innerHTML = response;
            }
    });
}

const best_in_casual_top1_mr =()=>{
    $.ajax({
            url: '../../process/processor.php',
            type: 'POST',
            cache: false,
            data:{
                method: 'best_in_casual_top1_mr',
            },success:function(response){
             document.getElementById('best_in_casual_mr_top1').innerHTML = response;
            }
    });
}

const best_in_casual_top1_ms =()=>{
    $.ajax({
            url: '../../process/processor.php',
            type: 'POST',
            cache: false,
            data:{
                method: 'best_in_casual_top1_ms',
            },success:function(response){
             document.getElementById('best_in_casual_ms_top1').innerHTML = response;
            }
    });
}

const best_in_casual_top1_gay =()=>{
    $.ajax({
            url: '../../process/processor.php',
            type: 'POST',
            cache: false,
            data:{
                method: 'best_in_casual_top1_gay',
            },success:function(response){
             document.getElementById('best_in_casual_gay_top1').innerHTML = response;
            }
    });
}

const best_in_ramp_top1_mr =()=>{
    $.ajax({
            url: '../../process/processor.php',
            type: 'POST',
            cache: false,
            data:{
                method: 'best_in_ramp_top1_mr',
            },success:function(response){
             document.getElementById('best_in_ramp_mr_top1').innerHTML = response;
            }
    });
}

const best_in_ramp_top1_ms =()=>{
    $.ajax({
            url: '../../process/processor.php',
            type: 'POST',
            cache: false,
            data:{
                method: 'best_in_ramp_top1_ms',
            },success:function(response){
             document.getElementById('best_in_ramp_ms_top1').innerHTML = response;
            }
    });
}

const best_in_ramp_top1_gay =()=>{
    $.ajax({
            url: '../../process/processor.php',
            type: 'POST',
            cache: false,
            data:{
                method: 'best_in_ramp_top1_gay',
            },success:function(response){
             document.getElementById('best_in_ramp_gay_top1').innerHTML = response;
            }
    });
}

const best_in_swim_top1_mr =()=>{
    $.ajax({
            url: '../../process/processor.php',
            type: 'POST',
            cache: false,
            data:{
                method: 'best_in_swim_top1_mr',
            },success:function(response){
             document.getElementById('best_in_swim_mr_top1').innerHTML = response;
            }
    });
}

const best_in_swim_top1_ms =()=>{
    $.ajax({
            url: '../../process/processor.php',
            type: 'POST',
            cache: false,
            data:{
                method: 'best_in_swim_top1_ms',
            },success:function(response){
             document.getElementById('best_in_swim_ms_top1').innerHTML = response;
            }
    });
}

const best_in_long_gown =()=>{
    $.ajax({
            url: '../../process/processor.php',
            type: 'POST',
            cache: false,
            data:{
                method: 'best_in_long_gown_top1',
            },success:function(response){
             document.getElementById('best_in_long_gown_top1').innerHTML = response;
            }
    });
}

const best_in_smile_mr =()=>{
    $.ajax({
            url: '../../process/processor.php',
            type: 'POST',
            cache: false,
            data:{
                method: 'best_in_smile_mr_top1',
            },success:function(response){
             document.getElementById('best_in_smile_mr_top1').innerHTML = response;
            }
    });
}

const best_in_smile_ms =()=>{
    $.ajax({
            url: '../../process/processor.php',
            type: 'POST',
            cache: false,
            data:{
                method: 'best_in_smile_ms_top1',
            },success:function(response){
             document.getElementById('best_in_smile_ms_top1').innerHTML = response;
            }
    });
}

const best_in_smile_gay =()=>{
    $.ajax({
            url: '../../process/processor.php',
            type: 'POST',
            cache: false,
            data:{
                method: 'best_in_smile_gay_top1',
            },success:function(response){
             document.getElementById('best_in_smile_gay_top1').innerHTML = response;
            }
    });
}

const final_round_top4mr =()=>{
    $.ajax({
            url: '../../process/processor.php',
            type: 'POST',
            cache: false,
            data:{
                method: 'final_top4mr',
            },success:function(response){
             document.getElementById('final_round_top4mr').innerHTML = response;
            }
    });
}

const final_round_top4ms =()=>{
    $.ajax({
            url: '../../process/processor.php',
            type: 'POST',
            cache: false,
            data:{
                method: 'final_top4ms',
            },success:function(response){
             document.getElementById('final_round_top4ms').innerHTML = response;
            }
    });
}

const final_round_top4gay =()=>{
    $.ajax({
            url: '../../process/processor.php',
            type: 'POST',
            cache: false,
            data:{
                method: 'final_top4gay',
            },success:function(response){
             document.getElementById('final_round_top4gay').innerHTML = response;
            }
    });
}

const register_contestant =()=>{
    var contestant = document.getElementById('contestant_name').value;
    var gender = document.getElementById('gender_register').value; 

    if (contestant == '') {
         Swal.fire({
            icon: 'info',
            title: 'Please Input Contestant Name !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(gender == ''){
         Swal.fire({
            icon: 'info',
            title: 'Please Select Gender !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else{
        $.ajax({
            url: '../../process/processor.php',
            type: 'POST',
            cache: false,
            data:{
                method: 'register_contestant_admin',
                contestant:contestant,
                gender:gender
            },success:function(response){
                if (response == 'success') {
                    Swal.fire({
                        icon: 'success',
                        title: 'Successfully Registered !!!',
                        text: 'Successfully',
                        showConfirmButton: false,
                        timer : 1000
                    });
                        $('#contestant_name').val('');
                        $('#gender_register').val('');
                }else if(response == 'duplicate'){
                    Swal.fire({
                        icon: 'info',
                        title: 'Already Registered !!!',
                        text: 'Information',
                        showConfirmButton: false,
                        timer : 1000
                    });
                    $('#contestant_name').val('');
                    $('#gender_register').val('');
                }else{
                    Swal.fire({
                        icon: 'error',
                        title: 'Error !!!',
                        text: 'Error',
                        showConfirmButton: false,
                        timer : 1000
                    });
                }
            }
        });
    }
}

const search_contestant_admin =()=>{
 var contestant = document.getElementById('contestant_name_search').value;
 var gender = document.getElementById('gender_search').value;
 $.ajax({
            url: '../../process/processor.php',
            type: 'POST',
            cache: false,
            data:{
                method: 'fetch_contestant_admin',
                contestant:contestant,
                gender:gender
            },success:function(response){
             document.getElementById('contestant_list_admin').innerHTML = response;
            }
    });
}

const get_contestant_details =(param)=>{
    var data = param.split('~!~');
    var id = data[0];
    var contestant_name = data[1];
    var gender = data[2];

    document.getElementById('id_contestant').value = id;
    document.getElementById('contestant_name').value = contestant_name;
    document.getElementById('gender_register').value = gender;
}

const update_contestant =()=>{
    var id = document.getElementById('id_contestant').value;
    var contestant = document.getElementById('contestant_name').value;
    var gender = document.getElementById('gender_register').value;
    if (contestant == '') {
         Swal.fire({
            icon: 'info',
            title: 'Please Input Contestant Name !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(gender == ''){
         Swal.fire({
            icon: 'info',
            title: 'Please Select Gender !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else{
        $.ajax({
            url: '../../process/processor.php',
            type: 'POST',
            cache: false,
            data:{
                method: 'update_contestant_admin',
                id:id,
                contestant:contestant,
                gender:gender
            },success:function(response){
                if (response == 'success') {
                    Swal.fire({
                        icon: 'success',
                        title: 'Successfully Updated !!!',
                        text: 'Successfully',
                        showConfirmButton: false,
                        timer : 1000
                    });
                        $('#contestant_name').val('');
                        $('#gender_register').val('');
                        search_contestant_admin();
                }else{
                    Swal.fire({
                        icon: 'error',
                        title: 'Error !!!',
                        text: 'Error',
                        showConfirmButton: false,
                        timer : 1000
                    });
                    $('#contestant_name').val('');
                        $('#gender_register').val('');
                        search_contestant_admin();
                }
            }
        });
    }
}
</script>