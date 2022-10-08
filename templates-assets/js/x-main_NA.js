/*! NWK MAIN JS */

//---------------------------------------------------
// JQUERY CALL load
//---------------------------------------------------
$(window).load( function (){


}); // end Document load

//---------------------------------------------------
// JQUERY CALL READY
//---------------------------------------------------
$(document).ready( function (){	

	/* 
	var scroll = new SmoothScroll('a[href*="#"]:not([data-easing])');

	var linear = new SmoothScroll('[data-easing="linear"]', {easing: 'linear'});
	var easeInQuad = new SmoothScroll('[data-easing="easeInQuad"]', {easing: 'easeInQuad'});
	var easeInCubic = new SmoothScroll('[data-easing="easeInCubic"]', {easing: 'easeInCubic'});
	var easeInQuart = new SmoothScroll('[data-easing="easeInQuart"]', {easing: 'easeInQuart'});
	var easeInQuint = new SmoothScroll('[data-easing="easeInQuint"]', {easing: 'easeInQuint'});

	var easeInOutQuad = new SmoothScroll('[data-easing="easeInOutQuad"]', {easing: 'easeInOutQuad'});
	var easeInOutCubic = new SmoothScroll('[data-easing="easeInOutCubic"]', {easing: 'easeInOutCubic'});
	var easeInOutQuart = new SmoothScroll('[data-easing="easeInOutQuart"]', {easing: 'easeInOutQuart'});
	var easeInOutQuint = new SmoothScroll('[data-easing="easeInOutQuint"]', {easing: 'easeInOutQuint'});

	var easeOutQuad = new SmoothScroll('[data-easing="easeOutQuad"]', {easing: 'easeOutQuad'});
	var easeOutCubic = new SmoothScroll('[data-easing="easeOutCubic"]', {easing: 'easeOutCubic'});
	var easeOutQuart = new SmoothScroll('[data-easing="easeOutQuart"]', {easing: 'easeOutQuart'});
	var easeOutQuint = new SmoothScroll('[data-easing="easeOutQuint"]', {easing: 'easeOutQuint'});
	 
	// Log scroll events
	var logScrollEvent = function (event) {
		console.log('type:', event.type);
		console.log('anchor:', event.detail.anchor);
		console.log('toggle:', event.detail.toggle);
	};
	// scroll listeners
	document.addEventListener('scrollStart', logScrollEvent, false);
	document.addEventListener('scrollStop', logScrollEvent, false);
	document.addEventListener('scrollCancel', logScrollEvent, false);
	*/
	
	// ------------------------------------------------------------------------------
	// Magnific Pop 1 class INIT (Lightbox para Modal Window suelta)
	// ------------------------------------------------------------------------------
	// dimsemenov.com/plugins/magnific-popup/documentation.html
	/* $('.open-popup-link').magnificPopup({
		type:'inline',
		// overflowY: 'scroll',	
		// fixedBgPos: 
		// mainClass: 'mfp-with-fade',
		// removalDelay: 1000, //delay removal by X to allow out-animation
		midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
	}); */


	// ------------------------------------------------------------------------------
	// Magnific Pop 2 class INIT (Lightbox para imagenes directas)
	// ------------------------------------------------------------------------------
	/* $('.image-lightbox-link').magnificPopup({ 
		type: 'image',
		mainClass: 'mfp-with-zoom', // this class is for CSS animation below
		tLoading: 'Loading',
		//overflowY: 'scroll',
		gallery: {
			enabled: true
			},
			zoom: {
			enabled: true, // By default it's false, so don't forget to enable it
			duration: 400, // duration of the effect, in milliseconds
			easing: 'ease-in-out', // CSS transition easing function 
			// The "opener" function should return the element from which popup will be zoomed in
			// and to which popup will be scaled down
			// By defailt it looks for an image tag:
			opener: function(openerElement) {
				// openerElement is the element on which popup was initialized, in this case its <a> tag
				// you don't need to add "opener" option if this code matches your needs, it's defailt one.
				return openerElement.is('img') ? openerElement : openerElement.find('img');
			}
		},
		image: {
			titleSrc: 'data-caption', // Attribute of the target element that contains caption for the slide.
			// Or the function that should return the title. For example:
			// titleSrc: function(item) {
			//   return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
			// }
			verticalFit: false, // Fits image in area vertically
			tError: '---' // Error message
		}
	}); */

//---------------------------------------------------
}); // end Document READY
//---------------------------------------------------

