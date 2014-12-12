$(function(){

	var wid_center = ($(window).width() - $('.box-icon').outerWidth())/2;
	var height_center = ($(window).height() - $('.box-icon').outerHeight())/2;

	$('.box-icon').css({'right':wid_center , 'display' : 'none'}).fadeIn(500);
	$('.box-icon').animate({
		top : height_center - 40
	}, 1000);

	// time in
	$('.box-icon').click(function(){
		$('.box-icon').animate({
			top : '30px'
		}, 500);
		$('.timein-info').fadeIn(1500);
		//query
		$.ajax({
			url : 'http://localhost/Project101/con_login/timestamp',
			data : $('form.queries').serializeArray(),
			type : 'post',
			success : function(data){
				console.log(data);
			}, error : function(err){
				console.log(err.responseText);
			}
		});
	});

	// time out
	$('.time-out').click(function(){
		// alert('asd');
	});

});
