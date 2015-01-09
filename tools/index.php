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
	@include('itemList.php');

	for ($i = 1; $i <= count($items); $i++)
	{
		$l = $i*100/count($items);
		echo 'Loading... '.(int)$l.'%<br>';
		echo '<img src="DynamicIconSimple.php?id='.$i.'" style="display: none">';
		echo '<img src="DynamicIconBlue.php?id='.$i.'" style="display: none">';
		echo '<img src="DynamicIconGreen.php?id='.$i.'" style="display: none">';
		echo '<img src="DynamicIconGold.php?id='.$i.'" style="display: none">';
		echo '<img src="DynamicIcon.php?id='.$i.'" style="display: none">';
	}
?>