<?php 
/**
 * @package Survarium Armory
 * @version Release 2.0
 * @revision 147
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
	@include('../maincore.php');

	$STH = $DBH->prepare("SELECT id FROM armory_items");
	$STH->execute();
	$i = 0;
	while($res = $STH->fetch(PDO::FETCH_ASSOC))
	{
		echo '<img src="DynamicIconSimple.php?id='.$res['id'].'" style="display: none">';
		echo '<img src="DynamicIconBlue.php?id='.$res['id'].'" style="display: none">';
		echo '<img src="DynamicIconGreen.php?id='.$res['id'].'" style="display: none">';
		echo '<img src="DynamicIconGold.php?id='.$res['id'].'" style="display: none">';
		echo '<img src="DynamicIcon.php?id='.$res['id'].'" style="display: none">';
		echo $i.'...<br>';
		$i++;
	}
?>