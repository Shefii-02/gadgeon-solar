$(".total-item-count").append(" 0" + $(".slide").length);
//Generate Slide Count Total and Slide Number Counters
$('.slide').each(function(i) {
    $(this).attr("data-count", "0" + ++i);
});

var slideArray = $('.slide')
    .map(function() {
        var replacement = $("<div class='slideNum'>")
            .text($(this).data("count"))
            .get(0);
        return replacement;
    })
    .get();

$(".active-item-count").append(slideArray);
$(".active-item-count  > :first-child").addClass('active');

TweenMax.set($(".slideNum").not('.active'), { autoAlpha: 0 });

(function($) {
    // Set Global variables
    var $active = $(".active"),
        $home = $(".slide"),
        $slidePrev = $(".left"),
        $slideNext = $(".right"),
        $hero = $(".hero"),
        $firstSlide = $(".slide:first-child"),
        $lastSlide = $(".slide:last-child"),
        $captionContent = $(".caption-div"),
        $slideCount = $(".slide").length,
        $captionContainer = $(".caption-inner"),
        $tl1,
        $tl2,
        $tl3

    $timerSet = 5000;
    // Timer Loop

    $(window).resize(function() {
        TweenMax.set(".hero-cover", { transform: "translatey(-101%)" });

    });
    function Timer(fn, t) {
        var timerObj = setInterval(fn, t);

        this.stop = function() {
            if (timerObj) {
                clearInterval(timerObj);
                timerObj = null;
            }
            return this;
        };

        // start timer using current settings (if it's not already running)
        this.start = function() {
            if (!timerObj) {
                this.stop();
                timerObj = setInterval(fn, t);
            }
            return this;
        };

        // start with new interval, stop current interval
        this.reset = function(newT) {
            t = newT;
            return this.stop().start();
        };
    }
    var timer = new Timer(function() {

        var slideOut = $(".slide.active"),
            slideIn = $(".slide.active").next(".slide"),
            captionSlideOut = $(".caption-div.active"),
            captionSlideIn = $(".caption-div.active").next(".caption-div"),
            numSlideOut = $(".slideNum.active"),
            numSlideIn = $(".slideNum.active").next(".slideNum");

        //Loops it
        if (slideOut.hasClass("last")) {
            slideIn = $(".slide:first-child");
            captionSlideIn = $(".caption-div:first-child");
            numSlideIn = $(".slideNum:first-child");
        }
        goToNextSlide(
            slideOut,
            slideIn,
            captionSlideIn,
            captionSlideOut,
            numSlideOut,
            numSlideIn
        );
    }, $timerSet);

    /* switch interval to 10 seconds
  timer.reset(10000);

  // stop the timer
  timer.stop();

  // start the timer
  timer.start();
    */

    // Init function that run on page load
    function initializeSlides() {
        // Hide all slides apart from the active one
        TweenMax.set(".hero-cover", { transform: "translatey(-101%)" });
        TweenMax.set($home.not($active), { autoAlpha: 0 });
        TweenMax.set($captionContent.not($active), { autoAlpha: 0 });

        new TimelineMax()
            .to(".hero-cover", 1.25, {
                transform: "translatey(100%)",
                ease: Expo.easeInOut
            })
            .fromTo(
                $firstSlide,
                0.01,
                { autoAlpha: 0 },
                { autoAlpha: 1, delay: 0.63 },
                0
            )
            .from(
                $captionContainer,
                0.2,
                { autoAlpha: 0, delay: 0.25, transform: "translatey(40px" },

                0
            )
            .staggerFromTo(
                ".caption-div.active *",
                0.2,
                { autoAlpha: 0, transform: "translate3d(0px, 8px, 0px)" },
                {
                    autoAlpha: 1,
                    transform: "none",
                    ease: Power0.easeOut
                },
                0.1
            )
            .fromTo(
                $firstSlide,
                1,
                {
                    transform: "scale(1)"
                },
                { transform: "scale(1.05)", ease: Power4.easeInOut },
                0.35
            );

        // Disable arrow down on page load
        TweenMax.set($slidePrev, { autoAlpha: 0.3 });

        $(".hero-inner :first-child").addClass("first");
        $(".hero-inner :last-child").addClass("last");

    }
    // Get Height of current Caption and to adjust heights dynamically
    function getCaptionHeight() {
        var captionSizeHeights = $(".caption-div > * ").map(function ()
        {
            return $(this).outerHeight();
        }).get();

        var maxHeight = Math.max.apply(null, captionSizeHeights);

        console.log(maxHeight)

        var totalHeight = 0,
            getCaptionPadding = 0,
            captionHeight = 0,
            tlHeight = new TimelineMax(),
            getContentHeights = $(".caption-div.active > * ");

        $(getContentHeights).each(function() {
            totalHeight += $(this).outerHeight();
            getCaptionPadding =
                parseInt(
                    $(this)
                        .parent()
                        .css("padding-top")
                ) +
                parseInt(
                    $(this)
                        .parent()
                        .css("padding-bottom")
                );

            captionHeight = totalHeight + getCaptionPadding;
        });

        tlHeight.to($captionContainer, 0.001, {
            height: captionHeight,
            ease: Power0.easeOut
        });
    }
    // Run Init function
    initializeSlides();
    getCaptionHeight();
    // Go to next slide - pass 2 parameters - slideOut and slideIn
    function goToNextSlide(
        slideOut,
        slideIn,
        captionSlideIn,
        captionSlideOut,
        numSlideOut,
        numSlideIn
    ) {
        $tl1 = new TimelineMax(),
            $tl2 = new TimelineMax(),
            $tl3 = new TimelineMax(),
            slideOutImg = slideOut.find(".slide-image"),
            slideInImg = slideIn.find(".slide-image"),
            index = slideIn.index(),
            size = $(".slide").length,
            captionStagger = captionSlideIn.find("*");
        TweenMax.set($slidePrev, { autoAlpha: 1 });
        if (captionSlideIn.length !== 0) {
            $tl2


                .set(captionSlideIn, { autoAlpha: 0, className: "+=active" })
                .set(captionSlideOut, { className: "-=active" })
                .to(captionSlideIn, 0.25, { autoAlpha: 1 }, .60)
                .to(captionSlideOut, 0.25, { autoAlpha: 0 }, .60)
                .staggerFromTo(
                    captionStagger,
                    0.2,
                    { autoAlpha: 0, transform: "none" },
                    {
                        autoAlpha: 1,
                        transform: "translate3d(0px, 8px, 0px)",
                        ease: Power1.easeOut
                    },
                    0.04
                );
        }

        if (slideIn.length !== 0) {
            // go to the next slide timeline
            $tl1
                // move the new slide (the one about to enter viewport) out of the viewport and add class active
                .set(slideIn, { autoAlpha: 1, className: "+=active", width: "100%" })
                // remove class active from the currently active slide (slideOut)
                .set(slideOut, { className: "-=active", width: "100%" })

                .to(slideOut, 1, { autoAlpha: 1, width: "0%", ease: Circ.easeInOut })
                //.to([slideOutImg], {  }, 0)
                // animate new slide up (from out of the viewport)
                .to(slideIn, 0.75, { autoAlpha: 1, ease: Circ.easeInOut })
                .fromTo(
                    slideInImg,
                    1,
                    {transform: "scale(1)" },
                    {transform: "scale(1.05)", ease: Power4.easeInOut },
                    0.15
                );
        }

        if (numSlideIn.length !== 0) {

            $tl3
                .set(numSlideIn, {
                    autoAlpha: 1,
                    className: "+=active",
                    transform: "translatey(24px)"
                })
                .set(numSlideOut, { className: "-=active" })
                .to(numSlideOut, 0.5, {
                    autoAlpha: 1,
                    transform: "translatey(-24px)",
                    ease: Sine.easeOut
                })
                .to(numSlideIn, 0.5, {
                    autoAlpha: 1,
                    transform: "translatey(0)",
                    ease: Sine.easeOut
                });
        }
        getCaptionHeight();
    }

    // Go to previous slide - pass 2 parameters - slideOut and slideIn
    function goToPreviousSlide(
        slideOut,
        slideIn,
        captionSlideIn,
        captionSlideOut,
        numSlideOut,
        numSlideIn
    ) {
        $tl1 = new TimelineMax(),
            $tl2 = new TimelineMax(),
            $tl3 = new TimelineMax(),
            slideOutImg = slideOut.find(".slide-image"),
            slideInImg = slideIn.find(".slide-image"),
            index = slideIn.index(),
            captionStagger = captionSlideIn.find("*");

        if (slideIn.length !== 0) {
            // go to the prev slide timeline
            $tl1
                // move the new slide (the one about to enter viewport) out of the viewport and add class active
                .set(slideIn, { autoAlpha: 1, className: "+=active", width: "100%" })
                // remove class active from the currently active slide (slideOut)
                .set(slideOut, { className: "-=active", width: "100%" })
                .to(slideOut, 1, { autoAlpha: 1, width: "0%", ease: Circ.easeInOut }, 0)
                .to([slideOutImg], {}, 0)
                // animate new slide up (from out of the viewport)
                .to(slideIn, 0.75, { autoAlpha: 1, ease: Circ.easeInOut }, 0)
                .fromTo(
                    [slideInImg],
                    1,
                    { transform: "scale(1)" },
                    { transform: "scale(1.05)", ease: Power4.easeInOut },
                    0.15
                );
            // animate H1 and P of the new slide up and fade them in
            //	.fromTo([slideInH1,slideInP], 0.3, {y: '+=20px', autoAlpha: 0}, {autoAlpha: 1, y: 0, ease:Power1.easeInOut}, 0.3);
        }

        if (captionSlideIn.length !== 0) {
            $tl2
                .set(captionSlideIn, { autoAlpha: 0, className: "+=active" })
                .set(captionSlideOut, { className: "-=active" })
                .to(captionSlideIn, 0.25, { autoAlpha: 1 }, .65)
                .to(captionSlideOut, 0.25, { autoAlpha: 0 }, .65)
                .staggerFromTo(
                    captionStagger,
                    0.2,
                    { autoAlpha: 0, transform: "none" },
                    {
                        autoAlpha: 1,
                        transform: "translate3d(0px, 8px, 0px)",
                        ease: Power1.easeOut
                    },
                    0.04
                );
        }

        if (numSlideIn.length !== 0) {
            console.log(numSlideOut);
            $tl3
                .set(numSlideIn, {
                    autoAlpha: 1,
                    className: "+=active",
                    transform: "translatey(-12px)"
                })
                .set(numSlideOut, { className: "-=active" })
                .to(numSlideOut, 0.5, {
                    autoAlpha: 1,
                    transform: "translatey(12px)",
                    ease: Sine.easeOut
                })
                .to(numSlideIn, 0.5, {
                    autoAlpha: 1,
                    transform: "translatey(0)",
                    ease: Sine.easeOut
                });
        }
        getCaptionHeight();
    }

    // Navigation click - go to the Next Slide
    $slideNext.click(function(e) {
        e.preventDefault();

        var slideOut = $(".slide.active"),
            slideIn = $(".slide.active").next(".slide"),
            captionSlideOut = $(".caption-div.active"),
            captionSlideIn = $(".caption-div.active").next(".caption-div"),
            numSlideOut = $(".slideNum.active"),
            numSlideIn = $(".slideNum.active").next(".slideNum");

        //Loops it
        if (slideOut.hasClass("last")) {
            slideIn = $(".slide:first-child");
            captionSlideIn = $(".caption-div:first-child");
            numSlideIn = $(".slideNum:first-child");
        }
        timer.stop().reset($timerSet);
        goToNextSlide(
            slideOut,
            slideIn,
            captionSlideIn,
            captionSlideOut,
            numSlideOut,
            numSlideIn
        );
    });

    // Navigation click - go to the Prev Slide
    $slidePrev.click(function(e) {
        e.preventDefault();

        var slideOut = $(".slide.active"),
            slideIn = $(".slide.active").prev(".slide"),
            captionSlideOut = $(".caption-div.active"),
            captionSlideIn = $(".caption-div.active").prev(".caption-div"),
            numSlideOut = $(".slideNum.active"),
            numSlideIn = $(".slideNum.active").prev(".slideNum");

        //Loops it
        if (slideOut.hasClass("first")) {
            slideIn = $(".slide:last-child");
            captionSlideIn = $(".caption-div:last-child");
            numSlideIn = $(".slideNum:last-child");
        }
        timer.stop().reset($timerSet);
        goToPreviousSlide(
            slideOut,
            slideIn,
            captionSlideIn,
            captionSlideOut,
            numSlideOut,
            numSlideIn
        );


    });
})(jQuery);
