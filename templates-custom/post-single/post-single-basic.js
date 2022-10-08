/* POST SINGLE JS */
//---------------------------------------------------
// JQUERY CALL load
//---------------------------------------------------
$(window).load(function () {}); // end Document load

//---------------------------------------------------
// JQUERY CALL READY
//---------------------------------------------------
$(document).ready(function () {
  //-------------------------------------
  // Inicializacion de Carousels
  //-------------------------------------
  $("#bottom-carousel").owlCarousel({
    items: 5,
    nav: false,
    navText: ["&lt;", "&gt"],
    dots: true,
    dotsEach: 2,
    lazyLoad: true,
    lazyLoadEager: 5,
    loop: false,
    rewind: true,
    margin: 0,
    autoplay: true,
    autoplayTimeout: 6000,
    autoplayHoverPause: false,
    responsive: {
      0: {
        items: 1,
      },
      450: {
        items: 2,
      },
      850: {
        items: 3,
      },
      1250: {
        items: 4,
      },
      1750: {
        items: 5,
      },
    },
  });

  $("#related-carousel").owlCarousel({
    items: 4,
    nav: false,
    navText: ["&lt;", "&gt"],
    dots: true,
    dotsEach: 1,
    lazyLoad: true,
    lazyLoadEager: 15,
    loop: false,
    rewind: true,
    margin: 0,
    autoplay: true,
    autoplayTimeout: 6000,
    autoplayHoverPause: false,
    responsive: {
      0: {
        items: 1,
      },
      500: {
        items: 2,
      },
      770: {
        items: 3,
      },
      1100: {
        items: 4,
      },
      1450: {
        items: 4,
      },
    },
  });

  //-------------------------------------
  // Inicializacion de Modal Links
  //-------------------------------------
  // big image holder
  var bigImageElement = $("#modal-works-big-image");
  // modal launch button
  $(".open-modal-works").animatedModal({
    modalTarget: "modal-works",
    position: "fixed",
    width: "100%",
    height: "100%",
    top: "0px",
    left: "0px",
    zIndexIn: "9999",
    zIndexOut: "-9999",
    color: "#1B365E",
    opacityIn: "1",
    opacityOut: "0",
    animatedIn: "zoomIn",
    // animatedIn:'lightSpeedIn',
    animatedOut: "zoomOut",
    //  animatedOut:'bounceOutDown',
    animationDuration: ".6s",
    overflow: "hidden",
    // Callbacks
    beforeOpen: function () {
      // clean big image in modal image holder
      bigImageElement.attr("src", "");
    },
    afterOpen: function () {},
    beforeClose: function () {},
    afterClose: function () {
      // clean big image in modal image holder
      bigImageElement.attr("src", "");
    },
  });

  $(".open-modal-works").click(function (event) {
    event.preventDefault();
    // clean big image in modal image holder
    bigImageElement.attr("src", "");
    // get  big image url from custom attrs
    var bigImageUrl = $(this).attr("data-big-image");
    // set big image in modal image holder
    if (bigImageUrl) {
      bigImageElement.attr("src", bigImageUrl);
    }
  });

  // ger vars from an URL
  function getUrlVars() {
    var vars = [],
      hash;
    var hashes = window.location.href
      .slice(window.location.href.indexOf("?") + 1)
      .split("&");
    for (var i = 0; i < hashes.length; i++) {
      hash = hashes[i].split("=");
      vars.push(hash[0]);
      vars[hash[0]] = hash[1];
    }
    return vars;
  }

  // open screen
  // check if we have an action parameter in the url
  var actionParameterValue = getUrlVars()["action"];

  if (actionParameterValue == "zoom") {
    // open  screen
    $(".open-modal-works").click();
  }

  //---------------------------------------------------
}); // end Document READY
//---------------------------------------------------
