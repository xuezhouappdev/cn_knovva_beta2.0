/**
 * Index page  *********************************************************************************
 */

    $("#scroll-cta").on('click', function(event) {
    if(this.hash !=="") {
        event.preventDefault();

        var hash = this.hash;
        $('html, body').animate({
            scrollTop: $(hash).offset().top - 40
        }, 1000, function(){
            // Add hash (#) to URL when done scrolling (default click behavior)
            //window.location.hash = hash;
        });
    } //end if
});




    //scroll to control the navigation, except for the vertical-slide page
if (window.location.href != "../vertical-slide.php") {
    $(window).scroll(function(){
        var p1 = $('#logoimg');

        if($(document).scrollTop() > 20) {
            $('#mynav').addClass("background");
            p1.attr('src', './img/KAlogo.png').attr('height','24px');
        }
        else {
            $('#mynav').removeClass("background");
            p1.attr('src', './img/KAlogo2.png').attr('height','30px');
        }

    });
}

    //control the animation for hamburger sign

    var $hamburger = $(".hamburger");
    $hamburger.on("click", function(e) {
        $hamburger.toggleClass("is-active");
        // Do something else, like open/close menu
    });





//feature animation section////////////////////////////////////////////////////////////////////////////////
//First Animation ////////////////////////////////////////////////////////////////////////////////

    var arrow = $("#arrow");
    var thincircle = $("#thinblue");

    TweenMax.from(arrow,1.5,
        {             x:-50,
                  alpha:0,
                 repeat: -1,
                  scale:1,
            repeatDelay:1
        });

    TweenMax.to(arrow,1.5,
    {
                    x: 6,
                    alpha:1,
                    repeat: -1,
                    scale:1,
                    repeatDelay:1

    });

    TweenMax.from(thincircle,2 ,{
        alpha:0,
        yoyo:true

    });

    TweenMax.to(thincircle,2 ,{
        alpha:1,
        repeat:-1,
        yoyo:true
    });


//Second Animation ////////////////////////////////////////////////////////////////////////////////
    var earth = $("#earth");
    var thickblue = $("#thickblue");
    var cycle = $("#cycle");


    var tl = new TimelineMax({repeat:-1});

    tl.from(earth,0.5,{
        scale:0.9,
        opacity:0
    }).to(earth,2, {
       scale:1
    }).to(earth,1,{
            opacity:0
        }).from(thickblue,2,{
            alpha:0
    }).to(thickblue,2,{
        alpha:1,
        scale:1.1
    },"-=3.9").from(cycle,0.5,{
        css: {
            opacity:0,
            scale:0.9,
            ease:Linear.easeNone,
            y:6,
            x:2
        }

    },"-=1.5").to(cycle,4.5,{
        css: {
            opacity:1,
            rotation:"180deg",
            transformOrigin:"center center",
            repeat:-1,
            scale:0.9,
            ease:Linear.easeNone,
            y:6,
            x:2
        }

    });



//Third Animation ////////////////////////////////////////////////////////////////////////////////

var moon = $("#moon");
var heart=$("#heart");

TweenMax.from(moon,1.5,
    {
        opacity:0,
        scale:0.8

    });


TweenMax.to(moon,2,
    {
        background:"#fff",
        scale:1.1,
        repeat: -1,
        yoyo:true,
        repeatDelay:1
    });



TweenMax.from(heart,3,{
    opacity: 0,
    scale:0.4,
    delay: 1.3,
    y: -40,
    repeat: -1,
    yoyo:true,
    ease: Back.easeOut,
    repeatDelay:1
});


TweenMax.to(heart,1,{
    scale:0.9,
    y: -500
});



//the js to control the href for slider
var landing_images= $(".slider .carousel-item");
var landing_controller = $(".index-slider i");

landing_images.eq(0).click(function(){
    window.location.href="http://www.modelg20cn.org";

});

landing_images.eq(1).click(function(){
    window.location.href="../app/cross.php";
});

landing_images.eq(2).click(function() {
    window.location.href = "../app/readicorn.php";
});


landing_images.parent().hover(function(){
    landing_controller.css("opacity","0.3");

});


//the js to control the gif
// var imageSwap = function () {
//     var $this = $(this);
//     var newSource = $this.data('swap');
//     $this.data('swap', $this.attr('src'));
//     $this.attr('src', newSource);
// };
//
// $(function () {
//     $('img.playgif').hover(imageSwap, imageSwap);
// });




/**
 * career page  *********************************************************************************
 */

//the js to control the get started!

$("#career-start-btn").on('click', function(event) {
    if(this.hash !=="") {
        event.preventDefault();
        var hash = this.hash;
        $('html, body').animate({
            scrollTop: $(hash).offset().top - 100
        }, 1000, function(){
            // Add hash (#) to URL when done scrolling (default click behavior)
            //window.location.hash = hash;
        });
    } //end if
});




/**
 * program page  *********************************************************************************
 */

    $(function(){
        new WOW().init();

        $(window).stellar();

    });


//the js to control the href for slider
var programs= $(".programs .shadow");

programs.eq(0).click(function(){
    window.location.href="http://www.modelg20cn.org";

});

programs.eq(1).click(function(){
    window.location.href="../app/cross.php";

});

programs.eq(2).click(function(){
    window.location.href="../app/readicorn.php";

});





/**
 * contact page  *********************************************************************************
 */


$(function(){
    var contactform = $("#contact-form");
    contactform.validate({
        rules:{
            firstname:{
              required:true
            },
            lastname:{
                required:true
            },
            mobile:{
                number:true
            }
        }
    });



    contactform.on('submit',function(e) {  //Don't forget to change the id form
        if(contactform.valid() ){
            $.ajax({
                url:'../app/hubspot-input.php', //===PHP file name====
                data:$(this).serialize(),
                type:'POST',
                success:function(data){
                    console.log(data);
                    $('#myModal').modal('hide');
                    //Success Message == 'Title', 'Message body', Last one leave as it is
                    swal("Congratulations.", "Your message has been sent :)", "success");
                },
                error:function(){
                    //Error Message == 'Title', 'Message body', Last one leave as it is
                    swal("Oops...", "Something went wrong :(", "error");
                }
            });
            e.preventDefault(); //This is to Avoid Page Refresh and Fire the Event "Click"
        }
    });
});

/**
 * vertical slide page  *********************************************************************************
 */


//scrollify: moved to the single page



