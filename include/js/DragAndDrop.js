/**
 * @package Survarium Armory
 * @version Release 2.0
 * @revision 104
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

function addToolTip(data)
{
	var t, tmod = "";
	if (data['mods'] != false)
	{
		for (var i=0; i < data['mods'].length; i++)
		{
			tmod +="<tr><td><img src='images/mod/"+data['mods'][i]['imgMod']+"' class='iconMod'/>"+data['localemod'][data['mods'][i]['localeMod']]+"</td>"+
			"<td>"+data['mods'][i]['mathsign']+data['mods'][i]['value']+data['mods'][i]['txtsign']+"</td></tr>";
		}
	}
	if (data['typeItem'] == 1)
	{
		t = "<table class='tooltipBody'><tr><td width='160px'>"+data['locale']+"</td><td>"+data['level']+"</td></tr>"+
		"<tr><td>"+data['localetxt']['defence']+"</td><td>"+data['defence']+"</td></tr>"+
		"<tr><td>"+data['localetxt']['isolation']+"</td><td>"+data['isolation']+"</td></tr>"+
		"<tr><td>"+data['localetxt']['weight']+"</td><td>"+data['weight']+"</td></tr>"+
		tmod+
		"</table>";
	}
	else if(data['typeItem'] == 2)
	{
		t = "<table class='tooltipBody'><tr><td width='160px'>"+data['locale']+"</td><td>"+data['level']+"</td></tr>"+
		"<tr><td>"+data['localetxt']['damage']+"</td><td>"+data['damage']+"</td></tr>"+
		"<tr><td>"+data['localetxt']['piercing']+"</td><td>"+data['piercing']+"</td></tr>"+
		"<tr><td>"+data['localetxt']['sighting']+"</td><td>"+data['piercing']+"</td></tr>"+
		"<tr><td>"+data['localetxt']['stoppower']+"</td><td>"+data['piercing']+"</td></tr>"+
		"<tr><td>"+data['localetxt']['dispersion']+"</td><td>"+data['dispersion']+"</td></tr>"+
		"<tr><td>"+data['localetxt']['distance']+"</td><td>"+data['distance']+"</td></tr>"+
		"<tr><td>"+data['localetxt']['rate']+"</td><td>"+data['rate']+"</td></tr>"+
		"<tr><td>"+data['localetxt']['weight']+"</td><td>"+data['weight']+"</td></tr>"+
		tmod+
		"</table>";
	}
	return t;
}

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

function getDataUrlMods(url)
{
	var data = url.split('&'), dataArray = new Array(), i = 0, ii = 0, t, tmp;
	for (i = 0; i < data.length; i++)
	{
		t = data[i].split('=');
		if (t[0] == 'iw')
		{
			tmp = t[1].split(':');
			dataArray[ii] = ':'+tmp[1]+':'+tmp[2]+':'+tmp[3]+':';
			ii++;
			dataArray[ii] = ':'+tmp[5]+':'+tmp[6]+':'+tmp[7];
			ii++;
		}
		else
		{
			tmp = t[1].split(':');
			dataArray[ii] = ':'+tmp[1]+':'+tmp[2]+':'+tmp[3];
			ii++;
		}
	}
	return dataArray;
}

function CountMods(typeitem, url)
{
	var data = url.split('&'), t, tmp, buf, i, j, count = 0;
	for (i = 0; i < data.length; i++)
	{
		t = data[i].split('=');
		// обработку на втророй слот оружия пока не делаю
		if (t[0] == typeitem)
		{
			tmp =  t[1].split(':');
			for (j = 1; j <= 3; j++)
			{
				buf = tmp[j].split('-');
				if(buf[0] != '0')
					count++;
			}
		}
	}
	return count;
}

function getImgUrl(countMods)
{
	var u = '';
	switch (countMods)
	{
	  case 0:
	    u = 'images/icon/simple/';
	    break;
	  case 1:
	    u = 'images/icon/blue/';
	    break;
	  case 2:
	    u = 'images/icon/green/';
	    break;
	  case 3:
	    u = 'images/icon/gold/';
	    break;
	}
	return u;
}

function GetUrlReplaceState(gTypeItem, gidItem)
{
	var href = window.location.href, d = href.split('?'), di = GetDataUrlItem(d[1]), dm = getDataUrlMods(d[1]);
	switch (gTypeItem)
	{
	  case 'iw':
	    history.replaceState(1, "Title 2", 'index.php?iw='+gidItem+':0-0:0-0:0-0:'+di[1]+dm[1]+'&ie='+di[2]+dm[2]+'&im='+di[3]+dm[3]+'&ib='+di[4]+dm[4]+'&ia='+di[5]+dm[5]+'&ih='+di[6]+dm[6]+'&is='+di[7]+dm[7]+'&if='+di[8]+dm[8]);
	    break;
	  case 'ie':
	    history.replaceState(1, "Title 2", 'index.php?iw='+di[0]+dm[0]+di[1]+dm[1]+'&ie='+gidItem+':0-0:0-0:0-0&im='+di[3]+dm[3]+'&ib='+di[4]+dm[4]+'&ia='+di[5]+dm[5]+'&ih='+di[6]+dm[6]+'&is='+di[7]+dm[7]+'&if='+di[8]+dm[8]);
	    break;
	  case 'im':
	    history.replaceState(1, "Title 2", 'index.php?iw='+di[0]+dm[0]+di[1]+dm[1]+'&ie='+di[2]+dm[2]+'&im='+gidItem+':0-0:0-0:0-0&ib='+di[4]+dm[4]+'&ia='+di[5]+dm[5]+'&ih='+di[6]+dm[6]+'&is='+di[7]+dm[7]+'&if='+di[8]+dm[8]);
	    break;
	  case 'ib':
	    history.replaceState(1, "Title 2", 'index.php?iw='+di[0]+dm[0]+di[1]+dm[1]+'&ie='+di[2]+dm[2]+'&im='+di[3]+dm[3]+'&ib='+gidItem+':0-0:0-0:0-0&ia='+di[5]+dm[5]+'&ih='+di[6]+dm[6]+'&is='+di[7]+dm[7]+'&if='+di[8]+dm[8]);
	    break;
	  case 'ia':
	    history.replaceState(1, "Title 2", 'index.php?iw='+di[0]+dm[0]+di[1]+dm[1]+'&ie='+di[2]+dm[2]+'&im='+di[3]+dm[3]+'&ib='+di[4]+dm[4]+'&ia='+gidItem+':0-0:0-0:0-0&ih='+di[6]+dm[6]+'&is='+di[7]+dm[7]+'&if='+di[8]+dm[8]);
	    break;
	  case 'ih':
	    history.replaceState(1, "Title 2", 'index.php?iw='+di[0]+dm[0]+di[1]+dm[1]+'&ie='+di[2]+dm[2]+'&im='+di[3]+dm[3]+'&ib='+di[4]+dm[4]+'&ia='+di[5]+dm[5]+'&ih='+gidItem+':0-0:0-0:0-0&is='+di[7]+dm[7]+'&if='+di[8]+dm[8]);
	    break;
	  case 'is':
	    history.replaceState(1, "Title 2", 'index.php?iw='+di[0]+dm[0]+di[1]+dm[1]+'&ie='+di[2]+dm[2]+'&im='+di[3]+dm[3]+'&ib='+di[4]+dm[4]+'&ia='+di[5]+dm[5]+'&ih='+di[6]+dm[6]+'&is='+gidItem+':0-0:0-0:0-0&if='+di[8]+dm[8]);
	    break;
	  case 'if':
	    history.replaceState(1, "Title 2", 'index.php?iw='+di[0]+dm[0]+di[1]+dm[1]+'&ie='+di[2]+dm[2]+'&im='+di[3]+dm[3]+'&ib='+di[4]+dm[4]+'&ia='+di[5]+dm[5]+'&ih='+di[6]+dm[6]+'&is='+di[7]+dm[7]+'&if='+gidItem+':0-0:0-0:0-0');
	    break;
	}
}

function AddDraggableUser(Selector, twoslots, selTypeItem)
{
	$("div.last"+Selector).draggable(
	{
		stop: function(event, ui)
		{
			$("div.last"+Selector).empty();
			if (twoslots) $("div.lastSelectMask2").remove();
			GetUrlReplaceState(selTypeItem, '0');
		},
		start: function(event, ui)
		{
			$('img.icon[title]').qtip('destroy', true);
		}
	});
}

function AjaxItemHandleP(Selector, typeitem)
{
	$.ajax(
	{
		url: 'include/ItemHandle.php',
		type: 'POST',
		data:{'UrlItem': getUrls()[typeitem]},
		success: function(data)
		{
			var item = JSON.parse(data), twoslots = 0, h = window.location.href, h1 = h.split('?'), h2 = GetDataUrlItem(h1[1]), cmods = CountMods(typeitem, h1[1]);
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
						$('div.last'+Selector).empty();
						$('#'+Selector).append('<div class="lastSelectHead2"><img id="last'+Selector+'" src="'+getImgUrl(cmods)+item['images']+'.png" class="icon Context" title="'+addToolTip(item)+'"/></div>');
						$("#SelectMask").append('<div class="lastSelectMask2"><img src="'+getImgUrl(cmods)+item['images']+'.png" class="icon" title="'+addToolTip(item)+'"//></div>');
						GetUrlReplaceState('im', '0');
						AddDraggableUser("SelectHead2", twoslots, item['selector']);
					}
					else
					{
						$('div.last'+Selector).empty();
						$('#'+Selector).append('<div class="last'+Selector+'"><img id="last'+Selector+'" src="'+getImgUrl(cmods)+item['images']+'.png" class="icon Context" title="'+addToolTip(item)+'"/></div>');
						AddDraggableUser(Selector, twoslots, item['selector']);
					}
				}
				else
				{
					$('div.last'+Selector).empty();
					$('#'+Selector).append('<div class="last'+Selector+'"><img id="last'+Selector+'" src="'+getImgUrl(cmods)+item['images']+'.png" class="icon Context" title="'+addToolTip(item)+'"/></div>');
					AddDraggableUser(Selector, twoslots, item['selector']);
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
			AjaxItemHandleP(id, TypeItem);
		},
		over:function (event, ui)
		{
			$('img.icon[title]').qtip('destroy', true);
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