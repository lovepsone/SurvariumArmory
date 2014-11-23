/**
 * @package Survarium Armory
 * @version Release 1.0
 * @revision 7
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

function GetFraction(b){var a=1;switch(b){case"Fraction1":a=1;break;case"Fraction2":a=2;break;case"Fraction3":a=3;break;case"Fraction4":a=4;break;case"Fraction5":a=5;break}return a};

$(function StartLoadIitem()
{
	$("input#Fraction0").prop("checked", true);
	$("input#all").prop("checked", true);
	$("input#armory").prop("checked", false);
	$("input#weapon").prop("checked", false);
	$("input#TypeItemAll").removeClass();
	$("input#TypeItemArmory").removeClass();
	$("input#TypeItemWeapon").removeClass();
	$("input#TypeItemAll").toggleClass("bAllTrueAA");
	$("input#TypeItemArmory").toggleClass("bArmoryFalseAA");
	$("input#TypeItemWeapon").toggleClass("bWeaponFalseAA");
	
	$.ajax({url: 'include/HandleItems.php',type: 'POST',data:{'data': '0:0'},success: function(data){$("#ItemOutput").html(data);$("img").easyTooltip();updateDraggable();}});
	$.ajax({url: 'include/HandleArmory.php',type: 'POST',data:{'start': 1},success: function(data){$("#StatsOutput").html(data);}});
});

$(document).ready(function()
{
	//$("div.ItemOutput").scrollLeft(30);
	// нужно будет упростить
	$("input#TypeItemAll").click(function()
	{
		$("input#all").prop("checked", true);
		$("input#armory").prop("checked", false);
		$("input#weapon").prop("checked", false);
		$("input#TypeItemAll").removeClass();
		$("input#TypeItemArmory").removeClass();
		$("input#TypeItemWeapon").removeClass();
		$("input#TypeItemAll").toggleClass("bAllTrueAA");
		$("input#TypeItemArmory").toggleClass("bArmoryFalseAA");
		$("input#TypeItemWeapon").toggleClass("bWeaponFalseAA");
	});
	$("input#TypeItemArmory").click(function()
	{
		$("input#all").prop("checked", false);
		$("input#armory").prop("checked", true);
		$("input#weapon").prop("checked", false);
		$("input#TypeItemAll").removeClass();
		$("input#TypeItemArmory").removeClass();
		$("input#TypeItemWeapon").removeClass();
		$("input#TypeItemAll").toggleClass("bAllFalseAA");
		$("input#TypeItemArmory").toggleClass("bArmoryTrueAA");
		$("input#TypeItemWeapon").toggleClass("bWeaponFalseAA");
	});

	$("input#TypeItemWeapon").click(function()
	{
		$("input#all").prop("checked", false);
		$("input#armory").prop("checked", false);
		$("input#weapon").prop("checked", true);
		$("input#TypeItemAll").removeClass();
		$("input#TypeItemArmory").removeClass();
		$("input#TypeItemWeapon").removeClass();
		$("input#TypeItemAll").toggleClass("bAllFalseAAW");
		$("input#TypeItemArmory").toggleClass("bArmoryFalseAAW");
		$("input#TypeItemWeapon").toggleClass("bWeaponTrueAAW");
	});

	//$("input#TF0").change(function(){});

	$("input#Fraction0, #Fraction1, #Fraction2, #Fraction3, #Fraction4, #Fraction5, input#TypeItemAll, input#TypeItemArmory, input#TypeItemWeapon").click(function()
	{
		var Fraction = 0, TypeItem = 1;
		if ($("input#Fraction0").prop("checked"))
		{
			Fraction = 0;
		}
		else
		{
			Fraction = GetFraction($(this).attr('id'));
		}

		if ($("input#all").prop("checked"))
		{
			TypeItem = 0;
		}
		else if($("input#armory").prop("checked"))
		{
			TypeItem = 1;
		}
		else if($("input#weapon").prop("checked"))
		{
			TypeItem = 2;
		}

		$.ajax(
		{
			url: 'include/HandleItems.php', // Путь к обработчику
			type: 'POST', // метод передачи данных
			//dataType: 'json', // формат, в котором ожидается получить ответ с сервера
			data:{'data': Fraction.toString() + ':' + TypeItem.toString()},
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