<?php 
/**
 * @package Survarium Armory
 * @version Release 2.0
 * @revision 75
 * @copyright (c) 2014-2015 lovepsone
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
	@include('locale.php');
	@include('itemList.php');
	header ("Content-type: image/png");
	// настройка текста
	$font = "Arial.ttf";
	$fontsize = 12;
	$text = $txt[$items[$_GET["id"]]['l']];
	$idfraction = $items[$_GET["id"]]['fraction'];

	$bg = ImageCreateFromPng("images/bg.png");
	imagesavealpha($bg, true);
	$icon = ImageCreateFromPng("images/".$_GET["id"].".png");
	imagesavealpha($icon, true);
	$fraction = ImageCreateFromPng("images/fractions/".$idfraction.".png");
	imagesavealpha($fraction, true);
	$color = ImageColorAllocate($bg, 20, 20, 170);
	$colorlvl = ImageColorAllocate($bg, 98, 98, 98);

	imagecopy($bg, $icon, 2, 10, 0, 0, 171, 90);
	imagecopy($bg, $fraction, 2, 2, 0, 0, 20, 20);
	// размещаем название
	$sizeimgbg = getimagesize("images/bg.png");
	$imagebg_x = $sizeimgbg[0];
	$imagebg_y = $sizeimgbg[1];
	$textsize = imagettfbbox($fontsize, 0, $font, $text);
	$text_x = $textsize[4];
	$text_y = abs($textsize[7]) + $textsize[1];
	$text_x = ($imagebg_x/2) - ($text_x/2);
	imagettftext($bg, $fontsize, 0, $text_x/*x*/, 115/*y*/, $color, $font, $text);
	// размещаем уровень
	if ($items[$_GET["id"]]['lvl'] != 0)
		imagettftext($bg, $fontsize, 0, 22, 18, $colorlvl, $font, $items[$_GET["id"]]['lvl']);

	imagepng($bg, "../images/icon/blue/".$items[$_GET["id"]]['fraction']."_".$_GET["id"].".png");
	imagedestroy($icon);
	imagedestroy($fraction);
	imagedestroy($bg);
?>