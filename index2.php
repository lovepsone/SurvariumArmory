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
	@include('template/header.php');
	$fp = fopen('info/index.txt', 'r');
	if ($fp) 
	{
		while (!feof($fp))
		{
			$mytext = fgets($fp, 999);
			echo $mytext;
		}
	}
	else echo "Error index!!!";
	fclose($fp);
	@include('template/footer.php');
?>
