/**
 * Created by taraska on 9/7/2016.
 */
// $(document).ready(function(){
//     $(".slider_pointer_right").click(function(){
//         $(".slider_top").addClass("slider_temp");
//         $(".slider_temp").removeClass("slider_top");
//         $(".slider_right").addClass("slider_top");
//         $(".slider_top").removeClass("slider_right");
//         $(".slider_temp").addClass("slider_right");
//         $(".slider_right").removeClass("slider_temp");
//     });
// });
//
// $(document).ready(function(){
//     $(".slider_pointer_left").click(function(){
//         $(".slider_top").addClass("slider_temp");
//         $(".slider_temp").removeClass("slider_top");
//         $(".slider_left").addClass("slider_top");
//         $(".slider_top").removeClass("slider_left");
//         $(".slider_temp").addClass("slider_left");
//         $(".slider_left").removeClass("slider_temp");
//     });
// });
$(document).ready(function(){
    $(".slider_pointer_right").click(function(){


        $(".slider_top").addClass("temp_left").removeClass("slider_top");

        $(".slider_left").addClass("temp_right").removeClass("slider_left");

        $(".slider_right").addClass("temp_top").removeClass("slider_right");

        $(".temp_left").addClass("slider_left").removeClass("temp_left");

        $(".temp_right").addClass("slider_right").removeClass("temp_right");

        $(".temp_top").addClass("slider_top").removeClass("temp_top");
        // var top = document.getElementsByClassName("slider_top")[0];
        // top.style.transform = "scale(1.2)";
        // top.style.transform = "scale(1)";
    });
});

$(document).ready(function(){
    $(".slider_pointer_left").click(function(){
        $(".slider_top").addClass("temp_right").removeClass("slider_top");

        $(".slider_left").addClass("temp_top").removeClass("slider_left");

        $(".slider_right").addClass("temp_left").removeClass("slider_right");

        $(".temp_left").addClass("slider_left").removeClass("temp_left");

        $(".temp_right").addClass("slider_right").removeClass("temp_right");

        $(".temp_top").addClass("slider_top").removeClass("temp_top");
    });
});
