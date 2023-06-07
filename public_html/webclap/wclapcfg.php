<?php

#################################################

# SM Webclap > 환경설정 (2008.12.19)

# Copyright (C) 2008 SAGA.
# Homepage : http://sagaremix.byus.net

# 제작자는 본 스크립트에 대한 사용자 지원의 의무가 없습니다.
# 본 스크립트를 사용함으로써 발생하는 문제에 대해 제작자는 책임을 지지 않습니다.

# 적절히 수정하시되, 내용 안에 작은 따옴표(')를 입력하실 때 주의하세요!

#################################################


# 웹박수 송신 후 답례 메시지 (태그 가능)
# 메시지 안에 그림을 넣으실 경우는 경로를 정확하게 입력해 주세요.

$ranmsg[] = '박수 감사합니다^0^ 답변은 reply에 올라옵니다!<br>가벼운 박수그림 리퀘도 받고있으니 편하게 남겨주세요~';


# 박수 및 메시지를 확인할 때 필요한 패스워드 (아무것도 입력하지 않으면 누구나 열람 가능)

$adminpw = '4168';


# 한 번에 메시지를 보낼 수 있는 최대 횟수. 한도를 설정하고 싶지 않으면 0으로.

$msg_limit = 10;


# 패스워드를 암호화 하기 위한 salt 값. 아무 문자열이나 2자리로 입력하세요.

$salt = 'a1';




# HTML 출력. 디자인을 변경하고 싶으실 때 수정하세요.
# 단, (!-- xxx --) 부분과 저작권 표시는 삭제하지 말아주세요~

$head = <<<HEAD

<html>
<head>
<title> Delight pi - web clap </title>
<meta http-equiv="content-style-type" content="text/css">
<link rel="stylesheet" type="text/css" href="../style.css">
<meta http-equiv="content-type" content="text/html; charset=euc-kr">
<meta name="description" content="아주버 개인홈">
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
						<span style="font-size:12pt;"><a href="/bbs/admin.php" target="_blank">★</a> <a href="/webclap/wclapview.php" target="_blank">★</a></span>
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

<input type="button" value="박수를 더 보낸다!" style="height:30" onclick="location.reload()">

<br><br><br>

※ 추가로 하고 싶으신 말씀이 있다면 이쪽으로 해 주세요.

<form action="smwclap.php" method="post">
<!-- hidden 입력란은 수정하거나 지우시면 안 됩니다! -->
<input type="hidden" name="sendmsg" value="on">
<input type="hidden" name="yyyymm" value="(!--yyyymm--)">
<input type="hidden" name="dd" value="(!--dd--)">
<input type="hidden" name="time" value="(!--time--)">
<textarea name="comment" cols=45 rows="5"></textarea> <input type="submit" value="메시지 전송"></form>

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
						<span style="font-size:12pt;"><a href="/bbs/admin.php" target="_blank">★</a> <a href="/webclap/wclapview.php" target="_blank">★</a></span>
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
응원 메시지가 무사히 전달되었습니다. 감사합니다.^^

<br><br><br>

* 전달된 메시지 *<br><br>
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
						<span style="font-size:12pt;"><a href="/bbs/admin.php" target="_blank">★</a> <a href="/webclap/wclapview.php" target="_blank">★</a></span>
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

장난이나 테러를 방지하기 위해 (!--limit--)번까지 박수 칠 수 있답니다.\
<br><br>
다음에 또 응원과 메시지 부탁드려요.^^

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