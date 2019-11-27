$(".menu-button").click(function () {
    if($(".page-mask").hasClass("open-nav")) {
        $(".page-mask").removeClass("open-nav");
        setTimeout(function () {
            $(".page-mask").css("display", "none");
        }, 300)
    }
    else {
        $(".page-mask").css("display", "block");
        setTimeout(function() {
            $(".page-mask").addClass("open-nav");
        },10)
    }
});