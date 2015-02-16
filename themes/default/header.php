<?php
/**
 * @package Survarium Armory
 * @version Release 2.0
 * @revision 136
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
	$body = array(1 => 'body1.png', 2 => 'body2.png', 3 => 'body3.png', 4 => 'body1.png');
	echo '<!DOCTYPE html>';
	echo '<html xmlns="http://www.w3.org/1999/xhtml">';
	echo '<head>';
	echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
	echo '<title>Survarium Armory</title>';
	echo '<link rel="stylesheet" href="themes/default/style.css">';
	echo '<script type="text/javascript" src="include/js/jquery.min.js"></script>';
	echo '</head><body style="background-image: url(themes/default/'.$body[rand(1, count($body))].'); background-size: 100% 100%; background-repeat: no-repeat;background-position: 50% 50%;">';

	require_once 'theme.php';
?>
