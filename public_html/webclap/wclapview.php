<?php

#################################################

# SM Webclap > 박수/메시지 확인 (2008.12.19)

# Copyright (C) 2008 SAGA.
# Homepage : http://sagaremix.byus.net

# 제작자는 본 스크립트에 대한 사용자 지원의 의무가 없습니다.
# 본 스크립트를 사용함으로써 발생하는 문제에 대해 제작자는 책임을 지지 않습니다.

#################################################

if (file_exists("wclapcfg.php")) include "wclapcfg.php";
else die("wclapcfg.php 파일을 올리셔야 작동합니다.");

$admin = check_admin($adminpw, $salt);

if ($_POST['userpw']) $userpw = $_POST['userpw'];

if (isset($userpw) && strcmp($adminpw, $userpw)) login_form(VIEW_PHP);
if (isset($userpw) && !strcmp($adminpw, $userpw)) {
	$value = time()." ## ".crypt($userpw, $salt);
	setcookie("smwclap_auth", $value, 0, "/");
	echo "<meta http-equiv=refresh content='0; URL=".VIEW_PHP."'>";
}
if ($adminpw && $admin == false) login_form(VIEW_PHP);
if ($_GET['logout'] == "on" || $_POST['logout'] == "on") {
	setcookie("smwclap_auth", "", time()-3600, "/");
	echo "<meta http-equiv=refresh content='0; URL=".VIEW_PHP."'>";
}

// 이번 달, 지난 달을 배열로 분리
$line = file(LOG_FILE);
end($line);
while($temp = current($line)) {
	$moimoi = explode('<>', $temp);
	$data[$moimoi[0]][$moimoi[1]][] = $temp;
	prev($line);
}


$now = time();
// 월 1일의 timestamp값 가져옴
$this_month_time = mktime(0, 0, 1, date("m",$now), 1, date("Y",$now));
$last_month_time = mktime(0, 0, 1, date("m",$now)-1, 1, date("Y",$now));

$echo = <<<ECHO

<html>
<head>
<title> SM Webclap - 박수 및 메시지 확인</title>
<meta http-equiv=Content-Type content="text/html; charset=euc-kr">
<style>
a:link { color:#FF6600; text-decoration:underline }
a:visited { color:#FF6600; text-decoration:underline }
a:active { color:#009966; text-decoration:underline }
a:hover { color:#009966; text-decoration:underline }

th { padding:3 }
td { font:8pt verdana; background-color:white; text-align:center; padding:4 2 4 2 }
input { font-size:10pt; border:1 outset #C0C0C0; background-color:#F0F0F0; padding:2 }

.weekday { width:14.3%; background-color:#FFFCE8 }
.blank { background-color:#FAFAFA }
.today { background-color:#FFF5F5 }
.graph { width:18; height:90; vertical-align:bottom }
.message { width:85%; text-align:left; padding:5 6 2 6; line-height:2 }
</style>
</head>

<body>

<table align="center">
<td width=285 valign=top>

ECHO;

$echo .= get_calendar($this_month_time);
$echo .= get_calendar($last_month_time);

if (ereg("^[0-9]{8}", $_SERVER['QUERY_STRING'])) {
	$this_month = substr($_SERVER['QUERY_STRING'], 0, 6);
	$this_day = substr($_SERVER['QUERY_STRING'], 6, 2);
	$now = mktime(0, 0, 1, substr($this_month,4,2), $this_day, substr($this_month,0,4));
} else {
	$this_month = date("Ym", $now);
	$this_day = date("d", $now);
}

// 특정일의 박수 & 메시지 배열
$today = $data[$this_month][$this_day];
$linecount = count($today);
$msgcount = count($today)-1; if ($msgcount < 0) $msgcount = 0;

$ymd1 = date("Y년 n월 j일", $now);
$ymd2 = date("n월 j일에 도착한 메시지", $now);

$uniuni = explode('<>', $today[0]);
$uniuni[0] = 0; $uniuni[1] = 0;
$sum = array_sum($uniuni); // 전체 히트 합
$max = max($uniuni); if ($max < 1) $max = 1; // 최대 히트수
$repeat = 0;
for($i = 3; $i < 27; $i++) {
	if ($uniuni[$i] == 0 || $uniuni[$i] == $max) $repeat++;
}

if ($adminpw)
	$echo .= "<br>\n<input type=\"button\" value=\"        로 그 아 웃        \" onclick=\"location.href='?logout=on'\">";

$echo .= <<<ECHO

</td><td valign=top>

<table bgcolor="#C0C0C0" cellspacing=1>
<tr>
	<th colspan=25 bgcolor="#DDF2EB">$ymd1 ($sum)</th>
</tr><tr>
	<td width=30></td>

ECHO;

// 그래프
for($i = 3; $i < 27; $i++) {
	$graph_img = ($repeat != 24 && $max == $uniuni[$i]) ? "bar2.gif" : "bar1.gif";
	$graph_tag = "<img src=\"$graph_img\" width=10 height=".round(($uniuni[$i]/$max) * 80).">";
	$echo .= "	<td class=\"graph\">$graph_tag</td>\n";
}

$echo .= "</tr><tr>\n	<td>시각</td>\n";

// 시각 (0시-23시)
for($i = 0; $i < 24; $i++) {
	$hour = ($max == $uniuni[$i+3]) ? "<font color=red>$i</font>" : $i;
	$echo .= "	<td>$hour</td>\n";
}

$echo .= "</tr><tr>\n	<td class=\"blank\">히트</td>\n";

// 히트수
for($i = 3; $i < 27; $i++) {
	$hit = ($max == $uniuni[$i]) ? "<font color=red>{$uniuni[$i]}</font>" : $uniuni[$i];
	if ($uniuni[$i]) $hit = "<b>$hit</b>";
	$echo .= "	<td class=\"blank\">$hit</td>\n";
}

$echo .= <<<ECHO

</tr>
</table>

<br><br><br>

<table width=590 bgcolor="#C0C0C0" cellspacing=1>
<tr>
	<th colspan=25 bgcolor="#FFFCE8">$ymd2 ($msgcount)</th>
</tr>

ECHO;

for($i = 1; $i < $linecount; $i++) {
	list( , , $time, $comment) = explode('<>', $today[$i]);
	$echo .= "<tr>\n	<td>$time</td>\n	<td class=\"message\">$comment</td>\n</tr>";
}

$echo .= <<<ECHO

</table>

</table>

</body>
</html>

ECHO;

echo $echo;

exit;


function check_admin($adminpw, $salt) {
	if (!$_COOKIE['smwclap_auth']) return FALSE;
	list($expire, $userpw) = explode(" ## ", $_COOKIE['smwclap_auth']);
	if ($expire < time()-7200 || $expire > time()+7200) return FALSE;
	if (strcmp(crypt($adminpw, $salt), $userpw)) return FALSE;
	return TRUE;
}

function login_form($VIEW_PHP) {
	echo <<<LOGIN
<style>input { font-size:10pt; border:1 outset #C0C0C0; background-color:#F0F0F0; padding:2 }</style>
<br><br>
<form action="$VIEW_PHP" method="post">
<table width=300 align=center cellspacing=0 style="border:1 solid #C0C0C0">
<tr bgcolor="#F3F3F3">
	<th height=35 align=center style="font:13pt verdana">::: LOGIN :::</th>
</tr><tr bgcolor="white">
	<td height=80 align=center style="font:10pt verdana; line-height:2; padding:10">
	<input type="password" name="userpw" style="background-color:white">
	&nbsp; <input type="submit" value=" OK "></td>
</tr>
</table>
</form>
LOGIN;
	exit;
}

function get_calendar($time) {
	global $data;
	$year = date("Y", $time);
	$month = date("m", $time);
	$ymd = date("Y년 n월", $time);
	$first_of_month = date("w", $time); // 이 달 1일의 요일
	$end_of_month = date("t", $time); // 이 달 마지막 날짜

	// 한 달 전체의 히트수 구함
	for($i = 1; $i <= $end_of_month; $i++) {
		$dd = sprintf("%02d", $i); // 날짜 두 자리수
		$kiseki = $data[$year.$month][$dd];
		$uniuni = explode('<>', $kiseki[0]);
		$uniuni[0] = 0; $uniuni[1] = 0;
		$sum = array_sum($uniuni);
		$total += $sum;
	}

	$calendar = <<<CALENDAR
<table width=200 bgcolor="#C0C0C0" cellspacing=1>
<tr>
	<th colspan=7 bgcolor="#DDF2EB">$ymd ($total)</th>
</tr><tr>
	<td class="weekday">Sun</td>
	<td class="weekday">Mon</td>
	<td class="weekday">Tue</td>
	<td class="weekday">Wed</td>
	<td class="weekday">Thu</td>
	<td class="weekday">Fri</td>
	<td class="weekday">Sat</td>
</tr>
CALENDAR;
	$calendar .= "<tr></tr>\n";

	if ($first_of_month) {
		$calendar .= "<tr>\n";
		for($wday = 0; $wday < $first_of_month; $wday++)
			$calendar .= "	<td class=\"blank\"></td>\n";
	}

	$day = 1;
	while(checkdate($month, $day, $year)) {
		$wday = ($wday % 7); //요일
		$dd = sprintf("%02d", $day); // 날짜 두 자리수

		if ($data[$year.$month][$dd]) {
			$msgcount = count($data[$year.$month][$dd])-1; if ($msgcount < 0) $msgcount = 0;
			$link = "<a href=\"".VIEW_PHP."?$year$month$dd\" title=\"메시지: $msgcount\">$day</a>";
		} else
			$link = $day;

		if ($wday == 0) $calendar .= "<tr>\n";
		$calendar .= ("$year.$month.$day" == date("Y.m.d")) ? "	<td class=\"today\">$link</td>\n" : "	<td>$link</td>\n";
		if ($wday == 6) $calendar .= "</tr>";

		$day++; $wday++;
	}

	for($wday = $wday; $wday <= 6; $wday++)
		$calendar .= "	<td class=\"blank\"></td>\n";

	$calendar .= "</tr>\n</table>\n\n<br><br>";

	return $calendar;
}

?>