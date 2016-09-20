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
    var slider = document.getElementById('slider');
    var images = slider.querySelectorAll('.slider_img');
    if (!slider || !images) return;
    var count = images.length;



    var sliderPointer = document.createElement('div');
    sliderPointer.className = 'slider_pointer_container';

    for (var i = 0; i < count; i++) {
        var pointer = document.createElement('div');
        pointer.className = 'slider_pointer';

        var dataImg = 'img' + (i+1);
        pointer.setAttribute('data-image', dataImg);
        images[i].classList.add(dataImg);
        images[i].classList.add('slider_hide');
        sliderPointer.appendChild(pointer);
    }

    slider.appendChild(sliderPointer);

    var pointers = sliderPointer.querySelectorAll('.slider_pointer');
    var current, left, top, right;
    if (pointers.length == 1) {
        pointers[0].classList.add('slider_pointer_current');
        current = pointers[0];
    } else {
        pointers[1].classList.add('slider_pointer_current');
        current = pointers[1];
    }


    changeImgPs(current);



    sliderPointer.onclick = function(e) {
        var target = e.target;
        if ( !target.classList.contains('slider_pointer') ) return;
        current.classList.remove('slider_pointer_current')
        target.classList.add('slider_pointer_current');
        current = target;

        changeImgPs(current);
    }

    function changeImgPs(current) {
        if (top) {
            top.classList.remove('slider_top');
            top.classList.add('slider_hide');
        }
        if (left) {
            left.classList.remove('slider_left');
            left.classList.add('slider_hide');
        }
        if (right) {
            right.classList.remove('slider_right');
            right.classList.add('slider_hide');
        }

        var imgNum = current.getAttribute('data-image');
        var currentImage = slider.getElementsByClassName(imgNum)[0];

        currentImage.classList.remove('slider_hide');
        currentImage.classList.add('slider_top');
        top = currentImage;

        if (currentImage.nextElementSibling && currentImage.nextElementSibling.tagName == 'IMG') {
            currentImage.nextElementSibling.classList.remove('slider_hide');
            currentImage.nextElementSibling.classList.add('slider_right');
            right = currentImage.nextElementSibling;
        }
        if (currentImage.previousElementSibling && currentImage.previousElementSibling.tagName == 'IMG') {
            currentImage.previousElementSibling.classList.remove('slider_hide');
            currentImage.previousElementSibling.classList.add('slider_left');
            left = currentImage.previousElementSibling;
        }
    }



//     $(".slider_pointer_right").click(function(){
//
//
//         $(".slider_top").addClass("temp_left").removeClass("slider_top");
//
//         $(".slider_left").addClass("temp_right").removeClass("slider_left");
//
//         $(".slider_right").addClass("temp_top").removeClass("slider_right");
//
//         $(".temp_left").addClass("slider_left").removeClass("temp_left");
//
//         $(".temp_right").addClass("slider_right").removeClass("temp_right");
//
//         $(".temp_top").addClass("slider_top").removeClass("temp_top");
//         // var top = document.getElementsByClassName("slider_top")[0];
//         // top.style.transform = "scale(1.2)";
//         // top.style.transform = "scale(1)";
//     });
// });
//
// $(document).ready(function(){
//     $(".slider_pointer_left").click(function(){
//         $(".slider_top").addClass("temp_right").removeClass("slider_top");
//
//         $(".slider_left").addClass("temp_top").removeClass("slider_left");
//
//         $(".slider_right").addClass("temp_left").removeClass("slider_right");
//
//         $(".temp_left").addClass("slider_left").removeClass("temp_left");
//
//         $(".temp_right").addClass("slider_right").removeClass("temp_right");
//
//         $(".temp_top").addClass("slider_top").removeClass("temp_top");
//     });
});
