jQuery(document).ready(function($) {
    $('.nav').onePageNav();
    
    $('.scrollLink').bind('click', function(e){
        e.preventDefault();
        var target = $($(this).attr('href'));
        $.scrollTo( target, 800 );
    });
});
