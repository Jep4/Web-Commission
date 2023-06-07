<?  if ($mode=="write") $memo="미리 보여질 양식"; ?> 

<div align=center><table border=0 cellspacing=0 cellpadding=0 class=writewidth  width=<?=$width?>>
<tr> <td width=0>   
<!-- 폼태그 부분;; 수정하지 않는 것이 좋습니다 -->
   <form method=post name=write action=write_ok.php enctype=multipart/form-data>
   <input type=hidden name=page value=<?=$page?>>
   <input type=hidden name=id value=<?=$id?>>
   <input type=hidden name=no value=<?=$no?>>
   <input type=hidden name=select_arrange value=<?=$select_arrange?>>
   <input type=hidden name=desc value=<?=$desc?>>
   <input type=hidden name=page_num value=<?=$page_num?>>
   <input type=hidden name=keyword value="<?=$keyword?>">
   <input type=hidden name=category value="<?=$category?>">
   <input type=hidden name=sn value="<?=$sn?>">
   <input type=hidden name=ss value="<?=$ss?>">
   <input type=hidden name=sc value="<?=$sc?>">
   <input type=hidden name=mode value="<?=$mode?>">
   <!----------------------------------------------->  
   </td>
   </tr>

   <tr>     
   <td valign=top > 
<input type=hidden name=subject value="guest" class=input>

   <?=$hide_start?>
<input type=text name=name value="<?=$name?>" placeholder=name class=input width=33%>&nbsp;<input type=password name=password placeholder=password class=input width=33%>&nbsp;<input type=text name=homepage value="<?=$homepage?>"  width=33% placeholder=homepage class=input>
   <?=$hide_end?>
   </td>
   </tr>
   <tr>
   <td class=num>
   <?=$hide_notice_start?><input type=checkbox name=notice <?=$notice?> value=1> NOTICE<?=$hide_notice_end?>
   <?=$hide_html_start?>
   <input type=checkbox name=use_html <?=$use_html?> value=1> HTML <?=$hide_html_end?>
                      <?=$hide_secret_start?>
                      <input type=checkbox name=is_secret <?=$secret?> value=1> SECRET
                      <?=$hide_secret_end?>
<BR>
<textarea name=memo class=input style="width:100%;height:150;"><?=$memo?></textarea>
   </td>
   </tr>

   <tr>        
   <td align=right valign=bottom>
   <input type=submit value="쓰기" class=button>  
   </td>       
   </tr>      

   </td> 
   </tr>
   </form>
   </table>
   </div>