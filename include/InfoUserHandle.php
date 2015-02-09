<?php
/**
 * @package Survarium Armory
 * @version Release 2.0
 * @revision 122
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

	$item = array(0=>'iw', 1=>'ie', 2=>'im', 3=>'ib', 4=>'ia', 5=>'ih', 6=>'is', 7=>'if');
	$itemId = array();
	$in = "";

	for ($i = 0; $i < count($_POST['url']); $i++)
	{
		$d = explode(":", $_POST['url'][$item[$i]]);
		$itemId[$item[$i]] = (int)$d[0];
		$in .= ":".$item[$i];
		if ($i+1 != count($_POST['url']))
			$in .= ", ";
	}

	$STH = $DBH->prepare("SELECT * FROM armory_items WHERE id IN (".$in.")");
	$STH->execute($itemId);
	$rItem = array();
	while($res = $STH->fetch(PDO::FETCH_ASSOC))
	{
		$rItem[$res['selector']] = $res;
	}
	$dHead = (!empty($rItem['ie']) ? $rItem['ie']['defence'] : 0) + (!empty($rItem['im']) ? $rItem['im']['defence'] : 0);
	$iHead = (!empty($rItem['ie']) ? $rItem['ie']['isolation'] : 0) + (!empty($rItem['im']) ? $rItem['im']['isolation'] : 0);
	$wHead = (!empty($rItem['ie']) ? $rItem['ie']['weight'] : 0) + (!empty($rItem['im']) ? $rItem['im']['weight'] : 0);
	$dBody = /*(!empty($rItem['ib']) ? $rItem['ie']['defence'] : 0) + */(!empty($rItem['ia']) ? $rItem['ia']['defence'] : 0);
	$iBody = /*(!empty($rItem['ib']) ? $rItem['ie']['isolation'] : 0) + */(!empty($rItem['ia']) ? $rItem['ia']['isolation'] : 0);
	$wBody = (!empty($rItem['ib']) ? $rItem['ib']['weight'] : 0) + (!empty($rItem['ia']) ? $rItem['ia']['weight'] : 0);
	$dHand = (!empty($rItem['ih']) ? $rItem['ih']['defence'] : 0);
	$iHand = (!empty($rItem['ih']) ? $rItem['ih']['isolation'] : 0);
	$wHand = (!empty($rItem['ih']) ? $rItem['ih']['weight'] : 0);
	$dFooter = (!empty($rItem['if']) ? $rItem['if']['defence'] : 0) + (!empty($rItem['is']) ? $rItem['is']['defence'] : 0);
	$iFooter = (!empty($rItem['if']) ? $rItem['if']['isolation'] : 0) + (!empty($rItem['is']) ? $rItem['is']['isolation'] : 0);
	$wFooter = (!empty($rItem['if']) ? $rItem['if']['weight'] : 0) + (!empty($rItem['is']) ? $rItem['is']['weight'] : 0);
	$dGeneral = $dHead + $dBody + $dHand + $dFooter;
	$iGeneral = $iHead + $iBody + $iHand + $iFooter;
	$wGeneral = $wHead + $wBody + $wHand + $wFooter;

	$title = "<table class='tooltipBodyUser'>";
	$title .= "<tr><td colspan='2' align='center'>".$uiloc['weapon']."</td></tr>";
	$title .= "<tr><td>".$uiloc['oneslot']."</td><td>".(!empty($rItem['iw']) ? $itemloc[$rItem['iw']['locale']] : $uiloc['empty'])."</td></tr>";
	$title .= "<tr><td>".$uiloc['damage']."</td><td>".(!empty($rItem['iw']) ? $rItem['iw']['damage'] : 0)."</td></tr>";
	$title .= "<tr><td>".$uiloc['piercing']."</td><td>".(!empty($rItem['iw']) ? $rItem['iw']['piercing'] : 0)."</td></tr>";
	$title .= "<tr><td>".$uiloc['sighting']."</td><td>".(!empty($rItem['iw']) ? $rItem['iw']['piercing'] : 0)."</td></tr>";
	$title .= "<tr><td>".$uiloc['stoppower']."</td><td>".(!empty($rItem['iw']) ? $rItem['iw']['piercing'] : 0)."</td></tr>";
	$title .= "<tr><td>".$uiloc['dispersion']."</td><td>".(!empty($rItem['iw']) ? $rItem['iw']['dispersion'] : 0)."</td></tr>";
	$title .= "<tr><td>".$uiloc['distance']."</td><td>".(!empty($rItem['iw']) ? $rItem['iw']['distance'] : 0)."</td></tr>";
	$title .= "<tr><td>".$uiloc['rate']."</td><td>".(!empty($rItem['iw']) ? $rItem['iw']['rate'] : 0)."</td></tr>";
	$title .= "<tr><td>".$uiloc['weight']."</td><td>".(!empty($rItem['iw']) ? $rItem['iw']['weight'] : 0)."</td></tr>";
	$title .= "<tr><td colspan='2' align='center'>".$uiloc['head']."</td></tr>";
	$title .= "<tr><td>".$uiloc['defence']."</td><td>".$dHead."</td></tr>";
	$title .= "<tr><td>".$uiloc['isolation']."</td><td>".$iHead."</td></tr>";
	$title .= "<tr><td>".$uiloc['weight']."</td><td>".$wHead."</td></tr>";
	$title .= "<tr><td colspan='2' align='center'>".$uiloc['body']."</td></tr>";
	$title .= "<tr><td>".$uiloc['defence']."</td><td>".$dBody."</td></tr>";
	$title .= "<tr><td>".$uiloc['isolation']."</td><td>".$iBody."</td></tr>";
	$title .= "<tr><td>".$uiloc['weight']."</td><td>".$wBody."</td></tr>";
	$title .= "<tr><td colspan='2' align='center'>".$uiloc['hand']."</td></tr>";
	$title .= "<tr><td>".$uiloc['defence']."</td><td>".$dHand."</td></tr>";
	$title .= "<tr><td>".$uiloc['isolation']."</td><td>".$iHand."</td></tr>";
	$title .= "<tr><td>".$uiloc['weight']."</td><td>".$wHand."</td></tr>";
	$title .= "<tr><td colspan='2' align='center'>".$uiloc['footer']."</td></tr>";
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