console.log("INDEX_JS");

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
  console.log(maxHeight);
  // Area random
  var randomLeft = getRandomInt(maxWidth);
  var randomTop= getRandomInt( maxHeight );

  var leftPos = randomLeft;
  var topPos = randomTop ;
  $(this).css({top: randomTop}).css({left: randomLeft}).css({zIndex: metaNum});


  $(this).css({width: elementWidth});
  $(this).css({height: elementHeight});
});
