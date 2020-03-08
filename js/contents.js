$(document).ready(function(){
  $('#tab1 .news_box').click(function(){
    $('#tab1 .news_box').removeClass('click');
    $(this).addClass('click');
  });
  $('#tab2 .news_box').click(function(){
    $('#tab2 .news_box').removeClass('click');
    $(this).addClass('click');
  });
});

$(function(){
  if($('.single-item-rtl ul li').size() > 1){
  $('.single-item-rtl ul').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    rtl:true
  });
   }
});

$(function(){
$('.class_img').slick({
 // autoplay: true,
 autoplaySpeed: 3000,
 speed:1000,
 dots:true,
 arrows: true,
 prevArrow: '.class_left',
 nextArrow: '.class_right',
  });
});
