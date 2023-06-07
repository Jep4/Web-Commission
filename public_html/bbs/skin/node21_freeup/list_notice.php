
<table border=0 cellspacing=0 cellpadding=0 width="<?=$width?>" height="30" style="word-break:break-all;">
<tr><td align="center">

<b>NOTICE&nbsp;<?=$date="<span title='".date("y/m/d H:i:s l", $data[reg_date])."'>".date("ymd", $data[reg_date])."</span>";?></b><span class="8"><?=$a_delete?>&nbsp;DELETE</a></span>

<br>

<? if($data[is_secret]&&!$is_admin&&$data[ismember]!=$member[no]) { ?>
<span class="secret"><br>SECRET</span>
<? } else if($node=="true") { ?>
<a onclick="this.nextSibling.style.display= (this.nextSibling.style.display=='none')?'block':'none';" href="javascript:void(0)"><span class="more"><br>¡å MORE</span></a><span style="width:100%; display:none; float:left;">
<? if($data[file_name1]) { ?>
<?=$upload_image1?>
<? } else { ?> 
<span style="width:200; font-weight:bold;"><br>NO POSTER</span>
<? } ?></span>

<? } else { ?>

<? if($data[file_name1]) { ?>
<?=$upload_image1?>
<? } else { ?> 
<table border=0 cellspacing=0 cellpadding=0 width=300><tr><td  align=center valign=top><br><b>NO POSTER</b></td></tr></table>
<? } ?>

<? } ?>

</td></tr></table>

<br>
