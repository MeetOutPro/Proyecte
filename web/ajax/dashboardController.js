$( document ).ready(function() {

    $(".btn-participar",this).click(function () {

        var value = $(this).val();
        var user = $("#user_login").val();
        var path = "/joinevent/";

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
        var path = "/unjoinevent/";

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

    $(".btn-deletePost",this).click(function () {

        var value = $(this).val();
        var path = "/dashboard/deletepost";

        $.ajax({
            url:path,
            type: 'POST',
            dataType: 'json',
            data: {
                post: value
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