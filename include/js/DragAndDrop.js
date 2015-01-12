/**
 * @package Survarium Armory
 * @version Release 2.0
 * @revision 86
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
function GetDataUrlItem(url)
{
	var data = url.split('&'), dataArray = new Array(), i = 0, ii = 0, t, tmp;
	for (i = 0; i < data.length; i++)
	{
		t = data[i].split('=');
		if (t[0] == 'iw')
		{
			tmp = t[1].split(':');
			dataArray[ii] = tmp[0];
			ii++;
			dataArray[ii] = tmp[4];
			ii++;
		}
		else
		{
			tmp = t[1].split(':');
			dataArray[ii] = tmp[0];
			ii++;
		}
	}
	return dataArray;
}

function GetUrlReplaceState(gTypeItem, gidItem)
{
	var href = window.location.href, d = href.split('?'), di = GetDataUrlItem(d[1])
	switch (gTypeItem)
	{
	  case 'iw':
	    history.replaceState(1, "Title 2", 'index.php?iw='+gidItem+':0-0:0-0:0-0:'+di[1]+':0-0:0-0:0-0&ie='+di[2]+':0-0:0-0:0-0&im='+di[3]+':0-0:0-0:0-0&ib='+di[4]+':0-0:0-0:0-0&ia='+di[5]+':0-0:0-0:0-0&ih='+di[6]+':0-0:0-0:0-0&is='+di[7]+':0-0:0-0:0-0&if='+di[8]+':0-0:0-0:0-0');
	    break;
	  case 'ie':
	    history.replaceState(1, "Title 2", 'index.php?iw='+di[0]+':0-0:0-0:0-0:'+di[1]+':0-0:0-0:0-0&ie='+gidItem+':0-0:0-0:0-0&im='+di[3]+':0-0:0-0:0-0&ib='+di[4]+':0-0:0-0:0-0&ia='+di[5]+':0-0:0-0:0-0&ih='+di[6]+':0-0:0-0:0-0&is='+di[7]+':0-0:0-0:0-0&if='+di[8]+':0-0:0-0:0-0');
	    break;
	  case 'im':
	    history.replaceState(1, "Title 2", 'index.php?iw='+di[0]+':0-0:0-0:0-0:'+di[1]+':0-0:0-0:0-0&ie='+di[2]+':0-0:0-0:0-0&im='+gidItem+':0-0:0-0:0-0&ib='+di[4]+':0-0:0-0:0-0&ia='+di[5]+':0-0:0-0:0-0&ih='+di[6]+':0-0:0-0:0-0&is='+di[7]+':0-0:0-0:0-0&if='+di[8]+':0-0:0-0:0-0');
	    break;
	  case 'ib':
	    history.replaceState(1, "Title 2", 'index.php?iw='+di[0]+':0-0:0-0:0-0:'+di[1]+':0-0:0-0:0-0&ie='+di[2]+':0-0:0-0:0-0&im='+di[3]+':0-0:0-0:0-0&ib='+gidItem+':0-0:0-0:0-0&ia='+di[5]+':0-0:0-0:0-0&ih='+di[6]+':0-0:0-0:0-0&is='+di[7]+':0-0:0-0:0-0&if='+di[8]+':0-0:0-0:0-0');
	    break;
	  case 'ia':
	    history.replaceState(1, "Title 2", 'index.php?iw='+di[0]+':0-0:0-0:0-0:'+di[1]+':0-0:0-0:0-0&ie='+di[2]+':0-0:0-0:0-0&im='+di[3]+':0-0:0-0:0-0&ib='+di[4]+':0-0:0-0:0-0&ia='+gidItem+':0-0:0-0:0-0&ih='+di[6]+':0-0:0-0:0-0&is='+di[7]+':0-0:0-0:0-0&if='+di[8]+':0-0:0-0:0-0');
	    break;
	  case 'ih':
	    history.replaceState(1, "Title 2", 'index.php?iw='+di[0]+':0-0:0-0:0-0:'+di[1]+':0-0:0-0:0-0&ie='+di[2]+':0-0:0-0:0-0&im='+di[3]+':0-0:0-0:0-0&ib='+di[4]+':0-0:0-0:0-0&ia='+di[5]+':0-0:0-0:0-0&ih='+gidItem+':0-0:0-0:0-0&is='+di[7]+':0-0:0-0:0-0&if='+di[8]+':0-0:0-0:0-0');
	    break;
	  case 'is':
	    history.replaceState(1, "Title 2", 'index.php?iw='+di[0]+':0-0:0-0:0-0:'+di[1]+':0-0:0-0:0-0&ie='+di[2]+':0-0:0-0:0-0&im='+di[3]+':0-0:0-0:0-0&ib='+di[4]+':0-0:0-0:0-0&ia='+di[5]+':0-0:0-0:0-0&ih='+di[6]+':0-0:0-0:0-0&is='+gidItem+':0-0:0-0:0-0&if='+di[8]+':0-0:0-0:0-0');
	    break;
	  case 'if':
	    history.replaceState(1, "Title 2", 'index.php?iw='+di[0]+':0-0:0-0:0-0:'+di[1]+':0-0:0-0:0-0&ie='+di[2]+':0-0:0-0:0-0&im='+di[3]+':0-0:0-0:0-0&ib='+di[4]+':0-0:0-0:0-0&ia='+di[5]+':0-0:0-0:0-0&ih='+di[6]+':0-0:0-0:0-0&is='+di[7]+':0-0:0-0:0-0&if='+gidItem+':0-0:0-0:0-0');
	    break;
	}
}

function AddDraggableUser(Selector, twoslots, selTypeItem)
{
	$(Selector).draggable(
	{
		stop: function(event, ui)
		{
			$(Selector).empty();
			if (twoslots) $("div.lastSelectMask2").remove()
			//$('body #T'+TypeItemUs).remove();
			GetUrlReplaceState(selTypeItem, '0');
		}
	});
}

function AjaxItemHandleP(Selector, lastSelector, item, typeitem)
{
	$.ajax(
	{
		url: 'include/ItemHandle.php',
		type: 'POST',
		data:{'id': item},
		success: function(data)
		{
			var item = JSON.parse(data), twoslots = 0, h = window.location.href, h1 = h.split('?'), h2 = GetDataUrlItem(h1[1]);
			if (typeitem == item['selector'])
			{
				if (item['selector'] == 'im')
				{
					$("div.lastSelectHead2").empty();
					$("div.lastSelectMask2").empty();
				}
				if (item['selector'] == 'ie')
				{
					$("div.lastSelectHead2").empty();
					$("div.lastSelectMask2").empty();
					if (item['twoslots'] == 1)
					{
						twoslots = 1;
						$("div.lastSelectMask").empty();
						$('div.last'+lastSelector).empty();
						$(Selector).append('<div class="lastSelectHead2"><img src="images/icon/simple/'+item['images']+'.png" class="icon Context"/></div>');
						$("#SelectMask").append('<div class="lastSelectMask2"><img src="images/icon/simple/'+item['images']+'.png" class="icon"/></div>');
						GetUrlReplaceState('im', '0');
						AddDraggableUser("div.lastSelectHead2", twoslots, item['selector']);
					}
					else
					{
						$('div.last'+lastSelector).empty();
						$(Selector).append('<div class="last'+lastSelector+'"><img src="images/icon/simple/'+item['images']+'.png" class="icon Context"/></div>');
						AddDraggableUser("div.last"+lastSelector, twoslots, item['selector']);
					}
				}
				else
				{
					$('div.last'+lastSelector).empty();
					$(Selector).append('<div class="last'+lastSelector+'"><img src="images/icon/simple/'+item['images']+'.png" class="icon Context"/></div>');
					AddDraggableUser("div.last"+lastSelector, twoslots, item['selector']);
				}
			}
		}
	});
}

function AddDroppable(Selector, TypeItem)
{
	$(Selector).droppable(
	{
		tolerance:'touch',
		accept:'#'+TypeItem,
		drop:function (event, ui)
		{
			var id = Selector.substring(1, Selector.length), move = ui.draggable, idItem = move.find("img").attr("item");
			GetUrlReplaceState(TypeItem, idItem);
			AjaxItemHandleP(Selector, id, idItem, TypeItem);
		}
	});
}

function InitDragAndDrop()
{
	$("div #iw, div #ie, div #im, div #ia, div #ib, div #ih, div #is, div #if").draggable(
	{
		helper:'clone',
		zIndex: 9999,
		start: function(event, ui)
		{
			$(this).data('preventBehaviour', true);
		}
	});
	AddDroppable('#SelectWeapon', 'iw');
	AddDroppable('#SelectHead', 'ie');
	AddDroppable('#SelectMask', 'im');
	AddDroppable('#SelectBack', 'ib');
	AddDroppable('#SelectArmory', 'ia');
	AddDroppable('#SelectHand', 'ih');
	AddDroppable('#SelectShin', 'is');
	AddDroppable('#SelectFeet', 'if');
}