<?php
/**
 * My Arcade
 * Copyright 2012 Starpaul20
 */

$arcade_templates['arcade'] = "<html>
<head>
<title>{\$mybb->settings[\'bbname\']} - {\$lang->arcade}</title>
{\$headerinclude}
</head>
<body>
{\$header}
{\$menu}
{\$stats}
{\$categories}
{\$tournaments}
{\$search}
<br />
{\$multipage}
<table border=\"0\" cellspacing=\"{\$theme[\'borderwidth\']}\" cellpadding=\"{\$theme[\'tablespace\']}\" class=\"tborder\">
<tr>
<td colspan=\"4\" class=\"thead\"><strong>{\$lang->arcade}</strong></td>
</tr>
<tr>
<td class=\"tcat\" width=\"175\" align=\"center\"><strong>{\$lang->name}</strong></td>
<td class=\"tcat\" align=\"center\"><strong>{\$lang->description}</strong></td>
<td class=\"tcat\" width=\"250\" align=\"center\"><strong>{\$lang->menu}</strong></td>
<td class=\"tcat\" width=\"200\" align=\"center\"><strong>{\$lang->champion}</strong></td>
</tr>
{\$game_bit}
<tr>
<td class=\"tfoot\" align=\"right\" colspan=\"4\">
<form action=\"arcade.php\" method=\"get\">
{\$catinput}
<select name=\"sortby\">
<option value=\"name\" {\$sortby_selected[\'name\']}>{\$lang->sort_name}</option>
<option value=\"date\" {\$sortby_selected[\'date\']}>{\$lang->sort_date}</option>
<option value=\"plays\" {\$sortby_selected[\'plays\']}>{\$lang->sort_plays}</option>
<option value=\"lastplayed\" {\$sortby_selected[\'lastplayed\']}>{\$lang->sort_lastplayed}</option>
<option value=\"rating\" {\$sortby_selected[\'rating\']}>{\$lang->sort_rating}</option>
</select>
<select name=\"order\">
<option value=\"desc\" {\$order_selected[\'desc\']}>{\$lang->descending}</option>
<option value=\"asc\" {\$order_selected[\'asc\']}>{\$lang->ascending}</option>
</select>
{\$gobutton}
</form>
</td>
</tr>
</table>
{\$multipage}
{\$online}
{\$footer}
</body>
</html>";

$arcade_templates['arcade_categories'] = "<br />
<table border=\"0\" cellspacing=\"{\$theme[\'borderwidth\']}\" cellpadding=\"{\$theme[\'tablespace\']}\" class=\"tborder\">
<tr>
<td class=\"thead\">
<div class=\"expcolimage\"><img src=\"{\$theme[\'imgdir\']}/collapse{\$collapsedimg[\'arcadecat\']}.gif\" id=\"arcadecat_img\" class=\"expander\" alt=\"[-]\" /></div>
<strong>{\$lang->categories}</strong>
</td>
</tr>
<tbody style=\"{\$collapsed[\'arcadecat_e\']}\" id=\"arcadecat_e\">
<tr>
<td class=\"trow1\" valign=\"top\">
<div class=\"categories\">
<ul>
{\$categorybit}
</ul>
</div>
</td>
</tr>
</tbody>
</table>";

$arcade_templates['arcade_category_bit'] = "<li style=\"width:{\$value}%;\"><a href=\"arcade.php?cid={\$category[\'cid\']}\">{\$image}{\$category[\'name\']}</a> ({\$category[\'games\']})</li>";

$arcade_templates['arcade_champions'] = "<html>
<head>
<title>{\$lang->arcade} - {\$lang->arcade_champions}</title>
{\$headerinclude}
</head>
<body>
{\$header}
{\$menu}
<br />
{\$multipage}
<table border=\"0\" cellspacing=\"{\$theme[\'borderwidth\']}\" cellpadding=\"{\$theme[\'tablespace\']}\" class=\"tborder\">
<tr>
<td colspan=\"5\" class=\"thead\"><strong>{\$lang->arcade_champions}</strong></td>
</tr>
<tr>
<td class=\"tcat\" width=\"20%\" align=\"center\"><strong>{\$lang->name}</strong></td>
<td class=\"tcat\" width=\"20%\" align=\"center\"><strong>{\$lang->username}</strong></td>
<td class=\"tcat\" width=\"20%\" align=\"center\"><strong>{\$lang->date}</strong></td>
<td class=\"tcat\" width=\"10%\" align=\"center\"><strong>{\$lang->score}</strong></td>
<td class=\"tcat\" width=\"30%\" align=\"center\"><strong>{\$lang->comment}</strong></td>
</tr>
{\$champ_bit}
<tr>
<td class=\"tfoot\" align=\"right\" colspan=\"5\">
<form action=\"arcade.php\" method=\"get\">
<input type=\"hidden\" name=\"action\" value=\"champions\" />
<select name=\"sortby\">
<option value=\"date\" {\$sortby_selected[\'date\']}>{\$lang->sort_date}</option>
<option value=\"name\" {\$sortby_selected[\'name\']}>{\$lang->sort_name}</option>
<option value=\"user\" {\$sortby_selected[\'user\']}>{\$lang->sort_user}</option>
</select>
<select name=\"order\">
<option value=\"desc\" {\$order_selected[\'desc\']}>{\$lang->descending}</option>
<option value=\"asc\" {\$order_selected[\'asc\']}>{\$lang->ascending}</option>
</select>
<select name=\"perpage\">
<option value=\"5\" {\$perpage_selected[\'5\']}>{\$lang->perpage_5}</option>
<option value=\"10\" {\$perpage_selected[\'10\']}>{\$lang->perpage_10}</option>
<option value=\"15\" {\$perpage_selected[\'15\']}>{\$lang->perpage_15}</option>
<option value=\"20\" {\$perpage_selected[\'20\']}>{\$lang->perpage_20}</option>
<option value=\"25\" {\$perpage_selected[\'25\']}>{\$lang->perpage_25}</option>
<option value=\"30\" {\$perpage_selected[\'30\']}>{\$lang->perpage_30}</option>
<option value=\"40\" {\$perpage_selected[\'40\']}>{\$lang->perpage_40}</option>
<option value=\"50\" {\$perpage_selected[\'50\']}>{\$lang->perpage_50}</option>
</select>
{\$gobutton}
</form>
</td>
</tr>
</table>
{\$multipage}
{\$online}
{\$footer}
</body>
</html>";

$arcade_templates['arcade_champions_bit'] = "<tr>
<td class=\"{\$alt_bg}\" align=\"center\"><a href=\"arcade.php?action=play&amp;gid={\$champ[\'gid\']}\">{\$champ[\'name\']}</a></td>
<td class=\"{\$alt_bg}\" align=\"center\"><a href=\"{\$profilelink}\">{\$champ[\'username\']}</a></td>
<td class=\"{\$alt_bg}\" align=\"center\">{\$dateline}</td>
<td class=\"{\$alt_bg}\" align=\"center\">{\$champ[\'score\']}</td>
<td class=\"{\$alt_bg}\">{\$champ[\'comment\']}</td>
</tr>";

$arcade_templates['arcade_edit'] = "<html>
<head>
<title>{\$lang->edit_comment}</title>
{\$headerinclude}
</head>
<body>
<br />
<table border=\"0\" cellspacing=\"{\$theme[\'borderwidth\']}\" cellpadding=\"{\$theme[\'tablespace\']}\" class=\"tborder\">
<tr>
<td class=\"trow1\" style=\"padding: 20px\">
<strong>{\$lang->edit_comment}</strong><br />
<form action=\"arcade.php\" method=\"post\">
<input type=\"hidden\" name=\"my_post_key\" value=\"{\$mybb->post_code}\" />
<input type=\"hidden\" name=\"action\" value=\"do_edit\" />
<input type=\"hidden\" name=\"sid\" value=\"{\$mybb->input[\'sid\']}\" />
<br /><br />
<span class=\"smalltext\">{\$lang->update_this_comment}</span>
<br />
<input type=\"text\" class=\"textbox\" name=\"comment\" size=\"35\" maxlength=\"350\" value=\"{\$score[\'comment\']}\" style=\"width: 95%\" />
<br /><br />
<div style=\"text-align: center;\">
<input type=\"submit\" class=\"button\" value=\"{\$lang->update_comment}\" />
</div>
</form>
</td>
</tr>
</table>
</body>
</html>";

$arcade_templates['arcade_edited'] = "<html>
<head>
<title>{\$mybb->settings[\'bbname\']} - {\$lang->edit_comment}</title>
{\$headerinclude}
</head>
<body onunload=\"window.opener.location.reload();\">
<br />
<table border=\"0\" cellspacing=\"{\$theme[\'borderwidth\']}\" cellpadding=\"{\$theme[\'tablespace\']}\" class=\"tborder\">
<tr>
<td class=\"trow1\" style=\"padding: 20px\">
<strong>{\$lang->comment_updated}</strong><br /><br />
<blockquote>{\$lang->comment_updated_message}</blockquote>
<br /><br />
<div style=\"text-align: center;\">
<script type=\"text/javascript\">
<!--
document.write(\'[<a href=\"javascript:window.close();\">{\$lang->close_window}</a>]\');
// -->
</script>
</div>
</td>
</tr>
</table>
</body>
</html>";

$arcade_templates['arcade_edit_error'] = "<html>
<head>
<title>{\$lang->edit_comment}</title>
{\$headerinclude}
</head>
<body>
<br />
<table border=\"0\" cellspacing=\"{\$theme[\'borderwidth\']}\" cellpadding=\"{\$theme[\'tablespace\']}\" class=\"tborder\">
<tr>
<td class=\"trow1\" style=\"padding: 20px\">
<strong>{\$lang->error}</strong><br /><br />
<blockquote>{\$message}</blockquote>
<br /><br />
<div style=\"text-align: center;\">
<script type=\"text/javascript\">
<!--
var showBack = {\$show_back};
if(showBack == 1)
{
document.write(\'[<a href=\"javascript:history.go(-1);\">{\$lang->go_back}</a>]\');
}
document.write(\'[<a href=\"javascript:window.close();\">{\$lang->close_window}</a>]\');
// -->
</script>
</div>
</td>
</tr>
</table>
</body>
</html>";

$arcade_templates['arcade_favorites'] = "<html>
<head>
<title>{\$lang->arcade} - {\$lang->favorite_games}</title>
{\$headerinclude}
</head>
<body>
{\$header}
{\$menu}
<br />
{\$multipage}
<table border=\"0\" cellspacing=\"{\$theme[\'borderwidth\']}\" cellpadding=\"{\$theme[\'tablespace\']}\" class=\"tborder\">
<tr>
<td colspan=\"4\" class=\"thead\"><strong>{\$lang->favorite_games}</strong></td>
</tr>
<tr>
<td class=\"tcat\" width=\"175\" align=\"center\"><strong>{\$lang->name}</strong></td>
<td class=\"tcat\" align=\"center\"><strong>{\$lang->description}</strong></td>
<td class=\"tcat\" width=\"250\" align=\"center\"><strong>{\$lang->menu}</strong></td>
<td class=\"tcat\" width=\"200\" align=\"center\"><strong>{\$lang->champion}</strong></td>
</tr>
{\$game_bit}
<tr>
<td class=\"tfoot\" align=\"right\" colspan=\"4\">
<form action=\"arcade.php\" method=\"get\">
<input type=\"hidden\" name=\"action\" value=\"favorites\" />
<select name=\"sortby\">
<option value=\"name\" {\$sortby_selected[\'name\']}>{\$lang->sort_name}</option>
<option value=\"date\" {\$sortby_selected[\'date\']}>{\$lang->sort_date}</option>
<option value=\"plays\" {\$sortby_selected[\'plays\']}>{\$lang->sort_plays}</option>
<option value=\"lastplayed\" {\$sortby_selected[\'lastplayed\']}>{\$lang->sort_lastplayed}</option>
<option value=\"rating\" {\$sortby_selected[\'rating\']}>{\$lang->sort_rating}</option>
</select>
<select name=\"order\">
<option value=\"desc\" {\$order_selected[\'desc\']}>{\$lang->descending}</option>
<option value=\"asc\" {\$order_selected[\'asc\']}>{\$lang->ascending}</option>
</select>
{\$gobutton}
</form>
</td>
</tr>
</table>
{\$multipage}
{\$online}
{\$footer}
</body>
</html>";

$arcade_templates['arcade_gamebit'] = "<tr>
<td class=\"{\$alt_bg}\" align=\"center\">
<strong><a href=\"arcade.php?action=play&amp;gid={\$game[\'gid\']}\">{\$game[\'name\']}</a></strong>{\$new}<br />
<br />
<a href=\"arcade.php?action=play&amp;gid={\$game[\'gid\']}\"><img src=\"arcade/largeimages/{\$game[\'largeimage\']}.gif\" alt=\"\" /></a>
</td>
<td class=\"{\$alt_bg}\" align=\"center\">
{\$game[\'description\']}
</td>
<td class=\"{\$alt_bg}\">
<ul class=\"game_tools\">
<li><strong><a href=\"arcade.php?action=scores&amp;gid={\$game[\'gid\']}\">{\$lang->view_high_scores}</a></strong></li>
{\$your_score}
<li>{\$lang->times_played} {\$game[\'plays\']}</li>
<li>{\$lang->last_played} {\$lastplayed} {\$lastplayedby}</li>
{\$add_remove_favorite}
{\$tournament}
{\$li}{\$rategame}</li>
</ul>
<br />
</td>
<td class=\"{\$alt_bg}\" align=\"center\">
<img src=\"images/arcade/champ.png\" alt=\"\" /><br />
<strong>{\$champusername}</strong><br />
{\$champion}
</td>
</tr>";

$arcade_templates['arcade_menu'] = "<br />
<table border=\"0\" cellspacing=\"{\$theme[\'borderwidth\']}\" cellpadding=\"{\$theme[\'tablespace\']}\" class=\"tborder\">
<tr>
<td class=\"thead\"><strong>{\$lang->arcade}</strong></td>
</tr>
<tr>
<td class=\"trow1\" align=\"center\"><strong>
<a href=\"arcade.php\">{\$lang->arcade}</a> · 
<a href=\"arcade.php?action=champions\">{\$lang->champions}</a> · 
<a href=\"arcade.php?action=scoreboard\">{\$lang->scoreboard}</a> · 
<a href=\"arcade.php?action=favorites\">{\$lang->favorite_games}</a> · 
<a href=\"arcade.php?action=settings\">{\$lang->your_settings}</a> · 
<a href=\"arcade.php?action=stats\">{\$lang->your_stats}</a>
</strong></td>
</tr>
</table>";

$arcade_templates['arcade_no_display'] = "<tr>
<td class=\"trow1\" colspan=\"{\$colspan}\" align=\"center\">{\$message}</td>
</tr>";

$arcade_templates['arcade_no_games'] = "<tr>
<td class=\"trow1\" colspan=\"4\" align=\"center\">{\$lang->no_arcade_games}</td>
</tr>";

$arcade_templates['arcade_online'] = "<br />
<table border=\"0\" cellspacing=\"{\$theme[\'borderwidth\']}\" cellpadding=\"{\$theme[\'tablespace\']}\" class=\"tborder\">
<thead>
<tr>
<td class=\"thead\">
<div class=\"expcolimage\"><img src=\"{\$theme[\'imgdir\']}/collapse{\$collapsedimg[\'online\']}.gif\" id=\"online_img\" class=\"expander\" alt=\"[-]\" /></div>
<strong>{\$lang->whos_online}</strong>
</td>
</tr>
</thead>
<tbody style=\"{\$collapsed[\'online_e\']}\" id=\"online_e\">
<tr>
<td class=\"tcat\"><span class=\"smalltext\">{\$lang->online_count}
<span style=\"float:right\">{\$lang->online_record}</span></span></td>
</tr>
<tr>
<td class=\"trow1\" valign=\"top\">
{\$onlinemembers}
</td>
</tr>
</tbody>
</table>";

$arcade_templates['arcade_online_memberbit'] = "{\$comma}{\$location}{\$online[\'profilelink\']}{\$invisiblemark}";

$arcade_templates['arcade_play'] = "<html>
<head>
<title>{\$lang->arcade} - {\$game[\'name\']}</title>
{\$headerinclude}
</head>
<body>
{\$header}
{\$menu}
<br />
<table border=\"0\" cellspacing=\"{\$theme[\'borderwidth\']}\" cellpadding=\"{\$theme[\'tablespace\']}\" class=\"tborder\" width=\"100%\">
<tr>
<td colspan=\"2\" class=\"thead\"><strong>{\$game[\'name\']}</strong></td>
</tr>
<tr>
<td class=\"trow1\" align=\"center\">
{\$guestmessage}
<object classid=\"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000\" codebase=\"http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0\" width=\"{\$game[\'width\']}\" height=\"{\$game[\'height\']}\">
<param name=\"movie\" value=\"./arcade/swf/{\$game[\'file\']}.swf?ibpro_gameid={\$game[\'gid\']}\" />
<param name=\"type\" value=\"application/x-shockwave-flash\" />
<param name=\"pluginspage\" value=\"http://www.macromedia.com/go/getflashplayer/\" />
<param name=\"bgcolor\" value=\"#{\$game[\'bgcolor\']}\" />
<param name=\"quality\" value=\"high\" />
<param name=\"menu\" value=\"false\" />
<param name=\"width\" value=\"{\$game[\'width\']}\" />
<param name=\"height\" value=\"{\$game[\'height\']}\" />
<embed src=\"./arcade/swf/{\$game[\'file\']}.swf?ibpro_gameid={\$game[\'gid\']}\" width=\"{\$game[\'width\']}\" height=\"{\$game[\'height\']}\" quality=\"high\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.macromedia.com/go/getflashplayer\" menu=\"false\"></embed>
<noembed>{\$lang->flash_not_installed}</noembed>
</object>
</td>
<td class=\"trow1\" valign=\"top\" align=\"left\" width=\"300\">
<table border=\"0\" cellpadding=\"5\" width=\"100%\">
<tr>
<td class=\"trow1\" align=\"center\">
<img src=\"arcade/largeimages/{\$game[\'largeimage\']}.gif\" alt=\"\" />
</td>
</tr>
<tr>
<td class=\"trow2\" align=\"center\">
<img src=\"images/arcade/champ.png\" alt=\"\" /><br />
<strong>{\$champusername}</strong><br />
{\$lang->current_champion}
</td>
</tr>
<tr>
<td class=\"trow1\" align=\"center\">
<strong>{\$lang->your_high_score}</strong><br />
{\$userbestscore}
</td>
</tr>
{\$gamerating}
<tr>
<td class=\"trow1\" align=\"center\">
<a href=\"arcade.php\">{\$lang->back_to_arcade}</a><br />
<a href=\"arcade.php?action=scores&amp;gid={\$game[\'gid\']}\">{\$lang->view_high_scores}</a><br />
{\$add_remove_favorite}
</td>
</tr>
<tr>
<td class=\"trow2\" align=\"center\">
<strong>{\$lang->object_of_game}</strong><br />
{\$game[\'about\']}
</td>
</tr>
<tr>
<td class=\"trow1\" align=\"center\">
<strong>{\$lang->keys}</strong><br />
{\$game[\'controls\']}
</td>
</tr>
{\$tournaments}
</table>
</td>
</tr>
</table>
{\$online}
{\$footer}
</body>
</html>";

$arcade_templates['arcade_play_rating'] = "<tr>
<td class=\"trow2\" align=\"center\">
<script type=\"text/javascript\" src=\"jscripts/game_rating.js?ver=1600\"></script>
<strong>{\$lang->game_rating}</strong><br />
<div style=\"vertical-align: middle;\">
<ul class=\"star_rating{\$not_rated}\" id=\"rating_game_{\$game[\'gid\']}\">
<li style=\"width: {\$game[\'rating_width\']}%\" class=\"current_rating\" id=\"current_rating_{\$game[\'gid\']}\">{\$ratingvotesav}</li>
<li><a class=\"one_star\" title=\"{\$lang->one_star}\" href=\"./arcade.php?action=rate&gid={\$game[\'gid\']}&amp;rating=1&amp;my_post_key={\$mybb->post_code}\">1</a></li>
<li><a class=\"two_stars\" title=\"{\$lang->two_stars}\" href=\"./arcade.php?action=rate&gid={\$game[\'gid\']}&amp;rating=2&amp;my_post_key={\$mybb->post_code}\">2</a></li>
<li><a class=\"three_stars\" title=\"{\$lang->three_stars}\" href=\"./arcade.php?action=rate&gid={\$game[\'gid\']}&amp;rating=3&amp;my_post_key={\$mybb->post_code}\">3</a></li>
<li><a class=\"four_stars\" title=\"{\$lang->four_stars}\" href=\"./arcade.php?action=rate&gid={\$game[\'gid\']}&amp;rating=4&amp;my_post_key={\$mybb->post_code}\">4</a></li>
<li><a class=\"five_stars\" title=\"{\$lang->five_stars}\" href=\"./arcade.php?action=rate&gid={\$game[\'gid\']}&amp;rating=5&amp;my_post_key={\$mybb->post_code}\">5</a></li>
</ul>
</div>
<div id=\"success_rating_{\$game[\'gid\']}\" style=\"vertical-align: middle; padding-top: 2px; padding-right: 10px;\"></div>
</td>
</tr>";

$arcade_templates['arcade_play_tournament'] = "<tr>
<td class=\"trow2\" align=\"center\">
<strong>{\$lang->tournament_info}</strong><br />
{\$lang->round_started_on} {\$roundstartedon}<br />
{\$lang->tries_left} {\$triesleft}<br />
{\$lang->highest_tournament_score} {\$hightournamentscore}
</td>
</tr>";

$arcade_templates['arcade_rating'] = "<script type=\"text/javascript\" src=\"jscripts/game_rating.js?ver=1600\"></script>
<span style=\"float: left; padding-right: 5px;\">{\$lang->rating}</span>
<div class=\"inline_rating\">
<ul class=\"star_rating{\$not_rated}\" id=\"rating_game_{\$game[\'gid\']}\">
<li style=\"width: {\$game[\'width\']}%\" class=\"current_rating\" id=\"current_rating_{\$game[\'gid\']}\">{\$ratingvotesav}</li>
<li><a class=\"one_star\" title=\"{\$lang->one_star}\" href=\"./arcade.php?action=rate&gid={\$game[\'gid\']}&amp;rating=1&amp;my_post_key={\$mybb->post_code}\">1</a></li>
<li><a class=\"two_stars\" title=\"{\$lang->two_stars}\" href=\"./arcade.php?action=rate&gid={\$game[\'gid\']}&amp;rating=2&amp;my_post_key={\$mybb->post_code}\">2</a></li>
<li><a class=\"three_stars\" title=\"{\$lang->three_stars}\" href=\"./arcade.php?action=rate&gid={\$game[\'gid\']}&amp;rating=3&amp;my_post_key={\$mybb->post_code}\">3</a></li>
<li><a class=\"four_stars\" title=\"{\$lang->four_stars}\" href=\"./arcade.php?action=rate&gid={\$game[\'gid\']}&amp;rating=4&amp;my_post_key={\$mybb->post_code}\">4</a></li>
<li><a class=\"five_stars\" title=\"{\$lang->five_stars}\" href=\"./arcade.php?action=rate&gid={\$game[\'gid\']}&amp;rating=5&amp;my_post_key={\$mybb->post_code}\">5</a></li>
</ul>
</div><div id=\"success_rating_{\$game[\'gid\']}\" style=\"float: left; padding-top: 2px; padding-right: 10px;\">&nbsp;</div>";

$arcade_templates['arcade_scoreboard'] = "<html>
<head>
<title>{\$lang->arcade} - {\$lang->scoreboard}</title>
{\$headerinclude}
</head>
<body>
{\$header}
{\$menu}
<br />
{\$multipage}
<table border=\"0\" cellspacing=\"{\$theme[\'borderwidth\']}\" cellpadding=\"{\$theme[\'tablespace\']}\" class=\"tborder\">
<tr>
<td colspan=\"{\$colspan}\" class=\"thead\"><strong>{\$lang->scoreboard}</strong></td>
</tr>
<tr>
<td class=\"tcat\" width=\"15%\" align=\"center\"><strong>{\$lang->name}</strong></td>
<td class=\"tcat\" width=\"15%\" align=\"center\"><strong>{\$lang->username}</strong></td>
<td class=\"tcat\" width=\"20%\" align=\"center\"><strong>{\$lang->date}</strong></td>
<td class=\"tcat\" width=\"5%\" align=\"center\"><strong>{\$lang->score}</strong></td>
<td class=\"tcat\" width=\"35%\" align=\"center\"><strong>{\$lang->comment}</strong></td>
{\$ipaddresscol}
</tr>
{\$score_bit}
<tr>
<td class=\"tfoot\" align=\"right\" colspan=\"{\$colspan}\">
<form action=\"arcade.php\" method=\"get\">
<input type=\"hidden\" name=\"action\" value=\"scoreboard\" />
<select name=\"sortby\">
<option value=\"date\" {\$sortby_selected[\'date\']}>{\$lang->sort_date}</option>
<option value=\"name\" {\$sortby_selected[\'name\']}>{\$lang->sort_name}</option>
<option value=\"user\" {\$sortby_selected[\'user\']}>{\$lang->sort_user}</option>
</select>
<select name=\"order\">
<option value=\"desc\" {\$order_selected[\'desc\']}>{\$lang->descending}</option>
<option value=\"asc\" {\$order_selected[\'asc\']}>{\$lang->ascending}</option>
</select>
<select name=\"perpage\">
<option value=\"5\" {\$perpage_selected[\'5\']}>{\$lang->perpage_5}</option>
<option value=\"10\" {\$perpage_selected[\'10\']}>{\$lang->perpage_10}</option>
<option value=\"15\" {\$perpage_selected[\'15\']}>{\$lang->perpage_15}</option>
<option value=\"20\" {\$perpage_selected[\'20\']}>{\$lang->perpage_20}</option>
<option value=\"25\" {\$perpage_selected[\'25\']}>{\$lang->perpage_25}</option>
<option value=\"30\" {\$perpage_selected[\'30\']}>{\$lang->perpage_30}</option>
<option value=\"40\" {\$perpage_selected[\'40\']}>{\$lang->perpage_40}</option>
<option value=\"50\" {\$perpage_selected[\'50\']}>{\$lang->perpage_50}</option>
</select>
{\$gobutton}
</form>
</td>
</tr>
</table>
{\$multipage}
{\$online}
{\$footer}
</body>
</html>";

$arcade_templates['arcade_scoreboard_bit'] = "<tr>
<td class=\"{\$alt_bg}\" align=\"center\"><a href=\"arcade.php?action=play&amp;gid={\$score[\'gid\']}\">{\$score[\'name\']}</a></td>
<td class=\"{\$alt_bg}\" align=\"center\"><a href=\"{\$profilelink}\">{\$score[\'username\']}</a></td>
<td class=\"{\$alt_bg}\" align=\"center\">{\$dateline}</td>
<td class=\"{\$alt_bg}\" align=\"center\">{\$score[\'score\']}</td>
<td class=\"{\$alt_bg}\">{\$score[\'comment\']} <span class=\"smalltext\" style=\"float:right;\">{\$edit_link} {\$delete_link}</span></td>
{\$ipaddressbit}
</tr>";

$arcade_templates['arcade_scores'] = "<html>
<head>
<title>{\$lang->arcade} - {\$lang->highest_scores_of}</title>
{\$headerinclude}
</head>
<body>
{\$header}
{\$menu}
<br />
<table border=\"0\" cellspacing=\"{\$theme[\'borderwidth\']}\" cellpadding=\"{\$theme[\'tablespace\']}\" class=\"tborder\">
<table border=\"0\" width=\"100%\" cellspacing=\"{\$theme[\'borderwidth\']}\" cellpadding=\"{\$theme[\'tablespace\']}\" class=\"tborder\">
<tr>
<td class=\"thead\" colspan=\"3\">
<div class=\"expcolimage\"><img src=\"{\$theme[\'imgdir\']}/collapse{\$collapsedimg[\'game_info\']}.gif\" id=\"game_info_img\" class=\"expander\" alt=\"[-]\" /></div>
<strong>{\$game[\'name\']}</strong>
</td>
</tr>
<tr style=\"{\$collapsed[\'game_info_e\']}\" id=\"game_info_e\">
<td class=\"trow1\" width=\"65\" align=\"center\">
<a href=\"arcade.php?action=play&amp;gid={\$game[\'gid\']}\"><img src=\"arcade/largeimages/{\$game[\'largeimage\']}.gif\" title=\"{\$lang->play_game}\" alt=\"\" /></a>
</td>
<td class=\"trow2\">
<strong>{\$lang->description}:</strong><br />
{\$game[\'description\']}
</td>
<td class=\"trow1\" width=\"250\">
<a href=\"arcade.php?action=play&amp;gid={\$game[\'gid\']}\">{\$lang->play_game}</a><br />
{\$add_remove_favorite}
<a href=\"arcade.php\">{\$lang->arcade_home}</a><br />
<br />
{\$rategame}
</td>
</tr>
</table>
<br />
{\$multipage}
<table border=\"0\" cellspacing=\"{\$theme[\'borderwidth\']}\" cellpadding=\"{\$theme[\'tablespace\']}\" class=\"tborder\">
<tr>
<td colspan=\"{\$colspan}\" class=\"thead\"><strong>{\$lang->high_scores}</strong></td>
</tr>
<tr>
<td class=\"tcat\" width=\"15\" align=\"center\"><span class=\"smalltext\"><strong>#</strong></span></td>
<td class=\"tcat\" width=\"15%\" align=\"center\"><span class=\"smalltext\"><strong>{\$lang->username}</strong></span></td>
<td class=\"tcat\" width=\"10%\" align=\"center\"><span class=\"smalltext\"><strong>{\$lang->score}</strong></span></td>
<td class=\"tcat\" align=\"center\"><span class=\"smalltext\"><strong>{\$lang->comment}</strong></span></td>
<td class=\"tcat\" width=\"15%\" align=\"center\"><span class=\"smalltext\"><strong>{\$lang->date}</strong></span></td>
<td class=\"tcat\" width=\"10%\" align=\"center\"><span class=\"smalltext\"><strong>{\$lang->time_played}</strong></span></td>
{\$ipaddresscol}
</tr>
{\$score_bit}
</table>
{\$multipage}
</table>
{\$online}
{\$footer}
</body>
</html>";

$arcade_templates['arcade_scores_bit'] = "<tr>
<td class=\"{\$alt_bg}\" align=\"center\">{\$rank}</td>
<td class=\"{\$alt_bg}\" align=\"center\"><a href=\"{\$profilelink}\">{\$score[\'username\']}</a></td>
<td class=\"{\$alt_bg}\" align=\"center\">{\$score[\'score\']}</td>
<td class=\"{\$alt_bg}\">{\$score[\'comment\']} <span class=\"smalltext\" style=\"float:right;\">{\$edit_link} {\$delete_link}</span></td>
<td class=\"{\$alt_bg}\" align=\"center\">{\$dateline}</td>
<td class=\"{\$alt_bg}\" align=\"center\">{\$timeplayed}</td>
{\$ipaddressbit}
</tr>";

$arcade_templates['arcade_scores_no_scores'] = "<tr>
<td class=\"trow1\" colspan=\"7\" align=\"center\">{\$lang->no_game_scores}</td>
</tr>";

$arcade_templates['arcade_search'] = "<br />
<table border=\"0\" cellspacing=\"{\$theme[\'borderwidth\']}\" cellpadding=\"{\$theme[\'tablespace\']}\" class=\"tborder\">
<tr>
<td class=\"thead\" colspan=\"4\"><strong>{\$lang->search}</strong></td>
</tr>
<tr>
<td class=\"trow1\">
<form action=\"arcade.php\" method=\"post\">
<div class=\"float_left\">
<input type=\"text\" name=\"keywords\" value=\"{\$lang->enter_keywords}\" onfocus=\"if(this.value == \'{\$lang->enter_keywords}\') { this.value = \'\'; }\" onblur=\"if(this.value==\'\') { this.value=\'{\$lang->enter_keywords}\'; }\" class=\"textbox\" size=\"25\" />
</div>
<div class=\"arcade_search\">
<span class=\"smalltext\">
<label><input name=\"name\" checked=\"checked\" value=\"1\" type=\"checkbox\"> {\$lang->search_by_name}</label><br />
<label><input name=\"description\" checked=\"checked\" value=\"1\" type=\"checkbox\"> {\$lang->search_by_description}</label>
</span>
</div>
<div class=\"arcade_search\">
{\$categorysearch}
</div>
<div class=\"arcade_search\">
<input type=\"hidden\" name=\"action\" value=\"do_search\" />
<input type=\"submit\" class=\"button\" name=\"submit\" value=\"{\$lang->search_arcade}\" />
</div>
</form>
</td>
</tr>
</table>";

$arcade_templates['arcade_search_catagory'] = "<select name=\"cid\">
<option value=\"all\">{\$lang->search_all_categories}</option>
{\$categoryoptions}
</select>";

$arcade_templates['arcade_search_results'] = "<html>
<head>
<title>{\$mybb->settings[\'bbname\']} - {\$lang->search_results}</title>
{\$headerinclude}
</head>
<body>
{\$header}
{\$menu}
<br />
{\$multipage}
<table border=\"0\" cellspacing=\"{\$theme[\'borderwidth\']}\" cellpadding=\"{\$theme[\'tablespace\']}\" class=\"tborder\">
<tr>
<td colspan=\"4\" class=\"thead\"><strong>{\$lang->search_results}</strong></td>
</tr>
<tr>
<td class=\"tcat\" width=\"175\" align=\"center\"><strong>{\$lang->name}</strong></td>
<td class=\"tcat\" align=\"center\"><strong>{\$lang->description}</strong></td>
<td class=\"tcat\" width=\"250\" align=\"center\"><strong>{\$lang->menu}</strong></td>
<td class=\"tcat\" width=\"200\" align=\"center\"><strong>{\$lang->champion}</strong></td>
</tr>
{\$game_bit}
<tr>
<td class=\"tfoot\" align=\"right\" colspan=\"4\">
<form action=\"arcade.php\" method=\"get\">
<input type=\"hidden\" name=\"action\" value=\"results\" />
<input type=\"hidden\" name=\"sid\" value=\"{\$mybb->input[\'sid\']}\" />
<select name=\"sortby\">
<option value=\"name\" {\$sortby_selected[\'name\']}>{\$lang->sort_name}</option>
<option value=\"date\" {\$sortby_selected[\'date\']}>{\$lang->sort_date}</option>
<option value=\"plays\" {\$sortby_selected[\'plays\']}>{\$lang->sort_plays}</option>
<option value=\"lastplayed\" {\$sortby_selected[\'lastplayed\']}>{\$lang->sort_lastplayed}</option>
<option value=\"rating\" {\$sortby_selected[\'rating\']}>{\$lang->sort_rating}</option>
</select>
<select name=\"order\">
<option value=\"desc\" {\$order_selected[\'desc\']}>{\$lang->descending}</option>
<option value=\"asc\" {\$order_selected[\'asc\']}>{\$lang->ascending}</option>
</select>
{\$gobutton}
</form>
</td>
</tr>
</table>
{\$multipage}
{\$online}
{\$footer}
</body>
</html>";

$arcade_templates['arcade_settings'] = "<html>
<head>
<title>{\$lang->arcade} - {\$lang->arcade_settings}</title>
{\$headerinclude}
</head>
<body>
{\$header}
{\$menu}
<br />
<form action=\"arcade.php\" method=\"post\">
<input type=\"hidden\" name=\"my_post_key\" value=\"{\$mybb->post_code}\" />
<table width=\"100%\" border=\"0\" align=\"center\">
<tr>
<td valign=\"top\">
{\$errors}
<table border=\"0\" cellspacing=\"{\$theme[\'borderwidth\']}\" cellpadding=\"{\$theme[\'tablespace\']}\" class=\"tborder\">
<tr>
<td class=\"thead\" colspan=\"2\"><strong>{\$lang->edit_settings}</strong></td>
</tr>
<tr>
<td width=\"50%\" class=\"trow1\" valign=\"top\">
<fieldset class=\"trow2\">
<legend><strong>{\$lang->games_scores_options}</strong></legend>
<table cellspacing=\"0\" cellpadding=\"2\">
{\$gameperpageoptions}
{\$scoreperpageoptions}
<tr>
<td><span class=\"smalltext\">{\$lang->sort_games_by}</span></td>
</tr>
<tr>
<td>
<select name=\"gamessortby\">
<option value=\"\">{\$lang->use_default}</option>
<option value=\"name\" {\$sortbysel[\'name\']}>{\$lang->sortby_name}</option>
<option value=\"date\" {\$sortbysel[\'date\']}>{\$lang->sortby_date}</option>
<option value=\"plays\" {\$sortbysel[\'plays\']}>{\$lang->sortby_plays}</option>
<option value=\"lastplayed\" {\$sortbysel[\'lastplayed\']}>{\$lang->sortby_last_played}</option>
<option value=\"rating\" {\$sortbysel[\'rating\']}>{\$lang->sortby_rating}</option>
</select>
</td>
</tr>
<tr>
<td><span class=\"smalltext\">{\$lang->sort_order}</span></td>
</tr>
<tr>
<td>
<select name=\"gamesorder\">
<option value=\"\">{\$lang->use_default}</option>
<option value=\"asc\" {\$ordersel[\'asc\']}>{\$lang->order_ascending}</option>
<option value=\"desc\" {\$ordersel[\'desc\']}>{\$lang->order_descending}</option>
</select>
</td>
</tr>
</table>
</fieldset>
<td width=\"50%\" class=\"trow1\" valign=\"top\">
<fieldset class=\"trow2\">
<legend><strong>{\$lang->general_options}</strong></legend>
<table cellspacing=\"0\" cellpadding=\"2\">
{\$whosonlinedisplay}
{\$champdisplaypostbit}
<tr>
<td colspan=\"2\"><span class=\"smalltext\"><label for=\"champnotify\">{\$lang->champ_notify}</label></span></td>
</tr>
<tr>
<td colspan=\"2\">
<select name=\"champnotify\" id=\"champnotify\">
<option value=\"0\" {\$no_champnotify_selected}>{\$lang->no_notify}</option>
<option value=\"1\" {\$pm_champnotify_selected}>{\$lang->pm_notify}</option>
<option value=\"2\" {\$email_champnotify_selected}>{\$lang->email_notify}</option>
</select>
</td>
</tr>
{\$tournamentnotifydisplay}
</table>
</fieldset>
</td>
</tr>
</table>
<br />
<div align=\"center\">
<input type=\"hidden\" name=\"action\" value=\"do_settings\" />
<input type=\"submit\" class=\"button\" name=\"submit\" value=\"{\$lang->update_settings}\" />
</div>
</td>
</tr>
</table>
</form>
{\$online}
{\$footer}
</body>
</html>";

$arcade_templates['arcade_settings_gamesselect'] = "<tr>
<td colspan=\"2\"><span class=\"smalltext\">{\$lang->games_per_page}</span></td>
</tr>
<tr>
<td colspan=\"2\">
<select name=\"gamesperpage\">
<option value=\"\">{\$lang->use_default}</option>
{\$gamesoptions}
</select>
</td>
</tr>";

$arcade_templates['arcade_settings_scoreselect'] = "<tr>
<td colspan=\"2\"><span class=\"smalltext\">{\$lang->scores_per_page}</span></td>
</tr>
<tr>
<td colspan=\"2\">
<select name=\"scoresperpage\">
<option value=\"\">{\$lang->use_default}</option>
{\$scoreoptions}
</select>
</td>
</tr>";

$arcade_templates['arcade_settings_tournamentnotify'] = "<tr>
<td colspan=\"2\"><span class=\"smalltext\"><label for=\"tournamentnotify\">{\$lang->tournament_notify}</label></span></td>
</tr>
<tr>
<td colspan=\"2\">
<select name=\"tournamentnotify\" id=\"tournamentnotify\">
<option value=\"0\" {\$no_tournamentnotify_selected}>{\$lang->no_notify}</option>
<option value=\"1\" {\$pm_tournamentnotify_selected}>{\$lang->pm_notify}</option>
<option value=\"2\" {\$email_tournamentnotify_selected}>{\$lang->email_notify}</option>
</select>
</td>
</tr>";

$arcade_templates['arcade_settings_whosonline'] = "<tr>
<td valign=\"top\" width=\"1\"><input type=\"checkbox\" class=\"checkbox\" name=\"whosonlinearcade\" id=\"whosonlinearcade\" value=\"1\" {\$whosonlinearcadecheck} /></td>
<td><span class=\"smalltext\"><label for=\"whosonlinearcade\">{\$lang->whos_online_display}</label></span></td>
</tr>";

$arcade_templates['arcade_settings_champpostbit'] = "<tr>
<td valign=\"top\" width=\"1\"><input type=\"checkbox\" class=\"checkbox\" name=\"champdisplaypostbit\" id=\"champdisplaypostbit\" value=\"1\" {\$champdisplaypostbitcheck} /></td>
<td><span class=\"smalltext\"><label for=\"champdisplaypostbit\">{\$lang->champ_display_postbit}</label></span></td>
</tr>";

$arcade_templates['arcade_statistics'] = "<br />
<table border=\"0\" cellspacing=\"{\$theme[\'borderwidth\']}\" cellpadding=\"{\$theme[\'tablespace\']}\" class=\"tborder\">
<tr>
<td colspan=\"3\" class=\"thead\">
<div class=\"expcolimage\"><img src=\"{\$theme[\'imgdir\']}/collapse{\$collapsedimg[\'arcadestats\']}.gif\" id=\"arcadestats_img\" class=\"expander\" alt=\"[-]\" /></div>
<strong>{\$lang->arcade_stats}</strong>
</td>
</tr>
<tbody style=\"{\$collapsed[\'arcadestats_e\']}\" id=\"arcadestats_e\">
<tr>
<td class=\"tcat\" width=\"25%\"><span class=\"smalltext\"><strong>{\$lang->newest_games}</strong></span></td>
<td class=\"tcat\"><span class=\"smalltext\"><strong>{\$lang->statistics}</strong></span></td>
<td class=\"tcat\" width=\"25%\"><span class=\"smalltext\"><strong>{\$lang->most_played_games}</strong></span></td>
</tr>
<tr>
<td class=\"trow1\" valign=\"top\">
{\$newestgames}
</td>
<td class=\"trow1\" valign=\"top\">
{\$bestplayers}
<fieldset>
<legend><strong>{\$lang->newest_champs}</strong></legend>
<table width=\"100%\">
{\$newestchamps}
</table>
</fieldset>
<fieldset>
<legend><strong>{\$lang->latest_scores}</strong></legend>
<table width=\"100%\">
{\$latestscores}
</table>
</fieldset>
{\$randomgames}
</td>
<td class=\"trow1\" valign=\"top\">
{\$mostplayedgames}
</td>
</tr>
</tbody>
</table>";

$arcade_templates['arcade_statistics_bestplayers'] = "<fieldset>
<legend><strong>{\$lang->best_players}</strong></legend>
<table width=\"100%\">
{\$bestplayers_bit}
</table>
</fieldset>";

$arcade_templates['arcade_statistics_bestplayers_bit'] = "<td width=\"33%\" valign=\"top\">
<table width=\"100%\">
<tr>
<td class=\"tcat\" align=\"center\">
<strong><img src=\"images/arcade/{\$rank}.gif\" alt=\"\"> {\$bestplayer_rank_lang}</strong>
</td>
</tr>
<tr>
<td class=\"trow2\" align=\"center\">
{\$best_player_avatar}
<a href=\"{\$profilelink}\"><strong>{\$champ[\'username\']}</strong></a><br />{\$with_wins}
</td>
</tr>
</table>
</td>";

$arcade_templates['arcade_statistics_gamebit'] = "<a href=\"{\$gamelink}\"><img src=\"arcade/smallimages/{\$game[\'smallimage\']}.gif\" alt=\"\" /> <strong>{\$game[\'name\']}</strong></a><br />";

$arcade_templates['arcade_statistics_scorebit'] = "<tr>
<td width=\"75%\">
<img src=\"arcade/smallimages/{\$score[\'smallimage\']}.gif\" alt=\"\" /> <strong><a href=\"{\$profilelink}\">{\$score[\'username\']}</a></strong> {\$lang->scored} <strong>{\$score[\'score\']}</strong> {\$lang->playing} <a href=\"{\$gamelink}\"><strong>{\$score[\'name\']}</strong></a>
</td>
<td align=\"right\" width=\"25%\">
{\$dateline}
</td>
</tr>";

$arcade_templates['arcade_stats'] = "<html>
<head>
<title>{\$mybb->settings[\'bbname\']} - {\$lang->arcade_stats}</title>
{\$headerinclude}
</head>
<body>
{\$header}
{\$menu}
<br />
<table width=\"100%\" cellspacing=\"0\" cellpadding=\"{\$theme[\'tablespace\']}\" border=\"0\" align=\"center\">
<tr>
{\$multipage}
<td valign=\"top\">
<table border=\"0\" cellspacing=\"{\$theme[\'borderwidth\']}\" cellpadding=\"{\$theme[\'tablespace\']}\" class=\"tborder\">
<tr>
<td colspan=\"5\" class=\"thead\"><strong>{\$lang->arcade_stats_for}</strong></td>
</tr>
<tr>
<td class=\"tcat\" width=\"30%\" align=\"center\"><strong>{\$lang->name}</strong></td>
<td class=\"tcat\" width=\"10%\" align=\"center\"><strong>{\$lang->score}</strong></td>
<td class=\"tcat\" width=\"10%\" align=\"center\"><strong>{\$lang->ranking}</strong></td>
<td class=\"tcat\" width=\"20%\" align=\"center\"><strong>{\$lang->date}</strong></td>
<td class=\"tcat\" width=\"30%\" align=\"center\"><strong>{\$lang->age}</strong></td>
</tr>
{\$stats_bit}
<tr>
<td class=\"tfoot\" align=\"right\" colspan=\"5\">
<form action=\"arcade.php\" method=\"get\">
<input type=\"hidden\" name=\"action\" value=\"stats\" />
{\$userinput}
<select name=\"sortby\">
<option value=\"name\" {\$sortby_selected[\'name\']}>{\$lang->sort_name}</option>
<option value=\"date\" {\$sortby_selected[\'date\']}>{\$lang->sort_date}</option>
</select>
<select name=\"order\">
<option value=\"desc\" {\$order_selected[\'desc\']}>{\$lang->descending}</option>
<option value=\"asc\" {\$order_selected[\'asc\']}>{\$lang->ascending}</option>
</select>
{\$gobutton}
</form>
</td>
</tr>
</table>
{\$multipage}
</td>
<td>&nbsp;</td>
<td valign=\"top\" width=\"250\">
{\$statsdetails}
<br />
{\$tournamentstats}
</td>
</tr>
</table>
{\$online}
{\$footer}
</body>
</html>";

$arcade_templates['arcade_stats_details'] = "<table border=\"0\" cellspacing=\"{\$theme[\'borderwidth\']}\" cellpadding=\"{\$theme[\'tablespace\']}\" class=\"tborder\">
<tr>
<td class=\"thead\"><strong>{\$lang->player_details}</strong></td>
</tr>
<tr>
<td class=\"trow1\"><strong>{\$lang->first_place_wins}</strong> {\$firstplacewins}</td>
</tr>
<tr>
<td class=\"trow2\"><strong>{\$lang->second_place_wins}</strong> {\$secondplacewins}</td>
</tr>
<tr>
<td class=\"trow1\"><strong>{\$lang->third_place_wins}</strong> {\$thirdplacewins}</td>
</tr>
<tr>
<td class=\"trow2\"><strong>{\$lang->top_ten_wins}</strong> {\$toptenwins}</td>
</tr>
<tr>
<td class=\"trow1\"><strong>{\$lang->total_scores}</strong> {\$totalscores}</td>
</tr>
</table>";

$arcade_templates['arcade_stats_bit'] = "<tr>
<td class=\"{\$alt_bg}\" align=\"center\"><a href=\"arcade.php?action=play&amp;gid={\$score[\'gid\']}\">{\$score[\'name\']}</a></td>
<td class=\"{\$alt_bg}\" align=\"center\">{\$score[\'score\']}</td>
<td class=\"{\$alt_bg}\" align=\"center\"><strong>{\$userrank}</strong> {\$lang->out_of} {\$score[\'totalscores\']}</a></td>
<td class=\"{\$alt_bg}\" align=\"center\">{\$dateline}</td>
<td class=\"{\$alt_bg}\" align=\"center\">{\$scoreage}</td>
</tr>";

$arcade_templates['arcade_stats_tournaments'] = "<table border=\"0\" cellspacing=\"{\$theme[\'borderwidth\']}\" cellpadding=\"{\$theme[\'tablespace\']}\" class=\"tborder\">
<tr>
<td class=\"thead\"><strong>{\$lang->tournament_statistics}</strong></td>
</tr>
<tr>
<td class=\"trow1\"><strong>{\$lang->tournaments_created}</strong> {\$tournamentscreated}</td>
</tr>
<tr>
<td class=\"trow1\"><strong>{\$lang->tournaments_won}</strong> {\$tournamentswon}</td>
</tr>
<tr>
<td class=\"trow2\"><strong>{\$lang->tournaments_entered}</strong> {\$tournamentsentered}</td>
</tr>
</table>";

$arcade_templates['arcade_tournaments'] = "<br />
<table border=\"0\" cellspacing=\"{\$theme[\'borderwidth\']}\" cellpadding=\"{\$theme[\'tablespace\']}\" class=\"tborder\">
<tr>
<td class=\"thead\" colspan=\"3\"><strong>{\$lang->tournaments}</strong></td>
</tr>
<tr>
<td class=\"trow1\" align=\"center\" style=\"width: 33.33%;\">
{\$tournamentswaiting}<br />
<a href=\"tournaments.php?action=running\">{\$lang->tournaments_running}</a><br />
<a href=\"tournaments.php?action=finished\">{\$lang->tournaments_finished}</a>
</td>
{\$tournamentmember}
{\$tournamentcreate}
</tr>
</table>";

$arcade_templates['arcade_tournaments_create'] = "<td class=\"trow1\" align=\"center\" style=\"width: 33.33%;\">
<strong><a href=\"tournaments.php?action=create\">{\$lang->create_a_tournament}</a></strong><br />
</td>";

$arcade_templates['arcade_tournaments_user'] = "<td class=\"trow1\" align=\"center\" style=\"width: 33.33%;\">
{\$lang->active_tournament_enrolled} {\$numgames}<br />
{\$lang->active_tournament_playing} {\$activetournaments}
</td>";

$arcade_templates['arcade_tournaments_user_game'] = "<a href=\"arcade.php?action=play&amp;tid={\$activeenrolled[\'tid\']}\"><img src=\"arcade/smallimages/{\$activeenrolled[\'smallimage\']}.gif\" alt=\"{\$activeenrolled[\'name\']}\" title=\"{\$tournament_game}\" width=\"20\" height=\"20\" /></a>";

$arcade_templates['tournaments_cancel'] = "<html>
<head>
<title>{\$lang->cancel_tournament}</title>
{\$headerinclude}
</head>
<body>
<br />
<table border=\"0\" cellspacing=\"{\$theme[\'borderwidth\']}\" cellpadding=\"{\$theme[\'tablespace\']}\" class=\"tborder\">
<tr>
<td class=\"trow1\" style=\"padding: 20px\">
<strong>{\$lang->cancel_tournament}</strong><br />
<form action=\"tournaments.php\" method=\"post\">
<input type=\"hidden\" name=\"my_post_key\" value=\"{\$mybb->post_code}\" />
<input type=\"hidden\" name=\"action\" value=\"do_cancel\" />
<input type=\"hidden\" name=\"tid\" value=\"{\$mybb->input[\'tid\']}\" />
<br /><br />
<span class=\"smalltext\">{\$lang->cancellation_reason}</span>
<br />
<input type=\"text\" class=\"textbox\" name=\"cancel_reason\" size=\"35\" maxlength=\"350\" value=\"{\$mybb->input[\'cancel_reason\']}\" style=\"width: 95%\" />
<br /><br />
<div style=\"text-align: center;\">
<input type=\"submit\" class=\"button\" value=\"{\$lang->cancel_tournament}\" />
</div>
</form>
</td>
</tr>
</table>
</body>
</html>";

$arcade_templates['tournaments_cancelled'] = "<html>
<head>
<title>{\$mybb->settings[\'bbname\']} - {\$lang->cancel_tournament}</title>
{\$headerinclude}
</head>
<body onunload=\"window.opener.location.reload();\">
<br />
<table border=\"0\" cellspacing=\"{\$theme[\'borderwidth\']}\" cellpadding=\"{\$theme[\'tablespace\']}\" class=\"tborder\">
<tr>
<td class=\"trow1\" style=\"padding: 20px\">
<strong>{\$lang->tournament_cancelled}</strong><br /><br />
<blockquote>{\$lang->tournament_cancelled_message}</blockquote>
<br /><br />
<div style=\"text-align: center;\">
<script type=\"text/javascript\">
<!--
document.write(\'[<a href=\"javascript:window.close();\">{\$lang->close_window}</a>]\');
// -->
</script>
</div>
</td>
</tr>
</table>
</body>
</html>";

$arcade_templates['tournaments_cancel_error'] = "<html>
<head>
<title>{\$lang->cancel_tournament}</title>
{\$headerinclude}
</head>
<body>
<br />
<table border=\"0\" cellspacing=\"{\$theme[\'borderwidth\']}\" cellpadding=\"{\$theme[\'tablespace\']}\" class=\"tborder\">
<tr>
<td class=\"trow1\" style=\"padding: 20px\">
<strong>{\$lang->error}</strong><br /><br />
<blockquote>{\$message}</blockquote>
<br /><br />
<div style=\"text-align: center;\">
<script type=\"text/javascript\">
<!--
var showBack = {\$show_back};
if(showBack == 1)
{
document.write(\'[<a href=\"javascript:history.go(-1);\">{\$lang->go_back}</a>]\');
}
document.write(\'[<a href=\"javascript:window.close();\">{\$lang->close_window}</a>]\');
// -->
</script>
</div>
</td>
</tr>
</table>
</body>
</html>";

$arcade_templates['tournaments_create'] = "<html>
<head>
<title>{\$mybb->settings[\'bbname\']} - {\$lang->create_tournament}</title>
{\$headerinclude}
</head>
<body>
{\$header}
<form action=\"tournaments.php\" method=\"post\">
<input type=\"hidden\" name=\"my_post_key\" value=\"{\$mybb->post_code}\" />
{\$menu}
<br />
<table border=\"0\" cellspacing=\"{\$theme[\'borderwidth\']}\" cellpadding=\"{\$theme[\'tablespace\']}\" class=\"tborder\">
<tr>
<td colspan=\"4\" class=\"thead\"><strong>{\$lang->create_tournament}</strong></td>
</tr>
<tr>
<td class=\"trow1\" width=\"40%\"><strong>{\$lang->select_game}</strong></td>
<td class=\"trow1\" width=\"60%\"><select name=\"gid\">{\$gameoptions}</select></td>
</tr>
<tr>
<td class=\"trow2\" width=\"40%\"><strong>{\$lang->num_rounds}</strong></td>
<td class=\"trow2\" width=\"60%\"><select name=\"rounds\">{\$roundoptions}</select></td>
</tr>
<tr>
<td class=\"trow1\" width=\"40%\"><strong>{\$lang->num_tries}</strong></td>
<td class=\"trow1\" width=\"60%\"><select name=\"tries\">{\$triesoptions}</select></td>
</tr>
<tr>
<td class=\"trow2\" width=\"40%\"><strong>{\$lang->num_days_round}</strong></td>
<td class=\"trow2\" width=\"60%\"><select name=\"days\">{\$daysoptions}</select></td>
</tr>
</table>
<br />
<div align=\"center\">
<input type=\"hidden\" name=\"action\" value=\"do_create\" />
<input type=\"submit\" class=\"button\" name=\"submit\" value=\"{\$lang->create_tournament}\" />
</div>
</td>
</tr>
</table>
</form>
{\$online}
{\$footer}
</body>
</html>";

$arcade_templates['tournaments_finished'] = "<html>
<head>
<title>{\$mybb->settings[\'bbname\']} - {\$lang->tournaments_finished}</title>
{\$headerinclude}
</head>
<body>
{\$header}
{\$menu}
<br />
<table border=\"0\" cellspacing=\"{\$theme[\'borderwidth\']}\" cellpadding=\"{\$theme[\'tablespace\']}\" class=\"tborder\">
<tr>
<td class=\"thead\" colspan=\"4\"><strong>{\$lang->tournaments_finished}</strong></td>
</tr>
<tr>
<td class=\"tcat\" width=\"50%\" align=\"center\"><span class=\"smalltext\"><strong>{\$lang->name}</strong></span></td>
<td class=\"tcat\" width=\"10%\" align=\"center\"><span class=\"smalltext\"><strong>{\$lang->num_players}</strong></span></td>
<td class=\"tcat\" width=\"20%\" align=\"center\"><span class=\"smalltext\"><strong>{\$lang->champion}</strong></span></td>
<td class=\"tcat\" width=\"20%\" align=\"center\"><span class=\"smalltext\"><strong>{\$lang->finished_on}</strong></span></td>
</tr>
{\$tournament_bit}
</table>
{\$online}
{\$footer}
</body>
</html>";

$arcade_templates['tournaments_finished_bit'] = "<tr>
<td class=\"{\$alt_bg}\" align=\"center\"><a href=\"tournaments.php?action=view&amp;tid={\$tournament[\'tid\']}\">{\$tournament[\'name\']}</a></td>
<td class=\"{\$alt_bg}\" align=\"center\">{\$tournament[\'numplayers\']}</td>
<td class=\"{\$alt_bg}\" align=\"center\">{\$champion}</td>
<td class=\"{\$alt_bg}\" align=\"center\">{\$dateline}</td>
</tr>";

$arcade_templates['tournaments_no_tournaments'] = "<tr>
<td class=\"trow1\" colspan=\"{\$colspan}\" align=\"center\">{\$lang->no_tournaments}</td>
</tr>";

$arcade_templates['tournaments_running'] = "<html>
<head>
<title>{\$mybb->settings[\'bbname\']} - {\$lang->tournaments_running}</title>
{\$headerinclude}
</head>
<body>
{\$header}
{\$menu}
<br />
<table border=\"0\" cellspacing=\"{\$theme[\'borderwidth\']}\" cellpadding=\"{\$theme[\'tablespace\']}\" class=\"tborder\">
<tr>
<td class=\"thead\" colspan=\"4\"><strong>{\$lang->tournaments_running}</strong></td>
</tr>
<tr>
<td class=\"tcat\" width=\"60%\" align=\"center\"><span class=\"smalltext\"><strong>{\$lang->name}</strong></span></td>
<td class=\"tcat\" width=\"10%\" align=\"center\"><span class=\"smalltext\"><strong>{\$lang->num_players}</strong></span></td>
<td class=\"tcat\" width=\"20%\" align=\"center\"><span class=\"smalltext\"><strong>{\$lang->started_on}</strong></span></td>
<td class=\"tcat\" width=\"10%\" align=\"center\"><span class=\"smalltext\"><strong>{\$lang->days_round}</strong></span></td>
</tr>
{\$tournament_bit}
</table>
{\$online}
{\$footer}
</body>
</html>";

$arcade_templates['tournaments_running_bit'] = "<tr>
<td class=\"{\$alt_bg}\" align=\"center\"><a href=\"tournaments.php?action=view&amp;tid={\$tournament[\'tid\']}\">{\$tournament[\'name\']}</a></td>
<td class=\"{\$alt_bg}\" align=\"center\">{\$tournament[\'numplayers\']}</td>
<td class=\"{\$alt_bg}\" align=\"center\">{\$dateline}</td>
<td class=\"{\$alt_bg}\" align=\"center\">{\$tournament[\'days\']}</td>
</tr>";

$arcade_templates['tournaments_view'] = "<html>
<head>
<title>{\$mybb->settings[\'bbname\']} - {\$lang->viewing_tournament}</title>
{\$headerinclude}
</head>
<body>
{\$header}
{\$menu}
<br />
<table border=\"0\" cellspacing=\"{\$theme[\'borderwidth\']}\" cellpadding=\"{\$theme[\'tablespace\']}\" class=\"tborder\">
<tr>
<td class=\"thead\" colspan=\"2\"><strong>{\$lang->game_tournament_started_on}</strong></td>
</tr>
<tr>
<td class=\"tcat\" colspan=\"2\" align=\"center\"><strong>{\$status_message}<br />
{\$tournament_link}{\$cancel_link}</strong></td>
</tr>
</table>
<br />
<table border=\"0\" cellspacing=\"{\$theme[\'borderwidth\']}\" cellpadding=\"{\$theme[\'tablespace\']}\" class=\"tborder\">
<tr>
<td colspan=\"{\$colspan}\" class=\"thead\"><strong>{\$lang->tournament_view}</strong></td>
</tr>
{\$rounds}
</table>
{\$online}
{\$footer}
</body>
</html>";

$arcade_templates['tournaments_view_rounds'] = "<tr>
<td class=\"tcat\" align=\"center\" width=\"1\" valign=\"right\"><strong>{\$rid}</strong></td>
{\$rounds_bit}
</tr>";

$arcade_templates['tournaments_view_rounds_bit'] = "<td colspan=\"{\$colspan_round}\" class=\"{\$alt_bg} tournaments\" width=\"{\$width}%\" align=\"center\" valign=\"middle\">
<span class=\"largetext\"><strong>{\$player[\'username\']}</strong></span>
{\$rounds_bit_info}
{\$disqualifylink}
</td>";

$arcade_templates['tournaments_view_rounds_bit_info'] = "<br />
<br />
{\$lang->has_played} {\$player[\'attempts\']}<br />
{\$lang->out_of_tries}<br />
{\$lang->highest_score}: <strong>{\$player[\'score\']}</strong> ({\$tries_needed})<br />
{\$lang->time_gained}: {\$dateline}";

$arcade_templates['tournaments_view_rounds_champion'] = "<tr>
<td class=\"tcat\" align=\"center\" width=\"1\" valign=\"right\"><strong>#</strong></td>
<td colspan=\"{\$players}\" class=\"trow1 tournaments\" width=\"100%\" align=\"center\" valign=\"middle\">
<img src=\"images/arcade/champ.png\" alt=\"\" /><br />
<span class=\"largetext\"><strong>{\$champion}</strong></span>
</td>
</tr>";

$arcade_templates['tournaments_waiting'] = "<html>
<head>
<title>{\$mybb->settings[\'bbname\']} - {\$lang->tournaments_waiting}</title>
{\$headerinclude}
</head>
<body>
{\$header}
{\$menu}
<br />
<table border=\"0\" cellspacing=\"{\$theme[\'borderwidth\']}\" cellpadding=\"{\$theme[\'tablespace\']}\" class=\"tborder\">
<tr>
<td class=\"thead\" colspan=\"3\"><strong>{\$lang->tournaments_waiting}</strong></td>
</tr>
<tr>
<td class=\"tcat\" width=\"60%\" align=\"center\"><span class=\"smalltext\"><strong>{\$lang->name}</strong></span></td>
<td class=\"tcat\" width=\"20%\" align=\"center\"><span class=\"smalltext\"><strong>{\$lang->created_on}</strong></span></td>
<td class=\"tcat\" width=\"20%\" align=\"center\"><span class=\"smalltext\"><strong>{\$lang->open_spots}</strong></span></td>
</tr>
{\$tournament_bit}
</table>
{\$online}
{\$footer}
</body>
</html>";

$arcade_templates['tournaments_waiting_bit'] = "<tr>
<td class=\"{\$alt_bg}\" align=\"center\"><a href=\"tournaments.php?action=view&amp;tid={\$tournament[\'tid\']}\">{\$tournament[\'name\']}</a></td>
<td class=\"{\$alt_bg}\" align=\"center\">{\$dateline}</td>
<td class=\"{\$alt_bg}\" align=\"center\"><strong>{\$remaining}</strong> {\$lang->out_of} {\$players}</a></td>
</tr>";

?>