
$(document).ready(function() {
    
    //Call Back for Home_Url
    function callback_home_url(url){
        return "http://localhost:2145/Project101/"+url;
    }
    
    $('#Home').click(function(evt){
        evt.preventDefault();
        
    });
    
    $('#Registration').click(function(evt){
        evt.preventDefault();
        $('#content').load('http://localhost/Project101/con_profile/profile');
    });
    
    $('#Scheduling').click(function(evt){
        evt.preventDefault();
        $('#content').load('http://localhost/Project101/con_profile/scheduling');
    });
    
    $('#Validate').click(function(evt){
        evt.preventDefault();
        $('#content').load('http://localhost/Project101/con_profile/validate');
    });
    
});