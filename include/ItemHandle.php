<?php
/**
 * @package Survarium Armory
 * @version Release 2.0
 * @revision 100
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
	if (isset($_POST['UrlItem']))
	{
		$data = explode(":", $_POST['UrlItem']);
		$STH = $DBH->query("SELECT * FROM armory_items WHERE id=".$data[0]);
		$STH->execute();
		$dItem = $STH->fetch(PDO::FETCH_ASSOC);
		$dItem['locale'] = $itemloc[$dItem['locale']];
		$dItem['localetxt'] = $locale;
		$dItem['localemod'] = $modloc;
		//start mods items
		$STH = $DBH->prepare("SELECT * FROM armory_items_mods LEFT JOIN armory_mods ON armory_mods.`id` = armory_items_mods.`idMod` WHERE armory_items_mods.`idItem`=:item");
		$STH->execute(array('item' => $data[0]));
		$i = 0; $mods = array();
		while($res = $STH->fetch(PDO::FETCH_ASSOC))
		{
			$mods[$i] = $res;
			$i++;
		}
		//parse url mods (fix iw)
		$dataMods = array();
		for ($j = 1; $j < 4; $j++)
		{
			$r = explode("-", $data[$j]);
			if ((int)$r[0] == 0)
				break;
			$STH = $DBH->query("SELECT * FROM `armory_mods` WHERE id=".$r[0]);
			$STH->execute();
			$res = $STH->fetch(PDO::FETCH_ASSOC);
			$res['value'] = $r[1];
			$mods[$i] = $res;
			$i++;
		}
		$dItem['mods'] = $mods;
		echo json_encode($dItem);
	}
?>