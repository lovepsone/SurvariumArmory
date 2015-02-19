<?php
/**
 * @package Survarium Armory
 * @version Release 2.0
 * @revision 164
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

	if (isset($_SESSION['gmlevel']) && $_SESSION['gmlevel'] < 2)
		Redirect(BASEDIR.'index.php', true);

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
		$data = $STH->fetch(PDO::FETCH_ASSOC);
		echo '<form name="setitemform" method="post"><table class="tbl">';
		if ((int)$data['typeItem'] == 1)
		{
			if ($data['selector'] == 'ie')
			{
				echo '<tr><td>'.$locadmin['twoslots'].'</td><td><select name="twoslots" class="textbox">';
				if ($data['twoslots'] == 0)
				{
					echo '<option value="0" selected="selected">'.$locadmin['n'].'</option>';
					echo '<option value="1">'.$locadmin['y'].'</option>';
				}
				else
				{
					echo '<option value="0">'.$locadmin['n'].'</option>';
					echo '<option value="1" selected="selected">'.$locadmin['y'].'</option>';
				}
				echo '</select></td></tr>';
			}
			if ($data['selector'] == 'ib')
			{
				echo '<tr><td>'.$locadmin['typeib'].'</td><td><select name="typeib" class="textbox">';
				if ($data['typeib'] == 0)
				{
					echo '<option value="0" selected="selected">'.$locadmin['n'].'</option>';
					echo '<option value="1">'.$locadmin['y'].'</option>';
				}
				else
				{
					echo '<option value="0">'.$locadmin['n'].'</option>';
					echo '<option value="1" selected="selected">'.$locadmin['y'].'</option>';
				}
				echo '</select></td></tr>';	
			}
			else
			{
				echo '<tr><td>'.$locale['defence'].'</td><td><input type="text" name="defence" value="'.$data['defence'].'" maxlength="255" class="textbox" style="width:230px;"/></td></tr>';
				echo '<tr><td>'.$locale['isolation'].'</td><td><input type="text" name="isolation" value="'.$data['isolation'].'" maxlength="255" class="textbox" style="width:230px;"/></td></tr>';
			}
			echo '<tr><td>'.$locale['weight'].'</td><td><input type="text" name="weight" value="'.$data['weight'].'" maxlength="255" class="textbox" style="width:230px;"/></td></tr>';
			echo '<tr><td>'.$locale['lvl'].'</td><td><input type="text" name="level" value="'.$data['level'].'" maxlength="255" class="textbox" style="width:230px;"/></td></tr>';
			echo '<tr><td>'.$locadmin['cost'].'</td><td><input type="text" name="cost" value="'.$data['cost'].'" maxlength="255" class="textbox" style="width:230px;"/></td></tr>';
			echo '<tr><td colspan="2" align="center"><input type="hidden" name="iditem"  class="button" value="'.$data['id'].'"/><input type="submit" name="selitem"  class="button" value="accept"/></td></tr>';
		}
		else if ((int)$data['typeItem'] == 2)
		{
			echo '<tr><td>'.$locadmin['typeweapon'].'</td><td><select name="typeweapon" class="textbox">';
			if ($data['typeweapon'] == 0)
			{
				echo '<option value="0" selected="selected">'.$locadmin['tw0'].'</option>';
				echo '<option value="1">'.$locadmin['tw1'].'</option>';
			}
			else
			{
				echo '<option value="0">'.$locadmin['tw0'].'</option>';
				echo '<option value="1" selected="selected">'.$locadmin['tw1'].'</option>';
			}
			echo '</select></td></tr>';
			echo '<tr><td>'.$locale['damage'].'</td><td><input type="text" name="damage" value="'.$data['damage'].'" maxlength="255" class="textbox" style="width:230px;"/></td></tr>';
			echo '<tr><td>'.$locale['piercing'].'</td><td><input type="text" name="piercing" value="'.$data['piercing'].'" maxlength="255" class="textbox" style="width:230px;"/></td></tr>';
			echo '<tr><td>'.$locale['sighting'].'</td><td><input type="text" name="sighting" value="'.$data['sighting'].'" maxlength="255" class="textbox" style="width:230px;"/></td></tr>';
			echo '<tr><td>'.$locale['stoppower'].'</td><td><input type="text" name="stoppower" value="'.$data['stoppower'].'" maxlength="255" class="textbox" style="width:230px;"/></td></tr>';
			echo '<tr><td>'.$locale['dispersion'].'</td><td><input type="text" name="dispersion" value="'.$data['dispersion'].'" maxlength="255" class="textbox" style="width:230px;"/></td></tr>';
			echo '<tr><td>'.$locale['distance'].'</td><td><input type="text" name="distance" value="'.$data['distance'].'" maxlength="255" class="textbox" style="width:230px;"/></td></tr>';
			echo '<tr><td>'.$locale['rate'].'</td><td><input type="text" name="rate" value="'.$data['rate'].'" maxlength="255" class="textbox" style="width:230px;"/></td></tr>';
			echo '<tr><td>'.$locale['weight'].'</td><td><input type="text" name="weight" value="'.$data['weight'].'" maxlength="255" class="textbox" style="width:230px;"/></td></tr>';
			echo '<tr><td>'.$locale['lvl'].'</td><td><input type="text" name="level" value="'.$data['level'].'" maxlength="255" class="textbox" style="width:230px;"/></td></tr>';
			echo '<tr><td>'.$locadmin['cost'].'</td><td><input type="text" name="cost" value="'.$data['cost'].'" maxlength="255" class="textbox" style="width:230px;"/></td></tr>';
			echo '<tr><td colspan="2" align="center"><input type="hidden" name="iditem"  class="button" value="'.$data['id'].'"/><input type="submit" name="selitem"  class="button" value="accept"/></td></tr>';
		}
		echo '</table></form>';
	}
	if (isset($_POST['selitem']))
	{
		$data = array(
		'id'=> $_POST['iditem'],
		'twoslots'=> (isset($_POST['twoslots']) ? $_POST['twoslots'] : 0),
		'defence'=> (isset($_POST['defence']) ? $_POST['defence'] : 0),
		'isolation'=> (isset($_POST['isolation']) ? $_POST['isolation'] : 0),
		'typeib'=> (isset($_POST['typeib']) ? $_POST['typeib'] : 0),
		'typeweapon'=> (isset($_POST['typeweapon']) ? $_POST['typeweapon'] : 0),
		'damage'=> (isset($_POST['damage']) ? $_POST['damage'] : 0),
		'piercing'=> (isset($_POST['piercing']) ? $_POST['piercing'] : 0),
		'sighting'=> (isset($_POST['sighting']) ? $_POST['sighting'] : 0),
		'stoppower'=> (isset($_POST['stoppower']) ? $_POST['stoppower'] : 0),
		'dispersion'=> (isset($_POST['dispersion']) ? $_POST['dispersion'] : 0),
		'distance'=> (isset($_POST['distance']) ? $_POST['distance'] : 0),
		'rate'=> (isset($_POST['rate']) ? $_POST['rate'] : 0),
		'weight'=> (isset($_POST['weight']) ? $_POST['weight'] : 0),
		'cost'=> (isset($_POST['cost']) ? $_POST['cost'] : 0),
		'level'=> (isset($_POST['level']) ? $_POST['level'] : 0)
		);
		$STH = $DBH->prepare("UPDATE armory_items SET twoslots=:twoslots, defence=:defence, isolation=:isolation, typeib=:typeib, typeweapon=:typeweapon, damage=:damage, piercing=:piercing, sighting=:sighting, stoppower=:stoppower, dispersion=:dispersion, distance=:distance, rate=:rate, weight=:weight, cost=:cost, level=:level WHERE id=:id");
		$STH->execute($data);
	}
	require_once THEMES.'footer.php';
?>