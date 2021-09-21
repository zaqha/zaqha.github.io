// AOS
AOS.init();

// portfolio slick
$('.portfoilo').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 3000,
  centerMode: true,
  // variableWidth: true
  });


// introduction text change

var text = ["TRUE", "HAPPILY", "POSITIVELY"];
var counter = 0;
var textchange = document.getElementById("textchange");
setInterval(change, 1200);

function change() {
  textchange.innerHTML = text[counter];
  counter++;
  if (counter >= text.length) {
    counter = 0;
  }
}




/*
**
** A pen by Alex Buffet
** https://alexandrebuffet.fr
**
** Inspired by : https://medium.com/@PatrykZabielski/how-to-make-multi-layered-parallax-illustration-with-css-javascript-2b56883c3f27#.af18z9a8t
**
*/
$(function() {
  
  var $parallaxContainer = $('.parallax'),
      $parallaxLayers = $('.parallaxLayer');

  $(window).scroll(function() { 
    
    var scrollTop = $(window).scrollTop(),
        containerOffset = $parallaxContainer.offset().top,
        offset = (containerOffset - scrollTop);
    
     $parallaxLayers.each(function() {
       var depth = $(this).attr('data-depth'),
           move = -(offset * depth);
       
       $(this).css('transform','translate3d(0,' + move + 'px, 0)');
       
     });
  });
});
