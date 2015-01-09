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
	@include_once('../maincore.php');
	/*
	* $fraction 0 - все/1 - независимые/2 - бродяги/3 - черный рынок/4 - армия возражденных/5 - поселение край/0 - все
	* $typeItem 0 - все/1 - броня/2 - оружие
	* $typeSort 0 - сортировка по уровню/1 - сортировка по стоимости
	*/
	// обработка переданных данных
	list($fraction, $typeItem, $typeSort) = explode(":", $_POST['data']);
	if ($fraction == 0 && $typeItem == 0)
	{
		$STH = $DBH->prepare("SELECT * FROM armory_items");
		$STH->execute();
	}
	else if ($fraction != 0 && $typeItem != 0)
	{
		$data = array();
		$data['ti'] = $typeItem;
		$data['f'] = $fraction;
		$STH = $DBH->prepare("SELECT * FROM armory_items WHERE typeItem=:ti and fraction=:f");
		$STH->execute($data);
	}
	else if ($fraction == 0 && $typeItem != 0)
	{
		$data = array();
		$data['ti'] = $typeItem;
		$STH = $DBH->prepare("SELECT * FROM armory_items WHERE typeItem=:ti");
		$STH->execute($data);
	}
	else if ($fraction != 0 && $typeItem == 0)
	{
		$data = array();
		$data['f'] = $fraction;
		$STH = $DBH->prepare("SELECT * FROM armory_items WHERE typeItem=:f");
		$STH->execute($data);
	}
	function ToolTipIcon($data)
	{
		global $itemloc, $locale;
		$s =  "<table style='background-image:url(1.png);'><tr><td>".$itemloc[$data->locale]."</td><td>".$data->level."</td></tr>";
		if ($data->typeItem == 1)
		{
			$s .= "<tr><td>".$locale['defence']."</td><td>".$data->defence."</td></tr>";
			$s .= "<tr><td>".$locale['isolation']."</td><td>".$data->isolation."</td></tr>";
			$s .= "<tr><td>".$locale['weight']."</td><td>".$data->weight."</td></tr>";
		}
		else if ($data->typeItem == 2)
		{
			$s .= "<tr><td>".$locale['damage']."</td><td>".$data->damage."</td></tr>";
			$s .= "<tr><td>".$locale['piercing']."</td><td>".$data->piercing."</td></tr>";
			$s .= "<tr><td>".$locale['sighting']."</td><td>".$data->piercing."</td></tr>";
			$s .= "<tr><td>".$locale['stoppower']."</td><td>".$data->piercing."</td></tr>";
			$s .= "<tr><td>".$locale['dispersion']."</td><td>".$data->dispersion."</td></tr>";
			$s .= "<tr><td>".$locale['distance']."</td><td>".$data->distance."</td></tr>";
			$s .= "<tr><td>".$locale['rate']."</td><td>".$data->rate."</td></tr>";
			$s .= "<tr><td>".$locale['weight']."</td><td>".$data->weight."</td></tr>";
		}
		$s .= "</table>";
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