
<?
   $restricted = FALSE;                                                
   if (strpos($memo,"[NOACT_MEMBERONLY]")) {                          
      $memo = str_replace("[NOACT_MEMBERONLY]","",$memo);              
   } else {                                                            
      for ($i=9; $i>=1; $i--) {                                        
         if (strpos($memo,"[MEMBERONLY(".$i.")]")) {                  
            if (($member[level]<=$i)||($data[ismember]==$member[no])) {
               $memo = str_replace("[MEMBERONLY(".$i.")]","",$memo);  
            } else {                                                  
               $memo = "";                                            
               $restricted = TRUE;                                    
            }                                                          
            $memo = $memo . "<BR><DIV ALIGN=center class=sub><B>".                
                            "레벨 ".$i.
                            " 이상".          
                            "</B></DIV><BR>";                          
         }                                                            
      }                                                                
   }                                                                  
?>


<table border=0 cellspacing=0 cellpadding=0 width=<?=$width?> style="margin-top:10px;"  class=title>
<tr>
<td align=left style="padding:10;" class=sub><b><?=$subject?></b></td>
<td width=100px align=right style="padding-right:10;" class=sub><?=$data[name]?> 씀
<?=$a_modify?>수정</a> <?=$a_delete?>삭제</a></td>
</tr>
</table>
<table border=0 cellspacing=0 cellpadding=0 width=<?=$width?>>
<tr>
<td style='padding:10;' colspan=2 >
<?=$memo?>
</td>
</tr>
</table>
