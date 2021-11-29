$(document).ready(function(){
  $('.sidenav').sidenav();
  $('.carousel.carousel-slider').carousel({
    fullWidth: true,
  });
  $('.modal').modal();
  $('.parallax').parallax();
  $('#button_next1').on('click', function() {
    $('.algo .carousel').carousel('next');
  })
  $('#button_pre1').on('click', function() {
    $('.algo .carousel').carousel('prev');
  })
  $('#button_nextq').on('click', function() {
    $('.web .quentin .carousel').carousel('next');
  })
  $('#button_preq').on('click', function() {
    $('.web .quentin .carousel').carousel('prev');
  })
  $('#button_nextl').on('click', function() {
    $('.web .lorenzo .carousel').carousel('next');
  })
  $('#button_prel').on('click', function() {
    $('.web .lorenzo .carousel').carousel('prev');
  })
  $('#button_nextteaml').on('click', function() {
    $('.bio .carousel').carousel('prev');
  })
  $('#button_preteaml').on('click', function() {
    $('.bio .carousel').carousel('prev');
  })
  $('#button_preC').on('click', function() {
    $('.C .carousel').carousel('prev');
  })
  $('#button_nextC').on('click', function() {
    $('.C .carousel').carousel('next');
  })
  $('#pre_algo').on('click', function() {
    $('.init .carousel').carousel('prev');
  })
  $('#next_algo').on('click', function() {
    $('.init .carousel').carousel('next');
  })
  $('#pre_ou').on('click', function() {
    $('.ou .carousel').carousel('prev');
  })
  $('#next_ou').on('click', function() {
    $('.ou .carousel').carousel('next');
  })
  $('#pre_py').on('click', function() {
    $('.py .carousel').carousel('prev');
  })
  $('#next_py').on('click', function() {
    $('.py .carousel').carousel('next');
  })
  $('#pre_git').on('click', function() {
    $('.git .carousel').carousel('prev');
  })
  $('#next_git').on('click', function() {
    $('.git .carousel').carousel('next');
  })
  $('#pre_deb').on('click', function() {
    $('.deb .carousel').carousel('prev');
  })
  $('#next_deb').on('click', function() {
    $('.deb .carousel').carousel('next');
  })
  $('#pre_prog').on('click', function() {
    $('.prog .carousel').carousel('prev');
  })
  $('#next_prog').on('click', function() {
    $('.prog .carousel').carousel('next');
  })
  $('#pre_lol').on('click', function() {
    $('.lol .carousel').carousel('prev');
  })
  $('#next_lol').on('click', function() {
    $('.lol .carousel').carousel('next');
  })
  $('#pre_seo').on('click', function() {
    $('.seo .carousel').carousel('prev');
  })
  $('#next_seo').on('click', function() {
    $('.seo .carousel').carousel('next');
  })
});

$('#test').val('').removeClass('valid');
M.updateTextFields();
document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.fixed-action-btn');
  var instances = M.FloatingActionButton.init(elems, {
    direction: 'left',
    hoverEnabled: false
  });
});
