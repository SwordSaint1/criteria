<script type="text/javascript">
$(function () {
  
});

const check_eval =()=>{
    var contestant = document.getElementById('contestant').value;
    var judge = '<?=$full_name;?>';
    $.ajax({
            url: '../../process/judge/processor.php',
            type: 'POST',
            cache: false,
            data:{
                method: 'fetch_contestant_eval',
                contestant:contestant,
                judge:judge
            },success:function(response){
                if (response != '') {
                    var str = response.split('~!~');
                    document.querySelector('#bearing').value = str[0];
                    document.querySelector('#stage_presence').value = str[1];
                    document.querySelector('#project_execution').value = str[2];
                    document.querySelector('#audience_impact').value = str[3];
                }else{
                    $('#bearing').val('');
                    $('#stage_presence').val('');
                    $('#project_execution').val('');
                    $('#audience_impact').val('');
                }
            }
        });
}

const save_best_in_prod =()=>{
    var contestant = document.getElementById('contestant').value;
    var bearing = document.getElementById('bearing').value;
    var stage_presence = document.getElementById('stage_presence').value;
    var project_execution = document.getElementById('project_execution').value;
    var audience_impact = document.getElementById('audience_impact').value;
    var judge = '<?=$full_name;?>';

    if (contestant == '') {
        Swal.fire({
            icon: 'info',
            title: 'Please Input Contestant !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if (bearing == '') {
        Swal.fire({
            icon: 'info',
            title: 'Please Input Bearing Evaluation !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(bearing <= 0 || bearing > 35){
        Swal.fire({
            icon: 'info',
            title: 'Please Invalid Bearing Evaluation Min 1% & Max 35% !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(stage_presence == ''){
        Swal.fire({
            icon: 'info',
            title: 'Please Input Stage Presence Evaluation !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(stage_presence <= 0 || stage_presence > 30){
        Swal.fire({
            icon: 'info',
            title: 'Please Invalid Stage Presence Evaluation Min 1% & Max 30% !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(project_execution == ''){
        Swal.fire({
            icon: 'info',
            title: 'Please Input Project and Execution Evaluation !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(project_execution <= 0 || project_execution > 25){
        Swal.fire({
            icon: 'info',
            title: 'Please Invalid Project and Execution Evaluation Min 1% & Max 25% !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(audience_impact == ''){
        Swal.fire({
            icon: 'info',
            title: 'Please Input Audience Impact Evaluation !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(audience_impact <= 0 || audience_impact > 10){
        Swal.fire({
            icon: 'info',
            title: 'Please Invalid Audience Impact Evaluation Min 1% & Max 10% !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else{
        $.ajax({
            url: '../../process/judge/processor.php',
            type: 'POST',
            cache: false,
            data:{
                method: 'best_in_prod_eval',
                contestant:contestant,
                bearing:bearing,
                stage_presence:stage_presence,
                project_execution:project_execution,
                audience_impact:audience_impact,
                judge:judge
            },success:function(response){    
                if (response == 'success') {
                    Swal.fire({
                            icon: 'success',
                            title: 'Successfully Evaluated',
                            text: 'Success',
                            showConfirmButton: false,
                            timer : 2000
                    });
                    $('#contestant').val('');
                    $('#bearing').val('');
                    $('#stage_presence').val('');
                    $('#project_execution').val('');
                    $('#audience_impact').val('');
                    $('#best_in_prod').modal('hide');
                }else if (response == 'already') {
                    Swal.fire({
                            icon: 'info',
                            title: 'Already Evaluated For Update Only',
                            text: 'Information',
                            showConfirmButton: false,
                            timer : 2000
                    });
                }else{
                    Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Error',
                            showConfirmButton: false,
                            timer : 2000
                    });
                    $('#contestant').val('');
                    $('#bearing').val('');
                    $('#stage_presence').val('');
                    $('#project_execution').val('');
                    $('#audience_impact').val('');
                    $('#best_in_prod').modal('hide');
                }
            }
        });
    }
}

const update_best_in_prod =()=>{
    var contestant = document.getElementById('contestant').value;
    var bearing = document.getElementById('bearing').value;
    var stage_presence = document.getElementById('stage_presence').value;
    var project_execution = document.getElementById('project_execution').value;
    var audience_impact = document.getElementById('audience_impact').value;
    var judge = '<?=$full_name;?>';

    if (contestant == '') {
        Swal.fire({
            icon: 'info',
            title: 'Please Input Contestant !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if (bearing == '') {
        Swal.fire({
            icon: 'info',
            title: 'Please Input Bearing Evaluation !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(bearing <= 0 || bearing > 35){
        Swal.fire({
            icon: 'info',
            title: 'Please Invalid Bearing Evaluation Min 1% & Max 35% !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(stage_presence == ''){
        Swal.fire({
            icon: 'info',
            title: 'Please Input Stage Presence Evaluation !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(stage_presence <= 0 || stage_presence > 30){
        Swal.fire({
            icon: 'info',
            title: 'Please Invalid Stage Presence Evaluation Min 1% & Max 35% !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(project_execution == ''){
        Swal.fire({
            icon: 'info',
            title: 'Please Input Project and Execution Evaluation !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(project_execution <= 0 || project_execution > 25){
        Swal.fire({
            icon: 'info',
            title: 'Please Invalid Project and Execution Evaluation Min 1% & Max 25% !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(audience_impact == ''){
        Swal.fire({
            icon: 'info',
            title: 'Please Input Audience Impact Evaluation !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(audience_impact <= 0 || audience_impact > 10){
        Swal.fire({
            icon: 'info',
            title: 'Please Invalid Audience Impact Evaluation Min 1% & Max 25% !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else{
        $.ajax({
            url: '../../process/judge/processor.php',
            type: 'POST',
            cache: false,
            data:{
                method: 'update_best_in_prod_eval',
                contestant:contestant,
                bearing:bearing,
                stage_presence:stage_presence,
                project_execution:project_execution,
                audience_impact:audience_impact,
                judge:judge
            },success:function(response){    
                if (response == 'success') {
                    Swal.fire({
                            icon: 'info',
                            title: 'Successfully Updated',
                            text: 'Information',
                            showConfirmButton: false,
                            timer : 2000
                    });
                    $('#contestant').val('');
                    $('#bearing').val('');
                    $('#stage_presence').val('');
                    $('#project_execution').val('');
                    $('#audience_impact').val('');
                    $('#best_in_prod').modal('hide');
                }else{
                    Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Error',
                            showConfirmButton: false,
                            timer : 2000
                    });
                    $('#contestant').val('');
                    $('#bearing').val('');
                    $('#stage_presence').val('');
                    $('#project_execution').val('');
                    $('#audience_impact').val('');
                    $('#best_in_prod').modal('hide');
                }
            }
        });
    }
}

const check_eval_casual =()=>{
    var contestant = document.getElementById('contestant_casual').value;
    var judge = '<?=$full_name;?>';
    $.ajax({
            url: '../../process/judge/processor.php',
            type: 'POST',
            cache: false,
            data:{
                method: 'fetch_contestant_eval_casual',
                contestant:contestant,
                judge:judge
            },success:function(response){
                console.log(response);
                if (response != '') {
                    var str = response.split('~!~');
                    document.querySelector('#suitability_casual').value = str[0];
                    document.querySelector('#stage_presence_casual').value = str[1];
                    document.querySelector('#uniqueness_casual').value = str[2];
                    document.querySelector('#audience_impact_casual').value = str[3];
                }else{
                    $('#suitability_casual').val('');
                    $('#stage_presence_casual').val('');
                    $('#uniqueness_casual').val('');
                    $('#audience_impact_casual').val('');
                }
            }
        });
}

const save_casual =()=>{
    var contestant = document.getElementById('contestant_casual').value;
    var suitability = document.getElementById('suitability_casual').value;
    var stage_presence = document.getElementById('stage_presence_casual').value;
    var uniqueness = document.getElementById('uniqueness_casual').value;
    var audience_impact = document.getElementById('audience_impact_casual').value;
    var judge = '<?=$full_name;?>';

    if (contestant == '') {
        Swal.fire({
            icon: 'info',
            title: 'Please Input Contestant !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if (suitability == '') {
        Swal.fire({
            icon: 'info',
            title: 'Please Input Suitability Evaluation !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(suitability <= 0 || suitability > 35){
        Swal.fire({
            icon: 'info',
            title: 'Please Invalid Suitability Evaluation Min 1% & Max 35% !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(stage_presence == ''){
        Swal.fire({
            icon: 'info',
            title: 'Please Input Stage Presence & Style Evaluation !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(stage_presence <= 0 || stage_presence > 30){
        Swal.fire({
            icon: 'info',
            title: 'Please Invalid Stage Presence & Style Evaluation Min 1% & Max 30% !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(uniqueness == ''){
        Swal.fire({
            icon: 'info',
            title: 'Please Input Uniqueness Evaluation !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(uniqueness <= 0 || uniqueness > 25){
        Swal.fire({
            icon: 'info',
            title: 'Please Invalid Uniqueness Min 1% & Max 25% !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(audience_impact == ''){
        Swal.fire({
            icon: 'info',
            title: 'Please Input Audience Impact Evaluation !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(audience_impact <= 0 || audience_impact > 10){
        Swal.fire({
            icon: 'info',
            title: 'Please Invalid Audience Impact Evaluation Min 1% & Max 10% !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else{
        $.ajax({
            url: '../../process/judge/processor.php',
            type: 'POST',
            cache: false,
            data:{
                method: 'best_in_casual',
                contestant:contestant,
                suitability:suitability,
                stage_presence:stage_presence,
                uniqueness:uniqueness,
                audience_impact:audience_impact,
                judge:judge
            },success:function(response){    
                if (response == 'success') {
                    Swal.fire({
                            icon: 'success',
                            title: 'Successfully Evaluated',
                            text: 'Success',
                            showConfirmButton: false,
                            timer : 2000
                    });
                    $('#contestant_casual').val('');
                    $('#suitability_casual').val('');
                    $('#stage_presence_casual').val('');
                    $('#uniqueness_casual').val('');
                    $('#audience_impact_casual').val('');
                    $('#best_in_casual').modal('hide');
                }else if (response == 'already') {
                    Swal.fire({
                            icon: 'info',
                            title: 'Already Evaluated For Update Only',
                            text: 'Information',
                            showConfirmButton: false,
                            timer : 2000
                    });
                }else{
                    Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Error',
                            showConfirmButton: false,
                            timer : 2000
                    });
                    $('#contestant_casual').val('');
                    $('#suitability_casual').val('');
                    $('#stage_presence_casual').val('');
                    $('#uniqueness_casual').val('');
                    $('#audience_impact_casual').val('');
                    $('#best_in_casual').modal('hide');
                }
            }
        });
    }
}

const update_casual =()=>{
     var contestant = document.getElementById('contestant_casual').value;
    var suitability = document.getElementById('suitability_casual').value;
    var stage_presence = document.getElementById('stage_presence_casual').value;
    var uniqueness = document.getElementById('uniqueness_casual').value;
    var audience_impact = document.getElementById('audience_impact_casual').value;
    var judge = '<?=$full_name;?>';

    if (contestant == '') {
        Swal.fire({
            icon: 'info',
            title: 'Please Input Contestant !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if (suitability == '') {
        Swal.fire({
            icon: 'info',
            title: 'Please Input Suitability Evaluation !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(suitability <= 0 || suitability > 35){
        Swal.fire({
            icon: 'info',
            title: 'Please Invalid Suitability Evaluation Min 1% & Max 35% !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(stage_presence == ''){
        Swal.fire({
            icon: 'info',
            title: 'Please Input Stage Presence & Style Evaluation !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(stage_presence <= 0 || stage_presence > 30){
        Swal.fire({
            icon: 'info',
            title: 'Please Invalid Stage Presence & Style Evaluation Min 1% & Max 30% !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(uniqueness == ''){
        Swal.fire({
            icon: 'info',
            title: 'Please Input Uniqueness Evaluation !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(uniqueness <= 0 || uniqueness > 25){
        Swal.fire({
            icon: 'info',
            title: 'Please Invalid Uniqueness Min 1% & Max 25% !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(audience_impact == ''){
        Swal.fire({
            icon: 'info',
            title: 'Please Input Audience Impact Evaluation !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(audience_impact <= 0 || audience_impact > 10){
        Swal.fire({
            icon: 'info',
            title: 'Please Invalid Audience Impact Evaluation Min 1% & Max 10% !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else{
        $.ajax({
            url: '../../process/judge/processor.php',
            type: 'POST',
            cache: false,
            data:{
                method: 'update_best_in_casual_eval',
                contestant:contestant,
                suitability:suitability,
                stage_presence:stage_presence,
                uniqueness:uniqueness,
                audience_impact:audience_impact,
                judge:judge
            },success:function(response){    
                if (response == 'success') {
                    Swal.fire({
                            icon: 'info',
                            title: 'Successfully Updated',
                            text: 'Information',
                            showConfirmButton: false,
                            timer : 2000
                    });
                    $('#contestant_casual').val('');
                    $('#suitability_casual').val('');
                    $('#stage_presence_casual').val('');
                    $('#uniqueness_casual').val('');
                    $('#audience_impact_casual').val('');
                    $('#best_in_casual').modal('hide');
                }else{
                    Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Error',
                            showConfirmButton: false,
                            timer : 2000
                    });
                    $('#contestant_casual').val('');
                    $('#suitability_casual').val('');
                    $('#stage_presence_casual').val('');
                    $('#uniqueness_casual').val('');
                    $('#audience_impact_casual').val('');
                    $('#best_in_casual').modal('hide');
                }
            }
        });
    }
}

const check_eval_ramp =()=>{
    var contestant = document.getElementById('contestant_ramp').value;
    var judge = '<?=$full_name;?>';
    $.ajax({
            url: '../../process/judge/processor.php',
            type: 'POST',
            cache: false,
            data:{
                method: 'fetch_contestant_eval_ramp',
                contestant:contestant,
                judge:judge
            },success:function(response){
                if (response != '') {
                    var str = response.split('~!~');
                    document.querySelector('#poise_ramp').value = str[0];
                    document.querySelector('#stage_presence_ramp').value = str[1];
                    document.querySelector('#ramp_skills_ramp').value = str[2];
                    document.querySelector('#audience_impact_ramp').value = str[3];
                }else{
                    $('#poise_ramp').val('');
                    $('#stage_presence_ramp').val('');
                    $('#ramp_skills_ramp').val('');
                    $('#audience_impact_ramp').val('');
                }
            }
        });
}

const save_best_in_ramp =()=>{
    var contestant = document.getElementById('contestant_ramp').value;
    var poise = document.getElementById('poise_ramp').value;
    var stage_presence = document.getElementById('stage_presence_ramp').value;
    var ramp_skills = document.getElementById('ramp_skills_ramp').value;
    var audience_impact = document.getElementById('audience_impact_ramp').value;
    var judge = '<?=$full_name;?>';

    if (contestant == '') {
        Swal.fire({
            icon: 'info',
            title: 'Please Input Contestant !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if (poise == '') {
        Swal.fire({
            icon: 'info',
            title: 'Please Input Poise Evaluation !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(poise <= 0 || poise > 35){
        Swal.fire({
            icon: 'info',
            title: 'Please Invalid Poise Evaluation Min 1% & Max 35% !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(stage_presence == ''){
        Swal.fire({
            icon: 'info',
            title: 'Please Input Stage Presence Evaluation !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(stage_presence <= 0 || stage_presence > 25){
        Swal.fire({
            icon: 'info',
            title: 'Please Invalid Stage Presence & Style Evaluation Min 1% & Max 25% !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(ramp_skills == ''){
        Swal.fire({
            icon: 'info',
            title: 'Please Input Ramp Skills Evaluation !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(ramp_skills <= 0 || ramp_skills > 30){
        Swal.fire({
            icon: 'info',
            title: 'Please Invalid Ramp Skills Min 1% & Max 30% !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(audience_impact == ''){
        Swal.fire({
            icon: 'info',
            title: 'Please Input Audience Impact Evaluation !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(audience_impact <= 0 || audience_impact > 10){
        Swal.fire({
            icon: 'info',
            title: 'Please Invalid Audience Impact Evaluation Min 1% & Max 10% !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else{
        $.ajax({
            url: '../../process/judge/processor.php',
            type: 'POST',
            cache: false,
            data:{
                method: 'best_in_ramp',
                contestant:contestant,
                poise:poise,
                stage_presence:stage_presence,
                ramp_skills:ramp_skills,
                audience_impact:audience_impact,
                judge:judge
            },success:function(response){    
                if (response == 'success') {
                    Swal.fire({
                            icon: 'success',
                            title: 'Successfully Evaluated',
                            text: 'Success',
                            showConfirmButton: false,
                            timer : 2000
                    });
                    $('#contestant_ramp').val('');
                    $('#poise_ramp').val('');
                    $('#stage_presence_ramp').val('');
                    $('#ramp_skills_ramp').val('');
                    $('#audience_impact_ramp').val('');
                    $('#best_in_ramp').modal('hide');
                }else if (response == 'already') {
                    Swal.fire({
                            icon: 'info',
                            title: 'Already Evaluated For Update Only',
                            text: 'Information',
                            showConfirmButton: false,
                            timer : 2000
                    });
                }else{
                    Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Error',
                            showConfirmButton: false,
                            timer : 2000
                    });
                    $('#contestant_ramp').val('');
                    $('#poise_ramp').val('');
                    $('#stage_presence_ramp').val('');
                    $('#ramp_skills_ramp').val('');
                    $('#audience_impact_ramp').val('');
                    $('#best_in_ramp').modal('hide');
                }
            }
        });
    }
}

const update_best_in_ramp =()=>{
    var contestant = document.getElementById('contestant_ramp').value;
    var poise = document.getElementById('poise_ramp').value;
    var stage_presence = document.getElementById('stage_presence_ramp').value;
    var ramp_skills = document.getElementById('ramp_skills_ramp').value;
    var audience_impact = document.getElementById('audience_impact_ramp').value;
    var judge = '<?=$full_name;?>';

     if (contestant == '') {
        Swal.fire({
            icon: 'info',
            title: 'Please Input Contestant !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if (poise == '') {
        Swal.fire({
            icon: 'info',
            title: 'Please Input Poise Evaluation !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(poise <= 0 || poise > 35){
        Swal.fire({
            icon: 'info',
            title: 'Please Invalid Poise Evaluation Min 1% & Max 35% !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(stage_presence == ''){
        Swal.fire({
            icon: 'info',
            title: 'Please Input Stage Presence Evaluation !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(stage_presence <= 0 || stage_presence > 25){
        Swal.fire({
            icon: 'info',
            title: 'Please Invalid Stage Presence & Style Evaluation Min 1% & Max 25% !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(ramp_skills == ''){
        Swal.fire({
            icon: 'info',
            title: 'Please Input Ramp Skills Evaluation !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(ramp_skills <= 0 || ramp_skills > 30){
        Swal.fire({
            icon: 'info',
            title: 'Please Invalid Ramp Skills Min 1% & Max 30% !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(audience_impact == ''){
        Swal.fire({
            icon: 'info',
            title: 'Please Input Audience Impact Evaluation !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(audience_impact <= 0 || audience_impact > 10){
        Swal.fire({
            icon: 'info',
            title: 'Please Invalid Audience Impact Evaluation Min 1% & Max 10% !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else{
        $.ajax({
            url: '../../process/judge/processor.php',
            type: 'POST',
            cache: false,
            data:{
                method: 'update_best_in_ramp_eval',
                contestant:contestant,
                poise:poise,
                stage_presence:stage_presence,
                ramp_skills:ramp_skills,
                audience_impact:audience_impact,
                judge:judge
            },success:function(response){  
                console.log(response);  
                if (response == 'success') {
                    Swal.fire({
                            icon: 'info',
                            title: 'Successfully Updated',
                            text: 'Information',
                            showConfirmButton: false,
                            timer : 2000
                    });
                    $('#contestant_ramp').val('');
                    $('#poise_ramp').val('');
                    $('#stage_presence_ramp').val('');
                    $('#ramp_skills_ramp').val('');
                    $('#audience_impact_ramp').val('');
                    $('#best_in_ramp').modal('hide');
                }else{
                    Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Error',
                            showConfirmButton: false,
                            timer : 2000
                    });
                    $('#contestant_ramp').val('');
                    $('#poise_ramp').val('');
                    $('#stage_presence_ramp').val('');
                    $('#ramp_skills_ramp').val('');
                    $('#audience_impact_ramp').val('');
                    $('#best_in_ramp').modal('hide');
                }
            }
        });
    }
}

const check_eval_swim =()=>{
    var contestant = document.getElementById('contestant_swim').value;
    var judge = '<?=$full_name;?>';
    $.ajax({
            url: '../../process/judge/processor.php',
            type: 'POST',
            cache: false,
            data:{
                method: 'fetch_contestant_eval_swim',
                contestant:contestant,
                judge:judge
            },success:function(response){
                if (response != '') {
                    var str = response.split('~!~');
                    document.querySelector('#body_swim').value = str[0];
                    document.querySelector('#confidence_swim').value = str[1];
                    document.querySelector('#stage_presence_swim').value = str[2];
                    document.querySelector('#overall_impact_swim').value = str[3];
                }else{
                    $('#body_swim').val('');
                    $('#confidence_swim').val('');
                    $('#stage_presence_swim').val('');
                    $('#overall_impact_swim').val('');
                }
            }
        });
}

const save_best_in_swim =()=>{
    var contestant = document.getElementById('contestant_swim').value;
    var body = document.getElementById('body_swim').value;
    var confidence = document.getElementById('confidence_swim').value;
    var stage_presence = document.getElementById('stage_presence_swim').value;
    var overall = document.getElementById('overall_impact_swim').value;
    var judge = '<?=$full_name;?>';

    if (contestant == '') {
        Swal.fire({
            icon: 'info',
            title: 'Please Input Contestant !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if (body == '') {
        Swal.fire({
            icon: 'info',
            title: 'Please Input Body Evaluation !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(body <= 0 || body > 35){
        Swal.fire({
            icon: 'info',
            title: 'Please Invalid Body Evaluation Min 1% & Max 35% !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(confidence == ''){
        Swal.fire({
            icon: 'info',
            title: 'Please Input Confidence & Style Evaluation !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(confidence <= 0 || confidence > 35){
        Swal.fire({
            icon: 'info',
            title: 'Please Invalid Confidence & Style Evaluation Min 1% & Max 35% !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(stage_presence == ''){
        Swal.fire({
            icon: 'info',
            title: 'Please Input Stage Presence Evaluation !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(stage_presence <= 0 || stage_presence > 20){
        Swal.fire({
            icon: 'info',
            title: 'Please Invalid Stage Presence Min 1% & Max 20% !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(overall == ''){
        Swal.fire({
            icon: 'info',
            title: 'Please Input Over-all Impact Evaluation !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(overall <= 0 || overall > 10){
        Swal.fire({
            icon: 'info',
            title: 'Please Invalid Over-all Impact Evaluation Min 1% & Max 10% !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else{
        $.ajax({
            url: '../../process/judge/processor.php',
            type: 'POST',
            cache: false,
            data:{
                method: 'best_in_swim',
                contestant:contestant,
                body:body,
                confidence:confidence,
                stage_presence:stage_presence,
                overall:overall,
                judge:judge
            },success:function(response){    
                if (response == 'success') {
                    Swal.fire({
                            icon: 'success',
                            title: 'Successfully Evaluated',
                            text: 'Success',
                            showConfirmButton: false,
                            timer : 2000
                    });
                    $('#contestant_swim').val('');
                    $('#body_swim').val('');
                    $('#confidence_swim').val('');
                    $('#stage_presence_swim').val('');
                    $('#overall_impact_swim').val('');
                    $('#best_in_swim').modal('hide');
                }else if (response == 'already') {
                    Swal.fire({
                            icon: 'info',
                            title: 'Already Evaluated For Update Only',
                            text: 'Information',
                            showConfirmButton: false,
                            timer : 2000
                    });
                }else{
                    Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Error',
                            showConfirmButton: false,
                            timer : 2000
                    });
                    $('#contestant_swim').val('');
                    $('#body_swim').val('');
                    $('#confidence_swim').val('');
                    $('#stage_presence_swim').val('');
                    $('#overall_impact_swim').val('');
                    $('#best_in_swim').modal('hide');
                }
            }
        });
    }
}

const update_best_in_swim =()=>{
    var contestant = document.getElementById('contestant_swim').value;
    var body = document.getElementById('body_swim').value;
    var confidence = document.getElementById('confidence_swim').value;
    var stage_presence = document.getElementById('stage_presence_swim').value;
    var overall = document.getElementById('overall_impact_swim').value;
    var judge = '<?=$full_name;?>';

    if (contestant == '') {
        Swal.fire({
            icon: 'info',
            title: 'Please Input Contestant !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if (body == '') {
        Swal.fire({
            icon: 'info',
            title: 'Please Input Body Evaluation !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(body <= 0 || body > 35){
        Swal.fire({
            icon: 'info',
            title: 'Please Invalid Body Evaluation Min 1% & Max 35% !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(confidence == ''){
        Swal.fire({
            icon: 'info',
            title: 'Please Input Confidence & Style Evaluation !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(confidence <= 0 || confidence > 35){
        Swal.fire({
            icon: 'info',
            title: 'Please Invalid Confidence & Style Evaluation Min 1% & Max 35% !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(stage_presence == ''){
        Swal.fire({
            icon: 'info',
            title: 'Please Input Stage Presence Evaluation !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(stage_presence <= 0 || stage_presence > 20){
        Swal.fire({
            icon: 'info',
            title: 'Please Invalid Stage Presence Min 1% & Max 20% !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(overall == ''){
        Swal.fire({
            icon: 'info',
            title: 'Please Input Over-all Impact Evaluation !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(overall <= 0 || overall > 10){
        Swal.fire({
            icon: 'info',
            title: 'Please Invalid Over-all Impact Evaluation Min 1% & Max 10% !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else{
        $.ajax({
            url: '../../process/judge/processor.php',
            type: 'POST',
            cache: false,
            data:{
                method: 'update_best_in_swim_eval',
                contestant:contestant,
                body:body,
                confidence:confidence,
                stage_presence:stage_presence,
                overall:overall,
                judge:judge
            },success:function(response){  
                console.log(response);  
                if (response == 'success') {
                    Swal.fire({
                            icon: 'info',
                            title: 'Successfully Updated',
                            text: 'Information',
                            showConfirmButton: false,
                            timer : 2000
                    });
                    $('#contestant_swim').val('');
                    $('#body_swim').val('');
                    $('#confidence_swim').val('');
                    $('#stage_presence_swim').val('');
                    $('#overall_impact_swim').val('');
                    $('#best_in_swim').modal('hide');
                }else{
                    Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Error',
                            showConfirmButton: false,
                            timer : 2000
                    });
                     $('#contestant_swim').val('');
                    $('#body_swim').val('');
                    $('#confidence_swim').val('');
                    $('#stage_presence_swim').val('');
                    $('#overall_impact_swim').val('');
                    $('#best_in_swim').modal('hide');
                }
            }
        });
    }
}

const check_eval_gown =()=>{
    var contestant = document.getElementById('contestant_gown').value;
    var judge = '<?=$full_name;?>';
    $.ajax({
            url: '../../process/judge/processor.php',
            type: 'POST',
            cache: false,
            data:{
                method: 'fetch_contestant_eval_gown',
                contestant:contestant,
                judge:judge
            },success:function(response){
                console.log(response);
                if (response != '') {
                    var str = response.split('~!~');
                    document.querySelector('#elegance_gown').value = str[0];
                    document.querySelector('#stage_presence_gown').value = str[1];
                    document.querySelector('#projection_gown').value = str[2];
                    document.querySelector('#audience_impact_gown').value = str[3];
                }else{
                    $('#elegance_gown').val('');
                    $('#stage_presence_gown').val('');
                    $('#projection_gown').val('');
                    $('#audience_impact_gown').val('');
                }
            }
        });
}

const save_best_in_gown =()=>{
    var contestant = document.getElementById('contestant_gown').value;
    var elegance = document.getElementById('elegance_gown').value;
    var stage_presence = document.getElementById('stage_presence_gown').value;
    var project = document.getElementById('projection_gown').value;
    var audience_impact = document.getElementById('audience_impact_gown').value;
    var judge = '<?=$full_name;?>';

    if (contestant == '') {
        Swal.fire({
            icon: 'info',
            title: 'Please Input Contestant !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if (elegance == '') {
        Swal.fire({
            icon: 'info',
            title: 'Please Input Elegance Evaluation !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(elegance <= 0 || elegance > 40){
        Swal.fire({
            icon: 'info',
            title: 'Please Invalid Elegance Evaluation Min 1% & Max 40% !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(stage_presence == ''){
        Swal.fire({
            icon: 'info',
            title: 'Please Input Confidence & Style Evaluation !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(stage_presence <= 0 || stage_presence > 25){
        Swal.fire({
            icon: 'info',
            title: 'Please Invalid Confidence & Style Evaluation Min 1% & Max 25% !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(project == ''){
        Swal.fire({
            icon: 'info',
            title: 'Please Input Projection and Execution Evaluation !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(project <= 0 || project > 25){
        Swal.fire({
            icon: 'info',
            title: 'Please Invalid Projection and Execution Min 1% & Max 25% !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(audience_impact == ''){
        Swal.fire({
            icon: 'info',
            title: 'Please Input Audience Impact Evaluation !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(audience_impact <= 0 || audience_impact > 10){
        Swal.fire({
            icon: 'info',
            title: 'Please Invalid Audience Impact Evaluation Min 1% & Max 10% !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else{
        $.ajax({
            url: '../../process/judge/processor.php',
            type: 'POST',
            cache: false,
            data:{
                method: 'best_in_gown',
                contestant:contestant,
                elegance:elegance,
                stage_presence:stage_presence,
                project:project,
                audience_impact:audience_impact,
                judge:judge
            },success:function(response){ 
                if (response == 'success') {
                    Swal.fire({
                            icon: 'success',
                            title: 'Successfully Evaluated',
                            text: 'Success',
                            showConfirmButton: false,
                            timer : 2000
                    });
                    $('#contestant_gown').val('');
                    $('#elegance_gown').val('');
                    $('#stage_presence_gown').val('');
                    $('#projection_gown').val('');
                    $('#audience_impact_gown').val('');
                    $('#best_in_long_gown').modal('hide');
                }else if (response == 'already') {
                    Swal.fire({
                            icon: 'info',
                            title: 'Already Evaluated For Update Only',
                            text: 'Information',
                            showConfirmButton: false,
                            timer : 2000
                    });
                }else{
                    Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Error',
                            showConfirmButton: false,
                            timer : 2000
                    });
                    $('#contestant_gown').val('');
                    $('#elegance_gown').val('');
                    $('#stage_presence_gown').val('');
                    $('#projection_gown').val('');
                    $('#audience_impact_gown').val('');
                    $('#best_in_long_gown').modal('hide');
                }
            }
        });
    }
}

const update_best_in_gown =()=>{
     var contestant = document.getElementById('contestant_gown').value;
    var elegance = document.getElementById('elegance_gown').value;
    var stage_presence = document.getElementById('stage_presence_gown').value;
    var project = document.getElementById('projection_gown').value;
    var audience_impact = document.getElementById('audience_impact_gown').value;
    var judge = '<?=$full_name;?>';

    if (contestant == '') {
        Swal.fire({
            icon: 'info',
            title: 'Please Input Contestant !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if (elegance == '') {
        Swal.fire({
            icon: 'info',
            title: 'Please Input Elegance Evaluation !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(elegance <= 0 || elegance > 40){
        Swal.fire({
            icon: 'info',
            title: 'Please Invalid Elegance Evaluation Min 1% & Max 40% !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(stage_presence == ''){
        Swal.fire({
            icon: 'info',
            title: 'Please Input Confidence & Style Evaluation !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(stage_presence <= 0 || stage_presence > 25){
        Swal.fire({
            icon: 'info',
            title: 'Please Invalid Confidence & Style Evaluation Min 1% & Max 25% !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(project == ''){
        Swal.fire({
            icon: 'info',
            title: 'Please Input Projection and Execution Evaluation !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(project <= 0 || project > 25){
        Swal.fire({
            icon: 'info',
            title: 'Please Invalid Projection and Execution Min 1% & Max 25% !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(audience_impact == ''){
        Swal.fire({
            icon: 'info',
            title: 'Please Input Audience Impact Evaluation !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(audience_impact <= 0 || audience_impact > 10){
        Swal.fire({
            icon: 'info',
            title: 'Please Invalid Audience Impact Evaluation Min 1% & Max 10% !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else{
        $.ajax({
            url: '../../process/judge/processor.php',
            type: 'POST',
            cache: false,
            data:{
                method: 'update_best_in_gown_eval',
                contestant:contestant,
                elegance:elegance,
                stage_presence:stage_presence,
                project:project,
                audience_impact:audience_impact,
                judge:judge
            },success:function(response){  
                console.log(response);  
                if (response == 'success') {
                    Swal.fire({
                            icon: 'info',
                            title: 'Successfully Updated',
                            text: 'Information',
                            showConfirmButton: false,
                            timer : 2000
                    });
                     $('#contestant_gown').val('');
                    $('#elegance_gown').val('');
                    $('#stage_presence_gown').val('');
                    $('#projection_gown').val('');
                    $('#audience_impact_gown').val('');
                    $('#best_in_long_gown').modal('hide');
                }else{
                    Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Error',
                            showConfirmButton: false,
                            timer : 2000
                    });
                     $('#contestant_gown').val('');
                    $('#elegance_gown').val('');
                    $('#stage_presence_gown').val('');
                    $('#projection_gown').val('');
                    $('#audience_impact_gown').val('');
                    $('#best_in_long_gown').modal('hide');
                }
            }
        });
    }
}

const check_eval_mr_miss =()=>{
    var contestant = document.getElementById('contestant_mr_miss').value;
    var judge = '<?=$full_name;?>';
    $.ajax({
            url: '../../process/judge/processor.php',
            type: 'POST',
            cache: false,
            data:{
                method: 'fetch_contestant_eval_mr_miss_smile',
                contestant:contestant,
                judge:judge
            },success:function(response){
                console.log(response);
                if (response != '') {
                    var str = response.split('~!~');
                    document.querySelector('#capturing_mr_miss').value = str[0];
                    document.querySelector('#confidence_mr_miss').value = str[1];
                    document.querySelector('#projection_mr_miss').value = str[2];
                }else{
                    $('#capturing_mr_miss').val('');
                    $('#confidence_mr_miss').val('');
                    $('#projection_mr_miss').val('');
                }
            }
        });
}

const save_best_in_mr_miss =()=>{
    var contestant = document.getElementById('contestant_mr_miss').value;
    var capturing = document.getElementById('capturing_mr_miss').value;
    var confidence = document.getElementById('confidence_mr_miss').value;
    var projection = document.getElementById('projection_mr_miss').value;
    var judge = '<?=$full_name;?>';

    if (contestant == '') {
        Swal.fire({
            icon: 'info',
            title: 'Please Input Contestant !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if (capturing == '') {
        Swal.fire({
            icon: 'info',
            title: 'Please Input Capturing Smile Evaluation !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(capturing <= 0 || capturing > 40){
        Swal.fire({
            icon: 'info',
            title: 'Please Invalid Capturing Smile Evaluation Min 1% & Max 40% !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(confidence == ''){
        Swal.fire({
            icon: 'info',
            title: 'Please Input Confidence & Wit Evaluation !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(confidence <= 0 || confidence > 35){
        Swal.fire({
            icon: 'info',
            title: 'Please Invalid Confidence & Wit Evaluation Min 1% & Max 35% !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(projection == ''){
        Swal.fire({
            icon: 'info',
            title: 'Please Input Projection Evaluation !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(projection <= 0 || projection > 25){
        Swal.fire({
            icon: 'info',
            title: 'Please Invalid Projection Min 1% & Max 25% !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else{
        $.ajax({
            url: '../../process/judge/processor.php',
            type: 'POST',
            cache: false,
            data:{
                method: 'best_in_mr_miss',
                contestant:contestant,
                capturing:capturing,
                confidence:confidence,
                projection:projection,
                judge:judge
            },success:function(response){ 
                if (response == 'success') {
                    Swal.fire({
                            icon: 'success',
                            title: 'Successfully Evaluated',
                            text: 'Success',
                            showConfirmButton: false,
                            timer : 2000
                    });
                    $('#capturing_mr_miss').val('');
                    $('#confidence_mr_miss').val('');
                    $('#projection_mr_miss').val('');
                    $('#mr_miss').modal('hide');
                }else if (response == 'already') {
                    Swal.fire({
                            icon: 'info',
                            title: 'Already Evaluated For Update Only',
                            text: 'Information',
                            showConfirmButton: false,
                            timer : 2000
                    });
                }else{
                    Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Error',
                            showConfirmButton: false,
                            timer : 2000
                    });
                     $('#capturing_mr_miss').val('');
                    $('#confidence_mr_miss').val('');
                    $('#projection_mr_miss').val('');
                    $('#mr_miss').modal('hide');
                }
            }
        });
    }
}

const update_best_in_mr_miss =()=>{
    var contestant = document.getElementById('contestant_mr_miss').value;
    var capturing = document.getElementById('capturing_mr_miss').value;
    var confidence = document.getElementById('confidence_mr_miss').value;
    var projection = document.getElementById('projection_mr_miss').value;
    var judge = '<?=$full_name;?>';

    if (contestant == '') {
        Swal.fire({
            icon: 'info',
            title: 'Please Input Contestant !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if (capturing == '') {
        Swal.fire({
            icon: 'info',
            title: 'Please Input Capturing Smile Evaluation !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(capturing <= 0 || capturing > 40){
        Swal.fire({
            icon: 'info',
            title: 'Please Invalid Capturing Smile Evaluation Min 1% & Max 40% !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(confidence == ''){
        Swal.fire({
            icon: 'info',
            title: 'Please Input Confidence & Wit Evaluation !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(confidence <= 0 || confidence > 35){
        Swal.fire({
            icon: 'info',
            title: 'Please Invalid Confidence & Wit Evaluation Min 1% & Max 35% !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(projection == ''){
        Swal.fire({
            icon: 'info',
            title: 'Please Input Projection Evaluation !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(projection <= 0 || projection > 25){
        Swal.fire({
            icon: 'info',
            title: 'Please Invalid Projection Min 1% & Max 25% !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else{
        $.ajax({
            url: '../../process/judge/processor.php',
            type: 'POST',
            cache: false,
            data:{
                method: 'update_best_in_smile_eval',
                contestant:contestant,
                capturing:capturing,
                confidence:confidence,
                projection:projection,
                judge:judge
            },success:function(response){  
                console.log(response);  
                if (response == 'success') {
                    Swal.fire({
                            icon: 'info',
                            title: 'Successfully Updated',
                            text: 'Information',
                            showConfirmButton: false,
                            timer : 2000
                    });
                     $('#contestant_mr_miss').val('');
                    $('#capturing_mr_miss').val('');
                    $('#confidence_mr_miss').val('');
                    $('#projection_mr_miss').val('');
                    $('#mr_miss').modal('hide');
                }else{
                    Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Error',
                            showConfirmButton: false,
                            timer : 2000
                    });
                     $('#contestant_mr_miss').val('');
                    $('#capturing_mr_miss').val('');
                    $('#confidence_mr_miss').val('');
                    $('#projection_mr_miss').val('');
                    $('#mr_miss').modal('hide');
                }
            }
        });
    }
}

const check_eval_final =()=>{
    var contestant = document.getElementById('contestant_final').value;
    var judge = '<?=$full_name;?>';
    $.ajax({
            url: '../../process/judge/processor.php',
            type: 'POST',
            cache: false,
            data:{
                method: 'fetch_contestant_eval_final',
                contestant:contestant,
                judge:judge
            },success:function(response){
                console.log(response);
                if (response != '') {
                    var str = response.split('~!~');
                    document.querySelector('#intelligence_final').value = str[0];
                    document.querySelector('#beauty_final').value = str[1];
                }else{
                    $('#intelligence_final').val('');
                    $('#beauty_final').val('');
                }
            }
        }); 
}

const save_final_round =()=>{
   var contestant = document.getElementById('contestant_final').value;
    var intelligence = document.getElementById('intelligence_final').value;
    var beauty = document.getElementById('beauty_final').value;
    var judge = '<?=$full_name;?>';

    if (contestant == '') {
        Swal.fire({
            icon: 'info',
            title: 'Please Input Contestant !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if (intelligence == '') {
        Swal.fire({
            icon: 'info',
            title: 'Please Input Capturing Smile Evaluation !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(intelligence <= 0 || intelligence > 60){
        Swal.fire({
            icon: 'info',
            title: 'Please Invalid Capturing Smile Evaluation Min 1% & Max 60% !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(beauty == ''){
        Swal.fire({
            icon: 'info',
            title: 'Please Input Confidence & Wit Evaluation !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(beauty <= 0 || beauty > 40){
        Swal.fire({
            icon: 'info',
            title: 'Please Invalid Confidence & Wit Evaluation Min 1% & Max 35% !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else{
        $.ajax({
            url: '../../process/judge/processor.php',
            type: 'POST',
            cache: false,
            data:{
                method: 'final_round',
                contestant:contestant,
                intelligence:intelligence,
                beauty:beauty,
                judge:judge
            },success:function(response){ 
                if (response == 'success') {
                    Swal.fire({
                            icon: 'success',
                            title: 'Successfully Evaluated',
                            text: 'Success',
                            showConfirmButton: false,
                            timer : 2000
                    });
                    $('#contestant_final').val('');
                    $('#intelligence_final').val('');
                    $('#beauty_final').val('');
                    $('#final').modal('hide');
                }else if (response == 'already') {
                    Swal.fire({
                            icon: 'info',
                            title: 'Already Evaluated For Update Only',
                            text: 'Information',
                            showConfirmButton: false,
                            timer : 2000
                    });
                }else{
                    Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Error',
                            showConfirmButton: false,
                            timer : 2000
                    });
                    $('#contestant_final').val('');
                    $('#intelligence_final').val('');
                    $('#beauty_final').val('');
                    $('#final').modal('hide');
                }
            }
        });
    }

}

const update_final_round =()=>{
    var contestant = document.getElementById('contestant_final').value;
    var intelligence = document.getElementById('intelligence_final').value;
    var beauty = document.getElementById('beauty_final').value;
    var judge = '<?=$full_name;?>';

    if (contestant == '') {
        Swal.fire({
            icon: 'info',
            title: 'Please Input Contestant !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if (intelligence == '') {
        Swal.fire({
            icon: 'info',
            title: 'Please Input Capturing Smile Evaluation !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(intelligence <= 0 || intelligence > 60){
        Swal.fire({
            icon: 'info',
            title: 'Please Invalid Capturing Smile Evaluation Min 1% & Max 60% !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(beauty == ''){
        Swal.fire({
            icon: 'info',
            title: 'Please Input Confidence & Wit Evaluation !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else if(beauty <= 0 || beauty > 40){
        Swal.fire({
            icon: 'info',
            title: 'Please Invalid Confidence & Wit Evaluation Min 1% & Max 35% !!!',
            text: 'Information',
            showConfirmButton: false,
            timer : 1000
        });
    }else{
        $.ajax({
            url: '../../process/judge/processor.php',
            type: 'POST',
            cache: false,
            data:{
                method: 'update_final_round',
                contestant:contestant,
                intelligence:intelligence,
                beauty:beauty,
                judge:judge
            },success:function(response){ 
                 if (response == 'success') {
                    Swal.fire({
                            icon: 'info',
                            title: 'Successfully Updated',
                            text: 'Information',
                            showConfirmButton: false,
                            timer : 2000
                    });
                     $('#contestant_final').val('');
                    $('#intelligence_final').val('');
                    $('#beauty_final').val('');
                    $('#final').modal('hide');
                }else{
                    Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Error',
                            showConfirmButton: false,
                            timer : 2000
                    });
                      $('#contestant_final').val('');
                    $('#intelligence_final').val('');
                    $('#beauty_final').val('');
                    $('#final').modal('hide');
                }
            }
        });
    } 
}
</script>