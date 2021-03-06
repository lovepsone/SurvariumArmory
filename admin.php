<?php 
/**
 * @package Survarium Armory
 * @version Release 2.0
 * @revision 161
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
	require_once 'maincore.php';
	require_once THEMES.'header.php';
	HeadMenu();
	if (isset($_SESSION['gmlevel']) && $_SESSION['gmlevel'] < 2)
		Redirect(BASEDIR.'index.php', true);

	echo '<table class="tbl"><tr><td colspan="2" align="center"><h2>'.$locadmin['wpa'].'</h2></td></tr>';
	echo '<tr><td align="left" class="editmod"><a href="settings.php">'.$locadmin['setmain'].'</a></td></tr>';
	echo '<tr><td align="left" class="editmod"><a href="setitems.php">'.$locadmin['setitems'].'</a></td></tr>';
	echo '<tr><td align="left" class="editmod"><a href="setmods.php">'.$locadmin['setmods'].'</a></td></tr>';
	echo '<tr><td align="left" class="editmod"><a href="index.php">'.$locadmin['exit'].'</a></td></tr>';
	echo '</table>';

	require_once THEMES.'footer.php';
?>