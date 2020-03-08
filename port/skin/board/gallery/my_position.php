<?php


//게시판일때
if($_REQUEST['bo_table']){
	$sql = " select * from {$g5['board_table']} where bo_table = '$_REQUEST[bo_table]'";
	$result = sql_query($sql);
	for ($i=0; $row = sql_fetch_array($result); $i++) {
		$board_name = $row['bo_subject'];
		$sql1 = " select * from {$g5['group_table']} where gr_id = '$row[gr_id]'";
        $result1 = sql_query($sql1);
        for ($gi=0; $row1=sql_fetch_array($result1); $gi++) { // gi 는 group index
			$group_name = $row1['gr_subject'];
		}
	}
}

//그룹일때
if($_REQUEST['gr_id']){
	$sql1 = " select * from {$g5['group_table']} where gr_id = '$_REQUEST[gr_id]'";
    $result1 = sql_query($sql1);
    for ($gi=0; $row1=sql_fetch_array($result1); $gi++) { // gi 는 group index
			$group_name = $row1['gr_subject'];
	}
}

//게시판일 때 출력 부분
//echo $group_name." > ".$board_name. " > ".$_REQUEST['sca'];  // 그룹 > 게시판 > 카테고리

?>


<?php if($group_name){ ?>
		<div style="font-family: 'Nanum Gothic'">
		<?php
		//echo $group_name." > ".$board_name. " > ".$_REQUEST['sca'];

		$position_print = "<strong>현재위치</strong> : ";
		$position_print = $position_print."[그룹] ".$group_name;
		if($board_name){
			$position_print = $position_print." > [게시판] ".$board_name;
		}
		if($_REQUEST['sca']){
			$position_print = $position_print." > [분류] ".$_REQUEST['sca'];
		}


		echo $position_print;
		?>
		</div>

		<?php
		if($group_name){
			$position_title = $group_name;
		}

		if($board_name){
			$position_title = $board_name;
		}

		if($_REQUEST['sca']){
			$position_sca = ' | <span style="font-size:9pt;">'.$_REQUEST['sca']."</span>";
		}
		?>
		<div style="height:35px;"></div>

		<div style="padding:20px; font-size:16pt; background:#0a5ba3;color:white"><strong><?php echo $position_title; ?></strong><span><?php echo $position_sca?></span></div>
		<div style="height:35px;"></div>
<? } ?>
