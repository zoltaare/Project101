$('body').on("click", "#reg_submit", function(evt){

    	evt.preventDefault();
    	var data = $("#reg_form").serializeArray();
    	
    	$.ajax({
    		url : "http://localhost/Project101/con_profile/registration",
    		data : data,
    		type : "POST",
    		dataType : "json",
    		success : function(data){
    			if(data.is_valid){
    				console.log(data.response);
    				$('#content').load('http://localhost/Project101/con_profile/Home');
    			}else
    				console.log(data.response);	
    		}, error : function(err){
    			console.log(err.responseText);
    		}
    	});
    	
    });
