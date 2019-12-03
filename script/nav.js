$(".menu-button").click(function () {
    if($(".page-mask").hasClass("open-nav")) {
        $(this).removeClass("close");
        $(this).addClass("open");
        $(".page-mask").removeClass("open-nav");
        setTimeout(function () {
            $(".page-mask").css("display", "none");
        }, 300)
    }
    else {
        $(".page-mask").css("display", "block");
        $(this).removeClass("open");
        $(this).addClass("close");
        setTimeout(function() {
            $(".page-mask").addClass("open-nav");
        },10)
    }
});