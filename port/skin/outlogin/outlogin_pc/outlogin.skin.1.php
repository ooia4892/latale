<?
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
?>
<link rel="stylesheet" href="<?=$outlogin_skin_url?>/css/style.css" type="text/css">

<script type="text/javascript">
var bReset = true;
function chkReset(f)
{
	if (bReset) { if ( f.mb_id.value == '아이디' ) f.mb_id.value = ''; bReset = false; }
}
</script>

<li class="out-login_inner">
	<div class="out-login-txt"><p>라테일 아이디로 <span>로그인</span> 해주세요.</p></div>
	<a href="#" id="outlogin_wrap_open">
		<!-- <img src="<?php echo G5_IMG_URL ?>/tnb_login.jpg" alt=""> -->
		로그인
	</a>
	<div class="out-main">
		<p class="clearfix">
		<a href="<?php echo G5_BBS_URL ?>/register.php">회원가입</a>
		<a href="<?php echo G5_BBS_URL ?>/password_lost.php" id="ol_password_lost">아이디·비밀번호 찾기</a>
		</p>
	</div>
</li>


<!-- 로그인 전 외부로그인 시작 -->
<div class="outlogin_wrap">
	<div class="outlogin_bg"></div>
	<div class="outlogin_wrap_area" id="layer_outlogin">

		<form name="foutlogin" action="<?php echo $outlogin_action_url ?>" onsubmit="return fhead_submit(this);" method="post" autocomplete="off">
		<fieldset>
        <input type="hidden" name="url" value="<?php echo $outlogin_url ?>">
		<div id="login-box">
			<a id="outlogin_wrap_close" href="#">X</a>
			<H2><img src='<?php echo $outlogin_skin_url ?>/img/latale_logo_black01.png'></H2>
			<!-- 라테일 아이디로 <span>로그인<span> 해주세요. -->
			<!-- <div id="login-box-name" style="margin-top:20px;">아이디</div> -->
			<div id="login-box-field" style="margin-top:34px;"><input id="mb_id" name="mb_id" type="text" class="form-login" size="30" maxlength="50" itemname="아이디" required minlength="2" onMouseOver='chkReset(this.form);' onFocus='chkReset(this.form);' placeholder="아이디" title="아이디">
				<p class="clearfix auto_login_wrap">
	          <input type="checkbox" name="auto_login" value="1" id="auto_login">
	          <label for="auto_login" id="auto_login_label"></label><span>ID저장</span>
				</p>
			</div>
			<!-- <div id="login-box-name">비밀번호</div> -->
			<div id="login-box-field">
			<span id="pw2"><input name="mb_password" type="password" class="form-login" size="30" maxlength="20" itemname="패스워드" required onMouseOver='chkReset(this.form);' onfocus='chkReset(this.form);'  onKeyPress="check_capslock(event, 'outlogin_mb_password');" placeholder="비밀번호" title="비밀번호"></span></div>
			<div class="clear"></div>
			<div class="login-box-options">
				<p class="clearfix">
				<a href="<?php echo G5_BBS_URL ?>/register.php" id="ol_id_lost">회원가입</a>
				<a href="<?php echo G5_BBS_URL ?>/password_lost.php" id="ol_password_lost">아이디·패스워드 찾기</a>
				</p>
				<!-- <p class="clearfix auto_login_wrap">
	            <input type="checkbox" name="auto_login" value="1" id="auto_login">
	            <label for="auto_login" id="auto_login_label"></label><span>자동 로그인</span>
				</p> -->

			</div>
			<br />
			<input type=image src='<?php echo $outlogin_skin_url ?>/img/m-login_btn.png' name="m-login_btn" width="229px" height="57">
		</div>
		</form>
		</fieldset>
	</div>
</div>



<script>
$omi = $('#ol_id');
$omp = $('#ol_pw');
$omp.css('display','inline-block').css('width',104);
$omi_label = $('#ol_idlabel');
$omi_label.addClass('ol_idlabel');
$omp_label = $('#ol_pwlabel');
$omp_label.addClass('ol_pwlabel');

$(function() {
    $omi.focus(function() {
        $omi_label.css('visibility','hidden');
    });
    $omp.focus(function() {
        $omp_label.css('visibility','hidden');
    });
    $omi.blur(function() {
        $this = $(this);
        if($this.attr('id') == "ol_id" && $this.attr('value') == "") $omi_label.css('visibility','visible');
    });
    $omp.blur(function() {
        $this = $(this);
        if($this.attr('id') == "ol_pw" && $this.attr('value') == "") $omp_label.css('visibility','visible');
    });

    // $("#auto_login").click(function(){
    //     if ($(this).is(":checked")) {
    //         if(!confirm("공공장소에서는 개인정보가 유출될 수 있으니 사용을 자제하여 주십시오.\n\n자동로그인을 사용하시겠습니까?"))
		// 				if(!confirm("자동로그인을 사용하시면 다음부터 회원아이디와 패스워드를 입력하실 필요가 없습니다.\n\n공공장소에서는 개인정보가 유출될 수 있으니 사용을 자제하여 주십시오.\n\n자동로그인을 사용하시겠습니까?"))
    //             return false;
    //     }
    // });
});

function fhead_submit(f)
{
    return true;
}
</script>


<script type="text/javascript">
jQuery(function($){
	function outlogin_wrap_open(el){
		//$('.outlogin_wrap').addClass('open');
		$('.outlogin_wrap').fadeIn();
		var temp = $('#' + el);
		if (temp.outerHeight() < $(document).height() ) temp.css('margin-top', '-'+temp.outerHeight()/2+'px');
		else temp.css('top', '0px');
		if (temp.outerWidth() < $(document).width() ) temp.css('margin-left', '-'+temp.outerWidth()/2+'px');
		else temp.css('left', '0px');
	}
	$('#outlogin_wrap_open').click(function(){
		outlogin_wrap_open('layer_outlogin'); /* 열고자 하는 것의 아이디를 입력 */
		$("#mb_id").focus().select();
		return false;
	});
	$('.outlogin_wrap .outlogin_bg').click(function(){
		$('.outlogin_wrap').fadeOut();
	});
	$('#outlogin_wrap_close').click(function(){
		$('.outlogin_wrap').fadeOut();
		return false;
	});
});
</script>
<!-- 로그인 전 외부로그인 끝 -->
