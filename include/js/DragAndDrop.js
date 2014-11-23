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
function GetSrc(str)
{
	var src = str.split('"');
	return src[1];
}

function GetId(str)
{
	var id = str.split('"');
	return id[id.length - 2];
}

function updateDraggable()
{
	//var Scroll = $(".scroll-pane").jScrollPane({showArrows: false, autoReinitialise: true});
	//var apiScroll = Scroll.data('jsp');
//stack
	var idItem = 0;
	$("div #iw, div #ie, div #im, div #ia, div #ib, div #ih, div #is, div #if").draggable(
	{
		helper:'clone', //containment: 'parent',
		snap:'#SelectWeapon',
		snapMode: 'inner',
		snapTolerance: 50,
		zIndex: 9999,
		//stack: ".draggable",
		//grid: [10,10],
		start: function(event, ui)
		{
			$(this).data('preventBehaviour', true);
			//apiScroll.destroy();

		},
		stop: function(event, ui)
		{
		}

    	});
	$("#SelectWeapon").droppable(
	{
		tolerance:"touch",
		drop:function (event, ui)
		{
			var basket = $(this), move = ui.draggable, itemId = basket.find("div[item-id='" + move.attr("item-id") + "']");
			$("div.lastWeapon").empty();
			//var t = ui.draggable.html();
			//var t1 = t.replace(/title=.*?(?=id)/i, '');
			basket.append('<div iteml-id="' + move.attr("item-id") + '" class="lastWeapon"><img src="' + GetSrc(move.find("div[item-id]").html()) + '" id="' + GetId(move.find("div[item-id]").html()) + '"/></div>');
			$.ajax(
			{
				url: 'include/HandleArmory.php',
				type: 'POST',
				data:{'weapon': move.find("div[item-id]").html()},
				success: function(data)
				{
					$("#StatsOutput").html(data);
					//alert(data);
				}
			});
				//$("img").easyTooltip();

		},
		accept: '#iw'
	});
	$("#SelectHead").droppable(
	{
		tolerance:"touch",
		drop:function (event, ui)
		{
			var basket = $(this), move = ui.draggable, itemId = basket.find("div[item-id='" + move.attr("item-id") + "']");
			$("div.lastHead").empty();
			basket.append('<div iteml-id="' + move.attr("item-id") + '" class="lastHead"><img src="' + GetSrc(move.find("div[item-id]").html()) + '" id="' + GetId(move.find("div[item-id]").html()) + '"/></div>');
			$.ajax(
			{
				url: 'include/HandleArmory.php',
				type: 'POST',
				data:{'ie': move.find("div[item-id]").html()},
				success: function(data) { $("#StatsOutput").html(data); }
			});
				//$("img").easyTooltip();

		},
		accept: '#ie'
	});
	$("#SelectMask").droppable(
	{
		tolerance:"touch",
		drop:function (event, ui)
		{
			var basket = $(this), move = ui.draggable, itemId = basket.find("div[item-id='" + move.attr("item-id") + "']");
			$("div.lastMask").empty();
			basket.append('<div iteml-id="' + move.attr("item-id") + '" class="lastMask"><img src="' + GetSrc(move.find("div[item-id]").html()) + '" id="' + GetId(move.find("div[item-id]").html()) + '"/></div>');
			$.ajax(
			{
				url: 'include/HandleArmory.php',
				type: 'POST',
				data:{'im': move.find("div[item-id]").html()},
				success: function(data) { $("#StatsOutput").html(data); }
			});
				//$("img").easyTooltip();

		},
		accept: '#im'
	});
	$("#SelectBack").droppable(
	{
		tolerance:"touch",
		drop:function (event, ui)
		{
			var basket = $(this), move = ui.draggable, itemId = basket.find("div[item-id='" + move.attr("item-id") + "']");
			$("div.lastBack").empty();
			basket.append('<div iteml-id="' + move.attr("item-id") + '" class="lastBack"><img src="' + GetSrc(move.find("div[item-id]").html()) + '" id="' + GetId(move.find("div[item-id]").html()) + '"/></div>');
			$.ajax(
			{
				url: 'include/HandleArmory.php',
				type: 'POST',
				data:{'ib': move.find("div[item-id]").html()},
				success: function(data) { $("#StatsOutput").html(data); }
			});
		},
		accept: '#ib'
	});
	$("#SelectArmory").droppable(
	{
		tolerance:"touch",
		drop:function (event, ui)
		{
			var basket = $(this), move = ui.draggable, itemId = basket.find("div[item-id='" + move.attr("item-id") + "']");
			$("div.lastArmory").empty();
			basket.append('<div iteml-id="' + move.attr("item-id") + '" class="lastArmory"><img src="' + GetSrc(move.find("div[item-id]").html()) + '" id="' + GetId(move.find("div[item-id]").html()) + '"/></div>');
			$.ajax(
			{
				url: 'include/HandleArmory.php',
				type: 'POST',
				data:{'ia': move.find("div[item-id]").html()},
				success: function(data) { $("#StatsOutput").html(data); }
			});
		},
		accept: '#ia'
	});

	$("#SelectHand").droppable(
	{
		tolerance:"touch",
		drop:function (event, ui)
		{
			var basket = $(this), move = ui.draggable, itemId = basket.find("div[item-id='" + move.attr("item-id") + "']");
			$("div.lastHand").empty();
			basket.append('<div iteml-id="' + move.attr("item-id") + '" class="lastHand"><img src="' + GetSrc(move.find("div[item-id]").html()) + '" id="' + GetId(move.find("div[item-id]").html()) + '"/></div>');
			$.ajax(
			{
				url: 'include/HandleArmory.php',
				type: 'POST',
				data:{'ih': move.find("div[item-id]").html()},
				success: function(data) { $("#StatsOutput").html(data); }
			});
		},
		accept: '#ih'
	});
	$("#SelectShin").droppable(
	{
		tolerance:"touch",
		drop:function (event, ui)
		{
			var basket = $(this),move = ui.draggable, itemId = basket.find("div[item-id='" + move.attr("item-id") + "']");
			$("div.lastShin").empty();
			basket.append('<div iteml-id="' + move.attr("item-id") + '" class="lastShin"><img src="' + GetSrc(move.find("div[item-id]").html()) + '" id="' + GetId(move.find("div[item-id]").html()) + '"/></div>');
			$.ajax(
			{
				url: 'include/HandleArmory.php',
				type: 'POST',
				data:{'is': move.find("div[item-id]").html()},
				success: function(data) { $("#StatsOutput").html(data); }
			});
		},
		accept: '#is'
	});
	$("#SelectFeet").droppable(
	{
		tolerance:"touch",
		drop:function (event, ui)
		{
			var basket = $(this), move = ui.draggable, itemId = basket.find("div[item-id='" + move.attr("item-id") + "']");
			$("div.lastFeet").empty();
			basket.append('<div iteml-id="' + move.attr("item-id") + '" class="lastFeet"><img src="' + GetSrc(move.find("div[item-id]").html()) + '" id="' + GetId(move.find("div[item-id]").html()) + '"/></div>');
			$.ajax(
			{
				url: 'include/HandleArmory.php',
				type: 'POST',
				data:{'if': move.find("div[item-id]").html()},
				success: function(data) { $("#StatsOutput").html(data); }
			});
		},
		accept: '#if'
	});
	//$("div #items").find(":img").live('mousedown', function (e)
	//{
	//	var mdown = document.createEvent("MouseEvents");
	//	mdown.initMouseEvent("mousedown", false, true, window, 0, e.screenX, e.screenY, e.clientX, e.clientY, true, false, false, true, 0, null);
	//	$(this).closest('div #items')[0].dispatchEvent(mdown);
	//}).live('click', function(e)
	//{
	//	var $draggable = $(this).closest('div #items');
	//	if($draggable.data("preventBehaviour"))
	//	{
	//		console.log(1);
	//		e.preventDefault();
	//		$draggable.data("preventBehaviour", false)
	//	}
	//});
}