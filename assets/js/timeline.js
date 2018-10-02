// **** AutoScroll + ScrollSpy ****
var CORRECTION = 50;  // height of the navbar 
// don't forget to setup the data-offset attribute of the <body> tag

var DELAY_READING = 5000; // 4 seconds = 4000; 10 seconds = 10000
var DELAY_SCROLLING = 5500;

var links = [ '#a1', '#a2', '#a3', '#a4', '#a5','#a6', '#a7', '#a8', '#a9', '#a10'];
var timerId = 0;

delayLinks(0);

$( '#a1 a' ).click(function(event) { 
  event.preventDefault();
  clearTimeout(timerId); 
});

$( '#a2 a' ).click(function(event) {
  event.preventDefault();
  scrollToLink( $(this).attr('href') );
});

function delayLinks( i ) {
  if( i >= links.length ) i = 0;
  scrollToLink( links[i] );
  
  var next = ( i == links.length - 1 ? 0 : i + 1);
  timerId = setTimeout(function() { delayLinks( next ) }, DELAY_READING ); 
}

function scrollToLink( link ) {
  selectLink = $( link );
  if ( selectLink.length ) {
    var top = selectLink.offset().top - CORRECTION;
    $('body,html').stop().animate({scrollTop: top}, DELAY_SCROLLING);
  } else {
    colnsole.log('The link is not found: ' + link);
  }
}