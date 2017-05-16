$( document ).ready(function() {

    $(".homepage").ready(function () {
        var heighth = $(".home-head").height();
        var heightf = $(".footer-home").height();
        var heightw = $( document ).height() - (heighth + heightf);
        $(".content").css("height",heightw+"px");
    })








});