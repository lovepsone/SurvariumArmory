/**
 * @package Survarium Armory
 * @version Release 1.2
 * @revision 71
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

function updateDraggable()
{
	$("div #iw, div #ie, div #im, div #ia, div #ib, div #ih, div #is, div #if").draggable({helper:'clone',zIndex: 9999,start: function(event, ui){$(this).data('preventBehaviour', true);}});
	$("#SelectWeapon").droppable(
	{
		tolerance:"touch",
		accept:"#iw",
		drop:function (event, ui)
		{
			var id = $(this).attr("id"), move = ui.draggable, idItem = GetId(move.find("div[item-id]").html());
			$("div.last" + id).empty();
			$(this).append('<div iteml-id="'+move.attr("div[item-id]")+'" class="last'+id+'"><img src="images/icon/'+GetImg(move.find("div[item-id]").html())+'.png" id="'+idItem+'" title="'+GetSrc(move.find("div[item-id]").html(), 3)+ '" class="ItemW"/></div>');
			$("img.ItemW").easyTooltip({tooltipId: "TooltipItemIcon"});
			$.ajax({url: 'include/HandleArmory.php',type: 'POST',data:{'data':'iw:'+idItem+':0'},success: function(data){$("#StatsOutput").html(data);$("img.BonusTT").easyTooltip({tooltipId: "TooltipItemIcon"});}});
		}
	});
	$("#SelectHead").droppable(
	{
		tolerance:"touch",
		accept:"#ie",
		drop:function (event, ui)
		{
			var id = $(this).attr("id"), move = ui.draggable, idItem = GetId(move.find("div[item-id]").html());
			$("div.last" + id).empty();
			$("div.lastSelectHead2").empty();
			$("div.lastSelectMask2").empty();
			if (HeadCheckSlots2(idItem))
			{
				$("div.lastSelectMask").empty();
				$(this).append('<div iteml-id="'+move.attr("item-id")+'" class="lastSelectHead2"><img src="images/icon/'+GetImg(move.find("div[item-id]").html())+'.png" id="'+idItem+'" title="'+GetSrc(move.find("div[item-id]").html(), 3)+ '" class="ItemE"/></div>');
				$("#SelectMask").append('<div iteml-id="'+move.attr("item-id")+'" class="lastSelectMask2"><img src="images/icon/'+GetImg(move.find("div[item-id]").html())+'_.png" id="'+idItem+'" title="'+GetSrc(move.find("div[item-id]").html(), 3)+ '" class="ItemE"/></div>');
				$("img.ItemE").easyTooltip({tooltipId: "TooltipItemIcon"});
			}
			else
			{
				$(this).append('<div iteml-id="'+move.attr("item-id")+'" class="last'+id+'"><img src="images/icon/'+GetImg(move.find("div[item-id]").html())+'.png" id="'+idItem+'" title="'+GetSrc(move.find("div[item-id]").html(), 3)+ '" class="ItemE"/></div>');
				$("img.ItemE").easyTooltip({tooltipId: "TooltipItemIcon"});
			}
			$.ajax({url: 'include/HandleArmory.php',type: 'POST',data:{'data':'ie:'+idItem+':0'},success: function(data){$("#StatsOutput").html(data);$("img.BonusTT").easyTooltip({tooltipId: "TooltipItemIcon"});}});
		}
	});
	$("#SelectMask").droppable(
	{
		tolerance:"touch",
		accept:"#im",
		drop:function (event, ui)
		{
			var id = $(this).attr("id"), move = ui.draggable, idItem = GetId(move.find("div[item-id]").html());
			$("div.lastSelectHead2").empty();
			$("div.lastSelectMask2").empty();
			$("div.last" + id).empty();
			$(this).append('<div iteml-id="'+move.attr("item-id")+'" class="last'+id+'"><img src="images/icon/'+GetImg(move.find("div[item-id]").html())+'.png" id="'+idItem+'" title="'+GetSrc(move.find("div[item-id]").html(), 3)+ '" class="ItemM"/></div>');
			$("img.ItemM").easyTooltip({tooltipId: "TooltipItemIcon"});
			$.ajax({url: 'include/HandleArmory.php',type: 'POST',data:{'data':'im:'+idItem+':0'},success: function(data){$("#StatsOutput").html(data);$("img.BonusTT").easyTooltip({tooltipId: "TooltipItemIcon"});}});
		}
	});
	$("#SelectBack").droppable(
	{
		tolerance:"touch",
		accept:"#ib",
		drop:function (event, ui)
		{
			var id = $(this).attr("id"), move = ui.draggable, idItem = GetId(move.find("div[item-id]").html());
			$("div.last" + id).empty();
			$(this).append('<div iteml-id="'+move.attr("item-id")+'" class="last'+id+'"><img src="images/icon/'+GetImg(move.find("div[item-id]").html())+'.png" id="'+idItem+'" title="'+GetSrc(move.find("div[item-id]").html(), 3)+ '" class="ItemB"/></div>');
			$("img.ItemB").easyTooltip({tooltipId: "TooltipItemIcon"});
			$.ajax({url: 'include/HandleArmory.php',type: 'POST',data:{'data':'ib:'+idItem+':0'},success: function(data){$("#StatsOutput").html(data);$("img.BonusTT").easyTooltip({tooltipId: "TooltipItemIcon"});}});
		}
	});
	$("#SelectArmory").droppable(
	{
		tolerance:"touch",
		accept:"#ia",
		drop:function (event, ui)
		{
			var id = $(this).attr("id"), move = ui.draggable, idItem = GetId(move.find("div[item-id]").html());
			$("div.last" + id).empty();
			$(this).append('<div iteml-id="'+move.attr("item-id")+'" class="last'+id+'"><img src="images/icon/'+GetImg(move.find("div[item-id]").html())+'.png" id="'+idItem+'" title="'+GetSrc(move.find("div[item-id]").html(), 3)+ '" class="ItemA"/></div>');
			$("img.ItemA").easyTooltip({tooltipId: "TooltipItemIcon"});
			$.ajax({url: 'include/HandleArmory.php',type: 'POST',data:{'data':'ia:'+idItem+':0'},success: function(data){$("#StatsOutput").html(data);$("img.BonusTT").easyTooltip({tooltipId: "TooltipItemIcon"});}});
		}
	});
	$("#SelectHand").droppable(
	{
		tolerance:"touch",
		accept:"#ih",
		drop:function (event, ui)
		{
			var id = $(this).attr("id"), move = ui.draggable, idItem = GetId(move.find("div[item-id]").html());
			$("div.last" + id).empty();
			$(this).append('<div iteml-id="'+move.attr("item-id")+'" class="last'+id+'"><img src="images/icon/'+GetImg(move.find("div[item-id]").html())+'.png" id="'+idItem+'" title="'+GetSrc(move.find("div[item-id]").html(), 3)+ '" class="ItemH"/></div>');
			$("img.ItemH").easyTooltip({tooltipId: "TooltipItemIcon"});
			$.ajax({url: 'include/HandleArmory.php',type: 'POST',data:{'data':'ih:'+idItem+':0'},success: function(data){$("#StatsOutput").html(data);$("img.BonusTT").easyTooltip({tooltipId: "TooltipItemIcon"});}});
		}
	});
	$("#SelectShin").droppable(
	{
		tolerance:"touch",
		accept:"#is",
		drop:function (event, ui)
		{
			var id = $(this).attr("id"), move = ui.draggable, idItem = GetId(move.find("div[item-id]").html());
			$("div.last" + id).empty();
			$(this).append('<div iteml-id="'+move.attr("item-id")+'" class="last'+id+'"><img src="images/icon/'+GetImg(move.find("div[item-id]").html())+'.png" id="'+idItem+'" title="'+GetSrc(move.find("div[item-id]").html(), 3)+ '" class="ItemS"/></div>');
			$("img.ItemS").easyTooltip({tooltipId: "TooltipItemIcon"});
			$.ajax({url: 'include/HandleArmory.php',type: 'POST',data:{'data':'is:'+idItem+':0'},success: function(data){$("#StatsOutput").html(data);$("img.BonusTT").easyTooltip({tooltipId: "TooltipItemIcon"});}});
		
		}
	});
	$("#SelectFeet").droppable(
	{
		tolerance:"touch",
		accept:"#if",
		drop:function (event, ui)
		{
			var id = $(this).attr("id"), move = ui.draggable, idItem = GetId(move.find("div[item-id]").html());
			$("div.last" + id).empty();
			$(this).append('<div iteml-id="'+move.attr("item-id")+'" class="last'+id+'"><img src="images/icon/'+GetImg(move.find("div[item-id]").html())+'.png" id="'+idItem+'" title="'+GetSrc(move.find("div[item-id]").html(), 3)+ '" class="ItemF"/></div>');
			$("img.ItemF").easyTooltip({tooltipId: "TooltipItemIcon"});
			$.ajax({url: 'include/HandleArmory.php',type: 'POST',data:{'data':'if:'+idItem+':0'},success: function(data){$("#StatsOutput").html(data);$("img.BonusTT").easyTooltip({tooltipId: "TooltipItemIcon"});}});
		}
	});
}