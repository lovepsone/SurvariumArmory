<?php 
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

/*
* fraction
* 1 - независимые
* 2 - бродяги
* 3 - черный рынок
* 4 - армия возражденных
* 5 - поселение край
*
* selector
* iw - оружие основное
* ie - голова
* im - маска
* ia - броня
* ib - спина
* ih - рука
* is - ноги
* if - ступни
*
* modifiers
* p - подсумки для патронов
* c - Контейнер артефактов
* a - Время прицеливания
* s - время поиска
* b - вместимость карманов
* e - затраты энергии
* r - скорость перезарядки
* q - слотов для спецсредств
* t - скорость передвижения
* g - регенерация
* k - отдача оружия
* v - востоновление энергии
*/
// не добавил разброс от бедра

$items = array();

$items['0'] = array(	'selector'=>'iw',	'fraction'=>1, 'img'=>'mosina.png', 		'l'=>'tw11',	'armory'=>0, 	'isolation'=>0,		'dmg'=>110, 	'pnt'=>25, 	'vrn'=>'0.2', 	'dis'=>150, 	'rate'=>27, 	'w'=>'3.5', 	'p'=>0, 	'lvl'=>0,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['1'] = array(	'selector'=>'iw',	'fraction'=>1, 'img'=>'ppsha-41.png', 		'l'=>'tw12',	'armory'=>0, 	'isolation'=>0,		'dmg'=>30, 	'pnt'=>20, 	'vrn'=>'2', 	'dis'=>50, 	'rate'=>1000, 	'w'=>'3.6', 	'p'=>0, 	'lvl'=>0,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['2'] = array(	'selector'=>'iw',	'fraction'=>1, 'img'=>'tt-33.png',		'l'=>'tw13',	'armory'=>0, 	'isolation'=>0, 	'dmg'=>30, 	'pnt'=>20, 	'vrn'=>'2', 	'dis'=>50, 	'rate'=>220, 	'w'=>'0.8', 	'p'=>0, 	'lvl'=>0,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');

$items['3'] = array(	'selector'=>'iw',	'fraction'=>2, 'img'=>'toz-34.png', 		'l'=>'tw21',	'armory'=>0, 	'isolation'=>0, 	'dmg'=>100, 	'pnt'=>10, 	'vrn'=>'1', 	'dis'=>30, 	'rate'=>240, 	'w'=>'3.2', 	'p'=>2100, 	'lvl'=>1,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['4'] = array(	'selector'=>'iw',	'fraction'=>2, 'img'=>'toz-122.png', 		'l'=>'tw22',	'armory'=>0, 	'isolation'=>0, 	'dmg'=>110, 	'pnt'=>30, 	'vrn'=>'0.3', 	'dis'=>150, 	'rate'=>40, 	'w'=>'3.5', 	'p'=>11340, 	'lvl'=>3,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['5'] = array(	'selector'=>'iw',	'fraction'=>2, 'img'=>'oc-02.png', 		'l'=>'tw23',	'armory'=>0, 	'isolation'=>0, 	'dmg'=>35, 	'pnt'=>15, 	'vrn'=>'2', 	'dis'=>50, 	'rate'=>800, 	'w'=>'1.5', 	'p'=>4200, 	'lvl'=>2,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['6'] = array(	'selector'=>'iw',	'fraction'=>2, 'img'=>'pm.png', 		'l'=>'tw24',	'armory'=>0, 	'isolation'=>0, 	'dmg'=>35, 	'pnt'=>15, 	'vrn'=>'2', 	'dis'=>50, 	'rate'=>250, 	'w'=>'0.8', 	'p'=>2630, 	'lvl'=>2,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;');

$items['7'] = array(	'selector'=>'iw',	'fraction'=>3, 'img'=>'toz-66.png', 		'l'=>'tw31',	'armory'=>0,	'isolation'=>0, 	'dmg'=>100, 	'pnt'=>10, 	'vrn'=>'2', 	'dis'=>10, 	'rate'=>300, 	'w'=>'1.8', 	'p'=>1900, 	'lvl'=>1,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['8'] = array(	'selector'=>'iw',	'fraction'=>3, 'img'=>'yzi.png', 		'l'=>'tw32',	'armory'=>0, 	'isolation'=>0, 	'dmg'=>36, 	'pnt'=>16, 	'vrn'=>'1.8', 	'dis'=>60, 	'rate'=>600, 	'w'=>'3.5', 	'p'=>3800, 	'lvl'=>2,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['9'] = array(	'selector'=>'iw',	'fraction'=>3, 'img'=>'piton.png', 		'l'=>'tw33',	'armory'=>0, 	'isolation'=>0, 	'dmg'=>60, 	'pnt'=>20, 	'vrn'=>'1' , 	'dis'=>60, 	'rate'=>200, 	'w'=>'1.1' , 	'p'=>4280, 	'lvl'=>3,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['10'] = array(	'selector'=>'iw',	'fraction'=>3, 'img'=>'winchester-1894.png', 	'l'=>'tw34',	'armory'=>0, 	'isolation'=>0, 	'dmg'=>85, 	'pnt'=>28, 	'vrn'=>'0.5', 	'dis'=>100, 	'rate'=>89, 	'w'=>'3.1', 	'p'=>10260, 	'lvl'=>3,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['11'] = array(	'selector'=>'iw',	'fraction'=>3, 'img'=>'remington-870.png', 	'l'=>'tw35',	'armory'=>0, 	'isolation'=>0, 	'dmg'=>110, 	'pnt'=>10, 	'vrn'=>'1.8', 	'dis'=>30, 	'rate'=>52, 	'w'=>'3.5' , 	'p'=>12350, 	'lvl'=>4,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');

$items['12'] = array(	'selector'=>'ia',	'fraction'=>2, 'img'=>'t.png',			'l'=>'ta11',	'armory'=>10, 	'isolation'=>10,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0,	'w'=>'3', 	'p'=>1900, 	'lvl'=>1,	'mod'=>'p:1;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['13'] = array(	'selector'=>'if',	'fraction'=>2, 'img'=>'sh.png',			'l'=>'ta12',	'armory'=>20, 	'isolation'=>50,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0,	'w'=>'1.2', 	'p'=>1190, 	'lvl'=>2,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['14'] = array(	'selector'=>'ib',	'fraction'=>2, 'img'=>'rsk.png',		'l'=>'ta13',	'armory'=>0, 	'isolation'=>0,		'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0,	'w'=>'3', 	'p'=>900, 	'lvl'=>1,	'mod'=>'p:0;c:1;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['15'] = array(	'selector'=>'ih',	'fraction'=>2, 'img'=>'ph.png',			'l'=>'ta14',	'armory'=>20, 	'isolation'=>50,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0,	'w'=>'0.8', 	'p'=>1190, 	'lvl'=>2,	'mod'=>'p:0;c:0;a:0;s:5;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['16'] = array(	'selector'=>'if',	'fraction'=>2, 'img'=>'kbt.png',		'l'=>'ta15',	'armory'=>10, 	'isolation'=>5,		'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0,	'w'=>'0.7', 	'p'=>480, 	'lvl'=>1,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['17'] = array(	'selector'=>'ih',	'fraction'=>2, 'img'=>'op.png',			'l'=>'ta16',	'armory'=>10, 	'isolation'=>5,		'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0,	'w'=>'0.2', 	'p'=>480, 	'lvl'=>1,	'mod'=>'p:0;c:0;a:2;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['18'] = array(	'selector'=>'is',	'fraction'=>2, 'img'=>'hsh.png',		'l'=>'ta17',	'armory'=>10, 	'isolation'=>10,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0,	'w'=>'0.8', 	'p'=>950, 	'lvl'=>1,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');

$items['19'] = array(	'selector'=>'ie',	'fraction'=>3, 'img'=>'kbh.png',		'l'=>'ta21', 	'armory'=>20, 	'isolation'=>0,		'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'1.2', 	'p'=>4730, 	'lvl'=>3,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['20'] = array(	'selector'=>'ia',	'fraction'=>3, 'img'=>'kb.png',			'l'=>'ta22', 	'armory'=>15, 	'isolation'=>5,		'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'3', 	'p'=>2100, 	'lvl'=>1,	'mod'=>'p:1;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['21'] = array(	'selector'=>'if',	'fraction'=>3, 'img'=>'kazaki.png',		'l'=>'ta23', 	'armory'=>10, 	'isolation'=>0,		'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'0.8', 	'p'=>530, 	'lvl'=>1,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['22'] = array(	'selector'=>'is',	'fraction'=>3, 'img'=>'d.png',			'l'=>'ta24', 	'armory'=>10, 	'isolation'=>5,		'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'1', 	'p'=>1050, 	'lvl'=>1,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['23'] = array(	'selector'=>'ih',	'fraction'=>3, 'img'=>'bp.png',			'l'=>'ta25', 	'armory'=>10, 	'isolation'=>5,		'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'0.2', 	'p'=>530, 	'lvl'=>1,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:5;q:0;t:0;g:0;k:0;v:0');


	function GetParseMod($id)
	{
		global $items;
		$result = array();
		$c = 0;
		$m = explode(';', $items[$id]['mod']);
		for ($i = 0; $i <  count($m); $i++)
		{
			$m1 = explode(':', $m[$i]);
			if ((int)$m1[1] != 0)
			{
				$result[$c] = array(
					'm'=>$m1[0],
					'c'=>$m1[1]);
				$c++;
			}
		}
		return $result;
	}



	/*
	* $TypeItem(2/1) - оружие/броня
	* $fraction - fraction
	*/
	function GetItems($TypeItem = 0, $faction = 0)
	{
		global $items;
		$result = array(); $icount = 0;
		for ($i = 0; $i < count($items); $i++)
		{
			if ($TypeItem == 2)
			{
				if ($items[$i]['selector'] == 'iw' && $items[$i]['fraction'] == $faction)
				{
					$result[$icount] = array(
					'id'		=> $i,
					'selector'	=> $items[$i]['selector'],
					'img'		=> $items[$i]['img'],
					'TypeImg'	=> 'weapon/',
					'lang'		=> $items[$i]['l'],
					'dmg'		=> $items[$i]['dmg'],
					'pnt'		=> $items[$i]['pnt'],
					'vrn'		=> $items[$i]['vrn'],
					'dis'		=> $items[$i]['dis'],
					'rate'		=> $items[$i]['rate'],
					'w'		=> $items[$i]['w'],
					'p'		=> $items[$i]['p'],
					'level'		=> $items[$i]['lvl']);
					$icount++;
				}
			}
			else if ($TypeItem == 1)
			{
				if ($items[$i]['selector'] != 'iw' && $items[$i]['fraction'] == $faction)
				{
					$result[$icount] = array(
					'id'		=> $i,
					'selector'	=> $items[$i]['selector'],
					'img'		=> $items[$i]['img'],
					'TypeImg'	=> 'armory/',
					'lang'		=> $items[$i]['l'],
					'armory'	=> $items[$i]['armory'],
					'isolation'	=> $items[$i]['isolation'],
					'w'		=> $items[$i]['w'],
					'p'		=> $items[$i]['p'],
					'level'		=> $items[$i]['lvl'],
					'mod'		=> $items[$i]['mod']);
					$icount++;
				}
			}
		}
		return $result;
	}
?>