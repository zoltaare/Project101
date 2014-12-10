//Scheduling Preview

function calc_total(){
    var sum = 0;
    $('body').on('each','.input-amount',function(){
        sum += parseFloat($(this).text());
    });
    $(".preview-total").text(sum);    
}
$('body').on('click', '.input-remove-row', function(){ 
    var tr = $(this).closest('tr');
    tr.fadeOut(200, function(){
    	tr.remove();

        // $.post('http://localhost:2145/Project101/con_profile/delete_sched','delete',function(evt){

        // });

	   	calc_total()
	});
});

$(function(){
    $('body').on('click','.preview-add-button',function(){
        var form_data = {};
        if(($('.payment-form #status_day option:selected').text()) == "Monday" ){
            form_data["Monday"] = $('.payment-form #status_day option:selected').text();
        }
        if(($('.payment-form #status_day option:selected').text()) == "Tuesday" ){
            form_data["Tuesday"] = $('.payment-form #status_day option:selected').text();
        }
        if(($('.payment-form #status_day option:selected').text()) == "Wednesday" ){
            form_data["Monday"] = $('.payment-form #status_day option:selected').text();
        }
        if(($('.payment-form #status_day option:selected').text()) == "Thursday" ){
            form_data["Tuesday"] = $('.payment-form #status_day option:selected').text();
        }
        if(($('.payment-form #status_day option:selected').text()) == "Friday" ){
            form_data["Tuesday"] = $('.payment-form #status_day option:selected').text();
        }
        form_data["status"] = $('.payment-form #status option:selected').text();
        
        
        form_data["remove-row"] = '<span class="glyphicon glyphicon-remove"></span>';
        var row = $('<tr></tr>');
        $.each(form_data, function( type, value ) {
            $('<td class="input-'+type+'"></td>').html(value).appendTo(row);
        });
        $('.preview-table > tbody:last').append(row); 
        calc_total();
    });  

    //Temporary Submit
    $('body').on('click','#submit_all',function(evt){
        // var data = $('table#preview-data tbody tr').map(function(index) {
        //     var cols = $(this).find('td');
        //     return {
                 
        //         Day: cols[0].innerHTML,
        //         Time_Sched: cols[1].innerHTML,            // use innerHTML
        //         // age: (cols[1].innerHTML + '') * 1,  // parse int
        //         // grade: (cols[2].innerHTML + '') * 1 // parse int
        //     };
        // }).get();
        // var day = $('#status').val();
        // var new_data = select_day($('.payment-form #status_day option:selected').text(),$('.payment-form #status option:selected').text(),2);
        // var new_data = {
        //     'Day': data['Day'],
        //     'Time_Sched':data['Time_Sched']
        // }
        // console.log(new_data);

        // $.post('http://localhost:2145/Project101/con_profile/submit_schedule',data,function(res){
        //     console.log(res);
        //  });
        var table = $('body').delegate('tableToJSON','#preview-data');
        console.log(table);
        alert(JSON.stringify(table));

    });

    function select_day($day,$time,$user_id){
    if($day == "Monday"){
      $new_data = {
        'User_ID':$user_id,
        'Monday': $time,
      };
    }else if($day == "Tuesday"){
      $new_data = {
        'User_ID':$user_id,
        'Tuesday': $time,
      };
    }else if($day == "Wednesday"){
      $new_data = {
        'User_ID':$user_id,
        'Wednesday': $time,
      };
    }
    else if($day == "Thursday"){
      $new_data = {
        'User_ID':$user_id,
        'Thursday': $time,
      };
    }
    else if($day == "Friday"){
      $new_data = {
        'User_ID':$user_id,
        'Friday': $time,
      };
    }
    return $new_data;
  }
});