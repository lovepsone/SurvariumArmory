<?php
/**
 * @package Survarium Armory
 * @version Release 2.0
 * @revision 168
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
	session_start();
	error_reporting(E_ALL);

	$folder_level = ''; $i = 0;
	function Redirect($location, $script = false)
	{
		if (!$script)
		{
			header("Location: ".str_replace("&amp;", "&", $location));
			exit;
		}
		else
		{
			echo "<script type='text/javascript'>document.location.href='".str_replace("&amp;", "&", $location)."'</script>\n";
			exit;
		}
	}

	while (!file_exists($folder_level.'conf.php'))
	{
		$folder_level .= '../'; $i++;
		if ($i == 7) { die('Config file not found'); }
	}
	define("BASEDIR", $folder_level);
	require_once BASEDIR.'conf.php';
	// theme
	if (file_exists(BASEDIR."themes/".$Config['settings']['theme']))
		define("THEMES", BASEDIR."themes/".$Config['settings']['theme']."/");
	else
		define("THEMES", BASEDIR."themes/default/");

	define("INCLUDES", BASEDIR."include/");
	define("SELF", basename($_SERVER['PHP_SELF']));

	$DB = NULL;
	if(!@include(INCLUDES.'class.DB.php'))
		die("<b>Error:</b> can not open class.DB.php!!!");
	define("DB_PREFIX", $Config['mysql']['prefix']);

	$DBH = new DB("mysql:host=".$Config['mysql']['hostname'].";dbname=".$Config['mysql']['dbname'], $Config['mysql']['username'], $Config['mysql']['password'], $Config['mysql']['charset']);
	$DBH->error = $Config['mysql']['error'];
	// load settings
	$STH = $DBH->prepare("SELECT * FROM `armory_settings`");
	$STH->execute();
	while($row = $STH->fetch(PDO::FETCH_ASSOC))
		$Config[$row['settings_name']] = $row['settings_value'];

	if(!@include(BASEDIR.'locale/'.$Config['settings']['locale'].'/locale.php'))
		die("<b>Error:</b> can not loaded locale!!!");
	if(!@include(BASEDIR.'locale/'.$Config['settings']['locale'].'/locale_admin.php'))
		die("<b>Error:</b> can not loaded admin locale!!!");
?>