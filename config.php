<?PHP
// Config For MyMuWeb 0.2
// by Vaflan


// MSSQL settings
$mmw[dbhost] = 'IP Address';			// Ip SQL Server
$mmw[dbuser] = 'Login';				// Login SQL
$mmw[dbpass] = 'Password';			// Pass SQL
$mmw[database] = 'DataBase';			// DataBase SQL


// MSSQL CONNECT
$sql_die_start = '<table border="0" width="350" height="150" align="center" style="background:url(images/sql_die.png);" cellpadding="25"><tr><td valign="top"><b>Critical Error</b><br>'; $sql_die_end = '</td></tr></table>';
if($mmw[dbpass]=='Password' || $mmw[dbuser]=='Login' || $mmw[database]=='DataBase' || $mmw[dbhost]=='IP Address') {die("$sql_die_start Please Check config.php! $sql_die_end");}
$connect_mssql = @mssql_connect($mmw[dbhost],$mmw[dbuser],$mmw[dbpass]) or die("$sql_die_start MSSQL server is offline OR I can't Access to it! $sql_die_end");
@mssql_select_db($mmw[database], $connect_mssql) or die("$sql_die_start Database don't exists OR I can't Access to it! $sql_die_end");


// MyMuWeb Config
$mmw[webtitle] = 'MyMuWeb 0.2 by Vaflan';		// Web Title
$mmw[servername] = 'MyMuWeb 0.2';			// Server Name
$muweb['serverwebsite'] = "http://mymuweb/";		// WebSite
$mmw[md5] = '1';					// 0(OFF) or 1(ON)
$mmw[resetmoney] = '10000000';				// Zen for Reset (Min 1kk)
$mmw[pkmoney] = '3000000';				// Zen for Pk Clean (Min 1kk)
$mmw[warp_zen] = '5000000';				// Zen for move (Min 1kk)
$mmw[resetlevel] = '400';				// Max Level
$mmw[resetslimit] = '200';				// Max Reset
$mmw[resetpoints] = '0';				// Reset Points
$mmw[resetmode] = 'keep';				// reset(Points = 25) or keep(Default)
$mmw[levelupmode] = 'normal';				// extra(ResetPoints*Reset) or normal(Points+ResetPoints)
$mmw[clean_inventory] = 'no';				// no(NO Clean) or yes(Clean)
$mmw[clean_skills] = 'no';				// no(NO Clean) or yes(Clean)
$mmw[gm] = 'yes';					// no(Not Show in TOP) or yes(Show in TOP)


// Other
$mmw[gs_cs_ip] = '127.0.0.1';				// Castle Siege IP
$mmw[gs_cs_port] = '55901';				// Castle Siege port
$mmw[joinserver_port] = '55970';			// Join Server port
$mmw[gm_guild] = 'GM Guild';				// GM guild name (Don't Show)
$mmw[reset_system] = 'no';				// yes(Zen*Reset) or no(Default)
$mmw[long_news_txt] = '150"';				// Long News Text
$mmw[max_post_forum] = '10';				// Max Post in Forum
$mmw[comment_time_out] = '60';				// Comment Time Out
$mmw[zen_for_acc] = '20000000';				// Zen For New Account (Can 0)
$mmw[zen_for_ref] = '100000000';			// Zen For Referral (Min 1kk)
$mmw[mix_cs_memb_reset] = 'no';				// yes(Reset Zen - Mix Cs Reset Zen) or no(Default)
$mmw[max_zen_cs_reset] = '64000000';			// Max Zen Need in Castle % For Reset Members Castle Siege (Min 1kk)
$mmw[num_for_mix_cs_reset] = '4';			// How many '/' Max Zen to create % (Can't 0)
$mmw[max_leng_private_message] = '500';			// How many Simbol in Private Message


// Level (3 - GM, 6 - Mini Admin, 9 - Admin)
$mmw[admin_securitycode] = date("dm");			// Admin Panel Security Code
$mmw[min_level_to_ap] = '3';				// Min Level To Enter Admin Panel
$mmw[gm_option_open] = '3';				// Add GM Option Menu
$mmw[gm_msg_send] = '3';				// Send GM Message to Server
$mmw[hex_wh_can] = '6';					// Can edit Ware House HEX
$mmw[comment_can_delete] = '3';				// Comment Can Delete with this level
$mmw[forum_can_delete] = '3';				// Forum Can Delete with this level


// Code
$alphanum = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
$mmw[news_id] = substr(str_shuffle($alphanum), 0, 8);
$mmw[forum_id] = substr(str_shuffle($alphanum), 0, 8);


// Okey And Die(Error)
$okey_start = "<div class='okey' align='center'><b>";
$okey_end = "</b></div>";

$die_start = "<div class='die' align='center'><b>";
$die_end = "</b></div>";
?>