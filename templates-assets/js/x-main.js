/*! NWK MAIN JS */

//---------------------------------------------------
// JQUERY CALL load
//---------------------------------------------------
$(window).load(function () {
  // por las dudas recalculate gum shoe distances despues de load
  setTimeout(function () {
    gumshoe.setDistances();
  }, 100);
}); // end Document load

//---------------------------------------------------
// JQUERY CALL READY
//---------------------------------------------------
$(document).ready(function () {
  // ------------------------------------------------------------------------------
  // MENU MOBILE: Init sliding menu lateral mobile
  // ------------------------------------------------------------------------------
  // toggle el menu despues de click en barra o close
  $("#sm-trigger").on("click", function (e) {
    // stop propagation to avoid removing classess on close!
    e.stopPropagation();
    $("#sm-trigger").toggleClass("active");
    $("#mastwrap").toggleClass("sliding-toright");
    $("#slidemenu").toggleClass("menu-open");
    $("#mastwrap").addClass("nav-opened");
  });

  // cierro el menu despues de click afuera
  $("#mastwrap").on("click", function (e) {
    $("#mastwrap").removeClass("sliding-toright");
    $("#slidemenu").removeClass("menu-open");
    $("#sm-trigger").removeClass("active");
  });
  // click en mobile items
  $("#slidemenu a").on("click", function (e) {
    // > cierro el menu
    $("#mastwrap").removeClass("sliding-toright");
    $("#slidemenu").removeClass("menu-open");
    $("#sm-trigger").removeClass("active");
  });

  // scroll to top
  $("#menu-icon-back-top,  #footer-icon-back-top").on("click", function (e) {
    // stop propagation if we dont need to close
    e.stopPropagation();
    // close
    $("#mastwrap").removeClass("sliding-toright");
    $("#slidemenu").removeClass("menu-open");
    $("#sm-trigger").removeClass("active");
    // scroll to top
    scrollObject.animateScroll(document.querySelector("#masthead"));
  });

  // ------------------------------------------------------------------------------
  // PACE EVENTS post load:
  // ------------------------------------------------------------------------------
  // https://github.hubspot.com/pace/
  /*
	>> Pace fires the following events:
    start: When pace is initially started, or as a part of a restart
	stop: When pace is manually stopped, or as a part of a restart
	restart: When pace is restarted (manually, or by a new AJAX request)
	done: When pace is finished
	hide: When the pace is hidden (can be later than done, based on ghostTime and minTime)
	You can bind onto events using the on, off and once methods:

	Pace.on(event, handler, [context]): Call handler (optionally with context) when event is triggered
	Pace.off(event, [handler]): Unbind the provided event and handler combination.
	Pace.once(event, handler, [context]): Bind handler to the next (and only the next) incidence of event

	>> Pace exposes the following methods:
	Pace.start: Show the progress bar and start updating. Called automatically if you don't use AMD or CommonJS.
	Pace.restart: Show the progress bar if it's hidden and start reporting the progress from scratch. Called automatically whenever pushState or replaceState is called by default.
	Pace.stop: Hide the progress bar and stop updating it.
	Pace.track: Explicitly track one or more requests, see Tracking below
	Pace.ignore: Expliticly ignore one or more requests, see Tracking below
	*/

  Pace.on("done", function () {
    //alert("PACE DONE")
    //$(".cover").fadeOut(2000);
  });

  // ------------------------------------------------------------------------------
  // SCROLL TO: Init Smooth Scroll Plugin
  // ------------------------------------------------------------------------------
  // https://github.com/cferdinandi/smooth-scroll
  var scrollObject = new SmoothScroll('a[href*="#"]', {
    // Selectors
    ignore: "[data-scroll-ignore]", // Selector for links to ignore (must be a valid CSS selector)
    //header: null, // Selector for fixed headers (must be a valid CSS selector)
    header: "#masthead",
    topOnEmptyHash: true, // Scroll to the top of the page for links with href="#"
    // Speed & Easing
    speed: 500, // Integer. How fast to complete the scroll in milliseconds
    offset: 0,
    clip: true, // If true, adjust scroll distance to prevent abrupt stops near the bottom of the page
    // offset: function (anchor, toggle) {
    // Integer or Function returning an integer. How far to offset the scrolling anchor location in pixels
    // This example is a function, but you could do something as simple as `offset: 25`
    //return 80;
    //},
    easing: "easeInOutCubic",
    // History
    updateURL: true, // Update the URL on scroll
    popstate: true, // Animate scrolling with the forward/backward browser buttons (requires updateURL to be true)
    // Custom Events
    emitEvents: true, // Emit custom events
  });

  // ------------------------------------------------------------------------------
  // GUMSHOE / SCROLL SPY: Init Gumshoe in STD menu >> and LINK THIS TO MOBILE
  // ------------------------------------------------------------------------------
  // https://github.com/cferdinandi/gumshoe

  // methods
  /*
	Recalculate the height of document, the height of the fixed header, and how far navigation targets are from the top of the document.
	gumshoe.setDistances();

	Determine which navigation element is currently active and add active classes.
	gumshoe.getCurrentNav();

	Destroy the current gumshoe.init(). This is called automatically during the init function to remove any existing initializations.
	gumshoe.destroy(); */

  gumshoe.init({
    //selector: '[data-gumshoe] a', // Default link selector (must use a valid CSS selector)
    selector: "#main-nav a",
    // ignore contact links to the bottom
    //selector: '[data-gumshoe] a:not([href="#contact"])',
    //selectorHeader: '[data-gumshoe-header]', // Fixed header selector (must use a valid CSS selector)
    selectorHeader: "#masthead", // Fixed header selector (must use a valid CSS selector)
    container: window, // The element to spy on scrolling in (must be a valid DOM Node)
    offset: 0, // Distance in pixels to offset calculations
    activeClass: "selected", // Class to apply to active navigation link and its parent list item
    scrollDelay: false, // Wait until scrolling has stopped before updating the navigation

    // The callback is triggered after setting the active link, to show it as active in the `nav`
    callback: function (gumEventObject) {
      // console.log(gumEventObject.distance)
      // console.log(gumEventObject.nav.id)
      // console.log(gumEventObject)
      if (gumEventObject) {
        var menuItemId = gumEventObject.nav.id;
        // get the baseid > remove the "-linker-mob" / "-linker-std" part >> 11 chars
        baseElementId = menuItemId.substr(0, menuItemId.length - 11);
        if (baseElementId) {
          // sync menus STD y Mobile
          // STD menu handled by gumshoe > replicate behavior in mobile
          // clean all selecteds in Mobile
          $("#slidemenu a").removeClass("selected");
          // add new select en mobile
          $("#" + baseElementId + "-linker-mob").addClass("selected");
        }
      }
    },
  });

  // ------------------------------------------------------------------------------
  // CONTACT FORM / TURN OFF IN ALL AUTOCOMPLETE fields and forms
  // ------------------------------------------------------------------------------
  // add 'autocomplete'='off'attribute
  $("form").attr("autocomplete", "off");
  $("input").attr("autocomplete", "off");

  // SUBMIT CONMTACT FOM > force scroll to contact anchor on submit (to reload in the same place)
  $("#scf-button").on("click", function (e) {
    var anchor = document.querySelector("#contact");
    scrollObject.animateScroll(anchor);
  });

  // ------------------------------------------------------------------------------
  // DETECTIZR (Moedrnizr extension)
  // ------------------------------------------------------------------------------
  //https://baris.aydinoglu.info/Detectizr/
  // Modernizr.Detectizr.detect({detectScreen:false});
  /* if (Detectizr.browser.name === 'ie') {
		vm.isIEBrowser = true;
  } */



  // ------------------------------------------------------------------------------
  // FADE OUT LINKS (Moedrnizr extension)
  // ------------------------------------------------------------------------------
  // delegate all clicks on "a" tag links with this class
  $(document).on("click", "a.fade-out-click-jump", function () {

    // get the href attribute
    var newUrl = $(this).attr("href");

    // veryfy if the new url exists or is a hash
    if (!newUrl || newUrl[0] === "#") {
        // set that hash
        location.hash = newUrl;
        return;
    }


    // now, fadeout the html (whole page)
    $("body").fadeOut(function () {
        // when the animation is complete, set the new location
        location = newUrl;
    });

    // prevent the default browser behavior.
    return false;
  });

  // ------------------------------------------------------------------------------
  // REMOVE CUSTOM SCROLLS FOR MOBILE
  // ------------------------------------------------------------------------------

 $('html.touchevents.custom-scroll-area').removeClass('custom-scroll-area');
 $('html.touchevents .custom-scroll-area').removeClass('custom-scroll-area');

  //---------------------------------------------------
}); // end Document READY
//---------------------------------------------------
