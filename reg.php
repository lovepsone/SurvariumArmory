<?php
/**
 * @package Survarium Armory
 * @version Release 2.0
 * @revision 158
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

	if (isset($_POST['register']))
	{
		$STH = $DBH->prepare("SELECT COUNT(*) as count FROM armory_user WHERE name=:n AND mail=:m");
		$STH->execute(array('n' => $_POST['login'], 'm' => $_POST['email']));
        	if ($STH->fetch(PDO::FETCH_OBJ)->count > 0)
			Redirect(SELF.'?err=1', true);
		if (($_POST['login'] == $_POST['pass1']) || ($_POST['pass1'] != $_POST['pass2']) || ($_POST['login'] == ''))
			Redirect(SELF.'?err=2', true);
		if (!mb_eregi("^[a-zA-Z0-9\._-]+@[a-zA-Z0-9\._-]+\.[a-zA-Z]{2,4}$", $_POST['email']))
			Redirect(SELF.'?err=3', true);

		$STH = $DBH->prepare("INSERT INTO `armory_user`(`name`, `pass`, `mail`) VALUES (:n, :p, :m)");
		$STH->execute(array('n' => $_POST['login'], 'p' => md5($_POST['pass1']), 'm' => $_POST['email']));
		Redirect('index.php', true);
	}
	else
	{
		$login = isset($_POST['login']) ? $_POST['login'] : "";
		$email =  isset($_POST['email']) ? $_POST['email'] : "";
		echo '<form name="reg" method="post"><table class="tbl">';
		echo '<tr><td colspan="2" align="center"><h2>'.$locale['reg'].'</h2></td></tr>';
		if (isset($_GET['err']))
			echo '<tr><td colspan="2" align="center">Error: '.$_GET['err'].'</td></tr>';
		echo '<tr><td align="right">'.$locale['login'].'</td><td align="left"><input type="text" class="textbox" name="login" value="'.$login.'"/></td></tr>';
		echo '<tr><td align="right">'.$locale['pass1'].'</td><td align="left"><input type="password" class="textbox" name="pass1" value=""/></td></tr>';
		echo '<tr><td align="right">'.$locale['pass2'].'</td><td align="left"><input type="password" class="textbox" name="pass2" value=""/></td></tr>';
		echo '<tr><td align="right">'.$locale['mail'].'</td><td align="left"><input type="text" class="textbox" name="email" value="'.$email.'"/></td></tr>';
		echo '<tr><td colspan="2" align="center"><input type="submit" name="register"  class="button" value="'.$locale['reg'].'"/></td></tr>';
		echo '</table></form>';
	}

	require_once THEMES.'footer.php';
?>