

$(function(){
  $('.main_banner ul').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    asNavFor:'.slick-dots-hyo, .slick-dots-hyo_two',
    // autoplay : true,
    speed:1400,
    fade: true,

  });

//pc
  $('.slick-dots-hyo').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: '.main_banner ul',
    dots: false,
    speed:1400,
    // centerMode: true,
    focusOnSelect: true,
    prevArrow: '.btn_mb_left',
    nextArrow: '.btn_mb_right',
  });




//태블릿,모바일
  $('.slick-dots-hyo_two').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    asNavFor: '.main_banner ul',
    dots: false,
    speed:1000,
    fade: true,
    // centerMode: true,
    // focusOnSelect: true,
    prevArrow: '',
    nextArrow: '',
  });


});
