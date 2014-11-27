<?php
/**
 * @package Survarium Armory
 * @version Release 1.0
 * @revision 33
 * @copyright (c) 2014 lovepsone
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 **/
	session_start();
	error_reporting(E_ALL);
	$_SESSION['iw'] = '0:0:0:0:0:0:0:0:iw:0';
	$_SESSION['ie'] = '0:0:0:0:0:ia:0';
	$_SESSION['im'] = '0:0:0:0:0:ia:0';
	$_SESSION['ia'] = '0:0:0:0:0:ia:0';
	$_SESSION['ib'] = '0:0:0:0:0:ia:0';
	$_SESSION['ih'] = '0:0:0:0:0:ia:0';
	$_SESSION['is'] = '0:0:0:0:0:ia:0';
	$_SESSION['if'] = '0:0:0:0:0:ia:0';

	//http://jquery.page2page.ru/index.php5/JQuery_UI
	//http://professorweb.ru/my/javascript/jquery/level4/4_12.php
	//http://habrahabr.ru/post/103242/
	//http://www.simplecoding.org/drag-drop-s-ispolzovaniem-jquery-ui.html
	// json http://www.cyberforum.ru/javascript-jquery/thread966787.html

	echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
	echo '<html xmlns="http://www.w3.org/1999/xhtml">';
	echo '<head>';
	echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
	echo '<title>Survarium Armory</title>';
	echo '<link rel="stylesheet" href="style.css">';
	echo '<script type="text/javascript" src="include/js/jquery.min.js"></script>';
	//echo '<script type="text/javascript" src="include/js/jquery.json.js"></script>';
	echo '<script type="text/javascript" src="include/js/ajax.js"></script>';
	echo '<script type="text/javascript" src="include/js/easyTooltip.js"></script>';
	echo '<script type="text/javascript" src="include/js/jquery.ui.custom.min.js"></script>';
	echo '<script type="text/javascript" src="include/js/DragAndDrop.js"></script>';
	echo '<script type="text/javascript" src="include/js/jquery.mousewheel.min.js"></script>';

	echo '</head><body><div align="center"><table>';
	//скрытые
	echo '<div><input type="hidden" id="FValue" value="0"/>';
	echo '<input type="hidden" id="TItem" value="0"/>';
	echo '<input type="hidden" id="TSort" value="0"/></div>';
	//
	echo '<tr><td width="386px" border="0px">';// основная таблица
	echo '<form action="">';
	echo '<table width="386px" border="0px">';

	echo '<tr width="386px" height="163px" class="invhead"><td>';
	echo '<input type="checkbox" id="Fraction0"/>';
	echo '<input type="button" id="Fraction1" />';
	echo '<input type="button" id="Fraction2" />';
	echo '<input type="button" id="Fraction3" />';
	echo '<input type="button" id="Fraction4" />';
	echo '<input type="button" id="Fraction5" /><br>';
	echo '<input type="button" id="TypeItemAll"	class="bAllTrue" checked="checked"/>';
	echo '<input type="button" id="TypeItemArmory"	class="bArmoryFalse" />';
	echo '<input type="button" id="TypeItemWeapon"	class="bWeaponFalse" />';
	echo '</td></tr>';

	echo '<tr width="386px" height="356px" class="invbody" valign="top"><td>';
	echo '<div class="scroll-pane"><table width="386px" style="position: relative; left: 0px; top: -10px;"><div id="ItemOutput"></div></table></div>';
	echo '</td></tr>';
	//echo '<tr width="386px" height="81px" class="invfooter"><td><input type="checkbox" id="SortLvl" checked="checked"/><input type="checkbox" id="SortP"/></td></tr>';
echo '<tr width="386px" height="81px" class="invfooter"><td><input type="radio" name="GSort" id="SortLvl" value="1" checked="checked"/><input type="radio" name="GSort" id="SortP" value="2"/></td></tr>';

	echo '</table>';
	echo '</form>';
	echo '</td>'; // закрываем калонку
	//централья колонка
	echo '<td width="315px"><table align="center"><tr><td width="300px" height="6px" style="background-image:url(images/HeadStats.png);"></td></tr>';
	echo '<tr><td width="300px" style="background-image:url(images/BodyStats.png);"><div id="StatsOutput"></div></td></tr>';
	echo '<tr><td width="300px" height="6px" style="background-image:url(images/FooterStats.png);"></td></tr></table></td>';
	//закрытая центральная калонка
	echo '<td width="386px" style="background-image:url(images/user.png);" border="0px">';
	//правая таблица шапка
	echo '<table border="0px" width="385px" height="188px">';
	echo '<tr height="61px"><td></td></tr><tr height="88px"><td width="68px"></td>';
	echo '<td width="117px"><div id="SelectWeapon"></div></td>';
	echo '<td></td></tr><tr><td></td></tr>';
	// закрываем правую таблицу шапка
	echo '</table>';

	echo '<table border="0px" width="385px" height="412px">';
	// шлем и маска
	//шлем
	echo '<tr height="88px"><td width="68px"></td><td width="117px"><div id="SelectHead"></div></td><td width="2px"></td>';
	echo '<td width="117px"><div id="SelectMask"></div></td><td></td></tr>';
	// все что с туловищем
	echo '<tr><td colspan="5"><table border="0px" height="310px">';
	echo '<tr height="88px"><td width="7px"></td><td width="117px"><div id="SelectBack"></div></td><td width="1px"></td><td width="117px"><div id="SelectArmory"></div></td><td width="1px"></td><td width="117px"><div id="SelectHand"></div></td></tr>';
	echo '<tr height="88px"><td width="7px"></td><td colspan="2"></td><td width="117px"><div id="SelectShin"></div></td><td colspan="2"></td></tr>';
	echo '<tr height="88px"><td width="7px"></td><td colspan="2"></td><td width="117px"><div id="SelectFeet"></div></td><td colspan="2"></td></tr>';
	echo '<tr><td colspan="5"></td></tr>';
	echo '</table></td></tr>';
	//закрываем все что с туловищем
	// закрываем правую низ
	echo '</table>';

	echo '</td></tr>';

	echo '</table></div>';
	echo '</body></html>';
?>
