$(function(){
  $('.best_ranking .best_rk-track').slick({
  centerMode: true,
  centerPadding: '180px',
  slidesToShow: 3,
  speed:1000,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '80px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '80px',
        slidesToShow: 1
      }
    }
  ]
});


});
