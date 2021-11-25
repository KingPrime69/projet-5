$(document).ready(function(){
  $('.parallax').parallax();
});


$(document).ready(function(){
  $('#button_next1').on('click', function() {
    $('.carousel').carousel('next');
  })
  $('#button_pre1').on('click', function() {
    $('.carousel').carousel('prev');
  })
  $('.carousel').carousel();
  $('.carousel.carousel-slider').carousel({
    fullWidth: true,
    indicators: true,
  });
});

$('.carousel').carousel({
    padding: 200
});
autoplay();
function autoplay() {
    $('.carousel').carousel('next');
    setTimeout(autoplay, 3000);
}

var instance = M.Carousel.getInstance(elem);
