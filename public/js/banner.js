$(document).ready(function() {

    $("#banner").css({ "height": $(window).height() + "px" });

    var flag = false;
    var scroll;

    $(window).scroll(function() {

        scroll = $(window).scrollTop();
        if (scroll > 250) {
            if (!flag) {

                $("#logo").css({ "margin-top": "15px", "width": "90px", "height": "85px" });
                $("li").css({ "margin-top": "3px", "width": "100px", "height": "30px" });
                $("header").css({ "background-color": "white" });
                
                $("li").css({ "border-color": "#dedc00" });
                $("li").css({ "font-size": "18px" });
                $("a").css({ "color": "blue" });
                $("a").css({ "font-size": "15px" });
                $("li").css({ "border-top": "0" });
                $("li").css({ "border-left": "0" });
                $("li").css({ "border-right": "0" });
                $("li").css({ "border-radius": "3px" });
                $("li").css({ "border-style": "outset" });
                flag = true;
            }
        } else {
            if (flag) {
                $("#logo").css({ "margin-top": "13px", "width": "120px", "height": "120px" });
                $("li").css({ "margin-top": "5px", "width": "100px", "height": "30px" });
                $("header").css({ "background-color": "transparent" });
                $("a").css({ "color": "black" });
                $("li").css({ "border": "none" });
                flag = false;
            }
        }
    });

});