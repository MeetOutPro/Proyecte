$( document ).ready(function() {

    $("#btn-seguir").click(function () {

        var value = $("#btn-seguir").attr("value");
        var user = $("#user_login").val();
        var path = "/followto/";

        console.log(value);

        $.ajax({
            url:path,
            type: 'POST',
            dataType: 'json',
            data: {
                id_profile: value,
                user: user
            },
            success:function(d){
                console.log(d);
            }
        })
    })

})