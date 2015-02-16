<?php
/**
 * @package Survarium Armory
 * @version Release 2.0
 * @revision 159
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

	if (isset($_SESSION['user']))
		Redirect('index.php', true);

	if (isset($_POST['auth']))
	{
		$data = array('n' => $_POST['login'], 'p' => md5($_POST['pass']));
		$STH = $DBH->prepare("SELECT COUNT(*) as count FROM armory_user WHERE name=:n AND pass=:p");
		$STH->execute($data);
        	if ($STH->fetch(PDO::FETCH_OBJ)->count < 1)
			Redirect(SELF.'?err=1', true);
		$STH = $DBH->prepare("SELECT * FROM armory_user WHERE name=:n AND pass=:p");
		$STH->execute($data);
		$res = $STH->fetch(PDO::FETCH_ASSOC);
		$_SESSION['user'] = $res['name'];
		$_SESSION['gmlevel'] = $res['gmlevel'];
		$_SESSION['id'] = $res['id'];
		Redirect('index.php', true);
		
	}
	else
	{
		echo '<form name="authp" method="post"><table class="tbl">';
		echo '<tr><td colspan="2" align="center"><h2>'.$locale['auth'].'</h2></td></tr>';
		if (isset($_GET['err']))
			echo '<tr><td colspan="2" align="center">Error: '.$_GET['err'].'</td></tr>';
		echo '<tr><td align="right">'.$locale['login'].'</td><td align="left"><input type="text" class="textbox" name="login" value=""/></td></tr>';
		echo '<tr><td align="right">'.$locale['pass1'].'</td><td align="left"><input type="password" class="textbox" name="pass" value=""/></td></tr>';
		echo '<tr><td colspan="2" align="center"><input type="submit" name="auth"  class="button" value="accept"/></td></tr>';
		echo '</table></form>';
	}

	require_once THEMES.'footer.php';
?>