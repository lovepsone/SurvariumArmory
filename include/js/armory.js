/**
 * @package Survarium Armory
 * @version Release 2.0
 * @revision 112
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
function getUrls() { var vars = {}; var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) { vars[key] = value; }); return vars; }
function AjaxItems(strData){$.ajax({url: 'include/ItemInventory.php',type: 'POST',data:{'data': strData},success: function(data){$("#ItemInventory").html(data);InitDragAndDrop();}});}
function AjaxUserInfo(){$.ajax({url: 'include/InfoUserHandle.php',type: 'POST',data:{'url': getUrls()},success: function(data){$("#userInfo").html(data);}});}
function FractionClearClass() { $("#Fraction0").removeClass(); $("#Fraction1").removeClass(); $("#Fraction2").removeClass(); $("#Fraction3").removeClass(); $("#Fraction4").removeClass(); $("#Fraction5").removeClass(); $("#Fraction0").toggleClass("BFractionAll"); $("#Fraction1").toggleClass("BFractionNo"); $("#Fraction2").toggleClass("BFractionVagabondage"); $("#Fraction3").toggleClass("BFractionBlackMarket"); $("#Fraction4").toggleClass("BFractionArmyReviva"); $("#Fraction5").toggleClass("BFractionSettlementRegion"); }
function TypeItemClearClass() { $("#Type0").removeClass(); $("#Type1").removeClass(); $("#Type2").removeClass(); $("#Type3").removeClass(); $("#Type4").removeClass(); $("#Type5").removeClass(); $("#Type0").toggleClass("BFalseAll"); $("#Type1").toggleClass("BFalseArm"); $("#Type2").toggleClass("BFalseWeap"); $("#Type3").toggleClass("BFalseAmm"); $("#Type4").toggleClass("BFalseSpec"); $("#Type5").toggleClass("BFalseUpgr"); }
function uCheck(url, numItem)
{
	var data = url.split(':');
	if (numItem = 1)
		return data[0];
	else
		return data[4];
}

function addUrlMods(typeitem, tmp)
{
	switch (typeitem)
	{
	  case 'iw':
	    history.replaceState(1, "Title 2", 'index.php?'+tmp+'&ie='+getUrls()["ie"]+'&im='+getUrls()["im"]+'&ib='+getUrls()["ib"]+'&ia='+getUrls()["ia"]+'&ih='+getUrls()["ih"]+'&is='+getUrls()["is"]+'&if='+getUrls()["if"]);
	    break;
	  case 'ie':
	    history.replaceState(1, "Title 2", 'index.php?iw='+getUrls()["iw"]+'&'+tmp+'&im='+getUrls()["im"]+'&ib='+getUrls()["ib"]+'&ia='+getUrls()["ia"]+'&ih='+getUrls()["ih"]+'&is='+getUrls()["is"]+'&if='+getUrls()["if"]);
	    break;
	  case 'im':
	    history.replaceState(1, "Title 2", 'index.php?iw='+getUrls()["iw"]+'&ie='+getUrls()["ie"]+'&'+tmp+'&ib='+getUrls()["ib"]+'&ia='+getUrls()["ia"]+'&ih='+getUrls()["ih"]+'&is='+getUrls()["is"]+'&if='+getUrls()["if"]);
	    break;
	  case 'ib':
	    history.replaceState(1, "Title 2", 'index.php?iw='+getUrls()["iw"]+'&ie='+getUrls()["ie"]+'&im='+getUrls()["im"]+'&'+tmp+'&ia='+getUrls()["ia"]+'&ih='+getUrls()["ih"]+'&is='+getUrls()["is"]+'&if='+getUrls()["if"]);
	    break;
	  case 'ia':
	    history.replaceState(1, "Title 2", 'index.php?iw='+getUrls()["iw"]+'&ie='+getUrls()["ie"]+'&im='+getUrls()["im"]+'&ib='+getUrls()["ib"]+'&'+tmp+'&ih='+getUrls()["ih"]+'&is='+getUrls()["is"]+'&if='+getUrls()["if"]);
	    break;
	  case 'ih':
	    history.replaceState(1, "Title 2", 'index.php?iw='+getUrls()["iw"]+'&ie='+getUrls()["ie"]+'&im='+getUrls()["im"]+'&ib='+getUrls()["ib"]+'&ia='+getUrls()["ia"]+'&'+tmp+'&is='+getUrls()["is"]+'&if='+getUrls()["if"]);
	    break;
	  case 'is':
	    history.replaceState(1, "Title 2", 'index.php?iw='+getUrls()["iw"]+'&ie='+getUrls()["ie"]+'&im='+getUrls()["im"]+'&ib='+getUrls()["ib"]+'&ia='+getUrls()["ia"]+'&ih='+getUrls()["ih"]+'&'+tmp+'&if='+getUrls()["if"]);
	    break;
	  case 'if':
	    history.replaceState(1, "Title 2", 'index.php?iw='+getUrls()["iw"]+'&ie='+getUrls()["ie"]+'&im='+getUrls()["im"]+'&ib='+getUrls()["ib"]+'&ia='+getUrls()["ia"]+'&ih='+getUrls()["ih"]+'&is='+getUrls()["is"]+'&'+tmp);
	    break;
	}
}


function getModsUrl(countMods, typeitem, selector)
{
	$.ajax(
	{
		url: 'include/ModsHandle.php',
		type: 'POST',
		data:{'data': countMods+':'+typeitem},
		success: function(data)
		{
			var mods = JSON.parse(data), i, idItem = uCheck(getUrls()[typeitem], 1), buf = typeitem + "=" + idItem + ":";
			for (i = 0; i < mods.length; i++)
			{
				if ( i < 2)
					buf += mods[i]['id'] + "-" + mods[i]['val'] + ":";
				else
					buf += mods[i]['id'] + '-' + mods[i]['val'];
			}
			if (mods.length == 1)
				buf += "0-0:0-0";
			else if (mods.length == 2)
				buf += "0-0";
			// fix iw
			if (typeitem == "iw")
				buf += ":0:0-0:0-0:0-0";
			addUrlMods(typeitem, buf);
			AjaxItemHandleP(selector, typeitem);
		}
	});
}

$(document).on('mousedown', 'img.Context', function(event)
{
	if (event.which === 3)
	{
		var target = $(event.target);
		target.addClass("CurrentItem");
		$(".ContextMenuMod").fadeIn(1000);
		$(".ContextMenuMod").fadeTo("slow",0.8);
		$(".ContextMenuMod").css({left: event.pageX+'px', top: event.pageY+'px'});
		$("body").css({"overflow":"hidden"});
	}
});

$(document).ready(function()
{
	// для начала проверим все url
	if (uCheck(getUrls()["iw"], 1) != 0) AjaxItemHandleP('SelectWeapon', 'iw'); else EmptySlot('SelectWeapon', 'iw');
	if (uCheck(getUrls()["ie"], 1) != 0) AjaxItemHandleP('SelectHead', 'ie'); else EmptySlot('SelectHead', 'ie');
	if (uCheck(getUrls()["im"], 1) != 0) AjaxItemHandleP('SelectMask', 'im'); else EmptySlot('SelectMask', 'im');
	if (uCheck(getUrls()["ib"], 1) != 0) AjaxItemHandleP('SelectBack', 'ib'); else EmptySlot('SelectBack', 'ib');
	if (uCheck(getUrls()["ia"], 1) != 0) AjaxItemHandleP('SelectArmory', 'ia'); else EmptySlot('SelectArmory', 'ia');
	if (uCheck(getUrls()["ih"], 1) != 0) AjaxItemHandleP('SelectHand', 'ih'); else EmptySlot('SelectHand', 'ih');
	if (uCheck(getUrls()["is"], 1) != 0) AjaxItemHandleP('SelectShin', 'is'); else EmptySlot('SelectShin', 'is');
	if (uCheck(getUrls()["if"], 1) != 0) AjaxItemHandleP('SelectFeet', 'if'); else EmptySlot('SelectFeet', 'if');
	AjaxUserInfo();
	// tooltips inventar item
	$('#ItemInventory').on('mouseenter', 'img.icon[title]', function (event)
	{
		$(this).qtip({ position:{my: 'top right', at: 'top left', viewport: $(window)},overwrite: false, show:{ event: event.type, ready: true }});
	});
	// tooltips user item
	$('#SelectWeapon, #SelectHead, #SelectMask, #SelectBack, #SelectArmory, #SelectHand, #SelectShin, #SelectFeet').on('mouseenter', 'img.icon[title]', function (event)
	{
		$(this).qtip({ position:{my: 'top left', at: 'top right', viewport: $(window)},overwrite: false, show:{ event: event.type, ready: true }});
	});
	// tooltips info user
	$('#userInfo').on('mouseenter', 'img[title]', function (event)
	{
		$(this).qtip({ position:{my: 'top left', at: 'top right', viewport: $(window)},overwrite: false, show:{ event: event.type, ready: true }});
	});
	// contextmenu hide
	$(document).bind("contextmenu",function(e){return false;});
	$(".ContextMenuMod, body").click(function(){$(".ContextMenuMod").hide();$("body").css({"overflow":"auto"});});

	var Fraction = 0, TypeItem = 0, TypeSort = 1;
	$("#Fraction0").removeClass();
	$("#Fraction0").toggleClass("BFractionAlls");
	$("#Type0").removeClass();
	$("#Type0").toggleClass("BTrueAll");
	AjaxItems(Fraction+':'+TypeItem+':'+TypeSort);
	$("#Fraction0, #Fraction1, #Fraction2, #Fraction3, #Fraction4, #Fraction5, #Type0, #Type1, #Type2, #Type3, #Type4, #Type5").click(function()
	{
		var id = $(this).attr('id');
		if (id == "Fraction0" || id == "Fraction1" || id == "Fraction2" || id == "Fraction3" || id == "Fraction4"|| id == "Fraction5")
		{
			Fraction = id.replace(/\D/g, '');
			$("input#FValue").val(Fraction);
			FractionClearClass();
			switch (Fraction)
			{
			  case '0':
				$("#Fraction0").removeClass();
				$("#Fraction0").toggleClass("BFractionAlls");
				break;
			  case '1':
				$("#Fraction1").removeClass();
				$("#Fraction1").toggleClass("BFractionNos");
			    break;
			  case '2':
				$("#Fraction2").removeClass();
				$("#Fraction2").toggleClass("BFractionVagabondages");
			    break;
			  case '3':
				$("#Fraction3").removeClass();
				$("#Fraction3").toggleClass("BFractionBlackMarkets");
			    break;
			  case '4':
				$("#Fraction4").removeClass();
				$("#Fraction4").toggleClass("BFractionArmyRevivas");
			    break;
			  case '5':
				$("#Fraction5").removeClass();
				$("#Fraction5").toggleClass("BFractionSettlementRegions");
			    break;
			}
		}
		if (id == "Type0" || id == "Type1" || id == "Type2" || id == "Type3" || id == "Type4"|| id == "Type5")
		{
			TypeItem = id.replace(/\D/g, '');
			$("input#TItem").val(TypeItem);
			TypeItemClearClass();
			switch (TypeItem)
			{
			  case '0':
				$("#Type0").removeClass();
				$("#Type0").toggleClass("BTrueAll");
				break;
			  case '1':
				$("#Type1").removeClass();
				$("#Type1").toggleClass("BTrueArm");
			    break;
			  case '2':
				$("#Type2").removeClass();
				$("#Type2").toggleClass("BTrueWeap");
			    break;
			  case '3':
				$("#Type3").removeClass();
				$("#Type3").toggleClass("BTrueAmm");
			    break;
			  case '4':
				$("#Type4").removeClass();
				$("#Type4").toggleClass("BTrueSpec");
			    break;
			  case '5':
				$("#Type5").removeClass();
				$("#Type5").toggleClass("BTrueUpgr");
			    break;
			}
		}
		Fraction = $("input#FValue").val();
		TypeItem = $("input#TItem").val();
		TypeSort = $("input#TSort").val();
		AjaxItems(Fraction+':'+TypeItem+':'+TypeSort);
	});

	$("input#SortL, input#SortP").change(function()
	{
		Fraction = $("input#FValue").val();
		TypeItem = $("input#TItem").val();
		TypeSort = $(this).val();
		$("input#TSort").val(TypeSort);
		AjaxItems(Fraction+':'+TypeItem+':'+TypeSort);
	});

	$("#TypeMod1, #TypeMod2, #TypeMod3, #TypeMod4").click(function()
	{
		var id = $(this).attr('id'), curr = $("div img.CurrentItem"), typeitem = '', select = curr.attr("id").substring(4, curr.attr("id").length);

		switch (curr.attr("id"))
		{
		  case 'lastSelectWeapon':
		    typeitem = 'iw';
		    break;
		  case 'lastSelectHead':
		    typeitem = 'ie';
		    break;
		  case 'lastSelectMask':
		    typeitem = 'im';
		    break;
		  case 'lastSelectBack':
		    typeitem = 'ib';
		    break;
		  case 'lastSelectArmory':
		    typeitem = 'ia';
		    break;
		  case 'lastSelectHand':
		    typeitem = 'ih';
		    break;
		  case 'lastSelectShin':
		    typeitem = 'is';
		    break;
		  case 'lastSelectFeet':
		    typeitem = 'if';
		    break;
		}

		switch (parseInt(id.replace(/\D/g, '')))
		{
		  case 1:
		    getModsUrl(1, typeitem, select);
		    break;
		  case 2:
		    getModsUrl(2, typeitem, select);
		    break;
		  case 3:
		    getModsUrl(3, typeitem, select);
		    break;
		  case 4:
		    break;
		}
		curr.removeClass("CurrentItem");
	});
});