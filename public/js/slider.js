/**
 * Created by taraska on 9/7/2016.
 */
$(document).ready(function(){
    $(".slider_pointer_right").click(function(){
        $(".slider_top").addClass("slider_temp");
        $(".slider_temp").removeClass("slider_top");
        $(".slider_right").addClass("slider_top");
        $(".slider_top").removeClass("slider_right");
        $(".slider_temp").addClass("slider_right");
        $(".slider_right").removeClass("slider_temp");
    });
});

$(document).ready(function(){
    $(".slider_pointer_left").click(function(){
        $(".slider_top").addClass("slider_temp");
        $(".slider_temp").removeClass("slider_top");
        $(".slider_left").addClass("slider_top");
        $(".slider_top").removeClass("slider_left");
        $(".slider_temp").addClass("slider_left");
        $(".slider_left").removeClass("slider_temp");
    });
});
