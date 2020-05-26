if ($(window).width() > 992) {
    $(window).scroll(function(){  
        if ($(this).scrollTop() > 70) {
            $('#navbar-top').addClass("fixed-top");
            $('#navbar-top').css('margin-top', '5%');
            // add padding top to show content behind navbar
            $('body').css('padding-top', $('.navbar').outerHeight() + 'px');
        }else{
            
            $('#navbar-top').css("margin-top", "0%");
            $('#navbar-top').removeClass("fixed-top");
            // remove padding top from body
            $('body').css('padding-top', '0');
        }   
    });
}