$('nav').addClass('hide');
var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('nav').outerHeight();
$(window).scroll(function(event){
  didScroll = true;
});

setInterval(function() {
  if (didScroll) {
    hasScrolled();
    didScroll = false;
  }
}, 250);
function hasScrolled() 
{
	var st = $(this).scrollTop();
	if (Math.abs(lastScrollTop - st) <= delta)
	return;
	// If current position > last position AND scrolled past navbar...
	if (st > lastScrollTop && st > navbarHeight){
	  // Scroll Down
	  $('nav').removeClass('nav-up').addClass('nav-down');
	  $('nav').removeClass('hide');	
	} else {
	  // Scroll Up
	  // If did not scroll past the document (possible on mac)...
	  if(st + $(window).height() < $(document).height()) { 
	    $('nav').removeClass('nav-down').addClass('nav-up');
	  }
	}
	lastScrollTop = st;
}