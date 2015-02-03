<?php 
/**
 * @package Survarium Armory
 * @version Release 2.0
 * @revision 111
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
	@include_once("../maincore.php");
	$font = "Arial.ttf";
	$fontsize = 14;
	$text = $locale['equipment'];

	$bg = ImageCreateFromPng("../images/user/button.png");
	header ("Content-type: image/png");
	imagesavealpha($bg, true);
	$color = ImageColorAllocate($bg, 255, 255, 255);
	//размеры фона
	$sizeimgbg = getimagesize("../images/user/button.png");
	$imagebg_x = $sizeimgbg[0];
	$imagebg_y = $sizeimgbg[1];
	// размещаем название
	$textsize = imagettfbbox($fontsize, 0, $font, $text);
	$text_x = $textsize[4];
	$text_y = $textsize[1];
	$text_x = ($imagebg_x/2) - ($text_x/2);
	$text_y = ($imagebg_y/2) + ($text_y/2);
	imagettftext($bg, $fontsize, 0, $text_x/*x*/, $text_y/*y*/, $color, $font, $text);

	imagepng($bg);
	imagedestroy($bg);
?>