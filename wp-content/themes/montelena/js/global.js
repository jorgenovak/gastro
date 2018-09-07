$(document).ready(function(){
  console.log("GLOBAL_JS");
  function hideNavs(){
    $('header').css({top: '-40px'});
    $('footer').css({bottom: '-40px'});
  }
  setTimeout(hideNavs, 2000);


  var box = document.querySelector('body');
  var footerNear = window.innerHeight - 80;
  function updateDisplay(event) {
    if( event.pageY < 80 ){
      $('header').css({top: '0px'});
    } else {
      $('header').css({top: '-40px'});
    }
    if( event.pageY > footerNear) {
      $('footer').css({bottom: '0px'});
    } else {
      $('footer').css({bottom: '-40px'});
    }
  }

  box.addEventListener("mousemove", updateDisplay, false);
  box.addEventListener("mouseenter", updateDisplay, false);
  box.addEventListener("mouseleave", updateDisplay, false);




  $(function() {
      $(".metaboxArt").draggable();
  });


  var metaNum = 20;

  $(".metaboxArt").each(function(){
    function getRandomInt(max) {
      return Math.floor(Math.random() * Math.floor(max));
    }

    metaNum -= +1;
    // screen
    var elementWidth = $(this).data("width");
    var elementHeight = $(this).data("height");
    // element
    var winWidth = $(window).width();
    var winHeight = $(window).height();
    var min = 40;
    // max area
    var maxWidth =  winWidth - elementWidth - min;
    var maxHeight = winHeight - elementHeight - min;
    // Area random
    var randomLeft = getRandomInt(maxWidth);
    var randomTop= getRandomInt( maxHeight );

    var leftPos = randomLeft;
    var topPos = randomTop ;
    $(this).css({top: randomTop}).css({left: randomLeft}).css({zIndex: metaNum});


    $(this).css({width: elementWidth});
    $(this).css({height: elementHeight});
  });



  //   BACKGROUND REVEAL ------------------------------------------------------

      dataFrom = ($(".images-holder").data("from")+ '/img/nacional');
      var n = 0;
      var n2 = 0;

      $(".image-part").each(function(){
        $(this).css('background-position',' '+n+'vw '+n2+'vh');
        n -= 33.33;

        if( n < -66.66 ) {
           n = 0;
           n2 -= 33.33;
        };
        if( n2 < -66.66 ) {
           n2 = 0;
        };
      });

      /* Array of images */
      var imgs = [];
      $('.image-array').each(function() {
        var url = $(this).data('array'),
        parts = url.split("/"),
        last_part = parts[parts.length-1];

        imgs.push( last_part );
      });

      imgs = shuffle( imgs );

      var imgLength = imgs.length, windowWidth = $( window ).width();
      var minNum = 1;
      var maxNum = 20;
      // and the formula is:
      var random = Math.floor(Math.random() * (maxNum - minNum + 1)) + minNum;
      var imgInit = 'url('+ dataFrom +'/'+random+'.jpg';

      $(".image-part").css({ "background-size":  windowWidth , "background-image":  imgInit});

      $(".image-part").mouseenter(function(){ slider(this); });

      function slider( element ) {

        var count = $( element ).data('count') + 1, windowWidth = $( window ).width();

        $( element ).css({"background-image": "url("+dataFrom + "/" + imgs[count] + ")", "background-size":  windowWidth });

        var num = $( element ).data("count") + 1;
        $( element ).data('count', num);

      };

      function shuffle( array ) {

        var currentIndex = array.length, temporaryValue, randomIndex;

        while (0 !== currentIndex) {

          randomIndex = Math.floor(Math.random() * currentIndex);
          currentIndex -= 1;

          temporaryValue = array[currentIndex];

          array[currentIndex] = array[randomIndex];

          array[randomIndex] = temporaryValue;

        }

        return array;

      };
});
