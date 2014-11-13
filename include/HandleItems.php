<?php
/**
 * @package Survarium Armory
 * @version Release 1.0
 * @revision 1
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
	include('itemList.php');
	include('locale.php');
	include('functions.php');
	/*
	* $F 1 - независимые/2 - бродяги/3 - черный рынок/4 - армия возражденных/5 - поселение край
	* $T 1 - броня/2 - оружие
	*/
	// обработка переданных данных
	list($F, $T) = explode(":", $_POST['data']);

	function ToolTips($id)
	{
		global $txt, $items, $T;

		$html = "<table><th height='34px' width='165px' class='ToolTipHead'>";
		$html .= "<div align='left' style='position: relative; left: 7px; top: 0px;'>";
		$html .= "<font align='left' style='position: relative; left: -2px; top: 4px;'>".GetSmallImgFaction($items, $id)."</font>";
		$html .= $txt[$items[$id]['l']]."</div>";
		$html .= "<div align='right' style='position: relative; left: -5px; top: -13px;'>".$items[$id]['lvl']."</div></th>";
		if ($T == 1)
		{
			if ($items[$id]['selector'] != 'ib')
			{ 
				$html .= "<tr><td class='ToolTipBody' width='165px'>";
				$html .= "<font style='color:#ffffff; position: relative; left: 10px; top: 0px;'>".$txt['armory']."</font>";
				$html .= "<font style='color:#FFE4B5; position: relative; left: 105px; top: 0px;'>".$items[$id]['armory']."</font></td></tr>";
				$html .= "<tr><td class='ToolTipBody' width='165px'>";
				$html .= "<font style='color:#ffffff; position: relative; left: 10px; top: 0px;'>".$txt['isolation']."</font>";
				$html .= "<font style='color:#FFE4B5; position: relative; left: 90px; top: 0px;'>".$items[$id]['isolation']."</font></td></tr>";
			}
			$html .= "<tr><td class='ToolTipBody' width='165px'>";
			$html .= "<font style='color:#ffffff; position: relative; left: 10px; top: 0px;'>".$txt['w']."</font>";
			$html .= "<font style='color:#FFE4B5; position: relative; left: 117px; top: 0px;'>".$items[$id]['w'].$txt['k']."</font></td></tr>";
			//модификаторы
			$mod = GetParseMod($id);
			if (count($mod) > 0)
			{
				for ($i = 0; $i < count($mod); $i++)
				{
					$html .= "<tr><td class='ToolTipMod' width='165px' height='24px' align='center'>";
					$html .= "<font style='color:#ffffff;'>".GetImgMod($mod[$i]['m']).GetTxtMod($mod[$i]['m'])."</font>";
					$html .= "<font style='color:green; position: relative; top: 1px;'>".GetPlusMinus($mod[$i]['m']).(int)$mod[$i]['c'].GetTxtModType($mod[$i]['m'])."</font></td></tr>";	
				}
			}
			$html .= "<tr><td class='ToolTipFooter' width='165px' height='3px'></td></tr>";
		}
		else if ($T == 2)
		{
			$html .= "<tr><td class='ToolTipBody' width='165px'>";
			$html .= "<font style='color:#ffffff; position: relative; left: 10px; top: 0px;'>".$txt['dmg']."</font>";
			$html .= "<font style='color:#FFE4B5; position: relative; left: 110px; top: 0px;'>".$items[$id]['dmg']."</font></td></tr>";
			$html .= "<tr><td class='ToolTipBody' width='165px'>";
			$html .= "<font style='color:#ffffff; position: relative; left: 10px; top: 0px;'>".$txt['pnt']."</font>";
			$html .= "<font style='color:#FFE4B5; position: relative; left: 61px; top: 0px;'>".$items[$id]['pnt']."</font></td></tr>";
			$html .= "<tr><td class='ToolTipBody' width='165px'>";
			$html .= "<font style='color:#ffffff; position: relative; left: 10px; top: 0px;'>".$txt['vrn']."</font>";
			$html .= "<font style='color:#FFE4B5; position: relative; left: 84px; top: 0px;'>".$items[$id]['vrn']."</font></td></tr>";
			$html .= "<tr><td class='ToolTipBody' width='165px'>";
			$html .= "<font style='color:#ffffff; position: relative; left: 10px; top: 0px;'>".$txt['dis']."</font>";
			$html .= "<font style='color:#FFE4B5; position: relative; left: 82px; top: 0px;'>".$items[$id]['dis'].$txt['m']."</font></td></tr>";
			$html .= "<tr><td class='ToolTipBody' width='165px'>";
			$html .= "<font style='color:#ffffff; position: relative; left: 10px; top: 0px;'>".$txt['rate']."</font>";
			$html .= "<font style='color:#FFE4B5; position: relative; left: 45px; top: 0px;'>".$items[$id]['rate']."</font></td></tr>";
			$html .= "<tr><td class='ToolTipBody' width='165px'>";
			$html .= "<font style='color:#ffffff; position: relative; left: 10px; top: 0px;'>".$txt['w']."</font>";
			$html .= "<font style='color:#FFE4B5; position: relative; left: 117px; top: 0px;'>".$items[$id]['w'].$txt['k']."</font></td></tr>";
			$html .= "<tr><td class='ToolTipFooter' width='165px' height='3px'></td></tr>";
		}
		$html .= "</table>";
		return $html;
	}

	$SItem = array();
	$SItem = GetItems($T, $F);

	$position = 1;
	for ($i = 0; $i < count($SItem); $i++)
	{
		if ($position == 1)
		{
			echo '<tr height="85"><td>';
			echo '<div id="'.$SItem[$i]['selector'].'" style="position:relative; left:6px; top:0px;">';
			echo '<div item-id="'.$i.'" s="'.$SItem[$i]['selector'].'"><img src="images/'.$SItem[$i]['TypeImg'].$SItem[$i]['img'].'" title="'.ToolTips($SItem[$i]['id']).'" id="'.$SItem[$i]['id'].'"/></div></div>';
			echo '</td>';
		}
		else if ($position == 2)
		{
			echo '<td>';
			echo '<div id="'.$SItem[$i]['selector'].'" style="position:relative; left:10px; top:0px;">';
			echo '<div item-id="'.$i.'" s="'.$SItem[$i]['selector'].'"><img src="images/'.$SItem[$i]['TypeImg'].$SItem[$i]['img'].'" title="'.ToolTips($SItem[$i]['id']).'" id="'.$SItem[$i]['id'].'"/></div></div>';
			echo '</td>';
		}
		else if ($position == 3)
		{
			$position = 0;
			echo '<td>';
			echo '<div id="'.$SItem[$i]['selector'].'" style="position:relative; left:16px; top:0px;">';
			echo '<div item-id="'.$i.'" s="'.$SItem[$i]['selector'].'"><img src="images/'.$SItem[$i]['TypeImg'].$SItem[$i]['img'].'" title="'.ToolTips($SItem[$i]['id']).'" id="'.$SItem[$i]['id'].'"/></div></div>';
			echo '</tr>';
		}
		$position++;
	}
	if ($position == 1 || $position == 2)
		echo '</tr>';
?>