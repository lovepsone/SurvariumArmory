<?php
/**
 * @package Survarium Armory
 * @version Release 2.0
 * @revision 145
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
	HeadMenu();

	echo '<form name="settypeitemform" method="post"><table class="tbl">';
	echo '<tr><td colspan="3" align="center"><h2>'.$locadmin['editmods'].'</h2></td></tr>';
	if (isset($_POST['selmod']))
	{
		$data = array(
		'idItem'=>$_POST['iditem'],
		'idMod'=>$_POST['mod'],
		'value'=>$_POST['valuemod']
		);
		$STH = $DBH->prepare("INSERT INTO `armory_items_mods`(`idItem`, `idMod`, `value`) VALUES (:idItem,:mod,:valuemod)");
		$STH->execute($data);
		Redirect(SELF, true);
	}
	if (isset($_GET['act']) && $_GET['act'] == 'add')
	{
		//echo $_GET['iditem'];
		$STH = $DBH->prepare("SELECT * FROM armory_mods");
		$STH->execute();
		$i = 0; $dataMods = '';
		while($res = $STH->fetch(PDO::FETCH_ASSOC))
		{
			$sel = ($i == 0 ? ' selected="selected"' : '');
			$dataMods .= '<option value="'.$res['id'].'"'.$sel.'>'.$modloc[$res['localeMod']].'</option>';
			$i++;
		}
		$STH = $DBH->query("SELECT locale FROM armory_items WHERE id=".(int)$_GET['iditem']);
		$STH->execute();
		$res = $STH->fetch(PDO::FETCH_ASSOC);

		echo '<tr><td align="center">'.$locadmin['nameItem'].'</td><td align="center">'.$itemloc[$res['locale']].'</td></tr>';
		echo '<tr><td align="center">'.$locadmin['mods'].'</td><td align="center"><select name="mod" class="textbox">'.$dataMods.'</select></td></tr>';
		echo '<tr><td align="center">'.$locadmin['value'].'</td><td align="center"><input type="text" name="valuemod"  value="0"/></td></tr>';
		echo '<tr><td colspan="2" align="center"><input type="hidden" name="iditem"  class="button" value="'.$_GET['iditem'].'"/><input type="submit" name="selmod"  class="button" value="accept"/></td></tr>';
	}
	else if (isset($_GET['act']) && $_GET['act'] == 'del')
	{
		$rows = $DBH->exec("DELETE FROM `armory_items_mods` WHERE idAIM=".(int)$_GET['idiaim']);
		if ($rows)
			echo '<tr><td colspan="3" align="center" class="editmod">'.$locadmin['delmodsucces'].'<br><a href="'.SELF.'">'.$locadmin['back'].'</a></td></tr>';
		else
			echo '<tr><td colspan="3" align="center">Error!!!</td></tr>';
	}
	else
	{
		echo '<tr><td align="left">'.$locadmin['subject'].'</td><td align="left">'.$locadmin['mods'].'</td><td align="left">'.$locadmin['activity'].'</td></tr>';
		echo '<tr><td colspan="3" align="center"><hr></td></tr>';
		$STH = $DBH->prepare("SELECT * FROM armory_items_mods LEFT JOIN armory_mods ON armory_mods.`id` = armory_items_mods.`idMod` LEFT JOIN armory_items ON armory_items_mods.`idItem`=armory_items.`id` ORDER BY armory_items.`id`");
		$STH->execute();
		while($res = $STH->fetch(PDO::FETCH_ASSOC))
		{
			echo '<tr><td align="left">'.$itemloc[$res['locale']].'</td>';
			echo '<td align="left">'.$modloc[$res['localeMod']].$res['mathsign'].$res['value'].$res['txtsign'].'</td>';
			echo '<td align="left" class="editmod"><a href="'.SELF.'?act=add&iditem='.$res['id'].'">'.$locadmin['addmods'].'</a>|<a href="'.SELF.'?act=del&idiaim='.$res['idAIM'].'">'.$locadmin['delmods'].'</a></td></tr>';
		}
	}

	echo '</table></form>';

	require_once THEMES.'footer.php';
?>