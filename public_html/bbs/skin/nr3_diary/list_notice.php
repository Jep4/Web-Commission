<tr><td valign=top style='padding:0 1 21 0;' colspan=2 width=<?=$width?>>
<table align=center border=0 cellpadding=0 cellspacing=0 width=100%>
<tr><td width=100% style='padding:21 22 18 22; background-color:#f7f7f7; border:1px solid #d7d7d7'>
<table align=center border=0 cellpadding=0 cellspacing=0 width=100%>



<!-- # 아이콘 --><tr><td valign=top height=30 style='padding:2 0 0 1;' class=small>
<?=$a_modify?><b><?=$icon?></b></a>&nbsp;　&nbsp;<s><b><?=$a_delete?>&nbsp;DELETE&nbsp;</a></b></s>
</td></tr>

<!-- # 내용 --><tr><td valign=top height=18 style='padding:0 0 1 0; letter-spacing:0px;'>
<p><?=$data[memo]?></p>
</td></tr>



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