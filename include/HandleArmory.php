<?php
/**
 * @package Survarium Armory
 * @version Release 1.3
 * @revision 75
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
/*
* $_SESSION['UserItem']
* 0 - шлем
* 1 - маска
* 2 - торс
* 3 - спина (рюкзак)
* 4 - руки
* 5 - ноги
* 6 - ступни
* 7 - оружие (1 слот)
*/
	session_start();
	@include_once("locale.php");
	@include_once("itemList.php");
	@include('functions.php');

	$arr = array();
	$twoHeadHandle = false;
	if (isset($_POST['data']))
	{
		$arr = explode(':', $_POST['data']);
		if ($arr[2] == 1)
		{
			for ($i = 0; $i < count($_SESSION['UserItem']); $i++)
			{
				if ($_SESSION['UserItem'][$i]['type'] == $arr[0] && $arr[0] != 'iw')
					$_SESSION['UserItem'][$i]['id'] = 0;
				else if($_SESSION['UserItem'][$i]['type'] == $arr[0] && $arr[0] == 'iw')
					$_SESSION['UserItem'][$i]['id'] = -1;
				
			}
		}
		else
		{
			if ($arr[0] == 'im')
				$twoHeadHandle = true;
			for ($i = 0; $i < count($_SESSION['UserItem']); $i++)
			{
				if ($_SESSION['UserItem'][$i]['type'] == $arr[0])
					$_SESSION['UserItem'][$i]['id'] = (int)$arr[1];
			}
		}
	}
	// исключаем двайные шлемы
	$idExclude = $_SESSION['UserItem'][0]['id'];
	if (($idExclude == 58 || $idExclude == 81 || $idExclude == 94 || $idExclude == 128) && !$twoHeadHandle)
	{
		$_SESSION['UserItem'][1]['id'] = 0;
	}
	else if (($idExclude == 58 || $idExclude == 81 || $idExclude == 94 || $idExclude == 128) && $twoHeadHandle)
	{
		$_SESSION['UserItem'][0]['id'] = 0;
	}

	$ArmoryHead = $items[$_SESSION['UserItem'][0]['id']]['armory'] + $items[$_SESSION['UserItem'][1]['id']]['armory'];
	$ArmoryBody = $items[$_SESSION['UserItem'][2]['id']]['armory'] + $items[$_SESSION['UserItem'][3]['id']]['armory'];
	$ArmoryHand = $items[$_SESSION['UserItem'][4]['id']]['armory'];
	$ArmoryFooter = $items[$_SESSION['UserItem'][5]['id']]['armory'] + $items[$_SESSION['UserItem'][6]['id']]['isolation'];
	$IsolationHead = $items[$_SESSION['UserItem'][0]['id']]['isolation'] + $items[$_SESSION['UserItem'][1]['id']]['isolation'];
	$IsolationBody = $items[$_SESSION['UserItem'][2]['id']]['isolation'] + $items[$_SESSION['UserItem'][3]['id']]['isolation'];
	$IsolationHand = $items[$_SESSION['UserItem'][4]['id']]['isolation'];
	$IsolationFooter = $items[$_SESSION['UserItem'][5]['id']]['isolation'] + $items[$_SESSION['UserItem'][6]['id']]['isolation'];

	$GeneralArmory = $ArmoryHead + $ArmoryBody + $ArmoryFooter;
	$GeneralIsolation = $IsolationHead + $IsolationBody + $IsolationFooter;

	$GeneralLvl = 0;
	$GeneralPrice = 0;
	$GeneralWeight = 0;
	for ($i = 0; $i < count($_SESSION['UserItem']); $i++)
	{
		if ($GeneralLvl < $items[$_SESSION['UserItem'][$i]['id']]['lvl'])
			$GeneralLvl = $items[$_SESSION['UserItem'][$i]['id']]['lvl'];
		$GeneralPrice += $items[$_SESSION['UserItem'][$i]['id']]['p'];
		if ($_SESSION['UserItem'][$i]['id'] != 0  || $i == 7)
			$GeneralWeight += (float)$items[$_SESSION['UserItem'][$i]['id']]['w'];
	}

	$Bonuses = 'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0';
	for ($i = 0; $i < count($_SESSION['UserItem']); $i++)
		$Bonuses = GetBundBonus($Bonuses, $items[$_SESSION['UserItem'][$i]['id']]['mod']);

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

	echo '<table width="300px">';

	if ($_SESSION['UserItem'][7]['id'] == -1)
	{
		echo '<tr><td style="color:#ffffff; font-size:11px;">&emsp;'.$txt['weapon'].'</td><td style="color:#FFE4B5; font-size:11px;">'.$txt['iw'].'</td></tr>';
		echo '<tr><td style="color:#ffffff; font-size:11px;">&emsp;'.$txt['dmg'].':</td><td style="color:#FFE4B5; font-size:11px;">0</td></tr>';
		echo '<tr><td style="color:#ffffff; font-size:11px;">&emsp;'.$txt['pnt'].':</td><td style="color:#FFE4B5; font-size:11px;">0</td></tr>';
		echo '<tr><td style="color:#ffffff; font-size:11px;">&emsp;'.$txt['vrn'].':</td><td style="color:#FFE4B5; font-size:11px;">0</td></tr>';
		echo '<tr><td style="color:#ffffff; font-size:11px;">&emsp;'.$txt['dis'].':</td><td style="color:#FFE4B5; font-size:11px;">0'.$txt['m'].'</td></tr>';
		echo '<tr><td style="color:#ffffff; font-size:11px;">&emsp;'.$txt['rate'].':</td><td style="color:#FFE4B5; font-size:11px;">0</td></tr>';
	}
	else
	{
		echo '<tr><td style="color:#ffffff; font-size:11px;">&emsp;'.$txt['weapon'].'</td><td style="color:#FFE4B5; font-size:11px;">'.$txt[$items[$_SESSION['UserItem'][7]['id']]['l']].'</td></tr>';
		echo '<tr><td style="color:#ffffff; font-size:11px;">&emsp;'.$txt['dmg'].':</td><td style="color:#FFE4B5; font-size:11px;">'.$items[$_SESSION['UserItem'][7]['id']]['dmg'].'</td></tr>';
		echo '<tr><td style="color:#ffffff; font-size:11px;">&emsp;'.$txt['pnt'].':</td><td style="color:#FFE4B5; font-size:11px;">'.$items[$_SESSION['UserItem'][7]['id']]['pnt'].'</td></tr>';
		echo '<tr><td style="color:#ffffff; font-size:11px;">&emsp;'.$txt['vrn'].':</td><td style="color:#FFE4B5; font-size:11px;">'.$items[$_SESSION['UserItem'][7]['id']]['vrn'].'</td></tr>';
		echo '<tr><td style="color:#ffffff; font-size:11px;">&emsp;'.$txt['dis'].':</td><td style="color:#FFE4B5; font-size:11px;">'.$items[$_SESSION['UserItem'][7]['id']]['dis'].$txt['m'].'</td></tr>';
		echo '<tr><td style="color:#ffffff; font-size:11px;">&emsp;'.$txt['rate'].':</td><td style="color:#FFE4B5; font-size:11px;">'.$items[$_SESSION['UserItem'][7]['id']]['rate'].'</td></tr>';
	}
	echo '<tr><td colspan="3"><hr></tr>';
	echo '<tr><td style="color:#fffff0;" align="center" colspan="2">'.$txt['head'].'</td></tr>';
	echo '<tr><td style="color:#ffffff; font-size:11px;">&emsp;'.$txt['armory'].':</td><td style="color:#FFE4B5; font-size:11px;">'.$ArmoryHead.'</td></tr>';
	echo '<tr><td style="color:#ffffff; font-size:11px;">&emsp;'.$txt['isolation'].':</td><td style="color:#FFE4B5; font-size:11px;">'.$IsolationHead.'</td></tr>';
	echo '<tr><td colspan="3"><hr></tr>';
	echo '<tr><td style="color:#fffff0;" align="center" colspan="2">'.$txt['body'].'</td></tr>';
	echo '<tr><td style="color:#ffffff; font-size:11px;">&emsp;'.$txt['armory'].':</td><td style="color:#FFE4B5; font-size:11px;">'.$ArmoryBody.'</td></tr>';
	echo '<tr><td style="color:#ffffff; font-size:11px;">&emsp;'.$txt['isolation'].':</td><td style="color:#FFE4B5; font-size:11px;">'.$IsolationBody.'</td></tr>';
	echo '<tr><td colspan="3"><hr></tr>';
	echo '<tr><td style="color:#fffff0;" align="center" colspan="2">'.$txt['hand'].'</td></tr>';
	echo '<tr><td style="color:#ffffff; font-size:11px;">&emsp;'.$txt['armory'].':</td><td style="color:#FFE4B5; font-size:11px;">'.$ArmoryHand.'</td></tr>';
	echo '<tr><td style="color:#ffffff; font-size:11px;">&emsp;'.$txt['isolation'].':</td><td style="color:#FFE4B5; font-size:11px;">'.$IsolationHand.'</td></tr>';
	echo '<tr><td colspan="3"><hr></tr>';
	echo '<tr><td style="color:#fffff0;" align="center" colspan="2">'.$txt['footer'].'</td></tr>';
	echo '<tr><td style="color:#ffffff; font-size:11px;">&emsp;'.$txt['armory'].':</td><td style="color:#FFE4B5; font-size:11px;">'.$ArmoryFooter.'</td></tr>';
	echo '<tr><td style="color:#ffffff; font-size:11px;">&emsp;'.$txt['isolation'].':</td><td style="color:#FFE4B5; font-size:11px;">'.$IsolationFooter.'</td></tr>';
	echo '<tr><td colspan="3"><hr></tr>';
	echo '<tr><td style="color:#fffff0;" align="center" colspan="2">'.$txt['stats'].'</td></tr>';
	echo '<tr><td style="color:#ffffff; font-size:11px;">&emsp;'.$txt['t_armory'].'</td><td style="color:#FFE4B5; font-size:11px;">'.$GeneralArmory.'</td></tr>';
	echo '<tr><td style="color:#ffffff; font-size:11px;">&emsp;'.$txt['t_isolation'].'</td><td style="color:#FFE4B5; font-size:11px;">'.$GeneralIsolation.'</td></tr>';
	echo '<tr><td style="color:#ffffff; font-size:11px;">&emsp;'.$txt['t_w'].'</td><td style="color:#FFE4B5; font-size:11px;">'.$GeneralWeight.$txt['k'].'</td></tr>';
	echo '<tr><td style="color:#ffffff; font-size:11px;">&emsp;'.$txt['t_p'].'</td><td style="color:#FFE4B5; font-size:11px;">'.$GeneralPrice.'</td></tr>';
	echo '<tr><td style="color:#ffffff; font-size:11px;">&emsp;'.$txt['t_lvl'].'</td><td style="color:#FFE4B5; font-size:11px;">'.$GeneralLvl.'</td></tr>';
	echo '<tr><td colspan="2"><img src="images/bonus.png" title="'.$BonusTT.'" class="BonusTT"></td></tr>';
	echo '</table>';
?>