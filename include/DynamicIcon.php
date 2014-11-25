<?php 
/**
 * @package Survarium Armory
 * @version Release 1.0
 * @revision 17
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
	// требуется добавить проверки
	header ("Content-type: image/png");
	$source = ImageCreateFromPng("../images/icon/".$_GET["n"].".png");
	$icon = ImageCreateFromPng("../images/money.png");
	$color = ImageColorAllocate($icon, 60, 60, 60);
	imagealphablending($source, false);
	imagealphablending($icon, false);
	imagesavealpha($icon, true);
	imagecopy($source, $icon, 68, 65, 0, 0, 49, 15);
	ImageString($source, 2, 78, 66, $_GET["p"], $color);
	imagepng($source);
	imagedestroy($icon);
	imagedestroy($source);
?>