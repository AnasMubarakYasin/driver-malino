$(".preloader").delay(1550).fadeOut("up");
$("body").delay(1550).css({
    overflow: "visible",
});

setTimeout(function () {
    $("#button-banner").trigger("click");
}, 2000);
