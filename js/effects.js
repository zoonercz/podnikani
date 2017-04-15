
$(document).ready(function () {
    //Fade in effect for all fadeIn class elements
    $(".fadeInEffect").each(function () {
        $(this).fadeIn(200);
    });

    $(".dropEffect").each(function () {
        $(this).show( "drop", {direction: "left"}, 200 );
    });
});

