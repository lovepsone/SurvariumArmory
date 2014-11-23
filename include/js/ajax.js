/**
 * @package Survarium Armory
 * @version Release 1.0
 * @revision 2
 * @copyright (c) 2014 lovepsone
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

function GetFaction(b){var a=1;switch(b){case"TF1":a=1;break;case"TF2":a=2;break;case"TF3":a=3;break;case"TF4":a=4;break;case"TF5":a=5;break}return a};

$(function StartLoadIitem()
{
	$("input#TF0").prop("checked", true);
	$("input#all").prop("checked", true);
	$("input#armory").prop("checked", false);
	$("input#weapon").prop("checked", false);
	$("input#TFAll").removeClass();
	$("input#TFArmory").removeClass();
	$("input#TFWeapon").removeClass();
	$("input#TFAll").toggleClass("bAllTrueAA");
	$("input#TFArmory").toggleClass("bArmoryFalseAA");
	$("input#TFWeapon").toggleClass("bWeaponFalseAA");
	
	$.ajax({url: 'include/HandleItems.php',type: 'POST',data:{'data': '0:0'},success: function(data){$("#ItemOutput").html(data);$("img").easyTooltip();updateDraggable();}});
	$.ajax({url: 'include/HandleArmory.php',type: 'POST',data:{'start': 1},success: function(data){$("#StatsOutput").html(data);}});
});

$(document).ready(function()
{
	//$("div.ItemOutput").scrollLeft(30);
	// нужно будет упростить
	$("input#TFAll").click(function()
	{
		$("input#all").prop("checked", true);
		$("input#armory").prop("checked", false);
		$("input#weapon").prop("checked", false);
		$("input#TFAll").removeClass();
		$("input#TFArmory").removeClass();
		$("input#TFWeapon").removeClass();
		$("input#TFAll").toggleClass("bAllTrueAA");
		$("input#TFArmory").toggleClass("bArmoryFalseAA");
		$("input#TFWeapon").toggleClass("bWeaponFalseAA");
	});
	$("input#TFArmory").click(function()
	{
		$("input#all").prop("checked", false);
		$("input#armory").prop("checked", true);
		$("input#weapon").prop("checked", false);
		$("input#TFAll").removeClass();
		$("input#TFArmory").removeClass();
		$("input#TFWeapon").removeClass();
		$("input#TFAll").toggleClass("bAllFalseAA");
		$("input#TFArmory").toggleClass("bArmoryTrueAA");
		$("input#TFWeapon").toggleClass("bWeaponFalseAA");
	});

	$("input#TFWeapon").click(function()
	{
		$("input#all").prop("checked", false);
		$("input#armory").prop("checked", false);
		$("input#weapon").prop("checked", true);
		$("input#TFAll").removeClass();
		$("input#TFArmory").removeClass();
		$("input#TFWeapon").removeClass();
		$("input#TFAll").toggleClass("bAllFalseAAW");
		$("input#TFArmory").toggleClass("bArmoryFalseAAW");
		$("input#TFWeapon").toggleClass("bWeaponTrueAAW");
	});

	//$("input#TF0").change(function(){});

	$("input#TF0, #TF1, #TF2, #TF3, #TF4, #TF5, input#TFAll, input#TFArmory, input#TFWeapon").click(function()
	{
		var Faction = 0;
		var TypeItem = 1;
		if ($("input#TF0").prop("checked"))
		{
			Faction = 0;
		}
		else
		{
			Faction = GetFaction($(this).attr('id'));
		}

		if ($("input#all").prop("checked"))
		{
			TypeItem = 0;
		}
		else if($("input#armory").prop("checked"))
		{
			TypeItem = 1;
		}
		else
		{
			TypeItem = 2;
		}

		$.ajax(
		{
			url: 'include/HandleItems.php', // Путь к обработчику
			type: 'POST', // метод передачи данных
			//dataType: 'json', // формат, в котором ожидается получить ответ с сервера
			data:{'data': Faction.toString() + ':' + TypeItem.toString()},
			success: function(data)
			{
				$("#ItemOutput").html(data);
				$("img").easyTooltip();
				updateDraggable();
				//alert(data);
			}
		});
   	})

});