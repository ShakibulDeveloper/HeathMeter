(function ($) {

    "use strict";
    
    // perloader Form js
    $(window).on('load', function () {
        $('.preloader').delay(1000).fadeOut(800);
    });
    
    // typing js part 
    $(".typed").typed({
        strings: ["BMI Score", "BMR Score", "Health Status", "Doctor's Advice"],
        // Optionally use an HTML element to grab strings from (must wrap each string in a <p>)
        stringsElement: null,
        // typing speed
        typeSpeed: 30,
        // time before typing starts
        startDelay: 1200,
        // backspacing speed
        backSpeed: 20,
        // time before backspacing
        backDelay: 500,
        // loop
        loop: true,
        // false = infinite
        loopCount: false,
        // show cursor
        showCursor: false,
        // character for cursor
        cursorChar: "|",
        // attribute to type (null == text)
        attr: null,
        // either html or text
        contentType: 'html',
        // call when done callback function
        callback: function () {},
        // starting callback function before each string
        preStringTyped: function () {},
        //callback for every typed string
        onStringTyped: function () {},
        // callback for reset
        resetCallback: function () {}
    });

    // make eye ball follow cursor
    document.addEventListener('mousemove', function () {
        var lookX = (event.clientX - window.innerWidth / 2) / 15;
        var lookY = (event.clientY - window.innerHeight / 2) / 15;

        document.documentElement.style.setProperty('--lookX', `${lookX}px`);
        document.documentElement.style.setProperty('--lookY', `${lookY}px`);
    })



    // make cursor pulse
    var ball = document.querySelector('.ball');

    document.addEventListener('mousemove', function (x) {
        var rando = Math.random();
        ball.style.transform = 'translateY(' + (x.clientY - 25) + 'px)';
        ball.style.transform += 'translateX(' + (x.clientX - 25) + 'px)';
    });

}(jQuery));
