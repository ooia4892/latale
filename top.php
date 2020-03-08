<?php
include_once('./_common.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
 ?>
<?php if($mainPage){ ?>
  <!DOCTYPE html>
 <html lang="ko">
 <head>
 <?php } ?>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-5JGTDNJ8N0"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-5JGTDNJ8N0');
</script>
  <meta charset="UTF-8">
  <!-- <meta name="viewport" content="width=1200"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta http-equiv="Content-Type" content="text/html; charset=ks_c_5601-1987" />
  <meta http-equiv="Cache-Control" content="no-cache" />
  <meta http-equiv="Expires" content="0" />
  <meta http-equiv="Pragma" content="no-cache" />
  <meta http-equiv="imagetoolbar" content="no" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta http-equiv="Content-Script-Type" content="text/javascript" />
  <meta http-equiv="Content-Style-Type" content="text/css" />
  <link rel="shortcut icon" type="image/x-icon" href="/img/logo/icon.ico" />
  <meta name="description" content="다양한 액션과 흥미로운 이야기의 캐주얼 액션 MMORPG 게임">
  <meta name="keywords" content="latale, 라테일, 2d, 횡스크롤, rpg, mmorpg, 액션, 온라인게임, 이벤트, 업데이트">
  <title>흥미롭고 놀라운 이야기, '라테일(Latale)'</title>
  <link rel="stylesheet" href="/port/skin/member/basic/style.css?ver=191202">
  <link rel="stylesheet" href="/port/theme/basic/skin/outlogin/basic/style.css?ver=191202">
  <link rel="stylesheet" href="/port/theme/basic/skin/latest/notice/style.css?ver=191202">
  <link rel="stylesheet" type="text/css" href="/css/reset.css">
  <link rel="stylesheet" type="text/css" href="/css/base.css">
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
  <link rel="stylesheet" type="text/css" href="/css/main_banner.css">
  <link rel="stylesheet" type="text/css" href="/css/news.css">
  <link rel="stylesheet" type="text/css" href="/css/m_sidebar.css">
  <link rel="stylesheet" href="/css/mobile.css" media="(max-width:1903px)","(max-width:1678px)","(max-width:1470px)",
  "(max-width:1200px)","(max-width:1110px)","(max-width:900px)","(max-width:768px)","(max-width:480px)">

<?php if($mainPage){ ?>
  <script src="/js/jquery.js"></script>
<?php } ?>
  <script src='/js/slick.min.js'></script>
  <script src='/js/jquery-migrate-1.2.1.min.js'></script>
  <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>

<?php if($mainPage){ ?> </head> <?php } ?>


<body>
  <div class="out"></div>

<!--모바일 자바스크립트(사이드메뉴)-->
 <script type="text/javascript">
  $(document).ready(function(){

    $("#m_all").change(function(){
      if($("#m_all").prop('checked')){
       $('html, body').addClass('noscroll');
       $('.out').addClass('sidebar-outside');
     }else{
       $('html, body').removeClass('noscroll');
       $('.out').removeClass('sidebar-outside');
     }
    });

  });
 </script>


  <div id="wrap">
   <div class="naivWrap">
      <div class="header_top">
        <div class="container clearfix">
          <div class="happyoz_logo">
            <a href="#"><img src="/img/logo/happyoz.png" alt="해피오즈 로고"></a>
          </div>

          <div class="gnb">
            <ul >
                    <li><a href="#">통합고객센터</a></li>
                <?php if ($is_member) {  ?>
                    <li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">정보수정</a></li>
                    <li><a href="<?php echo G5_BBS_URL ?>/logout.php">로그아웃</a></li>
                    <?php if ($is_admin) {  ?>
                        <li class="tnb_admin"><a href="<?php echo correct_goto_url(G5_ADMIN_URL); ?>">관리자</a></li>
                    <?php }  ?>
                <?php } else {  ?>
                <li><a href="<?php echo G5_BBS_URL ?>/register.php">회원가입</a></li>
                <!-- <li><a href="<?php echo G5_BBS_URL ?>/login.php">로그인</a></li> -->
                <li><?php echo outlogin("outlogin_top"); ?></li>
                <?php }  ?>

            </ul>

          </div>
        </div>
      </div><!--header_top_end-->

      <div class="header_bottom container">

          <h1 class="logo">
            <a href="/home.html"><img src="/img/logo/latale_logo_color.png" alt="라테일 로고"><img src="/img/logo/latale_logo_black.png" alt="라테일 로고"></a>
          </h1>

          <?php if($mainPage){ ?><div class="game_btn"></div><?php } ?>

        <!---태블릿, 모바일 메뉴, 로그인---------------------------------------->
         <input type='checkbox' id='m_all'>
         <label id='m_label' for='m_all'>
          <div id="hamburger" class="hamburglar">
             <div class="burger-icon">
               <div class="burger-container">
                 <span class="burger-bun-top"></span>
                 <span class="burger-filling"></span>
                 <span class="burger-bun-bot"></span>
                 <span class="line-up"></span>
               </div>
             </div>
          </div>
        </label>
        <div class="sidebar">
          <div class="sidebar_header">
            <div class="m_s-logo"><img src="/img/logo/latale_logo_black.png"></div>

          </div>

          <div class="sidebar_ssr">
            <div class="m_lg_box">
              <div class="m_lg_inner">
                <p>라테일 아이디로 <span>로그인</span> 해주세요.</p>
                <a class="m-lga" href="#a"><i class="m_lg_btn">로그인</i></a>
                <div class="m_lg_link clearfix">
                  <span class="m_lg_find">
                    <a class="m_ld" href="#a">아이디</a>·<a class="m_pw" href="#a">비밀번호 찾기</a>
                  </span>
                  <a class="m_lg_join">회원가입</a>
                </div>
              </div>
            </div><!--m_lg_box_end-->

            <div id="m_icon_box">
              <div class="m_icon_inner">
              </div>
            </div>

            <div class="m-menu">
              <input type="radio" name="m-menu" id="submenu01">
              <label for="submenu01">새소식</label>
              <div class="mts-ssb"><a href="/port/bbs/board.php?bo_table=notice"><p>공지사항</p></a>
                <a href="/port/bbs/board.php?bo_table=event"><p>이벤트</p></a>
                <a href="/port/bbs/board.php?bo_table=episode"><p>업데이트</p></a>
                <a href="/port/bbs/board.php?bo_table=blog"><p>뜨는 이야기</p></a>
                <a href="/port/bbs/board.php?bo_table=webtoon"><p>라테일 웹툰</p></a>
              </div>

              <input type="radio" name="m-menu" id="submenu02">
              <label for="submenu02">가이드</label>
              <div class="mts-ssb">
                <a href="/port/bbs/board.php?bo_table=guide"><p>기본 가이드</p></a>
                <a href="/port/bbs/board.php?bo_table=system"><p>시스템 가이드</p></a>
                <a href="/port/bbs/board.php?bo_table=lawiki"><p>La Wiki</p></a>
              </div>

              <input type="radio" name="m-menu" id="submenu03">
              <label for="submenu03">랭킹</label>
              <div class="mts-ssb">
                <a href="/port/bbs/board.php?bo_table=character"><p>개인</p></a>
                <a href="/port/bbs/board.php?bo_table=guild"><p>길드</p></a>
                <a href="/port/bbs/board.php?bo_table=beginner"><p>새내기</p></a>
                <a href="/port/bbs/board.php?bo_table=pvp"><p>격투장</p></a>
                <a href="/port/bbs/board.php?bo_table=transcend"><p>초월</p></a>
              </div>

              <input type="radio" name="m-menu" id="submenu04">
              <label for="submenu04">커뮤니티</label>
              <div class="mts-ssb">
                <a href="/port/bbs/board.php?bo_table=free"><p>자유 게시판</p></a>
                <a href="/port/bbs/board.php?bo_table=trade"><p>거래 게시판</p></a>
                <a href="/port/bbs/board.php?bo_table=knowledge"><p>공략 게시판</p></a>
                <a href="/port/bbs/board.php?bo_table=screen"><p>유저 갤러리</p></a>
              </div>

              <input type="radio" name="m-menu" id="submenu05">
              <label for="submenu05">자료실</label>
              <div class="mts-ssb">
                <a href="/port/bbs/board.php?bo_table=download"><p>다운로드</p></a>
                <a href="/port/bbs/board.php?bo_tablevideo"><p>동영상</p></a>
                <a href="/port/bbs/board.php?bo_table=music"><p>OST</p></a>
                <a href="/port/bbs/board.php?bo_table=wallpaper"><p>갤러리</p></a>
              </div>

              <input type="radio" name="m-menu" id="submenu06">
              <label for="submenu06">프리미엄</label>
              <div class="mts-ssb">
                <a href="/port/bbs/board.php?bo_table=cnc"><p>캐릭터명 변경</p></a>
                <a href="/port/bbs/board.php?bo_table=gnc"><p>길드명 변경</p></a>
                <a href="/port/bbs/board.php?bo_table=cr"><p>캐릭터 복구</p></a>
                <a href="/port/bbs/board.php?bo_table=PCSearch"><p>라테일 PC방</p></a>
              </div>

              <input type="radio" name="m-menu" id="submenu07">
              <label for="submenu07">고객센터</label>
              <div class="mts-ssb">
                <a href="/port/bbs/board.php?bo_table=faq"><p>FAQ</p></a>
                <a href="/port/bbs/board.php?bo_table=Question"><p>1:1문의</p></a>
                <a href="/port/bbs/board.php?bo_table=policy"><p>운영정책</p></a>
              </div>

            </div><!--m-menu_end-->

          </div><!--sidebar_ssr_end-->
        </div><!--sidebar_end-->

        <div class="m_login"><img src="/img/icon/mobile_login.png"></div>

       <script type="text/javascript">
         $('document').ready(function () {
           var trigger = $('#hamburger'),
               isClosed = true;

           trigger.click(function () {
             burgerTime();
           });

           function burgerTime() {
             if (isClosed == true) {
               trigger.removeClass('is-closed');
               trigger.addClass('is-open');
               isClosed = false;
             } else {
               trigger.removeClass('is-open');
               trigger.addClass('is-closed');
               isClosed = true;
             }
           }
         });
       </script>

       <!---태블릿, 모바일 메뉴, 로그인 끝---------------------------------------->


        <div class="container menu_inner clearfix">
          <div class="menu">
            <ul>
              <li>
                <a href="/port/bbs/board.php?bo_table=notice">새소식</a>
                  <div class="sub_memu">
                    <ul class="clearfix">
                      <li><a href="/port/bbs/board.php?bo_table=notice">공지사항</a></li>
                      <li><a href="/port/bbs/board.php?bo_table=event">이벤트</a></li>
                      <li><a href="/port/bbs/board.php?bo_table=episode">업데이트</a></li>
                      <li><a href="/port/bbs/board.php?bo_table=blog">뜨는 이야기</a></li>
                      <li><a href="/port/bbs/board.php?bo_table=webtoon">라테일 웹툰</a></li>
                    </ul>
                  </div>
              </li>

              <li>
                <a href="/port/bbs/board.php?bo_table=guide">가이드</a>
                <div class="sub_memu">
                  <ul class="clearfix">
                    <li><a href="/port/bbs/board.php?bo_table=guide">기본 가이드</a></li>
                    <li><a href="/port/bbs/board.php?bo_table=system">시스템 가이드</a></li>
                    <li><a href="/port/bbs/board.php?bo_table=lawiki">La Wiki</a></li>
                  </ul>
                </div>
              </li>

              <li><a href="/port/bbs/board.php?bo_table=character">랭킹</a>
                <div class="sub_memu">
                  <ul class="clearfix">
                    <li><a href="/port/bbs/board.php?bo_table=character">개인</a></li>
                    <li><a href="/port/bbs/board.php?bo_table=guild">길드</a></li>
                    <li><a href="/port/bbs/board.php?bo_table=beginner">새내기</a></li>
                    <li><a href="/port/bbs/board.php?bo_table=pvp">격투장</a></li>
                    <li><a href="/port/bbs/board.php?bo_table=transcend">초월</a></li>
                  </ul>
                </div>
              </li>

              <li><a href="/port/bbs/board.php?bo_table=free">커뮤니티</a>
                <div class="sub_memu">
                  <ul class="clearfix">
                    <li><a href="/port/bbs/board.php?bo_table=free">자유게시판</a></li>
                    <li><a href="/port/bbs/board.php?bo_table=trade">거래 게시판</a></li>
                    <li><a href="/port/bbs/board.php?bo_table=knowledge">공략 게시판</a></li>
                    <li><a href="/port/bbs/board.php?bo_table=screen">유저 갤러리</a></li>
                  </ul>
                </div>
              </li>

              <li><a href="/port/bbs/board.php?bo_table=download">자료실</a>
                <div class="sub_memu">
                  <ul class="clearfix">
                    <li><a href="/port/bbs/board.php?bo_table=download">다운로드</a></li>
                    <li><a href="/port/bbs/board.php?bo_table=video">동영상</a></li>
                    <li><a href="/port/bbs/board.php?bo_table=music">OST</a></li>
                    <li><a href="/port/bbs/board.php?bo_table=wallpaper">갤러리</a></li>
                  </ul>
                </div>
              </li>

              <li><a target="_blank" href="/port/bbs/board.php?bo_table=cnc">프리미엄</a>
                <div class="sub_memu">
                  <ul class="clearfix">
                    <li><a href="/port/bbs/board.php?bo_table=cnc">캐릭터명 변경</a></li>
                    <li><a href="/port/bbs/board.php?bo_table=gnc">길드명 변경</a></li>
                    <li><a href="/port/bbs/board.php?bo_table=cr">캐릭터 복구</a></li>
                    <li><a href="/port/bbs/board.php?bo_table=PCSearch">라테일 PC방</a></li>
                  </ul>
                </div>
              </li>

              <li><a href="/port/bbs/board.php?bo_table=faq">고객센터</a>
                <div class="sub_memu">
                  <ul class="clearfix">
                    <li><a href="/port/bbs/board.php?bo_table=faq">FAQ</a></li>
                    <li><a href="/port/bbs/board.php?bo_table=Question">1:1문의</a></li>
                    <li><a href="/port/bbs/board.php?bo_table=policy">운영정책</a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </div><!--menu_end-->

        </div>

      </div><!--header_bottom_end-->

   </div>


<?php if(!$mainPage){ ?>

  <script type="text/javascript">
    $(function(){
      $('.sub_banner ul').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade:true,
        autoplay : true,
        speed:1000,
        fade: true,
      });
    });
  </script>

  <div class="sub_banner_wrap">
    <div class="sb_container">
      <div class="sub_banner clearfix">
          <ul>
            <li><a href="http://latale.happyoz.com/event/2019/4q_update/index.asp?intro"><img src="/img/sub_main/sub_01.png" alt="아드리카 이벤트 배너"></a></li>
            <li><a href="http://latale.happyoz.com/event/2019/4q_update/index.asp?intro"><img src="/img/main_banner/wallpaper_71.jpg" alt="아드리카 이벤트 배너"></a></li>
            <li><a href="http://latale.happyoz.com/event/2019/4q_update/index.asp?intro"><img src="/img/sub_main/sub_01.png" alt="아드리카 이벤트 배너"></a></li>
            <li><a href="http://latale.happyoz.com/event/2019/4q_update/index.asp?intro"><img src="/img/main_banner/wallpaper_71.jpg" alt="아드리카 이벤트 배너"></a></li>
          </ul>
      </div>
    </div>
  </div>

<!--서브 페이지/유저 갤러리-->
  <link rel="stylesheet" type="text/css" href="/css/s-free.css">
  <div class="container mtb30 minh">
      <div class="content_wrap">
        <div class="content_container clearfix">
          <div class="serve_Page">
            <div class="serve_Page_header clearfix">
              <div class="diea_warp">
                <div class="diea"></div>
                <div class="diea"></div>
                <div class="diea"></div>
                <div class="diea"></div>
                <div class="diea"></div>
                <div class="diea"></div>
                <div class="diea"></div>
                <div class="diea"></div>
                <div class="diea"></div>
                <div class="diea"></div>
                <div class="diea"></div>
                <div class="diea"></div>
                <div class="diea"></div>
                <div class="diea"></div>
                <div class="diea"></div>
                <div class="diea"></div>
                <div class="diea"></div>
                <div class="diea"></div>
                <div class="diea"></div>
                <div class="diea"></div>
                <div class="diea"></div>
                <div class="diea"></div>
                <div class="diea"></div>
                <div class="diea"></div>
                <div class="diea"></div>
                <div class="diea"></div>
              </div>

              <h3 class="serve_Page-tit"><?php echo $board['bo_subject'] ?><span class="serve_Page-st">순간의 기억, 소중한 추억이 생생한 프레임 속으로!</span></h3>
              <span class="location">
               <? include "nav_top.php" ?>
              </span>
            </div>

            <div class="selected">
              <ul class="clearfix">
                <li><a href="/port/bbs/board.php?bo_table=screen"></a></li>
                <li><a href="/port/bbs/board.php?bo_table=fanart"></a></li>
                <li><a href="/port/bbs/board.php?bo_table=comic"></a></li>
                <li><a href="/port/bbs/board.php?bo_table=Coordi"></a></li>
              </ul>
            </div>

            <div class="">

            </div>
          <!-- <div class="sub_cont">
            <div class="cont"></div>
          </div> -->

          <!-- <div class="sub_game">
            <img src="/img/btn/game_start.png">
          </div> -->


<?  } ?>
