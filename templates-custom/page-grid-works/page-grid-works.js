/*! WORKS JS BY NWRK GUS */

//---------------------------------------------------
// JQUERY CALL load
//---------------------------------------------------
$(window).load(function () {}); // end Document load

//---------------------------------------------------
// JQUERY CALL READY
//---------------------------------------------------
$(document).ready(function () {
  //---------------------------------------
  // Portfolio MODULO MIX IT UP
  // https://www.kunkalabs.com/mixitup/
  // https://github.com/patrickkunka/mixitup/
  // https://github.com/patrickkunka/mixitup/tree/v2
  //---------------------------------------

  // declare vars

  var containerMixPortfolio = null;
  var mixer = null;

  // creo instance mix
  function initMixitUp() {
    containerMixPortfolio = document.querySelector("#grid-portfolio");
    mixer = mixitup(containerMixPortfolio, {
      animation: {
        duration: 600,
        easing: "ease-in-out",
        effects: "fade scale",
        applyPerspective: false,
        // perspectiveDistance: "3000px",
        // perspectiveOrigin: "50% 50%",
        animateResizeTargets: false,
        animateResizeContainer: false,
        queue: true,
        queueLimit: 5,
        nudge: true,
      },
      debug: {
        // showWarnings: true,
        // enable: true,
      },
      callbacks: {
        onMixStart: function (state, futureState) {
          //console.log('Mix Start ...');
        },
        onMixEnd: function (state) {
          console.log("Mix end...");
          // do lazy load for visible elements
          lazyLoad();
          // recalculate gum shoe distances despues de load
          // >> se cambiaron cosas que afectan la posicion de las secciones
          gumshoe.setDistances();
        },
        onMixFail: function (state) {
          //console.log("Mix fail ....");
        },
        onMixBusy: function (state) {
          //console.log("Mix busy ....");
        },
      },
    });
  }

  // lazyload para la categoria actual. se llama despues de finalizar el mix
  function lazyLoad() {
    $("#grid-portfolio")
      .find(".mix:visible")
      .each(function () {
        var $t = $(this),
          $img = $(this).find("img"),
          src = $img.attr("data-src");
        if (!$img.hasClass("lazyloaded")) {
          $img.attr("src", src).addClass("lazyloaded");
        }
      });
  }

  // Portfolio Filter Filtro activo
  function initClickInFilters() {
    $("ul#portfolioFilter li").click(function () {
      $("ul#portfolioFilter li").removeClass("active-filter");
      $(this).addClass("active-filter");
    });
  }

  //-------------------------------------
  // Inicializacion de Modal Links
  //-------------------------------------

  // big image holder

  function initImagesModal() {
    var bigImageElement = $("#modal-works-big-image");
    {
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
    }
  }

  function initClickModals() {
    var bigImageElementClick = $("#modal-works-big-image");
    $(".open-modal-works").click(function (event) {
      event.preventDefault();
      // clean big image in modal image holder
      bigImageElementClick.attr("src", "");
      // get  big image url from custom attrs
      var bigImageUrl = $(this).attr("data-big-image");
      // set big image in modal image holder
      if (bigImageUrl) {
        bigImageElementClick.attr("src", bigImageUrl);
      }
    });
  }

  //-------------------------------------
  // get vars from an URL
  //-------------------------------------
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

  //-------------------------------------
  // Inicializacion de VIEW, cascade delays GO!
  //-------------------------------------

  // 1 init small  delay
  setTimeout(function () {

    // 2 mixitup delay
    setTimeout(function () {
      initMixitUp();
      // 3 click events  delay
      setTimeout(function () {
        // mix click filters events
        initClickInFilters();

        // CALL MIXITUP >> select featured category and do something if needed
        mixer.toggleOn(".featured").then(function (state) {
          //console.log(state.activeFilter.selector);
        });

        // init image modals
        initImagesModal();
        initClickModals();

        // open screen based on url vars > check if we have an action parameter in the url
        var actionParameterValue = getUrlVars()["action"];
        if (actionParameterValue) {
          // open this screen
          $("#" + actionParameterValue).click();
        }
      }, 900);
      // end events delay
    }, 600);
    // end mixitup delay
  }, 50);
  // end show thumbs delay
  //---------------------------------------------------
}); // end Document READY
//---------------------------------------------------
