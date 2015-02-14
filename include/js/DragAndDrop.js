/**
 * @package Survarium Armory
 * @version Release 2.0
 * @revision 155
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
function calcPerOfVal(per, val){return parseFloat(val)*parseFloat(per)/100.0;}
function EmptySlot(Selector, typeItem){$('#'+Selector).append('<div class="last'+Selector+'"><img id="last'+Selector+'" src="include/DynamicSlots.php?type='+typeItem+'" class="icon" /></div>');}

function addToolTip(data, CountMod)
{
	var t, tmod, vmod = 0, color = "#c6c6c6", v3 = 0, v14 = 0, v15 = 0, v16 = 0, v17 = 0, v18 = 0, v19 = parseFloat(data['weight']), v21 = 0, v22 = 0;
	tmod = "<tr valign='bottom'><td colspan='2'><hr style='color:#ffffff;' width='90%'></td></tr>"
	if (data['sighting'] != undefined) v3 =  parseFloat(data['sighting']);
	if (data['damage'] != undefined) v14 =  parseFloat(data['damage']);
	if (data['piercing'] != undefined) v15 =  parseFloat(data['piercing']);
	if (data['defence'] != undefined) v16 =  parseInt(data['defence'], 10);
	if (data['dispersion'] != undefined) v17 =  parseFloat(data['dispersion']);
	if (data['rate'] != undefined) v18 =  parseFloat(data['rate']);
	if (data['distance'] != undefined) v21 =  parseFloat(data['distance']);
	if (data['isolation'] != undefined) v22 =  parseInt(data['isolation'], 10);

	if (data['mods'] != false)
	{
		vmod = 1;
		if (CountMod == 1) color = "#486d7f";
		if (CountMod == 2) color = "#63854d";
		if (CountMod == 3) color = "#ffd700";
		for (var i=0; i < data['mods'].length; i++)
		{
			tmod +="<tr valign='top'><td colspan='2'><img src='images/mod/"+data['mods'][i]['imgMod']+"' class='iconMod'/>"+
			data['localemod'][data['mods'][i]['localeMod']]+data['mods'][i]['mathsign']+data['mods'][i]['value']+data['mods'][i]['txtsign']+"</td></tr>";
			switch (parseInt(data['mods'][i]['id'], 10))
			{
			  case 3:
			    v3 -= calcPerOfVal(data['mods'][i]['value'], data['sighting']);
			    break;
			  case 14:
			    v14 += calcPerOfVal(data['mods'][i]['value'], data['damage']);
			    break;
			  case 15:
			    v15 += calcPerOfVal(data['mods'][i]['value'], data['piercing']);
			    break;
			  case 16:
			    v16 += parseInt(data['mods'][i]['value'], 10);
			    break;
			  case 17:
			    v17 -= calcPerOfVal(data['mods'][i]['value'], data['dispersion']);
			    break;
			  case 18:
			    v18 += calcPerOfVal(data['mods'][i]['value'], data['rate']);
			    break;
			  case 19:
			    v19 -= calcPerOfVal(data['mods'][i]['value'], data['weight']);
			    break;
			  case 21:
			    v21 += calcPerOfVal(data['mods'][i]['value'], data['distance']);
			  case 22:
			    v22 += parseInt(data['mods'][i]['value'], 10);
			    break;
			}
		}
	}
	t = "<table class='tooltipBody' style='border-collapse:collapse;'><tr class='tooltipHead'><td colspan='2' style='position: relative; top:-9px; font-size: 9px; color: #9C9797;' align='center'>"+data['localetxt']['shop']+"</td></tr>"+
	"<tr class='tooltipHead'><td width='155px' style='position: relative; top:-11px; color:"+color+";'>&nbsp;<img src='images/smallicon/"+data['fraction']+".png' class='smallIconFraction'/>&nbsp;"+
	data['locale']+"</td><td style='position: relative; top:-8px; right:0px; color: #9C9797;'>"+data['localetxt']['lvl']+data['level']+"</td></tr>";

	if (data['typeItem'] == 1)
	{
		t += "<tr height='20px' valign='bottom'><td>&nbsp;&nbsp;"+data['localetxt']['defence']+"</td><td style='color:#FFF0A0; font-weight:500;'>"+v16.toString()+"</td></tr>"+
		"<tr><td>&nbsp;&nbsp;"+data['localetxt']['isolation']+"</td><td style='color:#FFF0A0; font-weight:500;'>"+v22.toString()+"</td></tr>"+
		"<tr height='20px' valign='top'><td>&nbsp;&nbsp;"+data['localetxt']['weight']+"</td><td style='color:#FFF0A0; font-weight:500;'>"+roundPlus(v19,2).toString()+data['localetxt']['k']+"</td></tr>";
	}
	else if(data['typeItem'] == 2)
	{
		t += "<tr height='20px' valign='bottom'><td>&nbsp;&nbsp;"+data['localetxt']['damage']+"</td><td style='color:#FFF0A0; font-weight:500;'>"+v14.toString()+"</td></tr>"+
		"<tr><td>&nbsp;&nbsp;"+data['localetxt']['piercing']+"</td><td style='color:#FFF0A0; font-weight:500;'>"+v15.toString()+"</td></tr>"+
		"<tr><td>&nbsp;&nbsp;"+data['localetxt']['sighting']+"</td><td style='color:#FFF0A0; font-weight:500;'>"+roundPlus(v3,2).toString()+data['localetxt']['s']+"</td></tr>"+
		"<tr><td>&nbsp;&nbsp;"+data['localetxt']['stoppower']+"</td><td style='color:#FFF0A0; font-weight:500;'>"+data['stoppower']+data['localetxt']['p']+"</td></tr>"+
		"<tr><td>&nbsp;&nbsp;"+data['localetxt']['dispersion']+"</td><td style='color:#FFF0A0; font-weight:500;'>"+roundPlus(v17,2).toString()+"</td></tr>"+
		"<tr><td>&nbsp;&nbsp;"+data['localetxt']['distance']+"</td><td style='color:#FFF0A0; font-weight:500;'>"+v21.toString()+data['localetxt']['m']+"</td></tr>"+
		"<tr><td>&nbsp;&nbsp;"+data['localetxt']['rate']+"</td><td style='color:#FFF0A0; font-weight:500;'>"+v18.toString()+"</td></tr>"+
		"<tr height='20px' valign='top'><td>&nbsp;&nbsp;"+data['localetxt']['weight']+"</td><td style='color:#FFF0A0; font-weight:500;'>"+roundPlus(v19,2).toString()+data['localetxt']['k']+"</td></tr>";
	}
	if (vmod)
		t += tmod;
	t += "<tr><td colspan='2'><hr style='color:#ffffff;' width='90%'></td></tr></table>";
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
	    history.replaceState(1, "Title 2", 'inventory.php?iw='+gidItem+':0-0:0-0:0-0:'+di[1]+dm[1]+'&ie='+di[2]+dm[2]+'&im='+di[3]+dm[3]+'&ib='+di[4]+dm[4]+'&ia='+di[5]+dm[5]+'&ih='+di[6]+dm[6]+'&is='+di[7]+dm[7]+'&if='+di[8]+dm[8]);
	    break;
	  case 'ie':
	    history.replaceState(1, "Title 2", 'inventory.php?iw='+di[0]+dm[0]+di[1]+dm[1]+'&ie='+gidItem+':0-0:0-0:0-0&im='+di[3]+dm[3]+'&ib='+di[4]+dm[4]+'&ia='+di[5]+dm[5]+'&ih='+di[6]+dm[6]+'&is='+di[7]+dm[7]+'&if='+di[8]+dm[8]);
	    break;
	  case 'im':
	    history.replaceState(1, "Title 2", 'inventory.php?iw='+di[0]+dm[0]+di[1]+dm[1]+'&ie='+di[2]+dm[2]+'&im='+gidItem+':0-0:0-0:0-0&ib='+di[4]+dm[4]+'&ia='+di[5]+dm[5]+'&ih='+di[6]+dm[6]+'&is='+di[7]+dm[7]+'&if='+di[8]+dm[8]);
	    break;
	  case 'ib':
	    history.replaceState(1, "Title 2", 'inventory.php?iw='+di[0]+dm[0]+di[1]+dm[1]+'&ie='+di[2]+dm[2]+'&im='+di[3]+dm[3]+'&ib='+gidItem+':0-0:0-0:0-0&ia='+di[5]+dm[5]+'&ih='+di[6]+dm[6]+'&is='+di[7]+dm[7]+'&if='+di[8]+dm[8]);
	    break;
	  case 'ia':
	    history.replaceState(1, "Title 2", 'inventory.php?iw='+di[0]+dm[0]+di[1]+dm[1]+'&ie='+di[2]+dm[2]+'&im='+di[3]+dm[3]+'&ib='+di[4]+dm[4]+'&ia='+gidItem+':0-0:0-0:0-0&ih='+di[6]+dm[6]+'&is='+di[7]+dm[7]+'&if='+di[8]+dm[8]);
	    break;
	  case 'ih':
	    history.replaceState(1, "Title 2", 'inventory.php?iw='+di[0]+dm[0]+di[1]+dm[1]+'&ie='+di[2]+dm[2]+'&im='+di[3]+dm[3]+'&ib='+di[4]+dm[4]+'&ia='+di[5]+dm[5]+'&ih='+gidItem+':0-0:0-0:0-0&is='+di[7]+dm[7]+'&if='+di[8]+dm[8]);
	    break;
	  case 'is':
	    history.replaceState(1, "Title 2", 'inventory.php?iw='+di[0]+dm[0]+di[1]+dm[1]+'&ie='+di[2]+dm[2]+'&im='+di[3]+dm[3]+'&ib='+di[4]+dm[4]+'&ia='+di[5]+dm[5]+'&ih='+di[6]+dm[6]+'&is='+gidItem+':0-0:0-0:0-0&if='+di[8]+dm[8]);
	    break;
	  case 'if':
	    history.replaceState(1, "Title 2", 'inventory.php?iw='+di[0]+dm[0]+di[1]+dm[1]+'&ie='+di[2]+dm[2]+'&im='+di[3]+dm[3]+'&ib='+di[4]+dm[4]+'&ia='+di[5]+dm[5]+'&ih='+di[6]+dm[6]+'&is='+di[7]+dm[7]+'&if='+gidItem+':0-0:0-0:0-0');
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
			if (Selector != "SelectHead2") EmptySlot(Selector, selTypeItem); else EmptySlot("SelectHead", "ie");
			if (twoslots)
			{
				$("div.lastSelectMask2").remove();
				EmptySlot("SelectMask", "im");

			}
			GetUrlReplaceState(selTypeItem, '0');
			AjaxUserInfo();
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
			$('img.icon[title]').qtip('destroy', true);
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
						$('#'+Selector).append('<div class="lastSelectHead2"><img id="last'+Selector+'" src="'+getImgUrl(cmods)+item['images']+'.png" class="icon Context" title="'+addToolTip(item, cmods)+'"/></div>');
						$("#SelectMask").append('<div class="lastSelectMask2"><img src="'+getImgUrl(cmods)+item['images']+'.png" class="icon" title="'+addToolTip(item, cmods)+'"//></div>');
						GetUrlReplaceState('im', '0');
						AddDraggableUser("SelectHead2", twoslots, item['selector']);
					}
					else
					{
						$('div.last'+Selector).empty();
						$('#'+Selector).append('<div class="last'+Selector+'"><img id="last'+Selector+'" src="'+getImgUrl(cmods)+item['images']+'.png" class="icon Context" title="'+addToolTip(item, cmods)+'"/></div>');
						AddDraggableUser(Selector, twoslots, item['selector']);
					}
				}
				else
				{
					$('div.last'+Selector).empty();
					$('#'+Selector).append('<div class="last'+Selector+'"><img id="last'+Selector+'" src="'+getImgUrl(cmods)+item['images']+'.png" class="icon Context" title="'+addToolTip(item, cmods)+'"/></div>');
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
		},
		deactivate: function(event, ui)
		{
			AjaxUserInfo();
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