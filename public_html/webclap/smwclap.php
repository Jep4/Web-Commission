<?php

#################################################

# SM Webclap (2008.12.19)

# Copyright (C) 2008 SAGA.
# Homepage : http://sagaremix.byus.net

# �����ڴ� �� ��ũ��Ʈ�� ���� ����� ������ �ǹ��� �����ϴ�.
# �� ��ũ��Ʈ�� ��������ν� �߻��ϴ� ������ ���� �����ڴ� å���� ���� �ʽ��ϴ�.

#################################################

if (file_exists("wclapcfg.php")) include "wclapcfg.php";
else error("wclapcfg.php ������ �ø��ž� �۵��մϴ�.");

if (!file_exists(LOG_FILE) || !is_writable(LOG_FILE))
	error(LOG_FILE." ������ ���ε� �Ͻ� �Ŀ�<br>�۹̼��� 606(Ȥ�� 666)���� �����ϼ���.");

if (!$ranmsg || !$salt || !$head || !$thanks || !$confirm || !$foot)
	error("ȯ�漳���� ������ �ֽ��ϴ�.<br>wclapcfg.php ������ �ٽ� Ȯ���ϼ���.");

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
			if ($comment == '') error("������ �Է����� �����̽��ϴ�.");

			$new = implode('<>', array($yyyymm, $dd, $time, $comment, ''))."\n";
			$line = file(LOG_FILE);
			array_unshift($line, $new);
			write_logs($line);

			$smwclap_count = $_COOKIE['smwclap_count'] + 1;
			setcookie("smwclap_count", $smwclap_count, time()+3600, "/");
			setcookie("smwclap_dup", "accessed", 0, "/"); // �޽��� ���� �� �ߺ� �ڼ� ����

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

		// ���� ��¥�� �ð� ���� �޾ƿ�
		$now = time();
		$this_month = date("Ym", $now);
		$this_day = date("d", $now);
		$this_time = date("H:i:s", $now);
		$last_month = date("Ym", mktime(0, 0, 1, date("m",$now)-1, 1, date("Y",$now)));

		if ($_COOKIE['smwclap_dup'])
			setcookie("smwclap_dup", "", time()-3600, "/");

		else {

			// �� 2������ �����͸� ����
			$line = file(LOG_FILE);
			$linecount = count($line);
			for($i = 0; $i < $linecount; $i++) {
				$moimoi = explode('<>', $line[$i]);
				if ($moimoi[0] == $this_month || $moimoi[0] == $last_month)
					$new[] = $line[$i];
			}

			// ���� ���� �ڼ��� ������ �ð��� ��� ���� �������
			if ($moimoi[0].$moimoi[1].$moimoi[2] != $this_month.$this_day."��")
				$new[] = "$this_month<>$this_day<>��<>".str_repeat('0<>', 24)."\n";

			// �ð��� ��� ������Ʈ
			$no = count($new)-1;
			$this_hour = date("G", $now);
			$uniuni = explode('<>', $new[$no]);
			$uniuni[$this_hour+3]++;
			$new[$no] = implode('<>', $uniuni);
			write_logs($new);

		}

		// ���ø� �ȿ� ���� ����
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