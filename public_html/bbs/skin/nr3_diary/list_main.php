<tr><td valign=top style='padding:0 1 21 0;' colspan=2 width=<?=$width?>>
<table align=center border=0 cellpadding=0 cellspacing=0 width=100%>
<tr><td width=100% style='padding:17 22 17 21; border:1px solid #d7d7d7'>
<table align=center border=0 cellpadding=0 cellspacing=0 width=100%>



<!-- # 아이콘 --><tr><td valign=top height=28 style='padding:0 0 0 0;'><?=$icon?>　</td></tr>

<!-- # 이미지 --><tr><td style='padding:5 0 14 1;'>
<? if($data['is_secret'] && $is_admin || $data['ismember']==$member['no']) { ?>
        <p><?=$upload_image1?></p>
<?=$upload_image2?>
<? }elseif($data['is_secret']=='') { ?>
        <p><?=$upload_image1?></p>
<?=$upload_image2?>
<? }else{ ?><? } ?></td></tr>

<!-- # 내용 --><tr><td valign=top height=18 style='padding:3 0 1 0; letter-spacing:0px;'>
<? if($data['is_secret'] && $is_admin || $data['ismember']==$member['no']) { ?>
        <p align="justify"><?=$data[memo]?></p>
<? }elseif($data['is_secret']=='') { ?>
        <p align="justify"><?=$data[memo]?></p>
<? }else{ ?>
<font color=#999999>해당글은 관리자만 확인 할 수 있습니다.<br>
Sorry, This Is Secret Murmur　~</font>
<? } ?>
</td></tr>

<tr><td style='padding:11 0 0 0;' width=100%>
<table border=0 cellpadding=0 cellspacing=0>
<!-- # 분류 --><tr><td height=17 style='padding:0 17 6 1;' class=small>
<?=$hide_category_start?>CATEGORY&nbsp;&nbsp;-&nbsp;&nbsp;<b><?=$category_name?></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$hide_category_end?>DATE&nbsp;&nbsp;-&nbsp;&nbsp;<b><?=$date=date("y/md",$data[reg_date])?></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$a_reply?>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>REPLY</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</a>
</td></tr>

<tr><td height=1 class=line1></td></tr>

<!-- # 코멘 --><tr><td height=17 style='padding:3 17 0 1;' class=small>
<?=$a_modify?>&nbsp;<b>POST&nbsp;&nbsp;-&nbsp;&nbsp;( MODIFY )&nbsp;&nbsp;AMEND</b>&nbsp;</a>&nbsp;　&nbsp;<?=$a_delete?><s><b>&nbsp;DELETE&nbsp;</b></s></a>
</td></tr></table></td></tr>



</table></td></tr>



<tr><td style='padding:0 0 0 0;'>
<? if($data['is_secret'] && $is_admin || $data['ismember']==$member['no']) { ?>
        <? include "include/get_reply.php";?>
<? }elseif($data['is_secret']=='') { ?>
        <? include "include/get_reply.php";?>
<? }else{ ?>
<? } ?>
</td></tr>
</table></td></tr>