<?php
/**
 * @package Survarium Armory
 * @version Release 2.0
 * @revision 127
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

	function getCountMods($data)
	{
		$temp = explode(":", $data);
		$count = 0;
		if ((int)$temp[0] == 0)
			return 0;
		for ($i = 1; $i < count($temp); $i++)
		{
			if ((int)$temp[$i] != 0)
				$count++;
		}
		return $count;
	}

	function getColorNameItem($countMods)
	{
		$color = '';
		switch ($countMods)
		{
		  case 0:
		    $color = '#c6c6c6';
		    break;
		  case 1:
		    $color = '#486d7f';
		    break;
		  case 2:
		    $color = '#63854d';
		    break;
		  case 3:
		    $color = '#ffd700';
		    break;
		  default:
		    $color = '#c6c6c6';
		    break;
		}
		return $color;
	}

	function calcPerOfVal($per, $val)
	{
		return $val*$per/100.0;
	}

	$item = array(0=>'iw', 1=>'ie', 2=>'im', 3=>'ib', 4=>'ia', 5=>'ih', 6=>'is', 7=>'if');
	$itemId = array();
	$modsId = array();
	$in = "";

	for ($i = 0; $i < count($_POST['url']); $i++)
	{
		$d = explode(":", $_POST['url'][$item[$i]]);
		$itemId[$item[$i]] = (int)$d[0];
		$in .= ":".$item[$i];
		if ($i+1 != count($_POST['url']))
			$in .= ", ";
		// модификаторы
		if ((int)$d[0] != 0)
		{
			$mCount = getCountMods($_POST['url'][$item[$i]]);
			for ($j = 0; $j < $mCount; $j++)
			{
				$mod = explode("-", $d[$j+1]);
				$STH = $DBH->query("SELECT * FROM armory_mods WHERE id=".$mod[0]);
				$STH->execute();
				$modsId[$item[$i]][$j] = $STH->fetch(PDO::FETCH_ASSOC);
				$modsId[$item[$i]][$j]['values'] = $mod[1];
			}
		}
	}

	$STH = $DBH->prepare("SELECT * FROM armory_items WHERE id IN (".$in.")");
	$STH->execute($itemId);
	$rItem = array();
	while($res = $STH->fetch(PDO::FETCH_ASSOC))
	{
		$rItem[$res['selector']] = $res;
	}
	//append values mods
	$amods = array();
	for ($i = 0; $i < count($item); $i++)
		$amods[$item[$i]] = array(14 => 0, 16 => 0, 17 => 0, 18 => 0, 19 => 0, 21 => 0, 22 => 0);

	for ($i = 0; $i < count($_POST['url']); $i++)
	{
		if (!empty($modsId[$item[$i]]) && count($modsId[$item[$i]]) > 0)
		{
			for ($j = 0; $j < count($modsId[$item[$i]]); $j++)
			{
				switch ($modsId[$item[$i]][$j]['id'])
				{
				  case 14:
				    $amods[$item[$i]][14] = calcPerOfVal($modsId[$item[$i]][$j]['values'], $rItem[$item[$i]]['damage']);
				    break;
				  case 16:
				    $amods[$item[$i]][16] = $modsId[$item[$i]][$j]['values'];
				    break;
				  case 17:
				    $amods[$item[$i]][17] = calcPerOfVal($modsId[$item[$i]][$j]['values'], $rItem[$item[$i]]['dispersion']);
				    break;
				  case 18:
				    $amods[$item[$i]][18] = calcPerOfVal($modsId[$item[$i]][$j]['values'], $rItem[$item[$i]]['rate']);
				    break;
				  case 19:
				    $amods[$item[$i]][19] = calcPerOfVal($modsId[$item[$i]][$j]['values'], $rItem[$item[$i]]['weight']);
				    break;
				  case 21:
				    $amods[$item[$i]][21] = calcPerOfVal($modsId[$item[$i]][$j]['values'], $rItem[$item[$i]]['distances']);
				    break;
				  case 22:
				    $amods[$item[$i]][22] = $modsId[$item[$i]][$j]['values'];;
				    break;
				}
			}
		}
	}
//echo count($modsId[$item[$i]]);
	$dHead = (!empty($rItem['ie']) ? ($rItem['ie']['defence'] + $amods['ie'][16]) : 0) + (!empty($rItem['im']) ? ($rItem['im']['defence'] + $amods['im'][16]) : 0);
	$iHead = (!empty($rItem['ie']) ? ($rItem['ie']['isolation'] + $amods['ie'][22]) : 0) + (!empty($rItem['im']) ? ($rItem['im']['isolation'] + $amods['im'][22]) : 0);
	$wHead = (!empty($rItem['ie']) ? ($rItem['ie']['weight'] - $amods['ie'][19]) : 0) + (!empty($rItem['im']) ? ($rItem['im']['weight'] - $amods['im'][19]) : 0);
	$dBody = /*(!empty($rItem['ib']) ? $rItem['ie']['defence'] : 0) + */(!empty($rItem['ia']) ? ($rItem['ia']['defence'] + $amods['ia'][16]) : 0);
	$iBody = /*(!empty($rItem['ib']) ? $rItem['ie']['isolation'] : 0) + */(!empty($rItem['ia']) ? ($rItem['ia']['isolation'] + $amods['ia'][22]) : 0);
	$wBody = (!empty($rItem['ib']) ? ($rItem['ib']['weight'] - $amods['ib'][19]) : 0) + (!empty($rItem['ia']) ? ($rItem['ia']['weight'] - $amods['ia'][19]) : 0);
	$dHand = (!empty($rItem['ih']) ? ($rItem['ih']['defence']  + $amods['ih'][16]) : 0);
	$iHand = (!empty($rItem['ih']) ? ($rItem['ih']['isolation'] + $amods['ih'][22]) : 0);
	$wHand = (!empty($rItem['ih']) ? ($rItem['ih']['weight'] - $amods['ih'][19]) : 0);
	$dFooter = (!empty($rItem['if']) ? ($rItem['if']['defence'] + $amods['if'][16]) : 0) + (!empty($rItem['is']) ? ($rItem['is']['defence'] + $amods['is'][16]) : 0);
	$iFooter = (!empty($rItem['if']) ? ($rItem['if']['isolation'] + $amods['if'][22]) : 0) + (!empty($rItem['is']) ? ($rItem['is']['isolation'] + $amods['is'][22]) : 0);
	$wFooter = (!empty($rItem['if']) ? ($rItem['if']['weight'] - $amods['if'][19]) : 0) + (!empty($rItem['is']) ? ($rItem['is']['weight'] - $amods['is'][19]) : 0);
	$dGeneral = $dHead + $dBody + $dHand + $dFooter;
	$iGeneral = $iHead + $iBody + $iHand + $iFooter;
	$wGeneral = $wHead + $wBody + $wHand + $wFooter + (!empty($rItem['iw']) ? ($rItem['iw']['weight'] - $amods['iw'][19]) : 0);

	$title = "<table class='tooltipBodyUser'>";
	$title .= "<tr><td colspan='2' align='center'>".$uiloc['weapon']."</td></tr>";
	$title .= "<tr><td>".$uiloc['oneslot']."</td><td style='color:".getColorNameItem(getCountMods($_POST['url']['iw'])).";'>".(!empty($rItem['iw']) ? $itemloc[$rItem['iw']['locale']] : $uiloc['empty'])."</td></tr>";
	$title .= "<tr><td>".$uiloc['damage']."</td><td>".(!empty($rItem['iw']) ? ($rItem['iw']['damage']+$amods['iw'][14]) : 0)."</td></tr>";
	$title .= "<tr><td>".$uiloc['piercing']."</td><td>".(!empty($rItem['iw']) ? $rItem['iw']['piercing'] : 0)."</td></tr>";
	$title .= "<tr><td>".$uiloc['sighting']."</td><td>".(!empty($rItem['iw']) ? $rItem['iw']['piercing'] : 0)."</td></tr>";
	$title .= "<tr><td>".$uiloc['stoppower']."</td><td>".(!empty($rItem['iw']) ? $rItem['iw']['piercing'] : 0)."</td></tr>";
	$title .= "<tr><td>".$uiloc['dispersion']."</td><td>".(!empty($rItem['iw']) ? ($rItem['iw']['dispersion'] - $amods['iw'][17]) : 0)."</td></tr>";
	$title .= "<tr><td>".$uiloc['distance']."</td><td>".(!empty($rItem['iw']) ? ($rItem['iw']['distance'] + $amods['iw'][21]) : 0)."</td></tr>";
	$title .= "<tr><td>".$uiloc['rate']."</td><td>".(!empty($rItem['iw']) ? ($rItem['iw']['rate'] + $amods['iw'][18]) : 0)."</td></tr>";
	$title .= "<tr><td>".$uiloc['weight']."</td><td>".(!empty($rItem['iw']) ? ($rItem['iw']['weight'] - $amods['iw'][19]) : 0)."</td></tr>";
	$title .= "<tr><td colspan='2' align='center' style='color:".getColorNameItem(getCountMods($_POST['url']['ie'])).";'>".$uiloc['head']."</td></tr>";
	$title .= "<tr><td>".$uiloc['defence']."</td><td>".$dHead."</td></tr>";
	$title .= "<tr><td>".$uiloc['isolation']."</td><td>".$iHead."</td></tr>";
	$title .= "<tr><td>".$uiloc['weight']."</td><td>".$wHead."</td></tr>";
	$title .= "<tr><td colspan='2' align='center' style='color:".getColorNameItem(getCountMods($_POST['url']['ia'])).";'>".$uiloc['body']."</td></tr>";
	$title .= "<tr><td>".$uiloc['defence']."</td><td>".$dBody."</td></tr>";
	$title .= "<tr><td>".$uiloc['isolation']."</td><td>".$iBody."</td></tr>";
	$title .= "<tr><td>".$uiloc['weight']."</td><td>".$wBody."</td></tr>";
	$title .= "<tr><td colspan='2' align='center' style='color:".getColorNameItem(getCountMods($_POST['url']['ih'])).";'>".$uiloc['hand']."</td></tr>";
	$title .= "<tr><td>".$uiloc['defence']."</td><td>".$dHand."</td></tr>";
	$title .= "<tr><td>".$uiloc['isolation']."</td><td>".$iHand."</td></tr>";
	$title .= "<tr><td>".$uiloc['weight']."</td><td>".$wHand."</td></tr>";
	$title .= "<tr><td colspan='2' align='center' style='color:".getColorNameItem(getCountMods($_POST['url']['is'])).";'>".$uiloc['footer']."</td></tr>";
	$title .= "<tr><td>".$uiloc['defence']."</td><td>".$dFooter."</td></tr>";
	$title .= "<tr><td>".$uiloc['isolation']."</td><td>".$iFooter."</td></tr>";
	$title .= "<tr><td>".$uiloc['weight']."</td><td>".$wFooter."</td></tr>";
	$title .= "<tr><td colspan='2' align='center'>".$uiloc['general']."</td></tr>";
	$title .= "<tr><td>".$uiloc['defence']."</td><td>".$dGeneral."</td></tr>";
	$title .= "<tr><td>".$uiloc['isolation']."</td><td>".$iGeneral."</td></tr>";
	$title .= "<tr><td>".$uiloc['weight']."</td><td>".$wGeneral."</td></tr>";
	$title .= "</table>";
	echo '<img src="include/DynamicButtons.php" class="userBotton" title="'.$title.'"/>';
?>