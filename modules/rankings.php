<?
if(isset($_GET['sort'])){$_POST['sort']=$_GET['sort']; $_POST['top_rank']='100';}
if($_POST[top_rank] != ''){$select_top[$_POST[top_rank]]=" selected";} else{$select_top[100]=" selected";}
if($_POST[top_rank] != 'all'){$select_sort[$_POST[sort]]=" selected";} else{$select_sort['all']=" selected";}
?>

<div class="brdiv"></div>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="100%"><fieldset>
      <legend>Rankings Form</legend>
      <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
        <tr>
          <td><form action="" method="post" name="rankings" id="rankings">
			<span class="normal_text_white">Top
                          <select name="top_rank">
                            <option value="10"<?echo $select_top[10];?>>10</option>
                            <option value="25"<?echo $select_top[25];?>>25</option>
                            <option value="50"<?echo $select_top[50];?>>50</option>
                            <option value="100"<?echo $select_top[100];?>>100</option>
                          </select> 
			Select Sort
                      <select name="sort">
                        <option value="all"<?echo $select_sort['all'];?>>All Characters</option>
                        <option value="pk"<?echo $select_sort['pk'];?>>Killers</option>
                        <option value="guild"<?echo $select_sort['guilds'];?>>Guilds</option>
                        <!-- <option value="ds"<?echo $select_sort['ds'];?>>Devil Square</option> -->
                        <option value="sm"<?echo $select_sort['sm'];?>>Only DW's/SM's</option>
                        <option value="bk"<?echo $select_sort['bk'];?>>Only DK's/BK's</option>
                        <option value="me"<?echo $select_sort['me'];?>>Only ELF's/ME's</option>
                        <option value="mg"<?echo $select_sort['mg'];?>>Only MG's</option>
                        <option value="dl"<?echo $select_sort['dl'];?>>Only DL's</option>
                        <option value="online"<?echo $select_sort['online'];?>>Online Characters</option>
                      </select> 
                      <input type="submit" name="Submit" value="Submit New Ranking" class="button">
			</span>
          </form></td>
        </tr>
      </table>
    </fieldset></td>
  </tr>
</table>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center">
<?error_reporting(E_ALL ^E_NOTICE ^E_WARNING); 
if(!isset($_POST['sort'])){include("modules/rankings/character.php");}
elseif($_POST['sort']==online){include("modules/rankings/online.php");}
elseif($_POST['sort']==guild){include("modules/rankings/guild.php");}
elseif($_POST['sort']==pk){include("modules/rankings/pk.php");}
else{include("modules/rankings/character.php");}
?>
    </td>
  </tr>
</table>