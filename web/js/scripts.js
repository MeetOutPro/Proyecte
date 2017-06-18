$( document ).ready(function() {
        var heightw = $( window ).height();

        var heighth = $(".home-head").height();
        var heightf = $(".footer-home").height();
        if(heightw<768){
            var heightfinal = heightw - heighth;
        }else{
            var heightfinal = heightw - (heighth + heightf);
        }

        $(".content").css("height",heightfinal+"px");
        $(".register").css("height",heightfinal+"px");



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


    if($('body').is('.dashboardbdy')){


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

                $(function() {
                    $( ".tag-box" ).sortable({
                        items: "li:not(.new-tag)",
                        containment: "parent",
                        scrollSpeed: 100
                    });
                    $( ".tag-box" ).disableSelection();
                });
    }


    /*MODAL*/
    $('.button-modal').click(function(){
        var buttonId = $(this).attr('id');
        $('#modal-container').removeAttr('class').addClass(buttonId);
        $('body').addClass('modal-active');
    })

    $('.closemodal img').click(function(){
        $('#modal-container').addClass('out');
        $('body').removeClass('modal-active');
    });



    /*INTERCAMBIO PESTAÑAS DASHBOARD*/
    $(".p-post").addClass("pestanya-activa");
    $(".p-evento").addClass("pestanya-default");
    $(".new_event").css("display","none");
    $(".menu-pestanyas > li").on("click",function () {
        var pestanya_click=$(this).attr("class");

        if($(this).hasClass("p-post"))
        {
            $(".p-post").removeClass("pestanya-default");
            $(".p-post").addClass("pestanya-activa")

            $(".p-evento").removeClass("pestanya-activa");
            $(".p-evento").addClass("pestanya-default");

            $(".new_post").css("display","block");
            $(".new_event").css("display","none");
        }else if($(this).hasClass("p-evento"))
        {
            $(".p-evento").removeClass("pestanya-default");
            $(".p-evento").addClass("pestanya-activa")

            $(".p-post").removeClass("pestanya-activa");
            $(".p-post").addClass("pestanya-default");

            $(".new_post").css("display","none");
            $(".new_event").css("display","block");
        }

    });

    $(".p-registro").addClass("pestanya-activa");
    $(".p-login").addClass("pestanya-default");
    $(".form-login").css("display","none");
    $(".menu-pestanyas-home > li").on("click",function () {
        var pestanya_click=$(this).attr("class");

        if($(this).hasClass("p-registro"))
        {
            $(".p-registro").removeClass("pestanya-default");
            $(".p-registro").addClass("pestanya-activa")

            $(".p-login").removeClass("pestanya-activa");
            $(".p-login").addClass("pestanya-default");

            $(".form-registro-home").css("display","block");
            $(".form-login").css("display","none");
        }else if($(this).hasClass("p-login"))
        {
            $(".p-login").removeClass("pestanya-default");
            $(".p-login").addClass("pestanya-activa")

            $(".p-registro").removeClass("pestanya-activa");
            $(".p-registro").addClass("pestanya-default");

            $(".form-registro-home").css("display","none");
            $(".form-login").css("display","block");
        }

    });

    $(".post-settings",this).hover(function () {
        $(".submenu",this).fadeToggle(1);
    })

    $('.datepicker').datepicker();



    /* GUSTOS A LA HORA DE REGISTRARSE, ICONOS COMO CHECKBOX
    $(".register label").on("click",function(){
        var forlabel = $(this).attr("for");
        if($(".register #appbundle_user_tema #"+forlabel).is(':checked'))
        {
            $(".register #appbundle_user_tema #"+forlabel).removeAttr('checked');
            $(".register label[for='"+forlabel+"']").remove(".icono-gustos-yes");
            $("<img class='icono-gustos-not' src='../img/icons/open-book.png'/>").prependTo(".register label[for='appbundle_user_tema_1'] ");
        }else{
            $(".register #appbundle_user_tema #"+forlabel).attr('checked','checked');
            $(".register label[for='"+forlabel+"']").remove( ".icono-gustos-not");
            $("<img class='icono-gustos-yes' src='../img/icons/open-book-checked.png'/>").prependTo(".register label[for='appbundle_user_tema_1'] ");
        }
    });
    */



    $(".navmob-section.home").addClass("p-activa-footer");
    $(".navigation-mobile > ul").on("click",function () {
        $(".navigation-mobile > ul").removeClass("p-activa-footer");
        $(this).addClass("p-activa-footer");


        if($(this).hasClass("events-btn") && $("body").hasClass("dashboardbdy"))
        {
            $(".new_post").css("display","none");
            $(".new_event").css("display","block");
            $(".posts, .Outstanding").css("display","none");
            $(".events").insertAfter($(".posts"));
            $(".events").css("display","block");


        }else if($(this).hasClass("home-btn") && $("body").hasClass("dashboardbdy")){
            $(".new_post").css("display","block");
            $(".new_event").css("display","none");

            $(".events").css("display","none");;
            $(".posts, .Outstanding").css("display","block");
        }
    });

});