
  $(function(){



	    $('.main_banner ul').slick({
		slidesToShow: 1,
  		slidesToScroll: 1,
  		arrows: false,
     // autoplay : true,
       asNavFor: '.slick-dots-hyo',
    });

    $('.slick-dots-hyo').slick({

      asNavFor: '.main_banner ul',
      dots: false,
      centerMode: true,
      focusOnSelect: true,
	  slidesToShow: 3,
      slidesToScroll: 1,
      prevArrow: '.btn_mb_left',
      nextArrow: '.btn_mb_right',

    });

    $('.tit a').click(function(){
      $('.tit a').removeClass()
        $(this).addClass('on')
    })




          $('#tab1 .news_box').click(function(){
            $('#tab1 .news_box').removeClass('click');
            $(this).addClass('click');
          });
          $('#tab2 .news_box').click(function(){
            $('#tab2 .news_box').removeClass('click');
            $(this).addClass('click');
          });


		  $('.single-item-rtl ul').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            rtl:true
          });




  });
