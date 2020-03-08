
<?php if(!$mainPage){ ?>
</div>
  <div class="aside" style='position:absolute;top:0; right:0; width:240px; background-color: #2f3238'>
    <!-- <div class="side_inner">
      <div id="sp_login"><a href="#a">로그인</a></div>
      <div class="s_lg_link">
        <span class="s_lg-af"><a href="#a">회원가입</a></span>
        <span><a href="#a">아이디</a></span>·<span><a href="#a">비밀번호 찾기</a></span>
      </div>
      <div class="s_pc">
        <span class="s_pc-af"><a href="#a">PC방</a></span>
        <span class="s_pc-be"><a href="#a">PC방 혜택보기</a></span>
      </div>
    </div> -->
    <?php echo outlogin("outlogin_pc"); ?>

    <div class="s_service clearfix">
      <div class="side_inner">
        <ul>
          <li><a href="#a"><span class="s_moto"></span><span class="s_s_txt">MOTO</span></a></li>
          <li><a href="#a"><span class="s_playtime"></span><span class="s_s_txt">게임시간 선택제</span></a></li>
        </ul>
      </div>
    </div>
    <div class="sb_service clearfix">
      <div class="side_inner">
        <ul>
          <li><a href="#a"><span class="s_ip"></span><span class="s_s_txt">IP관리</span></a></li>
          <li><a href="#a"><span class="s_dormancy"></span><span class="s_s_txt">휴면 계정 복구</span></a></li>
        </ul>
      </div>
    </div>

    <div class="tit_sub_wrap">
      <div class="side_inner">
        <h2 id="tit_sub"><a href="#a">커뮤니티</a></h2>
          <nav>
            <ul>
              <li><a href="/port/bbs/board.php?bo_table=free">자유 게시판</a></li>
              <li><a href="/port/bbs/board.php?bo_table=knowledge">거래 게시판</a></li>
              <li><a href="/port/bbs/board.php?bo_table=trade">공략 게시판</a></li>
              <li><a href="/port/bbs/board.php?bo_table=screen">유저 갤러리</a></li>
            </ul>
          </nav>
      </div>
    </div>

    <div id="sp_banner_wrap">
      <ul>
        <li class="sp_banner01"><a href="#a"></a></li>
        <li class="sp_banner02"><a href="#a"></a></li>
      </ul>
    </div>

  </div><!--aside_end-->

    </div>
  </div><!--content_wrap_end-->
</div>
<?  } ?>

<div id="sns_wrap">
  <div class="container">
    <ul class="sb-left">
      <li class="sns_box"><a href="#a"><i class="m-support_icon"></i><span class="support">고객센터</span></a></li>
      <li class="sns_box"><a href="#a"><i class="m-premium_icon"></i><span class="premium">프리미엄</span></a></li>
      <div class="sb-right">
        <li class="sns_box tw"><a href="#"><i class="m-twitter_icon"></i></a></li>
        <li class="sns_box ytb"><a href="#"><i class="m-youtube_icon"></i></a></li>
      </div>
    </ul>
  </div>
</div>

<footer class="footer_wrap">
  <div class="container clearfix">

    <h2 class="footer_logo">
      <a href="#"><img src="/img/logo/footer_logo.png"></a>
    </h2>

    <div class="footer clearfix">
      <div class="ftop">
        <ul class="clearfix">
          <li><a href="/port/bbs/content.php?co_id=company">회사소개</a></li>
          <li><a href="#">이용약관</a></li>
          <li><a href="#">게임이용약관</a></li>
          <li><a href="#">게임이용등급</a></li>
          <li><a href="/port/bbs/content.php?co_id=privacy">개인정보처리방침</a></li>
          <li><a href="#">청소년보호정책</a></li>
          <li><a href="#">운영정책</a></li>
        </ul>
      </div>

      <div class="fbottom">
        <p>(주)액토즈소프트 | 서울시 강남구 테헤란로 44길 8 아이콘 역삼(ICON Yeoksam) 10F | Tel 02-3671-0000 | Fax 02-732-8621</br>
        사업자등록번호 201-81-55470 | 통신판매업신고 제2015-서울서초-1884호 | 대표이사 GUO HAIBIN | 사업자정보확인</p>

        <p>COPYRIGHT ⓒ ACTOZ SOFT CO., LTD. ALL RIGHTS RESERVED.</p>
      </div>
      <h2 class="m_footer_logo">
        <a href="#"><img src="/img/logo/footer_logo.png"></a>
      </h2>
    </div>

  </div>
</footer>


</div><!--wrap_end-->
<!-- <script type="text/javascript">
  var swiper = new Swiper('.swiper-container', {
    cssMode: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    mousewheel: true,
    keyboard: true,
  });
</script>

</script> -->

<!-- <div id="quick-menu">
  <div class="qm-container">
    <ul>
      <li><a class="oz" href="#a"></a></li>
      <li><a class="pc" href="#a"></a></li>
      <li><a class="coupon" href="#a"></a></li>
      <li><a class="premium" href="#a"></a></li>
      <li><a class="support" href="#a"></a></li>
      <li><a class="" href="#a"></a></li>
    </ul>
  </div>
</div> -->
</body>
</html>
