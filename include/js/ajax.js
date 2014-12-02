/**
 * @package Survarium Armory
 * @version Release 1.1
 * @revision 62
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

function AjaxItems(strData){$.ajax({url: 'include/HandleItems.php',type: 'POST',data:{'data': strData},success: function(data){$("#ItemOutput").html(data);$("img.ItemInv").easyTooltip({tooltipId: "TooltipItemIcon"});updateDraggable();}});}

$(document).ready(function()
{
	var Fraction = 1, TypeItem = 0, TypeSort = 1;
	// начало загрузки
	$("input#Fraction0").prop("checked", true);
	$("input#FValue").val(Fraction);
	$("input#TItem").val(TypeItem);
	$("input#TSort").val(TypeSort);
	$("input#TypeItemAll").removeClass();
	$("input#TypeItemArmory").removeClass();
	$("input#TypeItemWeapon").removeClass();
	$("input#TypeItemAll").toggleClass("bAllTrueAA");
	$("input#TypeItemArmory").toggleClass("bArmoryFalseAA");
	$("input#TypeItemWeapon").toggleClass("bWeaponFalseAA");
	AjaxItems('0:0:1');
	$.ajax({url: 'include/HandleArmory.php',type: 'POST',data:{'start': 1},success: function(data){$("#StatsOutput").html(data);$("img.BonusTT").easyTooltip({tooltipId: "TooltipItemIcon"});}});

	$("input#Fraction0").change(function()
	{
		Fraction = $("input#FValue").val();
		TypeItem = $("input#TItem").val();
		TypeSort = $("input#TSort").val();
		if($(this).prop("checked")) Fraction = 0;
		AjaxItems(Fraction.toString() + ':' + TypeItem.toString() + ':' + TypeSort.toString());
	});

	$("input#SortLvl, input#SortP").change(function ()
	{
		Fraction = $("input#FValue").val();
		TypeItem = $("input#TItem").val();
		TypeSort = $(this).val();
		$("input#TSort").val(TypeSort);
		if($("input#Fraction0").prop("checked")) Fraction = 0;
		AjaxItems(Fraction.toString() + ':' + TypeItem.toString() + ':' + TypeSort.toString());
	});

	$("#Fraction1, #Fraction2, #Fraction3, #Fraction4, #Fraction5, input#TypeItemAll, input#TypeItemArmory, input#TypeItemWeapon").click(function()
	{
		var sID = $(this).attr('id');
		if (sID == "Fraction1" || sID == "Fraction2" || sID == "Fraction3" || sID == "Fraction4" || sID == "Fraction5") 
		{
			Fraction = sID.replace(/\D/g, '');
			$("input#FValue").val(Fraction);
			$("input#Fraction0").prop("checked", false);
		}
		else if ($("input#Fraction0").prop("checked"))
		{
			Fraction = 0;
		}

		if (sID == "TypeItemAll" || sID == "TypeItemArmory" || sID == "TypeItemWeapon")
		{
			$("input#TypeItemAll").removeClass();
			$("input#TypeItemArmory").removeClass();
			$("input#TypeItemWeapon").removeClass();
			switch (sID)
			{
			  case "TypeItemAll":
				$("input#TypeItemAll").toggleClass("bAllTrueAA");
				$("input#TypeItemArmory").toggleClass("bArmoryFalseAA");
				$("input#TypeItemWeapon").toggleClass("bWeaponFalseAA");
				TypeItem = 0;
			    break;
			  case "TypeItemArmory":
				$("input#TypeItemAll").toggleClass("bAllFalseAA");
				$("input#TypeItemArmory").toggleClass("bArmoryTrueAA");
				$("input#TypeItemWeapon").toggleClass("bWeaponFalseAA");
				TypeItem = 1;
			    break;
			  case "TypeItemWeapon":
				$("input#TypeItemAll").toggleClass("bAllFalseAAW");
				$("input#TypeItemArmory").toggleClass("bArmoryFalseAAW");
				$("input#TypeItemWeapon").toggleClass("bWeaponTrueAAW");
				TypeItem = 2;			    
			    break;
			}
			$("input#TItem").val(TypeItem);		
		}
		TypeSort = $("input#TSort").val();
		AjaxItems(Fraction.toString() + ':' + TypeItem.toString() + ':' + TypeSort.toString());
   	})
});