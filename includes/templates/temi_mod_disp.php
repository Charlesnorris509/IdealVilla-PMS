<?php

##################################################################################
#    HOTELDRUID
#    Copyright (C) 2001-2021 by Marco Maria Francesco De Santis (marco@digitaldruid.net)
#
#    This program is free software: you can redistribute it and/or modify
#    it under the terms of the GNU Affero General Public License as published by
#    the Free Software Foundation, either version 3 of the License, or
#    any later version accepted by Marco Maria Francesco De Santis, which
#    shall act as a proxy as defined in Section 14 of version 3 of the
#    license.
#
#    This program is distributed in the hope that it will be useful,
#    but WITHOUT ANY WARRANTY; without even the implied warranty of
#    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#    GNU Affero General Public License for more details.
#
#    You should have received a copy of the GNU Affero General Public License
#    along with this program.  If not, see <http://www.gnu.org/licenses/>.
##################################################################################


global $template_theme_name,$template_theme_colors,$template_theme_values,$template_theme_html_pre,$template_theme_html_post;

$template_theme_name = array();
$template_theme_colors = array();
$template_theme_values = array();
$template_theme_html_pre = array();
$template_theme_html_post = array();

$template_theme_name[1] = "default";
$template_theme_colors[1][1]['name'] = "font";
$template_theme_colors[1][1]['default'] = "#000000";
$template_theme_colors[1][2]['name'] = "background 1";
$template_theme_colors[1][2]['default'] = "#ffffff";
$template_theme_colors[1][3]['name'] = "background 2";
$template_theme_colors[1][3]['default'] = "#ebebeb";
$template_theme_values[1][1]['name'] = "URL home";
$template_theme_values[1][1]['default'] = fixset($dati_struttura[4]);
$template_theme_values[1][1]['replace'] = "<div class=\"homebox\"><a href=\"[theme_value_1]\" style=\"color: [theme_color_1];\" target=\"_top\">[theme_value_2]</a></div>";
$template_theme_values[1][2]['name'] = "URL logo";
$template_theme_values[1][2]['default'] = fixset($dati_struttura[15]);
$template_theme_values[1][2]['replace'] = "<img style=\"text-decoration: none; border: 0px;\" src=\"[theme_value_2]\" alt=\"[theme_value_3]\">";
$template_theme_values[1][2]['null'] = "[theme_value_3]";
$template_theme_values[1][2]['img'] = 1;
$template_theme_values[1][3]['name'] = "home";
$template_theme_values[1][3]['default'] = mex2("Torna alla HOME",$pag,$lingua_modello);
$template_theme_values[1][4]['name'] = mex("URL file css",$pag);
$template_theme_values[1][4]['default'] = "";
$template_theme_values[1][4]['replace'] = "
<link rel=\"stylesheet\" type=\"text/css\" href=\"[theme_value_4]\" media=\"all\">";
$template_theme_values[1][5]['name'] = mex("titolo html",$pag);
if (!empty($dati_struttura[0])) $template_theme_values[1][5]['default'] = $dati_struttura[0]." - ".mex2("Controlla la disponibilità",$pag,$lingua_modello);
else $template_theme_values[1][5]['default'] = mex2("Controlla la disponibilità",$pag,$lingua_modello);
$template_theme_values[1][5]['null'] = "[theme_value_6]";
$template_theme_values[1][6]['name'] = mex("titolo",$pag);
$template_theme_values[1][6]['default'] = mex2("Controlla la disponibilità",$pag,$lingua_modello);
#rimuovere questo null dopo versione 2.2.2?
#$template_theme_values[1][6]['null'] = mex2("Controlla la disponibilità",$pag,$lingua_modello);
$template_theme_values[1][6]['replace'] = "<big><big>[theme_value_6]</big></big><br>";
$template_theme_values[1][7]['name'] = mex("URL file javascript",$pag);
$template_theme_values[1][7]['default'] = "";
$template_theme_values[1][7]['replace'] = "
<script type=\"text/javascript\" src=\"[theme_value_7]\">
</script>";
$template_theme_values[1][7]['pattern'] = "^((?!php).)+\.js$";
$template_theme_values[1][7]['comment'] = mex("non deve contenere \"php\" e deve terminare con \".js\"",$pag);

$template_theme_html_pre[1] = "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01//EN\"
        \"http://www.w3.org/TR/html4/strict.dtd\">
<html>
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html;charset=utf-8\">
<meta name=\"viewport\" content=\"initial-scale=1.0\">
<title>[theme_value_5]</title>
<style type=\"text/css\">
 div.homebox { width: 100%; padding: 10px 0 10px 0; margin: 0; border-bottom: 2px solid [theme_color_1]; background-color: [theme_color_3]; }
 div.homebox a { padding-left: 20px; }
 div.mainbox { text-align: center; padding: 10px; }
 table.formframe { margin-left: auto;  margin-right: auto; background-color: [theme_color_3]; border-radius: 14px; }
 table.formframe td { border-radius: 14px; }
 table.formcont { text-align: left; margin-left: 0; }
 table.formcont td { border: 0; border-radius: 0; }
 table.tab_disp td { border: 1px solid #444444; }
 .tab_disp {font-size:70%;}
 .nowrp { white-space: nowrap; }
 .t_book {  border-radius: 8px; }
 .t_book td {  border-radius: 8px; }
 input.dbutton { padding: 0; width: 14px; }
 input.sbutton {  border: 1px solid #bbbbbb; border-radius: 4px; padding-top: 4px; padding-bottom: 4px; padding-left: 24px; padding-right: 24px; }
 .avail_button input { background-color: #0081c2; color: white; }
 .book_button input { background-color: #0071c2; color: white; }
 .avail_button input:hover { background-color: #004590; }
 .book_button input:hover { background-color: #003590; }
 div.agreem { max-width: 600px; border: 1px solid black; padding: 3px; }
 select { background-color: #ffffff; }
 .separ_cal_but { display: inline-block; width: 4px; }
 .caltitle { font-size: 12px; display: inline-block; padding-bottom: 2px; }
 .calbutton { font-size: 10px; }
 .caltable td { font-size: 12px; }
 .t1top { position: -webkit-sticky; position: sticky; top: 0; background-clip: padding-box; }
 .t1left { position: -webkit-sticky; position: sticky; left: 0; background-clip: padding-box; }
 @media only screen and (max-width: 480px) {
  .t_book table, table.extra_costs, [class^=\"phr_separator\"] { display: block; }
  .t_book table tr, .extra_costs tr { display: block; padding: 5px 0 5px 0; }
  .t_book table td, .extra_costs td { display: block; text-align: left; padding: 0; }
  div.agreem { max-width: 340px; }
 }
 @media only screen and (max-width: 790px) {
  .caltitle { font-size: 16px; }
  .separ_cal_but { display: inline-block; width: 10px; }
  .calbutton { font-size: 14px; padding-left: 12px; padding-right: 12px; }
  .caltable td { font-size: 16px; }
  .check_avail_line { line-height: 1.5; }
  table.perstype td { display: inline-block; }
  .tab_cont { overflow-x: scroll; padding-bottom: 6px; }
 }
</style>
<script type=\"text/javascript\">
var hd_webpage_type = 'availability';
var hd_webpage_lang = '".urlencode($lingua_modello)."';
function open_calendar_dates_from_select () {
 if (typeof mos_cal === 'function') {
  var children = document.body.getElementsByTagName('select');
  var child;
  for (var i = 0, length = children.length; i < length; i++) {
   child = children[i];
   if (child.id.substr(0,6) == 'id_sdm') {
   child.addEventListener('mousedown', function(e) {
    e.preventDefault();
    var elem = this;
    elem.disabled=true;
    setTimeout(function() { elem.disabled = false; }, 0);
    elem.blur();
    window.focus();
    var n = this.id.substr(6);
    mos_cal(n);
   });
   }
  }
 }
}
function set_tab_cont_max_width () {
var tabs = document.getElementsByClassName('tab_cont');
 for (n1 = 0 ; n1 < tabs.length ; n1++) {
  tabs[n1].style.maxWidth = (document.body.clientWidth - 44) + 'px';
 }
}
</script>[theme_value_4]
</head>
<body style=\"background-color: [theme_color_2]; color: [theme_color_1]; padding: 0; margin: 0;\">
<div id=\"container01\">
<div id=\"container02\">
<div id=\"html_pre\"></div>
<div id=\"container03\">
[theme_value_1]
<div id=\"container04\">
<div id=\"logo_post\"></div>
<div id=\"container05\">
<div id=\"container06\">

<div class=\"mainbox\">[theme_value_6]<br>

<table class=\"formframe\" border=1 cellspacing=0 cellpadding=16>
<tr><td>
<table class=\"formcont\" cellspacing=0 cellpadding=0><tr><td>
";
$template_theme_html_post[1] = "
<br></td></tr></table>
</td></tr></table>

";
if (!defined('C_NASCONDI_MARCA') or C_NASCONDI_MARCA != "SI") $template_theme_html_post[1] .= "<div id=\"powered_by_hd\"><small><small>Powered by 
<a href=\"https://www.hoteldruid.com\" style=\"color: [theme_color_1];\">
HotelDruid booking software</a></small></small></div>";
$template_theme_html_post[1] .= "</div>

</div>
</div>
<div id=\"html_post\"></div>
</div>
</div>
<div id=\"html_post2\"></div>
</div>
</div>
[theme_value_7]
<script type=\"text/javascript\">
<!--
if (typeof open_calendar_dates_from_select === 'function') open_calendar_dates_from_select();
if (typeof set_tab_cont_max_width === 'function') set_tab_cont_max_width();
//-->
</script>
</body>
</html>";
$framed_mode_extra_head[1] = "<style type=\"text/css\">
 body { background-color: [theme_color_3]; color: [theme_color_1]; }
 div.ftxt { max-width: 350px; }
 div.ftxt div { padding: 4px; font-size: 80%; }
 div.ftxt select { font-size: 84%; margin: 0 0 0 6px; }
 div.ftxt input { font-size: 84%; margin: 0 0 0 6px; }
 div.arrdate input, div.depdate input { margin: 0; }
 div.submit_check { text-align: right; }
 span.ftxt_phr { display: block; }
 table.perstype td { display: block; text-align: left; padding: 2px 0 2px 0; }
 input.dbutton { padding: 0; width: 20px; }
 input.sbutton {  border: 1px solid #bbbbbb; border-radius: 4px; padding-top: 4px; padding-bottom: 4px; padding-left: 24px; padding-right: 24px; }
 .avail_button input { background-color: #0081c2; color: white; }
 .book_button input { background-color: #0071c2; color: white; }
 .avail_button input:hover { background-color: #004590; }
 .book_button input:hover { background-color: #003590; }
 .separ_cal_but { display: inline-block; width: 4px; }
 .caltitle { font-size: 10px; display: inline-block; padding-bottom: 1px; }
 .calbutton { font-size: 10px; }
 .caltable td { font-size: 12px; }
</style>";
$framed_mode_example[1] = "<iframe src=\"[page_url]?framed=1\" 
style=\"width: 200px; height: 260px;\" frameborder=\"0\">
</iframe>";


$template_theme_name[2] = "default - frame orizzontale";
$template_theme_colors[2] = $template_theme_colors[1];
$template_theme_values[2] = $template_theme_values[1];
$template_theme_html_pre[2] = $template_theme_html_pre[1];
$template_theme_html_post[2] = $template_theme_html_post[1];
$framed_mode_extra_head[2] = "<style type=\"text/css\">
 body { background-color: [theme_color_3]; color: [theme_color_1]; }
 div.ftxt div { font-size: 80%; display: inline; padding: 0 3px 0 3px; }
 div.ftxt select { font-size: 82%; }
 div.ftxt input { font-size: 82%; }
 input.dbutton { padding: 0; width: 20px; }
 input.sbutton {  border: 1px solid #bbbbbb; border-radius: 4px; padding-top: 4px; padding-bottom: 4px; padding-left: 24px; padding-right: 24px; }
 .avail_button input { background-color: #0081c2; color: white; }
 .book_button input { background-color: #0071c2; color: white; }
 .avail_button input:hover { background-color: #004590; }
 .book_button input:hover { background-color: #003590; }
 .separ_cal_but { display: inline-block; width: 4px; }
 .caltitle { font-size: 9px; }
 .calbutton { font-size: 9px; }
 .caltable td { font-size: 11px; }
</style>";
$framed_mode_example[2] = "<iframe src=\"[page_url]?framed=1\" 
style=\"width: 800px; height: 36px;\" frameborder=\"0\">
</iframe>";




?>