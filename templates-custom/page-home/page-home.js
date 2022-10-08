/*! HOME JS BY NWRK GUS */
//---------------------------------------------------
// JQUERY CALL load
//---------------------------------------------------
$(window).load(function () {}); // end Document load

//---------------------------------------------------
// JQUERY CALL READY
//---------------------------------------------------
$(document).ready(function () {
  //-------------------------------------------------------------------------------------------
  // Adjust stuff
  //-------------------------------------------------------------------------------------------
  function adjustIntro() {
    // get screen haight/width
    var vH = window.innerHeight;
    var vW = window.innerWidth;

    // adjust height based on current header (60 / 140)
    if ($("#masthead").height() > 100) {
      var ajuste = 140;
    } else {
      var ajuste = 60;
    }
    var newIntroHeight = vH - ajuste;
    if (newIntroHeight < 500) {
      newIntroHeight = 500;
    }

    // ajuste alto intro
    $("#intro").css("height", newIntroHeight);

    // clase  vertical-center para divs e images ??
    var parent_height = $(".vertical-center").parent().height();
    var image_height = $(".vertical-center").height();
    var top_margin = (parent_height - image_height) / 2;

    // centrar divs e images ??
    $(".vertical-center").css("padding-top", top_margin);
    $(".vertical-center-img").css("margin-top", top_margin);
  }

  function adjustServices() {
    // ajuste manual de icon-wrap en service
    var vH = window.innerHeight;
    var vW = window.innerWidth;

    if (vW > 971) {
      var blockHt = $(".service-short-info").height();
      $(".service-short-icon").css("height", blockHt + 60);
    } else {
      $(".service-short-icon").css("height", "auto");
    }
  }

  //-------------------------------------
  // Mobile Check
  function mobileCheck() {
    var check = false;
    (function (a) {
      if (
        /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(
          a
        ) ||
        /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(
          a.substr(0, 4)
        )
      )
        check = true;
    })(navigator.userAgent || navigator.vendor || window.opera);
    return check;
  }

  //-------------------------------------
  // WINDOW resize win event
  $(window).resize(function () {
    if (!mobileCheck()) {
      // solo reajusto estas cosas en desktop
      adjustIntro();
      adjustServices();
    }
  });

  //-------------------------------------
  // para mobiles > WINDOW orientationchange win event
  $(window).on("orientationchange", function (event) {
    // reajusto intro
    adjustIntro();

    // recalculate gum shoe distances >>> This affects the  height
    gumshoe.setDistances();
  });

  //-------------------------------------------------------------------------------------------
  // Skillbar automatica - Example Waypoints plugin
  //-------------------------------------------------------------------------------------------

  var skillbarsAnimationDone = false;
  function initSkillbars() {
    // http://imakewebthings.com/waypoints/api/waypoint
    // http://imakewebthings.com/waypoints/guides/getting-started/
    //  a waypoint triggers when the top of the element hits the top of the window.
    // What if we want it to trigger when the element is 20px from the top instead  > ofset
    var waypoint = new Waypoint({
      element: document.getElementById("skill-bars-container"),
      handler: function (direction) {
        // console.log(direction  + ' hit')
        // animate skill bars or do something to an object (add class, etc)
        if (!skillbarsAnimationDone) {
          $(".skillbar").each(function () {
            $(this)
              .find(".skillbar-bar")
              .animate(
                {
                  width: $(this).attr("data-percent"),
                },
                3000
              );
          });
          skillbarsAnimationDone = true;
        }
      },
      context: window,
      continuous: false,
      group: "default",
      horizontal: false,
      offset: "50%",
    });
  }

  //-------------------------------------------------------------------------------------------
  // Init calls
  //-------------------------------------------------------------------------------------------
  adjustIntro();
  adjustServices();
  initSkillbars();

  // recalculate gum shoe distances despues de load
  // >> se cambiaron cosas que afectan la posicion de las secciones
  setTimeout(function () {
    gumshoe.setDistances();
  }, 1000);

  //-------------------------------------
  // Inicializacion de Carousel Trabajos
  //-------------------------------------
  $("#project-carousel").owlCarousel({
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

  //-------------------------------------
  // Inicializacion de Modal Links
  //-------------------------------------
  // big image holder
  // var bigImageElement= $("#modal-works-big-image");
  // modal launch button
  /* $(".open-modal-works").animatedModal({
        modalTarget:'modal-works',
        position:'fixed',
        width:'100%',
        height:'100%',
        top:'0px',
        left:'0px',
        zIndexIn: '9999',
        zIndexOut: '-9999',
        color: '#313b4a',
        opacityIn:'1',
        opacityOut:'0',
        animatedIn:'zoomIn',
        // animatedIn:'lightSpeedIn',
        animatedOut:'zoomOut',
        //  animatedOut:'bounceOutDown',
        animationDuration:'.6s',
        overflow:'hidden',
        // Callbacks
        beforeOpen: function() {
            // clean big image in modal image holder
            bigImageElement.attr('src', '');
        },
        afterOpen: function() {},
        beforeClose: function() {},
        afterClose: function() {
            // clean big image in modal image holder
            bigImageElement.attr('src', '');
        }

    }); */

  /* $(".open-modal-works").click(function(event) {
        event.preventDefault();
        // clean big image in modal image holder
        bigImageElement.attr('src', '');
        // get  big image url from custom attrs
        var bigImageUrl = $(this).attr('data-big-image');
        // set big image in modal image holder
        if (bigImageUrl) {
            bigImageElement.attr('src', bigImageUrl);
        }
    });  */

  //---------------------------------------------------
}); // end Document READY
//---------------------------------------------------
