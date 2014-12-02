<?php
/**
 * @package Survarium Armory
 * @version Release 1.1
 * @revision 53
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
	echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
	echo '<html xmlns="http://www.w3.org/1999/xhtml">';
	echo '<head>';
	echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
	echo '<title>Survarium Armory</title>';
	echo '<link rel="stylesheet" href="style.css">';
	echo '<link rel="stylesheet" href="style-armory.css">';
	echo '<script type="text/javascript" src="include/js/jquery.min.js"></script>';
	//echo '<script type="text/javascript" src="include/js/jquery.json.js"></script>';
	echo '<script type="text/javascript" src="include/js/ajax.js"></script>';
	echo '<script type="text/javascript" src="include/js/easyTooltip.js"></script>';
	echo '<script type="text/javascript" src="include/js/jquery.ui.custom.min.js"></script>';
	echo '<script type="text/javascript" src="include/js/DragAndDrop.js"></script>';
	echo '<script type="text/javascript" src="include/js/jquery.mousewheel.min.js"></script>';
	echo '<script type="text/javascript" src="include/js/modItems.js"></script>';

	echo '</head><body>';
	session_start();
	error_reporting(E_ALL);
	@include("include/locale.php");

	echo '<table align="center" width="100%"><tr><td class="menu-left"></td><td class="menu">';
	echo '&emsp;<a href="" class="menu-link">&middot;'.$txt['menu_out'].'<a>';
	echo '</td><td class="menu-right"></td></tr></table>';

	echo '<div align="center"><img src="images/logo.jpg"></div>'; // logo
	echo '<table align="center" width="1150px"><tr><td class="b-top-left"></td><td class="b-top"></td><td class="b-top-right"></td></tr><tr><td class="b-left"></td><td class="b-midl" height="650px">';
?>
