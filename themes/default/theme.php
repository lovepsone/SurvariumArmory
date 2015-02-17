<?php
/**
 * @package Survarium Armory
 * @version Release 2.0
 * @revision 160
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
	function HeadMenu()
	{
		global $locale, $_SESSION;
		echo '<table cellpadding="0" cellspacing="0" width="100%"><tr>';
		echo '<td class="head" align="right">';
		echo '<a href="http://llgc.ru">&middot;Life Line</a>';
		echo '<a href="index.php">&middot;'.$locale['main'].'</a>';
		echo '<a href="inventory.php">&middot;'.$locale['inventory'].'</a>';
		echo '<a href="changelog.php">&middot;'.$locale['changelog'].'</a>';
		if (!isset($_SESSION['id']))
			echo '<a href="auth.php">&middot;'.$locale['auth'].'</a>';
		else if (isset($_SESSION['gmlevel']) && $_SESSION['gmlevel'] > 2)
			echo '<a href="admin.php">&middot;'.$locale['admin'].'</a>';

		echo '</td></tr></table>';

		$body = array(1 => 'body1.png', 2 => 'body2.png', 3 => 'body3.png', 4 => 'body1.png');
		$style = 'background-image: url(themes/default/'.$body[rand(1, count($body))].'); background-size: 100% 100%; background-repeat: no-repeat;background-position: 50% 50%;';
		echo '<table class="body-main" border="0px" align="center" style="'.$style.'"><tr><td align="center">';//основная таблица
	}

	function Footer()
	{
		global $Config;
		echo '</td></tr></table>';//основная таблица

		echo '<table cellpadding="0" cellspacing="0" width="100%"><tr>';
		echo '<td class="footer" align="center"><b>Survarium Armory v'.$Config['settings']['version'].'. Copyright &copy; 2014-2015 by Lovepsone</td>';
		echo '</tr></table>';
	}
?>