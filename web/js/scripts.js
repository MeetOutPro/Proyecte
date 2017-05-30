$( document ).ready(function() {
        var heighth = $(".home-head").height();
        var heightf = $(".footer-home").height();

        if(heightf!=0){
            var heightw = $( window ).height() - (heighth);
        }else{
            var heightw = $( window ).height() - (heighth + heightf);
        }
        $(".content").css("height",heightw+"px");
        $(".wrapper-register").css("height",heightw+"px");


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
            width: '75%'
        });
        $("#appbundle_user_sexo").select2({
            placeholder: "Sexo...",
            allowClear:true,
            width: '75%'
        });


     /*SEARCHBOX*/

    function activateSearchbox(el){
        el.classList.add('searchbox--active')
    }
    function deactivateSearchbox(el){
        el.classList.remove('searchbox--active')
    }

    function onFocus(){
        activateSearchbox(document.querySelector('.searchbox'));
    }

    function onBlur(){
        deactivateSearchbox(document.querySelector('.searchbox'));
    }





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

});