

$(document).ready(function(e) {
    $('.fancyboxf').fancybox({
		'openEffect': 'easeInBack',
		'closeEffect': 'elastic',
		'openSpeed': 500,
		'closeSpeed': 500,helpers: {
    overlay: {
      locked: false
    }
  }
	});
	
	
	$('.fancybox-media')
		.attr('rel', 'media-gallery')
		.fancybox({
			openEffect : 'none',
			closeEffect : 'none',
			prevEffect : 'none',
			nextEffect : 'none',

			arrows : false,
			helpers : {
				media : {},
				buttons : false
			}
		});
		
		
		
		
	(function ($, F) {
		F.transitions.dropIn = function() {
			var endPos = F._getPosition(true);
	
			endPos.top = (parseInt(endPos.top, 10) - 200) + 'px';
	
			F.wrap.css(endPos).show().animate({
				top: '+=200px'
			}, {
				duration: F.current.openSpeed,
				complete: F._afterZoomIn
			});
		};
	
		F.transitions.dropOut = function() {
			F.wrap.removeClass('fancybox-opened').animate({
				top: '-=200px'
			}, {
				duration: F.current.closeSpeed,
				complete: F._afterZoomOut
			});
		};
	
	}(jQuery, jQuery.fancybox));
	
	$(".fancybox").fancybox({
		openMethod : 'dropIn',
		openSpeed : 250,
	
		closeMethod : 'dropOut',
		closeSpeed : 100
	});
	
	
	
	
	
	
	
	
	
	/* global */
	// Header Nav Menu Effect //
	$('.dropdown').on('show.bs.dropdown', function(e){
	$(this).find('.dropdown-menu').first().stop(true, true).slideDown(300);
	});
	$('.dropdown').on('hide.bs.dropdown', function(e){
	$(this).find('.dropdown-menu').first().stop(true, true).slideUp(300);
	});
	
	
	
	new progressBar(".progress");
	new browserImgEffect(".js-browser-img");
	new twitterSlider(".js-twitter-slider");
	new footerSlider(".js-footer-slider");

});







/* progress bar */
var progressBar = function(root) {
    var me = this;
    me.root = $(root);

    var _init = function(element) {
        var bar = element.find(".animated-progress-bar"),
        rate    = bar.data("rate"),
        result  = element.find(".progress-rate");
        if(rate>100) {rate=100}
        bar.css({width: '100%'});
        $(window).scroll(function(d,h) {
                a = bar.offset().top + bar.height();
                b = $(window).scrollTop() + $(window).height();
                if (a < b) {
                bar.animate({
                        width: rate + '%'
                    }, {
                        easing: 'swing',
                        duration: 3000,
                        step: function(currentWidth) {
                            var data = Math.round(currentWidth);
                            result.text(data + '%');
                        }
                    });
                }
        });
    }

    me.root.each(function(){
        new _init( $(this) );
    });
}





/* content bg image */
var browserImgEffect = function(root){
    var me = this;
    me.root = $(root);
    var _init = function(element) {
        var center  = element.find(".browser-center"),
        left        = element.find(".browser-left"),
        right       = element.find(".browser-right");
        $(window).scroll(function(d,h) {
           var a = element.offset().top + element.height(),
            b = $(window).scrollTop() + $(window).height();
            if (a < b) {
                center.animate({
                    top: '204px',
                    opacity: 1
                }, 1000);

                left.animate({
                    left: '0px',
                    opacity: 1
                }, 1000);

                right.animate({
                    right: '0px',
                    opacity: 1
                }, 1000);
            }
        });
    }

    me.root.each(function(){
        new _init( $(this) );
    });
}





var twitterSlider = function(root){
    var me = this;
    me.root = $(root);

    var _init = function(element) {
        var post    = element.find(".js-twitter-post"), //each twitter post
        postLen     = post.length,
        pre         = element.find(".js-pre-twitter"),  // button to display previous twitter post
        next        = element.find(".js-next-twitter"), // button to display next twitter post
        increment   = 0,                                // order
        transitionDuration = 5000;                      // transition duration between posts

        post.eq(0).slideDown(0);                        // display first post

        // display previous twitter post
        pre.on("click",this,function(){
            increment--;
            if (increment==(-1)) {
                increment= (postLen - 1);
            };
            post.eq(increment).stop(true,true).slideDown().siblings(".js-twitter-post").slideUp();
        });

        // display next twitter post
        next.on("click",this,function(){
            increment++;
            if (increment==postLen) {
                increment=0;
            };
            post.eq(increment).stop(true,true).slideDown().siblings(".js-twitter-post").slideUp();
        });

        // function for setInterval
        function sliderAnim() {
            next.trigger('click');
        }

        setInterval(sliderAnim, transitionDuration);

    }

    me.root.each(function() {
        new _init( $(this) );
    });
};





var footerSlider = function(root) {
    var me = this;
    me.root = $(root);

    var _init = function(element) {
        var leftArr = element.find(".js-footer-slider-left"),
        rightArr    = element.find(".js-footer-slider-right"),
        item        = element.find("ul"),
        itemLen     = item.length,
        counter     = 0,
        transitionDuration = 5000;
        
        item.css({display:'none'});
        item.eq(0).css({display:'block'});

        leftArr.on('click',this,function(){
            counter--;
            if(counter==(-1)) {counter= (itemLen-1)}
            item.eq(counter).stop(true,true).fadeIn(200).siblings().css({display:'none'});
        });

        rightArr.on('click',this,function(){
            counter++;
            if(counter==itemLen) {counter=0}
            item.eq(counter).stop(true,true).fadeIn(200).siblings().css({display:'none'});
        });

        function sliderAnim() {
            rightArr.trigger('click');
        }
        setInterval(sliderAnim, transitionDuration);
    }

    me.root.each(function(){
        new _init( $(this) );
    });
}







// display 'js-hide-me' on scroll
$(window).scroll(function(d,h) {
    hideMe = $(".js-hide-me");
    hideMe.each(function(){
        var hideMePanel = ($(this).offset().top - 100) + $(this).height(),
        windowPanel = $(window).scrollTop() + $(window).height();
        if (hideMePanel < windowPanel) {
            $(this).animate({opacity:1, marginTop: '0px'},750);
        }
    });
});

/*text effect*/
var text_effect = function(root) {
    var me = this;
    me.root = $(root);

    var _init = function(element) {

        var item    = element.find(".js-text-effect-item"),
        elementLen  = item.length,
        duration    = 3000, // animation transition duration
        animCounter = -1,
        manuelCounter = 0;
        function textEffectAnim(state) {
            var animState = state;
            if(animState != 'manuel') {
                animCounter++;
            } else {
                animCounter = 0;
            }
            
            if(animCounter== elementLen) {
                animCounter = 0;
            }
            item.eq(animCounter).fadeIn(500);
            item.eq(animCounter).find(".js-text-effect-top").css({top:'-20px',opacity: '0'});
            item.eq(animCounter).find(".js-text-effect-bottom").css({top:'20px',opacity: '0'});
            item.eq(animCounter).find(".js-text-effect-top").animate({top:'0px', opacity: 1}, 900, 'linear');
            item.eq(animCounter).find(".js-text-effect-bottom").animate({top:0, opacity: 1}, 900, 'linear');
            item.eq(animCounter).delay(duration).fadeOut(300,function() {
                $(this).find(".js-text-effect-top").css({top:'-20px',opacity: '0'});
                $(this).find(".js-text-effect-bottom").css({top:'20px',opacity: '0'});
                textEffectAnim(); // restart animation when it is completed
            });
        }

        

        if(element.hasClass('effect-manuel')) {
            textEffectAnim('manuel');
            $('body').append("<div class='js-text-left' />");
            $('body').append("<div class='js-text-right' />");
            $('body').append("<div class='js-text-control' />");
            $('.slider-bg-2').append("<div class='bg-slider-overlay' />");

            item.each(function(index,element){
                $(".js-text-control").append('<a href="#" class="js-text-control-item"></a>');
            });

            var rightArr  = $(".js-text-right"),
            leftArr       = $(".js-text-left"),
            control       = $(".js-text-control-item");

            control.eq(0).addClass("active"); // add active class to first control item

            function manuelAnim() {
                item.eq(manuelCounter).fadeIn(500);
                item.eq(manuelCounter).find(".js-text-effect-top").css({top:'-20px',opacity: '0'});
                item.eq(manuelCounter).find(".js-text-effect-bottom").css({top:'20px',opacity: '0'});
                item.eq(manuelCounter).find(".js-text-effect-top").stop(true,true).animate({top:'0px', opacity: 1}, 900, 'linear');
                item.eq(manuelCounter).find(".js-text-effect-bottom").stop(true,true).animate({top:0, opacity: 1}, 900, 'linear');
                item.eq(manuelCounter).siblings().stop(true,true).fadeOut();
                item.eq(manuelCounter).siblings().find(".js-text-effect-top").css({top:'-20px',opacity: '0'});
                item.eq(manuelCounter).siblings().find(".js-text-effect-bottom").css({top:'20px',opacity: '0'});
            }

            control.on('click',function(event){
                event.preventDefault();
                thisIndex = $(this).index();
                manuelCounter = thisIndex;
                manuelAnim();
                control.eq(thisIndex).addClass("active").siblings().removeClass("active");
            });

            leftArr.on('click',this,function(){
                manuelCounter--;
                if(manuelCounter == (-1) ) {
                    manuelCounter = (elementLen - 1);
                }
                manuelAnim();
            });

            rightArr.on('click',this,function(){
                manuelCounter++;
                if(manuelCounter==elementLen) {
                    manuelCounter = 0;
                }
                manuelAnim();
            });

        } else {
            textEffectAnim('auto');
        }



    }

    me.root.each(function(){
        new _init( $(this) );
    });
}

$(document).ready(function(){
    new text_effect(".js-text-effect");
});













