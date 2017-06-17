$( document ).ready(function() {

    $("#btn-seguir").click(function () {

        var value = $("#btn-seguir").attr("value");
        var user = $("#user_login").val();
        var path = "/followto/";

        $.ajax({
            url:path,
            type: 'POST',
            dataType: 'json',
            data: {
                id_profile: value,
                user: user
            },
            success:function(json){

                if(json == true){
                    $("#btn-unfollow").fadeIn("slow");
                    $("#btn-seguir").fadeOut(0);
                }
            }
        })
    })

    $("#btn-unfollow").click(function () {

        var value = $("#btn-unfollow").attr("value");
        var user = $("#user_login").val();
        var path = "/unfollow/";

        $.ajax({
            url:path,
            type: 'POST',
            dataType: 'json',
            data: {
                id_profile: value,
                user: user
            },
            success:function(json){

                if(json == true){
                    $("#btn-seguir").fadeIn("slow");
                    $("#btn-unfollow").fadeOut(0);
                }
            }
        })
    })

    $(".btn-participar",this).click(function () {

        var value = $(this).val();
        var user = $("#user_login").val();
        var path = "/joineventprofile/";

        $.ajax({
            url:path,
            type: 'POST',
            dataType: 'json',
            data: {
                event: value,
                user: user
            },
            success:function(json){

                if(json == true){
                    $("#btn-noparticipar_"+value).fadeIn("slow");
                    $("#btn-participar_"+value).fadeOut(0);
                }
            }
        })
    })

    $(".btn-noparticipar",this).click(function () {

        var value = $(this).val();
        var user = $("#user_login").val();
        var path = "/unjoineventprofile/";

        $.ajax({
            url:path,
            type: 'POST',
            dataType: 'json',
            data: {
                event: value,
                user: user
            },
            success:function(json){

                if(json == true){
                    $("#btn-participar_"+value).fadeIn("slow");
                    $("#btn-noparticipar_"+value).fadeOut(0);
                }
            }
        })
    })
})