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


    /*TEXTAREA POST*/
    (function($){
        function floatLabel(inputType){
            $(inputType).each(function(){
                var $this = $(this);
                $this.focus(function(){
                    $this.next().addClass("active");
                });
                $this.blur(function(){
                    if($this.val() === '' || $this.val() === 'blank'){
                        $this.next().removeClass();
                    }
                });
            });
        }
        floatLabel(".floatLabel");
    })(jQuery);

    /*TAGS POST*/

//var tagArea = '.tag-area';
    var backSpace;
    var close = '<a class="close"></a>';
    var PreTags = $('.tagarea').val().trim().split(" ");

    $('.tagarea').after('<ul class="tag-box"></ul>');

    for (i=0 ; i < PreTags.length; i++ ){
        $('.tag-box').append('<li class="tags">'+PreTags[i]+close+'</li>');
    }

    $('.tag-box').append('<li class="new-tag"><input class="input-tag" type="text"></li>');

// Taging
    $('.input-tag').bind("keydown", function (kp) {
        var tag = $('.input-tag').val().trim();
        $(".tags").removeClass("danger");
        if(tag.length > 0){
            backSpace = 0;
            if(kp.keyCode  == 13){
                $(".new-tag").before('<li class="tags">'+tag+close+'</li>');
                $(this).val('');
            }}

        else {if(kp.keyCode == 8 ){
            $(".new-tag").prev().addClass("danger");
            backSpace++;
            if(backSpace == 2 ){
                $(".new-tag").prev().remove();
                backSpace = 0;
            }
        }
        }
    });
    //Delete tag
    $(".tag-box").on("click", ".close", function()  {
        $(this).parent().remove();
    });
    $(".tag-box").click(function(){
        $('.input-tag').focus();
    });
// Edit
    $('.tag-box').on("dblclick" , ".tags", function(cl){
        var tags = $(this);
        var tag = tags.text().trim();
        $('.tags').removeClass('edit');
        tags.addClass('edit');
        tags.html('<input class="input-tag" value="'+tag+'" type="text">')
        $(".new-tag").hide();
        tags.find('.input-tag').focus();

        tag = $(this).find('.input-tag').val() ;
        $('.tags').dblclick(function(){
            tags.html(tag + close);
            $('.tags').removeClass('edit');
            $(".new-tag").show();
        });

        tags.find('.input-tag').bind("keydown", function (edit) {
            tag = $(this).val() ;
            if(edit.keyCode  == 13){
                $(".new-tag").show();
                $('.input-tag').focus();
                $('.tags').removeClass('edit');
                if(tag.length > 0){
                    tags.html(tag + close);
                }
                else{
                    tags.remove();
                }
            }
        });
    });
// sorting
    $(function() {
        $( ".tag-box" ).sortable({
            items: "li:not(.new-tag)",
            containment: "parent",
            scrollSpeed: 100
        });
        $( ".tag-box" ).disableSelection();
    });


});