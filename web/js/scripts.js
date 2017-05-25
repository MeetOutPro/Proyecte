$( document ).ready(function() {

    $(".homepage").ready(function () {
        var heighth = $(".home-head").height();
        var heightf = $(".footer-home").height();
        var heightw = $( document ).height() - (heighth + heightf);
        $(".content").css("height",heightw+"px");
    });

/*
    $(".homepage .password-cont label" ).each(function (){
        console.log($(this));
        if( $(this).text() == "Plain password")
        {

            $(this).css("display","none");
        }
    })
*/


    $('.homepage form div input').on('focus', function() {
        if ($(this).val() === "") {
            $(this).prev('label').animate({
                fontSize: 13,
                top: -25
            }, 350);
        }

    });
    $('.homepage form div input').on('blur', function() {
        if ($(this).val() === "") {
            $(this).prev('label').animate({
                fontSize: 17,
                top: 0
            }, 350);
        }
    });


});