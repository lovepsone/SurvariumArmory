/**
 * @package Survarium Armory
 * @version Release 2.0
 * @revision 75
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

function AjaxItemHandleP(Selector, lastSelector, item, typeitem)
{
	$.ajax(
	{
		url: 'include/ItemHandle.php',
		type: 'POST',
		data:{'id': item},
		success: function(data)
		{
			var item = JSON.parse(data);
			if (typeitem == item['selector'])
			{
				$('div.last'+lastSelector).empty();
				$(Selector).append('<div class="last'+lastSelector+'"><img src="images/icon/simple/'+item['images']+'.png" class="icon"/></div>');
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
			var id = Selector.substring(1, Selector.length), move = ui.draggable, idItem = move.find("img").attr("item"), href = window.location.href, d = href.split('?'), di = GetDataUrlItem(d[1]);
			AjaxItemHandleP(Selector, id, idItem, TypeItem);
			switch (TypeItem)
			{
			  case 'iw':
			    history.replaceState(1, "Title 2", 'index.php?iw='+idItem+':0:0:0:'+di[1]+':0:0:0&ie='+di[2]+':0:0:0&im='+di[3]+':0:0:0&ib='+di[4]+':0:0:0&ia='+di[5]+':0:0:0&ih='+di[6]+':0:0:0&is='+di[7]+':0:0:0&if='+di[8]+':0:0:0');
			    break;
			  case 'ie':
			    history.replaceState(1, "Title 2", 'index.php?iw='+di[0]+':0:0:0:'+di[1]+':0:0:0&ie='+idItem+':0:0:0&im='+di[3]+':0:0:0&ib='+di[4]+':0:0:0&ia='+di[5]+':0:0:0&ih='+di[6]+':0:0:0&is='+di[7]+':0:0:0&if='+di[8]+':0:0:0');
			    break;
			  case 'im':
			    history.replaceState(1, "Title 2", 'index.php?iw='+di[0]+':0:0:0:'+di[1]+':0:0:0&ie='+di[2]+':0:0:0&im='+idItem+':0:0:0&ib='+di[4]+':0:0:0&ia='+di[5]+':0:0:0&ih='+di[6]+':0:0:0&is='+di[7]+':0:0:0&if='+di[8]+':0:0:0');
			    break;
			  case 'ib':
			    history.replaceState(1, "Title 2", 'index.php?iw='+di[0]+':0:0:0:'+di[1]+':0:0:0&ie='+di[2]+':0:0:0&im='+di[3]+':0:0:0&ib='+idItem+':0:0:0&ia='+di[5]+':0:0:0&ih='+di[6]+':0:0:0&is='+di[7]+':0:0:0&if='+di[8]+':0:0:0');
			    break;
			  case 'ia':
			    history.replaceState(1, "Title 2", 'index.php?iw='+di[0]+':0:0:0:'+di[1]+':0:0:0&ie='+di[2]+':0:0:0&im='+di[3]+':0:0:0&ib='+di[4]+':0:0:0&ia='+idItem+':0:0:0&ih='+di[6]+':0:0:0&is='+di[7]+':0:0:0&if='+di[8]+':0:0:0');
			    break;
			  case 'ih':
			    history.replaceState(1, "Title 2", 'index.php?iw='+di[0]+':0:0:0:'+di[1]+':0:0:0&ie='+di[2]+':0:0:0&im='+di[3]+':0:0:0&ib='+di[4]+':0:0:0&ia='+di[5]+':0:0:0&ih='+idItem+':0:0:0&is='+di[7]+':0:0:0&if='+di[8]+':0:0:0');
			    break;
			  case 'is':
			    history.replaceState(1, "Title 2", 'index.php?iw='+di[0]+':0:0:0:'+di[1]+':0:0:0&ie='+di[2]+':0:0:0&im='+di[3]+':0:0:0&ib='+di[4]+':0:0:0&ia='+di[5]+':0:0:0&ih='+di[6]+':0:0:0&is='+idItem+':0:0:0&if='+di[8]+':0:0:0');
			    break;
			  case 'if':
			    history.replaceState(1, "Title 2", 'index.php?iw='+di[0]+':0:0:0:'+di[1]+':0:0:0&ie='+di[2]+':0:0:0&im='+di[3]+':0:0:0&ib='+di[4]+':0:0:0&ia='+di[5]+':0:0:0&ih='+di[6]+':0:0:0&is='+di[7]+':0:0:0&if='+idItem+':0:0:0');
			    break;
			} 
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