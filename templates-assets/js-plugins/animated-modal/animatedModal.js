/*!=========================================
 * MODIFIED BY GUS!!!!
 * animatedModal.js: Version 1.0
 * author: João Pereira
 * website: http://www.joaopereira.pt
 * email: joaopereirawd@gmail.com
 * Licensed MIT 
=========================================*/

(function ($) {
 
    $.fn.animatedModal = function(options) {
        var modal = $(this);
        
        //Defaults
        var settings = $.extend({
            modalTarget:'animatedModal', 
            position:'fixed', 
            width:'100%', 
            height:'100%', 
            top:'0px', 
            left:'0px', 
            zIndexIn: '9999',  
            zIndexOut: '-9999',  
            color: '#39BEB9', 
            opacityIn:'1',  
            opacityOut:'0', 
            animatedIn:'zoomIn',
            animatedOut:'zoomOut',
            animationDuration:'.6s', 
            overflow:'auto', 
            // Callbacks
            beforeOpen: function() {},           
            afterOpen: function() {}, 
            beforeClose: function() {}, 
            afterClose: function() {}
 
        }, options);
        
		var closeBt = $('.close-'+settings.modalTarget);
		var modalIsOpen = false;

        var href = $(modal).attr('href'),
            id = $('body').find('#'+settings.modalTarget),
            idConc = '#'+id.attr('id');
            // Default Classes
            id.addClass('animated');
			id.addClass(settings.modalTarget+'-off');
		

        //Init styles
        var initStyles = {
            'position':settings.position,
            'width':settings.width,
            'height':settings.height,
            'top':settings.top,
            'left':settings.left,
            'background-color':settings.color,
            'overflow-y':settings.overflow,
            'z-index':settings.zIndexOut,
            'opacity':settings.opacityOut,
            '-webkit-animation-duration':settings.animationDuration,
            '-moz-animation-duration':settings.animationDuration,
            '-ms-animation-duration':settings.animationDuration,
            'animation-duration':settings.animationDuration
        };
        //Apply stles
        id.css(initStyles);

        modal.click(function(event) {       
            event.preventDefault();
			disableScroll();
			modalIsOpen = true;
            if (href == idConc) {
                if (id.hasClass(settings.modalTarget+'-off')) {
                    id.removeClass(settings.animatedOut);
                    id.removeClass(settings.modalTarget+'-off');
                    id.addClass(settings.modalTarget+'-on');
                } 

                 if (id.hasClass(settings.modalTarget+'-on')) {
                    settings.beforeOpen();
                    id.css({'opacity':settings.opacityIn,'z-index':settings.zIndexIn});
                    id.addClass(settings.animatedIn);  
                    id.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', afterOpen);
                };  
            } 
        });


        // close con button
        closeBt.click(function(event) {
            event.preventDefault();
            doClose();
        });

        // close con escape
        $(document).keydown(function(event) {
			// if modal open and ESC key > close
			if (event.keyCode == 27 && modalIsOpen) {
				doClose();
			}
        });

        // llamada close
        function doClose() {
			enableScroll();
			modalIsOpen = false;
            settings.beforeClose(); //beforeClose
            if (id.hasClass(settings.modalTarget+'-on')) {
                id.removeClass(settings.modalTarget+'-on');
                id.addClass(settings.modalTarget+'-off');
            } 

            if (id.hasClass(settings.modalTarget+'-off')) {
                id.removeClass(settings.animatedIn);
                id.addClass(settings.animatedOut);
                id.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', afterClose);
            };
        }

        function afterClose () {
            id.css({'z-index':settings.zIndexOut});
            settings.afterClose(); //afterClose
        }

        function afterOpen () {
            settings.afterOpen(); //afterOpen
        }

        // adds ons for enabling disablings scroll

        var disableScroll = function() {

            // OPCION A >> NO VA
            // $('body, html').css({'overflow':'hidden'});

            // OPCION B >> adding class
            // $('html').addClass('noscroll');
        
            // OPCION C
            /* 
            window.oldScrollPos = $(window).scrollTop();
            $(window).on('scroll.scrolldisabler',function ( event ) {
               $(window).scrollTop( window.oldScrollPos );
               event.preventDefault();
            });
            */
            // OPCION D
            if ($(document).height() > $(window).height()) {
                var scrollTop = ($('html').scrollTop()) ? $('html').scrollTop() : $('body').scrollTop(); // Works for Chrome, Firefox, IE...
                $('html').addClass('noscroll').css('top',-scrollTop);         
           }
        };

        var enableScroll = function() {

            // OPCION A >> NO VA
            // $('body, html').css({'overflow':'auto'});

            // OPCION B > adding class
            //$('html').removeClass('noscroll');

            // OPCION C
            // $(window).off('scroll.scrolldisabler');

            // OPCION D
            var scrollTop = parseInt($('html').css('top'));
            $('html').removeClass('noscroll');
            $('html,body').scrollTop(-scrollTop);
        };

    }; // End animatedModal.js

}(jQuery));