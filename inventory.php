<?php
/**
 * @package Survarium Armory
 * @version Release 1.2
 * @revision 65
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
	@include('template/header.php');
	$_SESSION['iw'] = '0:0:0:0:0:0:0:0:iw:0';
	$_SESSION['ie'] = '0:0:0:0:0:ia:0';
	$_SESSION['im'] = '0:0:0:0:0:ia:0';
	$_SESSION['ia'] = '0:0:0:0:0:ia:0';
	$_SESSION['ib'] = '0:0:0:0:0:ia:0';
	$_SESSION['ih'] = '0:0:0:0:0:ia:0';
	$_SESSION['is'] = '0:0:0:0:0:ia:0';
	$_SESSION['if'] = '0:0:0:0:0:ia:0';

	echo '<div class="HideBodyMod"></div>';
	echo '<div class="ModDialog">';
	echo '<input type="button" id="ModClose" class="CloseButton" />';
	echo '</div>';

	echo '<table align="center">';
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
	echo '<tr width="386px" height="81px" class="invfooter"><td><input type="radio" name="GSort" id="SortLvl" value="1" checked="checked"/><input type="radio" name="GSort" id="SortP" value="2"/></td></tr>';

	echo '</table>';
	echo '</form>';
	echo '</td>'; // закрываем калонку
	//централья колонка
	echo '<td width="315px"><table align="center"><tr><td class="HeadStats"></td></tr>';
	echo '<tr><td class="BodyStats"><div id="StatsOutput"></div></td></tr>';
	echo '<tr><td class="FooterStats"></td></tr></table></td>';

	echo '<td width="386px" class="User" border="0px">';
	//оруже и голова
	echo '<table border="0px" width="385px" height="276px">';
	echo '<tr height="61px"><td colspan="5"></td></tr>';
	echo '<tr height="88px"><td width="68px"></td><td width="117px"><div id="SelectWeapon"></div></td><td width="2px"></td><td width="117px"></td><td></td></tr>';
	echo '<tr height="40px"><td colspan="5"></td></tr>';
	echo '<tr height="88px"><td width="68px"></td><td width="117px"><div id="SelectHead"></div></td><td width="2px"></td><td width="117px"><div id="SelectMask"></div></td><td></td></tr>';
	// закрываем правую таблицу шапка
	echo '</table>';
	// все что с туловищем
	echo '<table border="0px" width="385px" height="324px">';
 	echo '<tr height="3px"><td colspan="5"></td></tr>';
 	echo '<tr height="88px"><td width="6px"></td><td width="117px"><div id="SelectBack"></div></td><td width="117px"><div id="SelectArmory"></div></td><td width="117px"><div id="SelectHand"></div></td><tr>';
	echo '<tr height="88px"><td colspan="2"></td><td width="117px"><div id="SelectShin"></div></td><td colspan="2"></td><tr>';
	echo '<tr height="3px"><td colspan="5"></td></tr>';
	echo '<tr height="88px"><td colspan="2"></td><td width="117px"><div id="SelectFeet"></div></td><td colspan="2"></td><tr>';
	echo '<tr height="100%"><td colspan="6"></td><tr></table>';
	//закрываем все что с туловищем
	echo '</td></tr></table>';
	//
	@include('template/footer.php');
?>
