$(function(){
    
    /*------------effet sur portfolio quand on clique pour acceder a une section-----------*/

    $(".navbar a, footer a,#home a").on("click", function(event){
    
        event.preventDefault();
        var hash = this.hash;
        
        $('body,html').animate({scrollTop: $(hash).offset().top} , 900 , function(){window.location.hash = hash;})
        
    });
    
})

$(document).ready(function(){
    
});