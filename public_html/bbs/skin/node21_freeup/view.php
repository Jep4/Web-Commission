<!-- 글보기 출력시 view article화면 나오는곳 -->

<? if($upload_image1) { $size = GetImageSize($data[file_name1]); } ?>

<table border=0 cellspacing=0 cellpadding=10 width="<?=$width?>">
<tr><td align="center">
<span class="8"><?=$hide_prev_start?><?=$a_prev?>← PREV</a><?=$hide_prev_end?>&nbsp;<b>|</b>&nbsp;<?=$a_list?>LIST</a>&nbsp;<b>|</b>&nbsp;<?=$hide_next_start?><?=$a_next?>NEXT →</a><?=$hide_next_end?></span>
</td></tr></table>

<table border=0 cellspacing=0 cellpadding=0 width="<?=$width?>" class="table_all">
<tr><td>

<table border=0 cellspacing=0 cellpadding=5 width="100%" class="table_number">
<tr><td><b>NO.<?=$data[no]?> 해당 게시물에 댓글을 답니다.</b><span class="8"><?=$a_delete?>&nbsp;DELETE</a></span></td></tr></table>
			
<table border=0 cellspacing=0 cellpadding=5 width="100%" class="table_content">
<tr><td align=center valign=top width=1 class="table_pic">

<? if($data[file_name1]) { ?>

<? if($size[0]>$i_width) { ?>
<img src="<?=$data[file_name1]?>" width=<?=$i_width?> onclick="window.open(this.src)" style="cursor:pointer;cursor:hand;">
<table border=0 cellspacing=0 cellpadding=0 width="200"><tr><td valign=top>원본사이즈: <?=$size[0]?>*<?=$size[1]?></td></tr></table>
<? } else if($size[1]>$i_height) { ?>
<img src="<?=$data[file_name1]?>" height=<?=$i_height?> onclick="window.open(this.src)" style="cursor:pointer;cursor:hand;">
<table border=0 cellspacing=0 cellpadding=0 width="200"><tr><td valign=top>원본사이즈: <?=$size[0]?>*<?=$size[1]?></td></tr></table>
<? } else { ?>
<?=$upload_image1?>
<? } ?>

<? } else { ?> 
<span style="width:200; font-weight:bold;">NO POSTER</span>
<? } ?>

</td>
<? if($size[0]>$limit_width) { ?><tr><? } ?>
<td valign="top" style="word-break:break-all;" class="table_comment">

<table border=0 cellspacing=0 cellpadding=5 width="100%">
<tr><td>

<table border=0 cellspacing=0 cellpadding=0 width=250 height="1">
<tr><td></td></tr></table>
