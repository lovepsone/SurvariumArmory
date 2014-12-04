/**
 * @package Survarium Armory
 * @version Release 1.2
 * @revision 74
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

function GetSrc(str, num){var src = str.split('"');return src[num];}function GetImg(html){a = GetSrc(html, 1);var b = a.split('=');var c = b[1].split('&');return c[0];}function GetId(str){var id = str.split('"');return id[id.length - 4];}
function HeadCheckSlots2(id)
{
	if (id == 58 ||id == 81 ||id == 94 ||id == 128)
		return true;
	return false;
}

function AddDraggableUser(SelectorUs, idUs, TypeItemUs, logicM)
{
	$(SelectorUs).draggable(
	{
		stop: function(event, ui)
		{
			$(SelectorUs).empty();
			if (logicM) $("div.lastSelectMask2").remove()
			$('body #T'+TypeItemUs).remove();
$.ajax({url: 'include/HandleArmory.php',type: 'POST',data:{'data':TypeItemUs+':'+idUs+':1'},success: function(data){$("#StatsOutput").html(data);$("img.BonusTT").easyTooltip({tooltipId: "TBonus"});}});
		}
	});
}

function AddDraggable(Selector, TypeItem, ClassTooltip)
{
	$(Selector).droppable(
	{
		tolerance:'touch',
		accept:'#'+TypeItem,
		drop:function (event, ui)
		{
			var id = $(this).attr("id"), move = ui.draggable, idItem = GetId(move.find("div[item-id]").html()), img = GetImg(move.find("div[item-id]").html()), logic = 0;
			$('div.last' + id).empty();

			if (TypeItem == 'im')
			{
				$("div.lastSelectHead2").empty();
				$("div.lastSelectMask2").empty();
			}
			if (TypeItem == 'ie')
			{
				$("div.lastSelectHead2").empty();
				$("div.lastSelectMask2").empty();
				var LClass = '';
				if (HeadCheckSlots2(idItem))
				{
					logic = 1;
					$("div.lastSelectMask").empty();
					LClass = 'lastSelectHead2';
					$(this).append('<div iteml-id="'+move.attr("item-id")+'" class="lastSelectHead2"><img src="images/icon/'+img+'.png" id="'+idItem+'" title="'+GetSrc(move.find("div[item-id]").html(), 3)+ '" class="'+ClassTooltip+'"/></div>');
					$("#SelectMask").append('<div iteml-id="'+move.attr("item-id")+'" class="lastSelectMask2"><img src="images/icon/'+img+'_.png" id="'+idItem+'" title="'+GetSrc(move.find("div[item-id]").html(), 3)+ '" class="'+ClassTooltip+'"/></div>');
				}
				else
				{
					$(this).append('<div iteml-id="'+move.attr("item-id")+'" class="last'+id+'"><img src="images/icon/'+img+'.png" id="'+idItem+'" title="'+GetSrc(move.find("div[item-id]").html(), 3)+ '" class="'+ClassTooltip+'"/></div>');
					LClass = 'last'+id;
				}
				AddDraggableUser('div.'+LClass, idItem, TypeItem, logic);
			}
			else
			{
				$(this).append('<div iteml-id="'+move.attr("div[item-id]")+'" class="last'+id+'"><img src="images/icon/'+img+'.png" id="'+idItem+'" title="'+GetSrc(move.find("div[item-id]").html(), 3)+ '" class="'+ClassTooltip+'"/></div>');
				AddDraggableUser("div.last"+id, idItem, TypeItem, logic);
			}
			$.ajax({url: 'include/HandleArmory.php',type: 'POST',data:{'data':TypeItem+':'+idItem+':0'},success: function(data){$("#StatsOutput").html(data);$("img.BonusTT").easyTooltip({tooltipId: "TBonus"});}});
			$("img."+ClassTooltip).easyTooltip({tooltipId: 'T'+TypeItem});
		}
	});
}

function updateDraggable()
{
	$("div #iw, div #ie, div #im, div #ia, div #ib, div #ih, div #is, div #if").draggable({helper:'clone',zIndex: 9999,start: function(event, ui){$(this).data('preventBehaviour', true);}});
	AddDraggable('#SelectWeapon', 'iw', "ItemW");
	AddDraggable('#SelectHead', 'ie', "ItemE");
	AddDraggable('#SelectMask', 'im', "ItemM");
	AddDraggable('#SelectBack', 'ib', "ItemB");
	AddDraggable('#SelectArmory', 'ia', "ItemA");
	AddDraggable('#SelectHand', 'ih', "ItemH");
	AddDraggable('#SelectShin', 'is', "ItemS");
	AddDraggable('#SelectFeet', 'if', "ItemF");
}