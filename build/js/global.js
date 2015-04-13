$(function(){
	var newsIndex = 0;
	function newsTicker(){
	    var $items = $('.fbar-nav').find('.fbar-text');

	    if (newsIndex < $items.length-1){
	        newsIndex++;
	    } else{
	        newsIndex = 0
	    }
	    $items.eq(newsIndex).siblings().fadeOut();
	    $items.eq(newsIndex).fadeIn();
	}
	var tickerSlide = setInterval(newsTicker, 5000);
});
