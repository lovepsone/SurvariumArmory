<?php
/**
 * @package Survarium Armory
 * @version Release 2.0
 * @revision 135
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
	require_once THEMES.'header_tinymse.php';
	echo '<table class="body-main" border="0px" align="center"><tr><td align="center">';//основная таблица
	$sWelcome = array('n'=>'welcome', 'v'=>'');
	$SChangelog = array('n'=>'changelog', 'v'=>'');
	if (isset($_POST['savesettings']))
	{
		$sWelcome['v'] = $_POST['welcome'];
		$SChangelog['v'] = $_POST['changelog'];
		$STH = $DBH->prepare("UPDATE armory_settings SET settings_value=:v WHERE settings_name=:n");
		$STH->execute($sWelcome);
		$STH = $DBH->prepare("UPDATE armory_settings SET settings_value=:v WHERE settings_name=:n");
		$STH->execute($SChangelog);
		Redirect(SELF);
	}
	$STH = $DBH->prepare("SELECT * FROM `armory_settings`");
	$STH->execute();
	while($row = $STH->fetch(PDO::FETCH_ASSOC))
		$settings[$row['settings_name']] = $row['settings_value'];

	echo '<form name="settingsform" method="post"><table class="tbl">';
	echo '<tr><td colspan="2" align="center"><h2>'.$locadmin['settings'].'</h2></td></tr>';
	echo '<tr><td align="right" with="200px">'.$locadmin['welcome'].'</td><td align="left" with="400px"><textarea id="txt" name="welcome">'.$settings['welcome'].'</textarea></td></tr>';
	echo '<tr><td align="right" with="200px">'.$locadmin['changelog'].'</td><td align="left" with="400px"><textarea id="txt" name="changelog">'.$settings['changelog'].'</textarea></td></tr>';
	echo '<tr><td colspan="2" align="center"><input type="submit" name="savesettings"  class="button" value="accept"/></td></tr>';
	echo '</table></form>';

	echo '</td></tr></table>';//основная таблица
	require_once THEMES.'footer.php';
?>