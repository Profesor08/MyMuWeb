<?PHP
// PHP Script By Vaflan
// For MyMuWeb
// Ver. 1.7

$top_rank = clean_var(stripslashes($_POST['top_rank']));

$result = @mssql_query("Select TOP $top_rank memb___id,ServerName from MEMB_STAT where ConnectStat='1' ORDER BY CONNECTTM ASC");
$row_num = @mssql_num_rows($result);

if($row_num==0) {
	$mmwflashbody = "%3Ca href=%27%3Fop=rankings%26sort=3d_online%27 style=%27font-size: 9pt;%27%3E".mmw_lang_all_characters_is_offline."%3C/a%3E";
}

echo "<center>\n<br>".mmw_lang_total_users_online.": $row_num, ".mmw_lang_character." [".mmw_lang_reset."/".mmw_lang_level."]";

for($i=0;$i < $row_num;++$i) {
	$rand = rand(6,10);
	$row = mssql_fetch_row($result);
	$idc_reults = mssql_query("Select GameIDC from AccountCharacter where Id='$row[0]'");
	$idc = mssql_fetch_row($idc_reults);
	$char_reults = mssql_query("Select Name,Class,Reset,cLevel,AccountID from Character where name='$idc[0]'");
	$char = mssql_fetch_row($char_reults);

	$mmwflashbody = $mmwflashbody . "%3Ca href=%27%3Fop=character%26character=$char[0]%27 %62%79=%27%76%61%66%6C%61%6E%27 style=%27font-size: ".$rand."pt;%27%3E$char[0] [$char[2]/$char[3]]%3C/a%3E ";
}

if(!isset($flash_body_size)) {
	$flash_body_size = "500";
}
?>

<div id="mmwtagcloudflash">
<p style="display:none;">
<?echo $mmwflashbody;?>
</p>
<p>WP Cumulus Flash tag cloud Edited by Vaflan.</p>
</div>
<script type="text/javascript" src="scripts/swfobject.js"></script>
<script type="text/javascript">
var mmwonline = new SWFObject("media/tagcloud.swf", "mmwtagcloudflash", "<?echo $flash_body_size;?>", "<?echo $flash_body_size;?>", "10");
mmwonline.addParam("wmode", "transparent");
mmwonline.addParam("bgcolor", "#<?echo $bg_color;?>");
mmwonline.addParam("allowScriptAccess", "always");
mmwonline.addVariable("tcolor", "0x<?echo $text_color;?>");
mmwonline.addVariable("tspeed", "100");
mmwonline.addVariable("distr", "true");
mmwonline.addVariable("mode", "tags");
mmwonline.addVariable("minFontSize", "6");
mmwonline.addVariable("maxFontSize", "10");
mmwonline.addVariable("tagcloud", "%3Ctags%3E<?echo $mmwflashbody;?>%3C/tags%3E");
mmwonline.write("mmwtagcloudflash");
</script>