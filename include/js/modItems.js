/**
 * @package Survarium Armory
 * @version Release 1.2
 * @revision 65
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

$(document).on('mousedown', 'img.ItemW', function(event)
{
	var HeightDocument = $(document).height();
	var WidthDocument = $(document).width();
	var HeightScreen = $(window).height();
	event.preventDefault();
	if(event.button == 0)
	{
		$(".HideBodyMod").css({"width":WidthDocument,"height":HeightDocument});
		$(".HideBodyMod").fadeIn(1000);
		$(".HideBodyMod").fadeTo("slow",0.8);
		//Расположение модального окна с содержимым по высоте учитывая скроллинг документа
		var Top_modal_window = $(document).scrollTop() + HeightScreen/2-$(".ModDialog").height()/2;
		$(".ModDialog").css({"top":Top_modal_window+"px","display":"block"});
		$("body").css({"overflow":"hidden"});
    	}
});

$(document).ready(function()
{$("#ModClose").click(function () {$(".HideBodyMod, .ModDialog").hide();$("body").css({"overflow":"auto"});});$(".HideBodyMod").click(function () {$(".HideBodyMod, .ModDialog").hide();$("body").css({"overflow":"auto"});});});