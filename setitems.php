<?php
/**
 * @package Survarium Armory
 * @version Release 2.0
 * @revision 141
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
	echo '<table class="body-main" border="0px" align="center"><tr><td align="center">';//основная таблица
	$item = array(0=>'iw', 1=>'ie', 2=>'im', 3=>'ib', 4=>'ia', 5=>'ih', 6=>'is', 7=>'if');
	$dataItemType = '';
	for ($i = 0; $i < count($item); $i++)
	{
		$sel = ($i == 0 ? ' selected="selected"' : '');
		$dataItemType .= '<option value="'.$item[$i].'"'.$sel.'>'.$locale[$item[$i]].'</option>';
	}

	echo '<form name="settypeitemform" method="post"><table class="tbl">';
	echo '<tr><td colspan="2" align="center"><h2>'.$locadmin['typeitem'].'</h2></td></tr>';
	echo '<tr><td align="right"><select name="typeItem" class="textbox">'.$dataItemType.'</select></td><td align="left"><input type="submit" name="seltypeitem"  class="button" value="accept"/></td></tr>';
	echo '</table></form>';

	$dataItem = '';
	if (isset($_POST['seltypeitem']))
	{
		$STH = $DBH->prepare("SELECT id, locale FROM armory_items WHERE selector=:sel");
		$STH->execute(array('sel' => $_POST['typeItem']));
		$i=0;
		while($res = $STH->fetch(PDO::FETCH_ASSOC))
		{
			$sel = ($i == 0 ? ' selected="selected"' : '');
			$dataItem .= '<option value="'.$res['id'].'"'.$sel.'>'.$itemloc[$res['locale']].'</option>';
			$i++;
		}
		echo '<form name="setitemform" method="post"><table class="tbl">';
		echo '<tr><td colspan="2" align="center"><h2>'.$locadmin['item'].'</h2></td></tr>';
		echo '<tr><td align="right"><select name="idItem" class="textbox">'.$dataItem.'</select></td><td align="left"><input type="submit" name="seliditem"  class="button" value="accept"/></td></tr>';
		echo '</table></form>';
	}

	if (isset($_POST['seliditem']))
	{
		$STH = $DBH->query("SELECT * FROM armory_items WHERE id=".$_POST['idItem']);
		$STH->execute();
		print_r($STH->fetch(PDO::FETCH_ASSOC));
	}

	echo '</td></tr></table>';//основная таблица
	require_once THEMES.'footer.php';
?>