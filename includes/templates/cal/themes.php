<?php

##################################################################################
#    HOTELDRUID
#    Copyright (C) 2001-2018 by Marco Maria Francesco De Santis (marco@digitaldruid.net)
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
$template_theme_colors[1][2]['name'] = "background";
$template_theme_colors[1][2]['default'] = "#ffffff";
$template_theme_colors[1][3]['name'] = "background 2";
$template_theme_colors[1][3]['default'] = "#ebebeb";
$template_theme_values[1][1]['name'] = mex("URL della home",$pag);
$template_theme_values[1][1]['default'] = fixset($dati_struttura[4]);
$template_theme_values[1][1]['replace'] = "<div class=\"homebox\"><a href=\"[theme_value_1]\" style=\"color: [theme_color_1];\" target=\"_top\">[theme_value_2]</a></div>";
$template_theme_values[1][2]['name'] = mex("URL del logo",$pag);
$template_theme_values[1][2]['default'] = fixset($dati_struttura[15]);
$template_theme_values[1][2]['replace'] = "<img style=\"text-decoration: none; border: 0px;\" src=\"[theme_value_2]\" alt=\"[theme_value_3]\">";
$template_theme_values[1][2]['null'] = "[theme_value_3]";
$template_theme_values[1][2]['img'] = 1;
$template_theme_values[1][3]['name'] = mex("Torna alla HOME",$pag);
$template_theme_values[1][3]['default'] = mex2("Torna alla HOME",$pag,$lingua_modello);
$template_theme_values[1][4]['name'] = mex("URL file css",$pag);
$template_theme_values[1][4]['default'] = "";
$template_theme_values[1][4]['replace'] = "
<link rel=\"stylesheet\" type=\"text/css\" href=\"[theme_value_4]\" media=\"all\">";
$template_theme_values[1][5]['name'] = mex("titolo html",$pag);
if (!empty($dati_struttura[0])) $template_theme_values[1][5]['default'] = $dati_struttura[0]." - ".mex2("Quadro indicativo disponibilità",$pag,$lingua_modello);
else $template_theme_values[1][5]['default'] = mex2("Quadro indicativo disponibilità",$pag,$lingua_modello);
$template_theme_values[1][5]['null'] =  mex2("Quadro indicativo disponibilità",$pag,$lingua_modello);
$template_theme_values[1][6]['name'] = mex("URL file javascript",$pag);
$template_theme_values[1][6]['default'] = "";
$template_theme_values[1][6]['replace'] = "
<script type=\"text/javascript\" src=\"[theme_value_6]\">
</script>";
$template_theme_values[1][6]['pattern'] = "^((?!php).)+\.js$";
$template_theme_values[1][6]['comment'] = mex("non deve contenere \"php\" e deve terminare con \".js\"",$pag);

$template_theme_html_pre[1] = "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01//EN\"
        \"http://www.w3.org/TR/html4/strict.dtd\">
<html>
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html;charset=utf-8\" >
<meta name=\"viewport\" content=\"initial-scale=1.0\">
<title>[theme_value_5]</title>
<style type=\"text/css\">
 div.homebox { width: 100%; padding: 10px 0 10px 0; margin: 0; border-bottom: 2px solid [theme_color_1]; background-color: [theme_color_3]; }
 div.homebox a { padding-left: 20px }
 div.mainbox { text-align: center; padding: 10px; }
 a { color: [theme_color_1]; }
 .t1top { position: -webkit-sticky; position: sticky; top: 0; background-clip: padding-box; }
 .t1left { position: -webkit-sticky; position: sticky; left: 0; background-clip: padding-box; }
 @media only screen and (max-width: 790px) {
  .tab_cont { overflow-x: scroll; padding-bottom: 6px; }
 }
</style>
<script type=\"text/javascript\">
var hd_webpage_type = 'calendar';
var hd_webpage_lang = '".urlencode($lingua_modello)."';
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

<div class=\"mainbox\">";
$template_theme_html_post[1] = "
";
if (!defined('C_NASCONDI_MARCA') or C_NASCONDI_MARCA != "SI") $template_theme_html_post[1] .= "<div id=\"powered_by_hd\"><small><small>Powered by 
<a href=\"https://www.hoteldruid.com\" style=\"color: [theme_color_1];\">
HotelDruid management software</a></small></small></div>";
$template_theme_html_post[1] .= "</div>

</div>
</div>
<div id=\"html_post\"></div>
</div>
</div>
<div id=\"html_post2\"></div>
</div>
</div>
[theme_value_6]
</body>
</html>";
$framed_mode_extra_head[1] = "<style type=\"text/css\">
 body { background-color: [theme_color_2]; color: [theme_color_1]; }
 div.cal_title { text-align: center; }
 a { color: [theme_color_1]; }
</style>";



?>