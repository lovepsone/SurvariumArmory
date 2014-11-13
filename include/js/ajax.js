/**
 * @package Survarium Armory
 * @version Release 1.0
 * @revision 1
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

$(function StartLoadIitem()
{
	$("input#armory").prop("checked", true);
	$("input#weapon").prop("checked", false);
	$("input#TFArmory").removeClass();
	$("input#TFWeapon").removeClass();
	$("input#TFArmory").toggleClass("bArmoryTrue");
	$("input#TFWeapon").toggleClass("bWeaponFalse");
	
	$.ajax(
	{
		url: 'include/HandleItems.php',
		type: 'POST',
		data:{'data': '1:1'},
		success: function(data)
		{
			$("#ItemOutput").html(data);
			//$("img").easyTooltip();
			updateDraggable();
			//alert(data);
		}
	});
	$.ajax(
	{
		url: 'include/HandleArmory.php',
		type: 'POST',
		data:{'start': 1},
		success: function(data)
		{
			$("#StatsOutput").html(data);
			//alert(data);
		}
	});
});

$(document).ready(function()
{
	$("input#TFArmory").click(function()
	{
		$("input#armory").prop("checked", true);
		$("input#weapon").prop("checked", false);
		$("input#TFArmory").removeClass();
		$("input#TFWeapon").removeClass();
		$("input#TFArmory").toggleClass("bArmoryTrue");
		$("input#TFWeapon").toggleClass("bWeaponFalse");
	});

	$("input#TFWeapon").click(function()
	{
		$("input#armory").prop("checked", false);
		$("input#weapon").prop("checked", true);
		$("input#TFArmory").removeClass();
		$("input#TFWeapon").removeClass();
		$("input#TFArmory").toggleClass("bArmoryFalse");
		$("input#TFWeapon").toggleClass("bWeaponTrue");
	});

	$("#TF1, #TF2, #TF3, #TF4, #TF5, input#TFArmory, input#TFWeapon").click(function()
	{
		var Faction = 1;
		var aType = 1;
		var att = $(this).attr('id');
		switch ($(this).attr('id'))
		{
		case "TF1": Faction = 1; break;
		case "TF2": Faction = 2; break;
		case "TF3": Faction = 3; break;
		case "TF4": Faction = 4; break;
		case "TF5": Faction = 5; break;
		}
		if ($("input#armory").prop("checked"))
		{
			aType = 1;
		}
		else
		{
			aType = 2;
		}

		$.ajax(
		{
			url: 'include/HandleItems.php', // ѕуть к обработчику
			type: 'POST', // метод передачи данных
			//dataType: 'json', // формат, в котором ожидаетс€ получить ответ с сервера
			data:{'data': Faction.toString() + ':' + aType.toString()},
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