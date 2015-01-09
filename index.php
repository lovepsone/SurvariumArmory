<?php
/**
 * @package Survarium Armory
 * @version Release 2.0
 * @revision 77
 * @copyright (c) 2014 - 2015 lovepsone
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
	require_once 'maincore.php';
	//if ($GET[''])
	if (empty($_SERVER["QUERY_STRING"]))
	{
		$sUrl = '?iw=0:0:0:0:0:0:0:0&ie=0:0:0:0&im=0:0:0:0&ib=0:0:0:0&ia=0:0:0:0&ih=0:0:0:0&is=0:0:0:0&if=0:0:0:0';
		echo "<script type='text/javascript'>document.location.href='".str_replace("&amp;", "&", "index.php".$sUrl)."'</script>\n";
		exit;
	}
	echo '<!DOCTYPE html>';
	echo '<html xmlns="http://www.w3.org/1999/xhtml">';
	echo '<head>';
	echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
	echo '<title>Survarium Armory</title>';
	echo '<link rel="stylesheet" href="inventory.css">';
	echo '<script type="text/javascript" src="include/js/jquery.min.js"></script>';
	echo '<script type="text/javascript" src="include/js/jquery.ui.custom.min.js"></script>';
	echo '<script type="text/javascript" src="include/js/jquery.mousewheel.min.js"></script>';
	echo '<script type="text/javascript" src="include/js/jquery.json.js"></script>';
	echo '<script type="text/javascript" src="include/js/url.min.js"></script>';
	echo '<script type="text/javascript" src="include/js/easyTooltip.js"></script>';
	echo '<script type="text/javascript" src="include/js/armory.js"></script>';
	echo '<script type="text/javascript" src="include/js/DragAndDrop.js"></script>';
	echo '</head><body>';

	//скрытые
	echo '<div><input type="hidden" id="FValue" value="0"/>';
	echo '<input type="hidden" id="TItem" value="0"/>';
	echo '<input type="hidden" id="TSort" value="0"/></div>';

	echo '<table class="body-main" border="0px" align="center"><tr><td align="center">';//основная таблица
	//таблица юзера
	// ----------------------------------------------------------------------------------------------------
	echo '<table class="b-user" border="0px">';
	echo '<tr><td align="center" colspan="7" class="userHead">'.$locale['user'].'</td></tr>';
	echo '<tr><td  align="center" colspan="7" style="height: 35px;">ewfw</td></tr>'; //button non release
	echo '<tr><td valign="top" colspan="7">';
	// таблица для двух верхних слотов
	echo '<table border="0px" style="border-collapse:collapse;"><tr height="10px"><td colspan="4"></td></tr>';
	echo '<tr height="94px"><td width="65px"></td><td width="125px" valing="top"><div id="SelectWeapon"></div></td><td width="125px"></td><td width="64px"></td></tr>';
	echo '<tr height="38px"><td colspan="4"></td></tr>';
	echo '<tr height="90px"><td width="65px"></td><td width="125px" valing="top"><div id="SelectHead"></div></td><td width="125px" valing="top"><div id="SelectMask"></div></td><td width="64px"></td></tr>';
		echo '<tr height="275px"><td colspan="4" valign="top">';
		echo '<table border="0px" style="border-collapse:collapse;">';
		echo '<tr height="90px"><td width="5px"></td><td width="125px"><div id="SelectBack"></div></td><td width="125px"><div id="SelectArmory"></div></td><td width="125px"><div id="SelectHand"></div></td></tr>';
		echo '<tr height="90px"><td width="5px"></td><td width="125px"></td><td width="125px"><div id="SelectShin"></div></td><td width="125px"></td></tr>';
		echo '<tr height="90px"><td width="5px"></td><td width="125px"></td><td width="125px"><div id="SelectFeet"></div></td><td width="125px"></td></tr>';
		echo '</table>';
		echo '</td></tr>';
	echo '</table></td></tr>';

	echo '<tr><td></td></tr></table>';
	// ----------------------------------------------------------------------------------------------------
	echo '</td>';//основная таблица
	echo '<td style="width: 366px;"></td>';//основная таблица
	echo '<td>';//основная таблица
	// таблица магазина
	// ----------------------------------------------------------------------------------------------------
	echo '<table class="b-inventory" border="0px">';
	echo '<tr><td align="center" class="inventoryHead">'.$locale['shop'].'</td></tr>';
	echo '<tr><td align="center" height="25px">';
	echo '<input type="button" id="Fraction0" class="BFractionAll" />';
	echo '<input type="button" id="Fraction1" class="BFractionNo" />';
	echo '<input type="button" id="Fraction2" class="BFractionVagabondage" />';
	echo '<input type="button" id="Fraction3" class="BFractionBlackMarket" />';
	echo '<input type="button" id="Fraction4" class="BFractionArmyReviva" />';
	echo '<input type="button" id="Fraction5" class="BFractionSettlementRegion" />';
	echo '</td></tr>';
	echo '<tr><td align="center" height="0px"></td></tr>';
	echo '<tr><td align="center" height="51px">';
	echo '<input type="button" id="Type0"	class="BFalseAll" />';
	echo '<input type="button" id="Type1"	class="BFalseArm" />';
	echo '<input type="button" id="Type2"	class="BFalseWeap" />';
	echo '<input type="button" id="Type3"	class="BFalseAmm" />';
	echo '<input type="button" id="Type4"	class="BFalseSpec" />';
	echo '<input type="button" id="Type5"	class="BFalseUpgr" />';
	echo '</td></tr>';
	echo '<tr><td align="center" class="BTypeIcon">';
	// type item non release
	echo '</td></tr>';
	echo '<tr><td valign="top"><div class="scrollItemInventory"><table border="0px"><div id="ItemInventory"></div></table></div></td></tr>';
	echo '<tr><td style="height: 37px;">';
	//button non release
	echo '</td></tr>';
	echo '<tr><td align="center" class="inventoryFooter"><input type="checkbox"/>'.$locale['compare'].$locale['sort'];
	echo '<input type="radio" name="GSort" id="SortL" value="1" checked="checked"/>'.$locale['sortl'].'<input type="radio" name="GSort" id="SortP" value="2"/>'.$locale['sortp'];
	echo '</td></tr>';
	echo '</table>';
	// ----------------------------------------------------------------------------------------------------
	echo '</td></tr></table>';//основная таблица
	echo '</body></html>';
?>