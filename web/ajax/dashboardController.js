$( document ).ready(function() {

    $("#btn-participar").click(function () {

        var value = $("#btn-participar").attr("value");
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
                    $("#btn-noparticipar").fadeIn("slow");
                    $("#btn-participar").fadeOut(0);
                }
            }
        })
    })

    $("#btn-noparticipar").click(function () {

        var value = $("#btn-noparticipar").attr("value");
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
                    $("#btn-participar").fadeIn("slow");
                    $("#btn-noparticipar").fadeOut(0);
                }
            }
        })
    })
})