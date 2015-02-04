<?php
/**
 * @package Survarium Armory
 * @version Release 2.0
 * @revision 115
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
	@include_once('../maincore.php');
	/*
	* $fraction 0 - все/1 - независимые/2 - бродяги/3 - черный рынок/4 - армия возражденных/5 - поселение край/0 - все
	* $typeItem 0 - все/1 - броня/2 - оружие
	* $typeSort 0 - сортировка по уровню/1 - сортировка по стоимости
	*/
	// обработка переданных данных
	list($fraction, $typeItem, $typeSort) = explode(":", $_POST['data']);

	$strSort = "";
	switch ($typeSort)
	{
	  case 1:
	    $strSort = " ORDER BY level, typeItem";
	    break;
	  case 2:
	     $strSort = " ORDER BY cost, typeItem";
	    break;
	  default:
	    $strSort = " ORDER BY level, typeItem";
	    break;
	}

	if ($fraction == 0 && $typeItem == 0)
	{
		$STH = $DBH->prepare("SELECT * FROM armory_items".$strSort);
		$STH->execute();
	}
	else if ($fraction != 0 && $typeItem != 0)
	{
		$data = array();
		$data['ti'] = $typeItem;
		$data['f'] = $fraction;
		$STH = $DBH->prepare("SELECT * FROM armory_items WHERE typeItem=:ti and fraction=:f".$strSort);
		$STH->execute($data);
	}
	else if ($fraction == 0 && $typeItem != 0)
	{
		$data = array();
		$data['ti'] = $typeItem;
		$STH = $DBH->prepare("SELECT * FROM armory_items WHERE typeItem=:ti".$strSort);
		$STH->execute($data);
	}
	else if ($fraction != 0 && $typeItem == 0)
	{
		$data = array();
		$data['f'] = $fraction;
		$STH = $DBH->prepare("SELECT * FROM armory_items WHERE fraction=:f".$strSort);
		$STH->execute($data);
	}
	function ToolTipIcon($data)
	{
		global $DBH, $modloc, $itemloc, $locale;

		$sm = "<tr valign='bottom'><td colspan='2'><hr style='color:#ffffff;' width='90%'></td></tr>";
		$d = array(); $vmod = 0;
		$d['item'] = $data->id;
		$STH = $DBH->prepare("SELECT * FROM armory_items_mods LEFT JOIN armory_mods ON armory_mods.`id` = armory_items_mods.`idMod` WHERE armory_items_mods.`idItem`=:item");
		$STH->execute($d);
		while($res = $STH->fetch(PDO::FETCH_OBJ))
		{
			$vmod = 1;
			$sm .= "<tr valign='top'><td colspan='2'><img src='images/mod/".$res->imgMod."' class='iconMod'/>".$modloc[$res->localeMod].$res->mathsign.$res->value.$res->txtsign."</td></tr>";
		}

		$s = "<table class='tooltipBody' style='border-collapse:collapse;'><tr class='tooltipHead'><td colspan='2' style='position: relative; top:-9px; font-size: 9px; color: #9C9797;' align='center'>".$locale['shop']."</td></tr>";
		$s .= "<tr class='tooltipHead'><td width='155px' style='position: relative; top:-11px;'>&nbsp;<img src='images/smallicon/".$data->fraction.".png' class='smallIconFraction'/>&nbsp;".$itemloc[$data->locale]."</td><td style='position: relative; top:-8px; right:0px; color: #9C9797;'>".$locale['lvl'].$data->level."</td></tr>";
		if ($data->typeItem == 1)
		{
			$s .= "<tr height='20px' valign='bottom'><td>&nbsp;&nbsp;".$locale['defence']."</td><td style='color:#FFF0A0; font-weight:500;'>".$data->defence."</td></tr>";
			$s .= "<tr><td>&nbsp;&nbsp;".$locale['isolation']."</td><td style='color:#FFF0A0; font-weight:500;'>".$data->isolation."</td></tr>";
			$s .= "<tr height='20px' valign='top'><td>&nbsp;&nbsp;".$locale['weight']."</td><td style='color:#FFF0A0; font-weight:500;'>".$data->weight.$locale['k']."</td></tr>";
		}
		else if ($data->typeItem == 2)
		{
			$s .= "<tr height='20px' valign='bottom'><td>&nbsp;&nbsp;".$locale['damage']."</td><td style='color:#FFF0A0; font-weight:500;'>".$data->damage."</td></tr>";
			$s .= "<tr><td>&nbsp;&nbsp;".$locale['piercing']."</td><td style='color:#FFF0A0; font-weight:500;'>".$data->piercing."</td></tr>";
			$s .= "<tr><td>&nbsp;&nbsp;".$locale['sighting']."</td><td style='color:#FFF0A0; font-weight:500;'>".$data->sighting.$locale['s']."</td></tr>";
			$s .= "<tr><td>&nbsp;&nbsp;".$locale['stoppower']."</td><td style='color:#FFF0A0; font-weight:500;'>".$data->stoppower.$locale['p']."</td></tr>";
			$s .= "<tr><td>&nbsp;&nbsp;".$locale['dispersion']."</td><td style='color:#FFF0A0; font-weight:500;'>".$data->dispersion."</td></tr>";
			$s .= "<tr><td>&nbsp;&nbsp;".$locale['distance']."</td><td style='color:#FFF0A0; font-weight:500;'>".$data->distance.$locale['m']."</td></tr>";
			$s .= "<tr><td>&nbsp;&nbsp;".$locale['rate']."</td><td style='color:#FFF0A0; font-weight:500;'>".$data->rate."</td></tr>";
			$s .= "<tr height='20px' valign='top'><td>&nbsp;&nbsp;".$locale['weight']."</td><td style='color:#FFF0A0; font-weight:500;'>".$data->weight.$locale['k']."</td></tr>";
		}
		if ($vmod) $s .= $sm;
		$s .= "<tr><td colspan='2'><hr style='color:#ffffff;' width='90%'></td></tr></table>";
		return $s;
	}

	$position = 1;
	while($res = $STH->fetch(PDO::FETCH_OBJ))
	{
		if ($position == 1)
		{
			echo '<tr><td valign="top">';
			echo '<div id="'.$res->selector.'"><img src="images/icon/'.$res->images.'.png" item="'.$res->id.'" class="icon" title="'.ToolTipIcon($res).'"/>';
			echo '</div></td>';
		}
		else if ($position == 2)
		{
			echo '<td valign="top">';
			echo '<div id="'.$res->selector.'"><img src="images/icon/'.$res->images.'.png" item="'.$res->id.'" class="icon" title="'.ToolTipIcon($res).'"/>';
			echo '</div></td>';
		}
		else if ($position == 3)
		{
			$position = 0;
			echo '<td valign="top">';
			echo '<div id="'.$res->selector.'"><img src="images/icon/'.$res->images.'.png" item="'.$res->id.'" class="icon" title="'.ToolTipIcon($res).'"/>';
			echo '</div></td></tr>';
		}
		$position++;
	}
	if ($position == 2 || $position == 3)
		echo '</tr>';
?>