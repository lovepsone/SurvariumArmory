<?php
/**
 * @package Survarium Armory
 * @version Release 1.2
 * @revision 70
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
	@include_once("locale.php");
	@include_once("itemList.php");
	@include('functions.php');

	if (isset($_POST['iw']))
		$_SESSION['iw'] = GetLoadWeapon((int)$_POST['iw'], $items);
	// голова
	if (isset($_POST['ie']))
		$_SESSION['ie'] = GetLoadArmory((int)$_POST['ie'], $items);
	// маска
	if (isset($_POST['im']))
		$_SESSION['im'] = GetLoadArmory((int)$_POST['im'], $items);
	// грудь
	if (isset($_POST['ia']))
		$_SESSION['ia'] = GetLoadArmory((int)$_POST['ia'], $items);
	// спина
	if (isset($_POST['ib']))
		$_SESSION['ib'] = GetLoadArmory((int)$_POST['ib'], $items);
	// рука
	if (isset($_POST['ih']))
		$_SESSION['ih'] = GetLoadArmory((int)$_POST['ih'], $items);
	// ноги
	if (isset($_POST['is']))
		$_SESSION['is'] = GetLoadArmory((int)$_POST['is'], $items);
	// ступни
	if (isset($_POST['if']))
		$_SESSION['if'] = GetLoadArmory($_POST['if'], $items);

	$idIE = (int)GetParseArmory($_SESSION['ie'], 'id');
	// исключаем двайные шлемы
	if (($idIE == 58 || $idIE == 81 || $idIE == 94 || $idIE == 128) && !isset($_POST['im']))
	{
		$_SESSION['im'] = '0:0:0:0:0:ia:0';
	}
	else if (($idIE == 58 || $idIE == 81 || $idIE == 94 || $idIE == 128) && isset($_POST['im']))
	{
		$_SESSION['ie'] = '0:0:0:0:0:ia:0';
	}
	$idItems = array();
	$idItems[0] =(int)GetParseWeapon($_SESSION['iw'], 'id');
	$idItems[1] =(int)GetParseArmory($_SESSION['ie'], 'id');
	$idItems[2] =(int)GetParseArmory($_SESSION['im'], 'id');
	$idItems[3] =(int)GetParseArmory($_SESSION['ia'], 'id');
	$idItems[4] =(int)GetParseArmory($_SESSION['ib'], 'id');
	$idItems[5] =(int)GetParseArmory($_SESSION['ih'], 'id');
	$idItems[6] =(int)GetParseArmory($_SESSION['is'], 'id');
	$idItems[7] =(int)GetParseArmory($_SESSION['if'], 'id');


	$armory_head = (int)GetParseArmory($_SESSION['ie'], 'a') + (int)GetParseArmory($_SESSION['im'], 'a');
	$armory_body = (int)GetParseArmory($_SESSION['ia'], 'a') + (int)GetParseArmory($_SESSION['ib'], 'a');
	$armory_hand = (int)GetParseArmory($_SESSION['ih'], 'a');
	$armory_footer = (int)GetParseArmory($_SESSION['is'], 'a') + (int)GetParseArmory($_SESSION['if'], 'a');
	$isolation_head = (int)GetParseArmory($_SESSION['ie'], 'i') + (int)GetParseArmory($_SESSION['im'], 'i');
	$isolation_body = (int)GetParseArmory($_SESSION['ia'], 'i') + (int)GetParseArmory($_SESSION['ib'], 'i');
	$isolation_hand = (int)GetParseArmory($_SESSION['ih'], 'i');
	$isolation_footer = (int)GetParseArmory($_SESSION['is'], 'i') + (int)GetParseArmory($_SESSION['if'], 'i');

	$t_armory = $armory_head + $armory_body + $armory_footer;
	$t_isolation = $isolation_head + $isolation_body + $isolation_footer;

	$t_p = (int)GetParseWeapon($_SESSION['iw'], 'p') + (int)GetParseArmory($_SESSION['ie'], 'p') + (int)GetParseArmory($_SESSION['im'], 'p'); 
	$t_p = $t_p + (int)GetParseArmory($_SESSION['ia'], 'p') + (int)GetParseArmory($_SESSION['ib'], 'p') + (int)GetParseArmory($_SESSION['ih'], 'p');
	$t_p = $t_p + (int)GetParseArmory($_SESSION['is'], 'p') + (int)GetParseArmory($_SESSION['if'], 'p');

	$t_w = (float)GetParseWeapon($_SESSION['iw'], 'w') + (float)GetParseArmory($_SESSION['ie'], 'w') + (float)GetParseArmory($_SESSION['im'], 'w'); 
	$t_w = $t_w + (float)GetParseArmory($_SESSION['ia'], 'w') + (float)GetParseArmory($_SESSION['ib'], 'w') + (float)GetParseArmory($_SESSION['ih'], 'w');
	$t_w = $t_w + (float)GetParseArmory($_SESSION['is'], 'w') + (float)GetParseArmory($_SESSION['if'], 'w');

	$lvl = array();
	$t_lvl = 0;
	$lvl[0] = (int)GetParseWeapon($_SESSION['iw'], 'lvl');
	$lvl[1] = (int)GetParseArmory($_SESSION['ie'], 'lvl');
	$lvl[2] = (int)GetParseArmory($_SESSION['im'], 'lvl');
	$lvl[3] = (int)GetParseArmory($_SESSION['ia'], 'lvl');
	$lvl[4] = (int)GetParseArmory($_SESSION['ib'], 'lvl');
	$lvl[5] = (int)GetParseArmory($_SESSION['ih'], 'lvl');
	$lvl[6] = (int)GetParseArmory($_SESSION['is'], 'lvl');
	$lvl[7] = (int)GetParseArmory($_SESSION['if'], 'lvl');

	for ($i = 0; $i < count($lvl); $i++)
	{
		if ($t_lvl < $lvl[$i])
			$t_lvl = $lvl[$i];
	}
	
	$Bonuses = 'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0';
	for ($i = 0; $i < count($idItems); $i++)
		$Bonuses = GetBundBonus($Bonuses, $items[$idItems[$i]]['mod']);

	$BonusTT = "<table><tr><td class='ToolTipHead2'></td></tr>";

	$modA = GetParseBonus($Bonuses);
	if (count($modA) > 0)
	{
		for ($j = 0; $j < count($modA); $j++)
		{
			$BonusTT .= "<tr><td class='ToolTipMod' width='165px' height='20px' align='left'>";
			$BonusTT .= "<font style='color:#ffffff; position: relative; left:5px;'>".GetImgMod($modA[$j]['m']).GetTxtMod($modA[$j]['m'])."</font>";
			$BonusTT .= "<font style='color:green; position: relative; top: 1px; left:5px;'>".GetPlusMinus($modA[$j]['m']).(int)$modA[$j]['c'].GetTxtModType($modA[$j]['m'])."</font></td></tr>";	
		}
	}
	else
	{
		$BonusTT .= "<tr><td class='ToolTipMod' width='165px' height='20px' align='left'><font style='color:#ffffff; position: relative; left:5px;'>".$txt['bonus_no']."</font></td></tr>";
	}
	$BonusTT .= "<tr><td class='ToolTipFooter'></td></tr></table>";

	echo '<table width="300px"><tr><td style="color:#ffffff; font-size:11px;">&emsp;'.$txt['weapon'].'</td><td style="color:#FFE4B5; font-size:11px;">'.$txt[GetParseWeapon($_SESSION['iw'], 'l')].'</td></tr>';
	echo '<tr><td style="color:#ffffff; font-size:11px;">&emsp;'.$txt['dmg'].':</td><td style="color:#FFE4B5; font-size:11px;">'.GetParseWeapon($_SESSION['iw'], 'dmg').'</td></tr>';
	echo '<tr><td style="color:#ffffff; font-size:11px;">&emsp;'.$txt['pnt'].':</td><td style="color:#FFE4B5; font-size:11px;">'.GetParseWeapon($_SESSION['iw'], 'pnt').'</td></tr>';
	echo '<tr><td style="color:#ffffff; font-size:11px;">&emsp;'.$txt['vrn'].':</td><td style="color:#FFE4B5; font-size:11px;">'.GetParseWeapon($_SESSION['iw'], 'vrn').'</td></tr>';
	echo '<tr><td style="color:#ffffff; font-size:11px;">&emsp;'.$txt['dis'].':</td><td style="color:#FFE4B5; font-size:11px;">'.GetParseWeapon($_SESSION['iw'], 'dis').$txt['m'].'</td></tr>';
	echo '<tr><td style="color:#ffffff; font-size:11px;">&emsp;'.$txt['rate'].':</td><td style="color:#FFE4B5; font-size:11px;">'.GetParseWeapon($_SESSION['iw'], 'rate').'</td></tr>';
	echo '<tr><td colspan="3"><hr></tr>';
	echo '<tr><td style="color:#fffff0;" align="center" colspan="2">'.$txt['head'].'</td></tr>';
	echo '<tr><td style="color:#ffffff; font-size:11px;">&emsp;'.$txt['armory'].':</td><td style="color:#FFE4B5; font-size:11px;">'.$armory_head.'</td></tr>';
	echo '<tr><td style="color:#ffffff; font-size:11px;">&emsp;'.$txt['isolation'].':</td><td style="color:#FFE4B5; font-size:11px;">'.$isolation_head.'</td></tr>';
	echo '<tr><td colspan="3"><hr></tr>';
	echo '<tr><td style="color:#fffff0;" align="center" colspan="2">'.$txt['body'].'</td></tr>';
	echo '<tr><td style="color:#ffffff; font-size:11px;">&emsp;'.$txt['armory'].':</td><td style="color:#FFE4B5; font-size:11px;">'.$armory_body.'</td></tr>';
	echo '<tr><td style="color:#ffffff; font-size:11px;">&emsp;'.$txt['isolation'].':</td><td style="color:#FFE4B5; font-size:11px;">'.$isolation_body.'</td></tr>';
	echo '<tr><td colspan="3"><hr></tr>';
	echo '<tr><td style="color:#fffff0;" align="center" colspan="2">'.$txt['hand'].'</td></tr>';
	echo '<tr><td style="color:#ffffff; font-size:11px;">&emsp;'.$txt['armory'].':</td><td style="color:#FFE4B5; font-size:11px;">'.$armory_hand.'</td></tr>';
	echo '<tr><td style="color:#ffffff; font-size:11px;">&emsp;'.$txt['isolation'].':</td><td style="color:#FFE4B5; font-size:11px;">'.$isolation_hand.'</td></tr>';
	echo '<tr><td colspan="3"><hr></tr>';
	echo '<tr><td style="color:#fffff0;" align="center" colspan="2">'.$txt['footer'].'</td></tr>';
	echo '<tr><td style="color:#ffffff; font-size:11px;">&emsp;'.$txt['armory'].':</td><td style="color:#FFE4B5; font-size:11px;">'.$armory_footer.'</td></tr>';
	echo '<tr><td style="color:#ffffff; font-size:11px;">&emsp;'.$txt['isolation'].':</td><td style="color:#FFE4B5; font-size:11px;">'.$isolation_footer.'</td></tr>';
	echo '<tr><td colspan="3"><hr></tr>';
	echo '<tr><td style="color:#fffff0;" align="center" colspan="2">'.$txt['stats'].'</td></tr>';
	echo '<tr><td style="color:#ffffff; font-size:11px;">&emsp;'.$txt['t_armory'].'</td><td style="color:#FFE4B5; font-size:11px;">'.$t_armory.'</td></tr>';
	echo '<tr><td style="color:#ffffff; font-size:11px;">&emsp;'.$txt['t_isolation'].'</td><td style="color:#FFE4B5; font-size:11px;">'.$t_isolation.'</td></tr>';
	echo '<tr><td style="color:#ffffff; font-size:11px;">&emsp;'.$txt['t_w'].'</td><td style="color:#FFE4B5; font-size:11px;">'.$t_w.$txt['k'].'</td></tr>';
	echo '<tr><td style="color:#ffffff; font-size:11px;">&emsp;'.$txt['t_p'].'</td><td style="color:#FFE4B5; font-size:11px;">'.$t_p.'</td></tr>';
	echo '<tr><td style="color:#ffffff; font-size:11px;">&emsp;'.$txt['t_lvl'].'</td><td style="color:#FFE4B5; font-size:11px;">'.$t_lvl.'</td></tr>';
	echo '<tr><td colspan="2"><img src="images/bonus.png" title="'.$BonusTT.'" class="BonusTT"></td></tr>';
	echo '</table>';
?>