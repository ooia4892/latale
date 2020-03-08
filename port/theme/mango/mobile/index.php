<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_MOBILE_PATH.'/head.php');
include_once(G5_THEME_PATH.'/lib/latest.lib.php');
add_javascript('<script src="'.G5_THEME_JS_URL.'/waterfall-light.js"></script>', 0);
?>

<?php echo latest('theme/notice', 'notice', 3, 25); ?>

<div class="latest_wr"> 
    <?php echo new_latest('theme/basic', 20, 40); ?>
    <?php echo poll('theme/basic'); // 설문조사, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정 ?>
</div>

<script>
 $('.latest_wr').show().waterfall({
     // top offset
    top : false, 

    // the container witdh
    w : false, 

    // the amount of columns
    col : false, 

    // the space bewteen boxes
    gap : 15,

    // breakpoints in px
    // 0-400: 1 column
    // 400-600: 2 columns
    // 600-800: 3 columns
    // 800-1000: 4 columns
    gridWidth : [0,600,790,970,],

    // the interval to check the screen
    refresh: 0,
    timer : false,

    // execute a function as the page is scrolled to the bottom
    scrollbottom : false
 });

 $("#wrapper").addClass("idx_wrp");
</script>


<?php
include_once(G5_THEME_MOBILE_PATH.'/tail.php');
?>