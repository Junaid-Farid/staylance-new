$(document).ready(function () {
    //close the active panel when click out side
    $("#how-it-work a").click(function () {
        $(".navbar-collapse").collapse("hide");
    });
    $("#find-host").click(function () {
        $(".navbar-collapse").collapse("hide");
    });
    $("#btn-collapse").click(function () {
        aler('dsf');
        $(".navbar-collapse").collapse("show");
    });

    $("#member_modal").modal("show");
//    $("#find_host_panel").hide();
    $("#work-panel").hide();
    $("#host-panel").hide();

    $("#navbarCollapse .nav li").each(function () {
        if (window.location.href.indexOf($(this).find("a:first").attr("href")) > -1)
        {
            $(this).addClass("active").siblings().removeClass("active");
        }
    });
    $("#navbarCollapse .nav li").hover(function () {
        $(this).addClass("active");
    }, function () {
        $(this).removeClass("active");
    });
//    $("#find_host_link").on("click", function (e) {
//        e.preventDefault();
//        $("#find_host_link").addClass("active");
//        $("#find_host_panel").slideToggle("slow");
//        $("#how_it_works_panel").hide(9);
//    });
    $("#how-it-work").on("click", function (e) {
        e.preventDefault();
        $(this).addClass("active");
        $("#host-panel").hide(9);
        $("#work-panel").slideToggle(400);
    });
    $("#find-host").on("click", function (e) {
        e.preventDefault();
        $(this).addClass("active");
        $("#work-panel").hide(9);
        $("#host-panel").slideToggle(400);
    });
});


