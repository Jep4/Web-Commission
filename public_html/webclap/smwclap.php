<?php

#################################################

# SM Webclap (2008.12.19)

# Copyright (C) 2008 SAGA.
# Homepage : http://sagaremix.byus.net

# 제작자는 본 스크립트에 대한 사용자 지원의 의무가 없습니다.
# 본 스크립트를 사용함으로써 발생하는 문제에 대해 제작자는 책임을 지지 않습니다.

#################################################

if (file_exists("wclapcfg.php")) include "wclapcfg.php";
else error("wclapcfg.php 파일을 올리셔야 작동합니다.");

if (!file_exists(LOG_FILE) || !is_writable(LOG_FILE))
	error(LOG_FILE." 파일을 업로드 하신 후에<br>퍼미션을 606(혹은 666)으로 설정하세요.");

if (!$ranmsg || !$salt || !$head || !$thanks || !$confirm || !$foot)
	error("환경설정에 오류가 있습니다.<br>wclapcfg.php 파일을 다시 확인하세요.");

switch($_POST['sendmsg']) {

	case 'on' :

		if (!$msg_limit || ($msg_limit && $msg_limit > $_COOKIE['smwclap_count'])) {

			if (!isset($comment)) {
				$yyyymm = $_POST['yyyymm'];
				$dd = $_POST['dd'];
				$time = $_POST['time'];
				$comment =  $_POST['comment'];
			}

			$comment = safetxt($comment);
			if ($comment == '') error("내용을 입력하지 않으셨습니다.");

			$new = implode('<>', array($yyyymm, $dd, $time, $comment, ''))."\n";
			$line = file(LOG_FILE);
			array_unshift($line, $new);
			write_logs($line);

			$smwclap_count = $_COOKIE['smwclap_count'] + 1;
			setcookie("smwclap_count", $smwclap_count, time()+3600, "/");
			setcookie("smwclap_dup", "accessed", 0, "/"); // 메시지 남긴 후 중복 박수 방지

			$confirm = str_replace("(!--sent_message--)", $comment, $confirm);
			echo "<meta http-equiv=refresh content='3; URL=".MAIN_PHP."'>";
			echo $head.$confirm.$foot;

		} else {

			$caution = str_replace("(!--limit--)", $msg_limit, $caution);
			echo $head.$caution.$foot;

		}		
		break;

	default:

		if ($msg_limit && $msg_limit <= $_COOKIE['smwclap_count']) {
			$caution = str_replace("(!--limit--)", $msg_limit, $caution);
			echo $head.$caution.$foot;
			exit;
		}

		// 오늘 날짜와 시간 정보 받아옴
		$now = time();
		$this_month = date("Ym", $now);
		$this_day = date("d", $now);
		$this_time = date("H:i:s", $now);
		$last_month = date("Ym", mktime(0, 0, 1, date("m",$now)-1, 1, date("Y",$now)));

		if ($_COOKIE['smwclap_dup'])
			setcookie("smwclap_dup", "", time()-3600, "/");

		else {

			// 근 2개월의 데이터만 남김
			$line = file(LOG_FILE);
			$linecount = count($line);
			for($i = 0; $i < $linecount; $i++) {
				$moimoi = explode('<>', $line[$i]);
				if ($moimoi[0] == $this_month || $moimoi[0] == $last_month)
					$new[] = $line[$i];
			}

			// 오늘 받은 박수가 없으면 시간별 통계 새로 만들어줌
			if ($moimoi[0].$moimoi[1].$moimoi[2] != $this_month.$this_day."★")
				$new[] = "$this_month<>$this_day<>★<>".str_repeat('0<>', 24)."\n";

			// 시간별 통계 업데이트
			$no = count($new)-1;
			$this_hour = date("G", $now);
			$uniuni = explode('<>', $new[$no]);
			$uniuni[$this_hour+3]++;
			$new[$no] = implode('<>', $uniuni);
			write_logs($new);

		}

		// 템플릿 안에 변수 대입
		if (phpversion() < "4.2.0") mt_srand((double)microtime()*1000000);
		shuffle($ranmsg);

		$thanks = str_replace("(!--random_message--)", $ranmsg[0], $thanks);
		$thanks = str_replace("(!--yyyymm--)", $this_month, $thanks);
		$thanks = str_replace("(!--dd--)", $this_day, $thanks);
		$thanks = str_replace("(!--time--)", $this_time, $thanks);

		echo $head.$thanks.$foot;

}

exit;


function safetxt($str) {
	$str = str_replace('<', '&lt;', str_replace('>', '&gt;', $str));
	$str = eregi_replace("[\r\n]", "", nl2br(trim($str)));
	if (get_magic_quotes_gpc()) $str = stripslashes($str);
	return $str;
}

function write_logs($array) {
	$linecount = count($array);
	$fp = fopen(LOG_FILE, "w");
	@flock($fp, LOCK_EX);
	for($i = 0; $i < $linecount; $i++) fwrite($fp, $array[$i]);
	@flock($fp, LOCK_UN);
	fclose($fp);
}

function error($msg) {
	global $head, $foot;
	$error = <<<ERROR
<body>
<br><br>
<table width=330 align=center cellspacing=0 style="border:1 solid #C0C0C0">
<tr bgcolor="#F3F3F3">
	<th height=35 align=center style="font:13pt verdana">! ERROR !</th>
</tr><tr bgcolor="white">
	<td height=80 align=center style="font:10pt verdana; line-height:2; padding:10">
	$msg</td>
</tr>
</table>
</body>
ERROR;
	die($head.$error.$foot);
}

?>