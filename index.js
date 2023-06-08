
$(document).ready(function () {
    $("body").addClass("in");
});

$(".transition").on("click", function (event) {
    event.preventDefault();
    let href = $(this).attr("href");

    $("body").removeClass("in").addClass("out");
    setTimeout(() => {
        window.location.href = href;
    }, 500);
});