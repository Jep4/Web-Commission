<?php

#################################################

# SM Webclap > ȯ�漳�� (2008.12.19)

# Copyright (C) 2008 SAGA.
# Homepage : http://sagaremix.byus.net

# �����ڴ� �� ��ũ��Ʈ�� ���� ����� ������ �ǹ��� �����ϴ�.
# �� ��ũ��Ʈ�� ��������ν� �߻��ϴ� ������ ���� �����ڴ� å���� ���� �ʽ��ϴ�.

# ������ �����Ͻõ�, ���� �ȿ� ���� ����ǥ(')�� �Է��Ͻ� �� �����ϼ���!

#################################################


# ���ڼ� �۽� �� ��� �޽��� (�±� ����)
# �޽��� �ȿ� �׸��� ������ ���� ��θ� ��Ȯ�ϰ� �Է��� �ּ���.

$ranmsg[] = '�ڼ� �����մϴ�^0^ �亯�� reply�� �ö�ɴϴ�!<br>������ �ڼ��׸� ������ �ް������� ���ϰ� �����ּ���~';


# �ڼ� �� �޽����� Ȯ���� �� �ʿ��� �н����� (�ƹ��͵� �Է����� ������ ������ ���� ����)

$adminpw = '4168';


# �� ���� �޽����� ���� �� �ִ� �ִ� Ƚ��. �ѵ��� �����ϰ� ���� ������ 0����.

$msg_limit = 10;


# �н����带 ��ȣȭ �ϱ� ���� salt ��. �ƹ� ���ڿ��̳� 2�ڸ��� �Է��ϼ���.

$salt = 'a1';




# HTML ���. �������� �����ϰ� ������ �� �����ϼ���.
# ��, (!-- xxx --) �κа� ���۱� ǥ�ô� �������� �����ּ���~

$head = <<<HEAD

<html>
<head>
<title> Delight pi - web clap </title>
<meta http-equiv="content-style-type" content="text/css">
<link rel="stylesheet" type="text/css" href="../style.css">
<meta http-equiv="content-type" content="text/html; charset=euc-kr">
<meta name="description" content="���ֹ� ����Ȩ">
<meta name="keywords" content=".">
</head>

HEAD;


$thanks = <<<THANKS_PAGE

<body>

<table class="main" cellpadding="0" cellspacing="0" width="980">
    <tr>
		<td width=20"></td>
        <td width="140" valign="top" align="left">
			<div id="menu">
			<table cellpadding="0" cellspacing="0">
			    <tr>
			        <td height="2" bgcolor="#CCCCCC"></td>
			    </tr>
			    <tr>
			        <td bgcolor="white" align="center">
						<table cellpadding="0" cellspacing="0" width="100%" height="20px"><tr><td></td></tr></table>
						<a href="/index.html"><img src="/img/title_2.png"></a>
						<div class="menu_m">
						<a href="/about.html">about</a>
						<a href="/bbs/zboard.php?id=book">book</a>
						<a href="/gallery.html">gallery</a>
						<a href="/bbs/zboard.php?id=diary">diary</a>
						<a href="/bbs/zboard.php?id=text">text</a>
						<a href="/webclap/smwclap.php">webclap</a>
						<a href="/bbs/zboard.php?id=webclap">reply</a>
						</div>
						<table cellpadding="0" cellspacing="0" width="100%" height="20px"><tr><td></td></tr></table>
						<span style="font-size:12pt;"><a href="/bbs/admin.php" target="_blank">��</a> <a href="/webclap/wclapview.php" target="_blank">��</a></span>
						<table cellpadding="0" cellspacing="0" width="100%" height="20px"><tr><td></td></tr></table>
					</td>
			    </tr>
			    <tr>
			        <td height="1" bgcolor="#CCCCCC"></td>
			    </tr>
			</table>
			</div>
		</td>
		<td width=20"></td>
        <td width="800" valign="top" align="left">
			<table width="780" cellpadding="0" cellspacing="0">
			    <tr>
			        <td height="2" bgcolor="#CCCCCC"></td>
			    </tr>
			    <tr>
			        <td bgcolor="white" class="contents">

<h1>Thank You For Clapping!</h1>

<br>

(!--random_message--)

<br><br><br>

<input type="button" value="�ڼ��� �� ������!" style="height:30" onclick="location.reload()">

<br><br><br>

�� �߰��� �ϰ� ������ ������ �ִٸ� �������� �� �ּ���.

<form action="smwclap.php" method="post">
<!-- hidden �Է¶��� �����ϰų� ����ø� �� �˴ϴ�! -->
<input type="hidden" name="sendmsg" value="on">
<input type="hidden" name="yyyymm" value="(!--yyyymm--)">
<input type="hidden" name="dd" value="(!--dd--)">
<input type="hidden" name="time" value="(!--time--)">
<textarea name="comment" cols=45 rows="5"></textarea> <input type="submit" value="�޽��� ����"></form>

<br><br><br>
<p align="right"><span style="font-size:8pt;">SM Webclap Copyright &copy; 2008 <a href="http://sagaremix.byus.net" target="_blank">SAGA</a>.</span></p>



					</td>
			    </tr>
			    <tr>
			        <td height="1" bgcolor="#CCCCCC"></td>
			    </tr>
			</table>
		</td>
    </tr>
</table>

</body>

THANKS_PAGE;


$confirm = <<<CONFIRM_PAGE

<body>

<table class="main" cellpadding="0" cellspacing="0" width="980">
    <tr>
		<td width=20"></td>
        <td width="140" valign="top" align="left">
			<div id="menu">
			<table cellpadding="0" cellspacing="0">
			    <tr>
			        <td height="2" bgcolor="#CCCCCC"></td>
			    </tr>
			    <tr>
			        <td bgcolor="white" align="center">
						<table cellpadding="0" cellspacing="0" width="100%" height="20px"><tr><td></td></tr></table>
						<a href="/index.html"><img src="/img/title_2.png"></a>
						<div class="menu_m">
						<a href="/about.html">about</a>
						<a href="/bbs/zboard.php?id=book">book</a>
						<a href="/gallery.html">gallery</a>
						<a href="/bbs/zboard.php?id=diary">diary</a>
						<a href="/bbs/zboard.php?id=text">text</a>
						<a href="/webclap/smwclap.php">webclap</a>
						<a href="/bbs/zboard.php?id=webclap">reply</a>
						</div>
						<table cellpadding="0" cellspacing="0" width="100%" height="20px"><tr><td></td></tr></table>
						<span style="font-size:12pt;"><a href="/bbs/admin.php" target="_blank">��</a> <a href="/webclap/wclapview.php" target="_blank">��</a></span>
						<table cellpadding="0" cellspacing="0" width="100%" height="20px"><tr><td></td></tr></table>
					</td>
			    </tr>
			    <tr>
			        <td height="1" bgcolor="#CCCCCC"></td>
			    </tr>
			</table>
			</div>
		</td>
		<td width=20"></td>
        <td width="800" valign="top" align="left">
			<table width="780" cellpadding="0" cellspacing="0">
			    <tr>
			        <td height="2" bgcolor="#CCCCCC"></td>
			    </tr>
			    <tr>
			        <td bgcolor="white" class="contents">

<h1>Thank You For Clapping!</h1>
<br>
���� �޽����� ������ ���޵Ǿ����ϴ�. �����մϴ�.^^

<br><br><br>

* ���޵� �޽��� *<br><br>
<div style="width:450; padding:5; border:1 dotted gray">(!--sent_message--)</div>

<br><br><br>
<p align="right"><span style="font-size:8pt;">SM Webclap Copyright &copy; 2008 <a href="http://sagaremix.byus.net" target="_blank">SAGA</a>.</span></p>



					</td>
			    </tr>
			    <tr>
			        <td height="1" bgcolor="#CCCCCC"></td>
			    </tr>
			</table>
		</td>
    </tr>
</table>

</body>

CONFIRM_PAGE;


$caution = <<<CAUTION_PAGE

<body>

<table class="main" cellpadding="0" cellspacing="0" width="980">
    <tr>
		<td width=20"></td>
        <td width="140" valign="top" align="left">
			<div id="menu">
			<table cellpadding="0" cellspacing="0">
			    <tr>
			        <td height="2" bgcolor="#CCCCCC"></td>
			    </tr>
			    <tr>
			        <td bgcolor="white" align="center">
						<table cellpadding="0" cellspacing="0" width="100%" height="20px"><tr><td></td></tr></table>
						<a href="/index.html"><img src="/img/title_2.png"></a>
						<div class="menu_m">
						<a href="/about.html">about</a>
						<a href="/bbs/zboard.php?id=book">book</a>
						<a href="/gallery.html">gallery</a>
						<a href="/bbs/zboard.php?id=diary">diary</a>
						<a href="/bbs/zboard.php?id=text">text</a>
						<a href="/webclap/smwclap.php">webclap</a>
						<a href="/bbs/zboard.php?id=webclap">reply</a>
						</div>
						<table cellpadding="0" cellspacing="0" width="100%" height="20px"><tr><td></td></tr></table>
						<span style="font-size:12pt;"><a href="/bbs/admin.php" target="_blank">��</a> <a href="/webclap/wclapview.php" target="_blank">��</a></span>
						<table cellpadding="0" cellspacing="0" width="100%" height="20px"><tr><td></td></tr></table>
					</td>
			    </tr>
			    <tr>
			        <td height="1" bgcolor="#CCCCCC"></td>
			    </tr>
			</table>
			</div>
		</td>
		<td width=20"></td>
        <td width="800" valign="top" align="left">
			<table width="780" cellpadding="0" cellspacing="0">
			    <tr>
			        <td height="2" bgcolor="#CCCCCC"></td>
			    </tr>
			    <tr>
			        <td bgcolor="white" class="contents">

<h1>CAUTION!</h1>

<br>

�峭�̳� �׷��� �����ϱ� ���� (!--limit--)������ �ڼ� ĥ �� �ִ�ϴ�.\
<br><br>
������ �� ������ �޽��� ��Ź�����.^^

<br><br><br>
<p align="right"><span style="font-size:8pt;">SM Webclap Copyright &copy; 2008 <a href="http://sagaremix.byus.net" target="_blank">SAGA</a>.</span></p>



					</td>
			    </tr>
			    <tr>
			        <td height="1" bgcolor="#CCCCCC"></td>
			    </tr>
			</table>
		</td>
    </tr>
</table>

</body>

CAUTION_PAGE;


$foot = <<<FOOT

</html>

FOOT;


#################################################

define(LOG_FILE, "wclaplog.cgi");
define(MAIN_PHP, "smwclap.php");
define(VIEW_PHP, "wclapview.php");

?>