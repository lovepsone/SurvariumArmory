<?php
/**
 * @package Survarium Armory
 * @version Release 2.0
 * @revision 164
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
	list($countMods, $typeItem, $idItem) = explode(":", $_POST['data']);
	//таблиц возможных индификаторов для предметов
	$Tmods = array(); $result = array();
	$Tmods['iw'] = array(1 => 3, 2 => 8, 3 => 12, 4 => 14, 5 => 15, 6 => 17, 7 => 18, 8 => 19, 9 => 20, 10 => 21, 11 => 24);
	$Tmods['ie'] = array(1 => 16, 2 => 19, 3 => 20, 4 => 22);
	$Tmods['im'] = array(1 => 19, 2 => 20, 3 => 22);
	$Tmods['ib'] = array(1 => 19, 2 => 20, 3 => 23, 4 => 25);
	$Tmods['ia'] = array(1 => 6, 2 => 7, 3 => 10, 4 => 11, 5 => 16, 6 => 19, 7 => 20, 8 => 22, 9 => 23);
	$Tmods['ih'] = array(1 => 3, 2 => 4, 3 => 8, 4 => 12, 5 => 13, 6 => 19, 7 => 20);
	$Tmods['is'] = array(1 => 6, 2 => 7, 3 => 10, 4 => 11, 5 => 16, 6 => 19, 7 => 20, 8 => 22, 9 => 23);
	$Tmods['if'] = array(1 => 6, 2 => 7, 3 => 16, 4 => 19, 5 => 20, 6 => 22);
	sort($Tmods[$typeItem]);
	$data = array();
	// проверка на v24
	$STH = $DBH->query("SELECT selector, typeweapon, typeib FROM armory_items WHERE id=".$idItem);
	$STH->execute();
	$data = $STH->fetch(PDO::FETCH_ASSOC);
	if (!$data['typeweapon'] && $data['selector'] == 'iw')
	{
		unset($Tmods['iw'][10]);
		sort($Tmods['iw']);
	}
	// проверка на v25
	if (!$data['typeib'] && $data['selector'] == 'ib')
	{
		unset($Tmods['ib'][3]);
		sort($Tmods['ib']);
	}

	function ParseModValues($val)
	{
		$data = explode("/", $val);
		return $data[rand(0, count($data)-1)];
	}

	for ($i = 0; $i < $countMods; $i++)
	{
		$rint = rand(0, count($Tmods[$typeItem]));
		$idMod = $Tmods[$typeItem][$rint];
		$STH = $DBH->query("SELECT * FROM armory_mods WHERE id=".$idMod);
		$STH->execute();
		$data = $STH->fetch(PDO::FETCH_ASSOC);
		$result[$i] = array('id'=>$idMod, 'val' => ParseModValues($data['values']));
		$a[$i] = $idMod;
		unset($Tmods[$typeItem][$rint]); 
		sort($Tmods[$typeItem]);
	}
	echo json_encode($result);
?>