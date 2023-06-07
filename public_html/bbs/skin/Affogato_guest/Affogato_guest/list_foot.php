<?
/***************************************************************************
 * 스킨에서 사용할 페이지 정리
 **************************************************************************/

	$print_page = "";
	$show_page_num = $setup[page_num]; // 한번에 보일 페이지 갯수
	$start_page = (int)(($page-1)/$show_page_num)*$show_page_num;
	$i = 1;

	$a_1_prev_page= "<Zeroboard ";
	$a_1_next_page= "<Zeroboard ";
	$a_prev_page = "<Zeroboard ";
	$a_next_page = "<Zeroboard ";

	if($page>1) $a_1_prev_page="<a onfocus=blur() href='$PHP_SELF?id=$id&page=".($page-1)."&select_arrange=$select_arrange&desc=$desc&category=$category&sn=$sn&ss=$ss&sc=$sc&keyword=$keyword&sn1=$sn1&divpage=$divpage'>";

	if($page<$total_page) $a_1_next_page="<a onfocus=blur() href='$PHP_SELF?id=$id&page=".($page+1)."&select_arrange=$select_arrange&desc=$desc&category=$category&sn=$sn&ss=$ss&sc=$sc&keyword=$keyword&sn1=$sn1&divpage=$divpage'>";

	if($page > $show_page_num) {
		$prev_page = $start_page;
		$a_prev_page="<a onfocus=blur() href='$PHP_SELF?id=$id&page=$prev_page&select_arrange=$select_arrange&desc=$desc&category=$category&sn=$sn&ss=$ss&sc=$sc&keyword=$keyword&sn1=$sn1&divpage=$divpage'>";
		$print_page.="<a onfocus=blur() href='$PHP_SELF?id=$id&page=1&select_arrange=$select_arrange&desc=$desc&category=$category&sn=$sn&ss=$ss&sc=$sc&keyword=$keyword&sn1=$sn1&divpage=$divpage'>1</a> <span class='thm7'>...</span>";
		$prev_page_exists = true;
	}

	while($i+$start_page<=$total_page && $i<=$show_page_num) {
		$move_page = $i+$start_page;
		
		if($show_page_num != $move_page && $move_page < $total_page )
			$slash = "&nbsp;<b>·</b>&nbsp;";
		else
			$slash = "&nbsp;";

		if($page == $move_page) $print_page.=" <span class='color'> $page </span>$slash";
		else $print_page.= "<a onfocus=blur() href='$PHP_SELF?id=$id&page=$move_page&select_arrange=$select_arrange&desc=$desc&category=$category&sn=$sn&ss=$ss&sc=$sc&keyword=$keyword&sn1=$sn1&divpage=$divpage'><span class=7v> $move_page </a>$slash";
		$i++;
	}

	if($total_page>$move_page) {
		$next_page = $move_page+1;
		$a_next_page="<a onfocus=blur() href='$PHP_SELF?id=$id&page=$next_page&select_arrange=$select_arrange&desc=$desc&category=$category&sn=$sn&ss=$ss&sc=$sc&keyword=$keyword&sn1=$sn1&divpage=$divpage'>";
		$print_page.="<span class='thm7'>...</span> <a onfocus=blur() href='$PHP_SELF?id=$id&page=$total_page&select_arrange=$select_arrange&desc=$desc&category=$category&sn=$sn&ss=$ss&sc=$sc&keyword=$keyword&sn1=$sn1&divpage=$divpage'>$total_page</a>";
		$next_page_exists = true;
	}

	// 검색시 Divsion 페이지 이동 표시
	if($use_division) {
		if($prevdivpage&&!$prev_page_exists) $a_div_prev_page="<a onfocus=blur() href='$PHP_SELF?id=$id&&select_arrange=$select_arrange&desc=$desc&category=$category&sn=$sn&ss=$ss&sc=$sc&keyword=$keyword&sn1=$sn1&divpage=$prevdivpage'>이전 검색</a>...";
		if($nextdivpage&&!$next_page_exists) $a_div_next_page="...<a onfocus=blur() href='$PHP_SELF?id=$id&&select_arrange=$select_arrange&desc=$desc&category=$category&sn=$sn&ss=$ss&sc=$sc&keyword=$keyword&sn1=$sn1&divpage=$nextdivpage'>계속 검색</a>";
		$print_page = $a_div_prev_page.$print_page.$a_div_next_page;

	}

?>

<table border=0 cellspacing=0 cellpadding=0 width=<?=$width?>>
	<tr>
		<td align="left" class="thm6" style="padding-top:4;"><b><?=$a_list?>LIST</a>&nbsp;&nbsp;<?=$a_delete_all?>DELETE</a></b></td>
		<td align="right" class="thm6" style="padding-top:4;" valign=top><b><?=$a_prev_page?>◀</a> <?=$print_page?> <?=$a_next_page?>▶</a></b></td>
		</form>
	</tr>
</table>

<table border=0 cellspacing=0 cellpadding=0 width=<?=$width?>>
	<tr><td width="1">
	<form method=post name=search action=<?=$PHP_SELF?>>
	<input type=hidden name=page value=<?=$page?>>
	<input type=hidden name=id value=<?=$id?>>
	<input type=hidden name=select_arrange value=<?=$select_arrange?>>
	<input type=hidden name=desc value=<?=$desc?>>
	<input type=hidden name=page_num value=<?=$page_num?>>
	<input type=hidden name=selected>
	<input type=hidden name=exec>
	<input type=hidden name=sn value="on">
	<input type=hidden name=ss value="<?=$ss?>">
	<input type=hidden name=sc value="<?=$sc?>">
	<input type=hidden name=category value="<?=$category?>">
	</td></tr>
	<tr>
		<td align="right" colspan="2">
		<input type=text name="keyword" value="<?=$keyword?>" style='width:110px; height:18px;' class="input_2"></td>
	</tr>
</form>
</table>