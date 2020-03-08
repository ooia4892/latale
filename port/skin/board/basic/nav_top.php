<!-- 현재위치표시 ------>
<table border=0 cellspacing=0 cellpadding=0><tr>
<?
echo "<td><a href='$g4[path]'
style=font-size:10pt;font-family:돋움;color:navy;>Home"; // 인덱스로 가기
echo "<td width=25 align=center style=font-size:8pt;font-family:돋움;>>>";

if($board[bo_subject]!='') {
echo "<td><a href='$g4[path]/bbs/board.php?bo_table=$board[bo_table]'
style=font-size:10pt;font-family:돋움;color:navy;>$board[bo_subject]"; //게시판 이름
echo "<td width=25 align=center style=font-size:8pt;font-family:돋움;>>>";
}

echo "<td><a href='$g4[path]/bbs/board.php?bo_table=$board[bo_table]&sca={$sca}'
      style=font-size:10pt;font-family:돋움;color:navy;>{$sca}"; //카테고리 이름
?>
</table>
<!-- 현재위치표시 ------>
