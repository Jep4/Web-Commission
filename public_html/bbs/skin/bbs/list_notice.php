<? /////////////////////////////////////////////////////////////////////////
 /*
 �������׸���� ����ϴ� �κ��Դϴ�.
 ����� �������̱� ������ �� ������ ��� �о ����մϴ�.
 ��ȯ�� �ǵ��� �� �ۼ��ϼž� �մϴ�.
 �Ʒ��� HTML �ȿ� �״�� ������ֽø� ��ȯ�� �ϸ鼭 ����� �մϴ�.

 <?=$number?> : �����ȣ. �� ������� ������ ��ȣ
 * <?=$data[no]?> : �����ȣ, ���� �ٲ��� �ʴ� ��ȣ..
 * <?=$loop_number?> : ���� ���õǾ� �ִ� ���̶� ��ȣ�� ������
 <?=$name?> : ������ ��ũ�Ǿ� �ִ� �̸� * ���� �״�� <?=$data[name]?>
 <?=$email?> : ����.. ���� ���� ������ ����;;
 <?=$subject?> : ��ũ�� �Ǿ� �ִ� ����  * ���� �״�� <?=$data[suject]?>
 <?=$memo?> : ���� �κ� 
 <?=$hit?> : ��ȸ��
 <?=$vote?> : ��õ��
 <?=$ip?> : �����ּ�
 <?=$comment_num?> : ������ ��� �� [ ] �� �ѷ��ο� �ִ°�;; <?=$data[comment_num]?> �� ���ڸ�;;
 <?=$reg_date?> : �۾� ����
 <?=$category_name?> : ī�װ� �̸�

 <?=$face_image?> : ���� ȸ�������� ������;;

 <?=$insert?> : ����ϰ�� ��ĭ�� ���� ���̸� ����մϴ�.
 <?=$icon?>   : ���� ���� ���¿� ���� �������� ����մϴ�.

 �ٱ��Ͽ� ī�װ��� ��� ������� �ʴ� ���� �����Ƿ� ���ܳ����� ���� ����;;
 <?=$hide_cart_start?> ���� <?=$hide_cart_end?> : start �� end ���̿��� �����;; �ٱ���
 <?=$hide_category_start?> ���� <?=$hide_category_end?> : Start�� end ���̿��� �����;; �ٱ���

                
 ����: old_head.gif : �������̸鼭 12�ð��� ���� ���� ������
       new_head.gif : 12�ð��� ���� ��� ��. ����/��� �������
       reply_head.gif : 12�ð��� ���� ����� ������
       reply_new_head.gif : 12�ð��� ������ ���� ����� ������;;
       notice_head.gif : ���������϶� ������
       secret_head.gif : ��б����� ��Ÿ���� ������
       arror.gif : ���� ����Ʈ���� ���õǾ� �ִ� �� �տ� �ٴ� ������
 */
///////////////////////////////////////////////////////////////////////// ?>

<tr align=center height=33>

  <td align=center colspan=3 style='word-break:break-all;'><?=$subject?><?=$hide_cart_start?><input type=checkbox name=cart value="<?=$data[no]?>"><?=$hide_cart_end?><font class=n color=A49AB4><?
$comment_num="+".$data[total_comment]."";
if($data[total_comment]==0) {
  $comment_num="";
}
echo "&nbsp;$comment_num";?></font></td> 

</tr>
	<td colspan=8 height=1 class=line></td>