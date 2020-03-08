<?
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
?>
<link rel="stylesheet" href="<?=$outlogin_skin_url?>/css/style.css" type="text/css">


        <li class="m-logout-inner clearfix">
					<!-- <a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php"> -->
					<!-- <img src="<?php echo G5_DATA_URL ?>/member_image/ad/admin.gif" alt=""> 프로필 이미지 -->

          <span class="profile_img">
              <?php echo get_member_profile_img($member['mb_id']); ?>
          </span>
            <div class="welcome_txt">
              <p>어서오세요</p></>
              <strong><?php echo $nick ?> 님!</strong>
            </div>
            <div id="Changing-my"><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=register_form.php" id="ol_after_info" title="정보수정"><i class="fa fa-cog" aria-hidden="true"></i><span class="sound_only">정보수정</span></a></div>

        </li>
        <li id="m-logout_wrap">
          <a href="<?php echo G5_BBS_URL ?>/logout.php">
        <!-- <a href="home.html/logout.php"> -->
          <!-- <img src="<?php echo G5_IMG_URL ?>/tnb_logout.jpg" alt=""> -->
            <div id="m-login_btn">
              로그아웃
            </div>
          </a>
        </li>
