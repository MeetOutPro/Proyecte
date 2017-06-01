$( document ).ready(function() {
        var heighth = $(".home-head").height();
        var heightf = $(".footer-home").height();
        var heightw = $( document ).height() - (heighth + heightf);

        $(".content").css("height",heightw+"px");


/*
    $(".homepage .password-cont label" ).each(function (){
        console.log($(this));
        if( $(this).text() == "Plain password")
        {

            $(this).css("display","none");
        }
    })
*/


    /*FORM*/
    $('.homepage form div input,.register form div input ').on('focus', function() {
        if ($(this).val() === "") {
            $(this).prev('label').animate({
                fontSize: 13,
                top: -25
            }, 350);
        }

    });
    $('.homepage form div input, .register form div input').on('blur', function() {
        if ($(this).val() === "") {
            $(this).prev('label').animate({
                fontSize: 17,
                top: 0
            }, 350);
        }
    });

    /*SELECT PROVINCIAS SELECT2*/
    $("<option></option>").insertBefore("#appbundle_user_provincia option[value='1']");
    $("<option></option>").insertBefore("#appbundle_user_sexo option[value='Hombre']");
        $("#appbundle_user_provincia").select2({
            placeholder: "Provincia...",
            allowClear:true,
            width: '100%'
        });
        $("#appbundle_user_sexo").select2({
            placeholder: "Sexo...",
            allowClear:true,
            width: '100%'
        });


     /*SEARCHBOX*/

    $(window).click(function() {
        $(".searchbox").removeClass('searchbox--active');
    });

    $('.searchbox').on('click', function (e){
        e.stopPropagation();
        $(this).addClass('searchbox--active');
    });





    /*BOTON CONTINUAR-VOLVER REGISTRO MOVIL*/
    var slideW = $('.wrapper-register').width();
    $('#siguiente-reg').click(function( e ){
        e.preventDefault();
        $('.wrapper-register').animate({scrollLeft: slideW }, 600);
    });

    $('#b-volver').click(function( e ){
        e.preventDefault();
        $('.wrapper-register').animate({scrollLeft: -(slideW) }, 600);
    });


    /*Añadir clase dashboard al body para identificar la página*/
    if( $('div').hasClass('dashboard') )
    {
        $('body').addClass("dashboardbdy");
    }

    if( $('div').hasClass('profilepage') )
    {
        $('body').addClass("profile-page-bdy");
    }

});