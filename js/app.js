

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













