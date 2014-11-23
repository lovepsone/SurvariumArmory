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
$items['6'] = array(	'selector'=>'iw',	'fraction'=>2, 'img'=>'pm.png', 		'l'=>'tw24',	'armory'=>0, 	'isolation'=>0, 	'dmg'=>35, 	'pnt'=>15, 	'vrn'=>'2', 	'dis'=>50, 	'rate'=>250, 	'w'=>'0.8', 	'p'=>2630, 	'lvl'=>2,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['7'] = array(	'selector'=>'iw',	'fraction'=>2, 'img'=>'mp-153.png', 		'l'=>'tw25',	'armory'=>0, 	'isolation'=>0, 	'dmg'=>100, 	'pnt'=>10, 	'vrn'=>'1.6', 	'dis'=>30, 	'rate'=>20, 	'w'=>'3.5', 	'p'=>13650, 	'lvl'=>4,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['8'] = array(	'selector'=>'iw',	'fraction'=>2, 'img'=>'remington-700.png', 	'l'=>'tw26',	'armory'=>0, 	'isolation'=>0, 	'dmg'=>120, 	'pnt'=>30, 	'vrn'=>'0.2', 	'dis'=>150, 	'rate'=>32, 	'w'=>'3.6', 	'p'=>21420, 	'lvl'=>5,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');

$items['9'] = array(	'selector'=>'iw',	'fraction'=>3, 'img'=>'toz-66.png', 		'l'=>'tw31',	'armory'=>0,	'isolation'=>0, 	'dmg'=>100, 	'pnt'=>10, 	'vrn'=>'2', 	'dis'=>10, 	'rate'=>300, 	'w'=>'1.8', 	'p'=>1900, 	'lvl'=>1,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['10'] = array(	'selector'=>'iw',	'fraction'=>3, 'img'=>'yzi.png', 		'l'=>'tw32',	'armory'=>0, 	'isolation'=>0, 	'dmg'=>36, 	'pnt'=>16, 	'vrn'=>'1.8', 	'dis'=>60, 	'rate'=>600, 	'w'=>'3.5', 	'p'=>3800, 	'lvl'=>2,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['11'] = array(	'selector'=>'iw',	'fraction'=>3, 'img'=>'piton.png', 		'l'=>'tw33',	'armory'=>0, 	'isolation'=>0, 	'dmg'=>60, 	'pnt'=>20, 	'vrn'=>'1' , 	'dis'=>60, 	'rate'=>200, 	'w'=>'1.1', 	'p'=>4280, 	'lvl'=>3,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['12'] = array(	'selector'=>'iw',	'fraction'=>3, 'img'=>'winchester-1894.png', 	'l'=>'tw34',	'armory'=>0, 	'isolation'=>0, 	'dmg'=>85, 	'pnt'=>28, 	'vrn'=>'0.5', 	'dis'=>100, 	'rate'=>89, 	'w'=>'3.1', 	'p'=>10260, 	'lvl'=>3,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['13'] = array(	'selector'=>'iw',	'fraction'=>3, 'img'=>'remington-870.png', 	'l'=>'tw35',	'armory'=>0, 	'isolation'=>0, 	'dmg'=>110, 	'pnt'=>10, 	'vrn'=>'1.8', 	'dis'=>30, 	'rate'=>52, 	'w'=>'3.5', 	'p'=>12350, 	'lvl'=>4,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['14'] = array(	'selector'=>'iw',	'fraction'=>3, 'img'=>'aks-74y.png', 		'l'=>'tw36',	'armory'=>0, 	'isolation'=>0, 	'dmg'=>47, 	'pnt'=>18, 	'vrn'=>'1.5', 	'dis'=>80, 	'rate'=>650, 	'w'=>'2.7', 	'p'=>12920, 	'lvl'=>5,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');

$items['15'] = array(	'selector'=>'iw',	'fraction'=>4, 'img'=>'akm.png', 		'l'=>'tw41',	'armory'=>0, 	'isolation'=>0, 	'dmg'=>45, 	'pnt'=>25, 	'vrn'=>'1', 	'dis'=>100, 	'rate'=>600, 	'w'=>'3.6', 	'p'=>20900, 	'lvl'=>6,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['16'] = array(	'selector'=>'iw',	'fraction'=>4, 'img'=>'fort-17.png', 		'l'=>'tw42',	'armory'=>0, 	'isolation'=>0, 	'dmg'=>38, 	'pnt'=>16, 	'vrn'=>'1.5', 	'dis'=>50, 	'rate'=>300, 	'w'=>'0.8', 	'p'=>12830, 	'lvl'=>6,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['17'] = array(	'selector'=>'iw',	'fraction'=>4, 'img'=>'spas-12.png', 		'l'=>'tw43',	'armory'=>0, 	'isolation'=>0, 	'dmg'=>120, 	'pnt'=>10, 	'vrn'=>'1.6', 	'dis'=>30, 	'rate'=>240, 	'w'=>'4.4', 	'p'=>25650, 	'lvl'=>7,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['18'] = array(	'selector'=>'iw',	'fraction'=>4, 'img'=>'cp-2m.png', 		'l'=>'tw44',	'armory'=>0, 	'isolation'=>0, 	'dmg'=>39, 	'pnt'=>18, 	'vrn'=>'1.6', 	'dis'=>60, 	'rate'=>900, 	'w'=>'1.6', 	'p'=>25080, 	'lvl'=>8,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['19'] = array(	'selector'=>'iw',	'fraction'=>4, 'img'=>'rpd.png', 		'l'=>'tw45',	'armory'=>0, 	'isolation'=>0, 	'dmg'=>45, 	'pnt'=>25, 	'vrn'=>'0.8', 	'dis'=>120, 	'rate'=>600, 	'w'=>'7', 	'p'=>34490, 	'lvl'=>9,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['20'] = array(	'selector'=>'iw',	'fraction'=>4, 'img'=>'ak-74m.png', 		'l'=>'tw46',	'armory'=>0, 	'isolation'=>0, 	'dmg'=>48, 	'pnt'=>22, 	'vrn'=>'1.2', 	'dis'=>100, 	'rate'=>650, 	'w'=>'3.4', 	'p'=>47500, 	'lvl'=>10,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['21'] = array(	'selector'=>'iw',	'fraction'=>4, 'img'=>'as-val.png', 		'l'=>'tw47',	'armory'=>0, 	'isolation'=>0, 	'dmg'=>55, 	'pnt'=>22, 	'vrn'=>'1.2', 	'dis'=>60, 	'rate'=>800, 	'w'=>'2.5', 	'p'=>76000, 	'lvl'=>13,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['22'] = array(	'selector'=>'iw',	'fraction'=>4, 'img'=>'a-545.png', 		'l'=>'tw48',	'armory'=>0, 	'isolation'=>0, 	'dmg'=>48, 	'pnt'=>22, 	'vrn'=>'0.9', 	'dis'=>100, 	'rate'=>900, 	'w'=>'3.3', 	'p'=>85500, 	'lvl'=>14,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');

$items['23'] = array(	'selector'=>'iw',	'fraction'=>5, 'img'=>'sks.png', 		'l'=>'tw51',	'armory'=>0, 	'isolation'=>0, 	'dmg'=>70, 	'pnt'=>25, 	'vrn'=>'0.8', 	'dis'=>100, 	'rate'=>300, 	'w'=>'3.8', 	'p'=>23100, 	'lvl'=>6,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['24'] = array(	'selector'=>'iw',	'fraction'=>5, 'img'=>'aps.png', 		'l'=>'tw52',	'armory'=>0, 	'isolation'=>0, 	'dmg'=>36, 	'pnt'=>16, 	'vrn'=>'2', 	'dis'=>40, 	'rate'=>400, 	'w'=>'1.2', 	'p'=>12830, 	'lvl'=>6,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['25'] = array(	'selector'=>'iw',	'fraction'=>5, 'img'=>'benelli.png', 		'l'=>'tw53',	'armory'=>0, 	'isolation'=>0, 	'dmg'=>120, 	'pnt'=>10, 	'vrn'=>'1.8', 	'dis'=>30, 	'rate'=>280, 	'w'=>'3.8', 	'p'=>28350, 	'lvl'=>7,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['26'] = array(	'selector'=>'iw',	'fraction'=>5, 'img'=>'ump-45.png', 		'l'=>'tw54',	'armory'=>0, 	'isolation'=>0, 	'dmg'=>46, 	'pnt'=>16, 	'vrn'=>'1.4', 	'dis'=>70, 	'rate'=>600, 	'w'=>'2.5', 	'p'=>27720, 	'lvl'=>8,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['27'] = array(	'selector'=>'iw',	'fraction'=>5, 'img'=>'sv-98.png', 		'l'=>'tw55',	'armory'=>0, 	'isolation'=>0, 	'dmg'=>150, 	'pnt'=>40, 	'vrn'=>'0.1', 	'dis'=>200, 	'rate'=>21, 	'w'=>'6.2', 	'p'=>63000, 	'lvl'=>9,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['28'] = array(	'selector'=>'iw',	'fraction'=>5, 'img'=>'vepr.png', 		'l'=>'tw56',	'armory'=>0, 	'isolation'=>0, 	'dmg'=>48, 	'pnt'=>22, 	'vrn'=>'1.3', 	'dis'=>100, 	'rate'=>650, 	'w'=>'3.1', 	'p'=>52500, 	'lvl'=>10,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['29'] = array(	'selector'=>'iw',	'fraction'=>5, 'img'=>'rpk-74m.png', 		'l'=>'tw57',	'armory'=>0, 	'isolation'=>0, 	'dmg'=>48, 	'pnt'=>22, 	'vrn'=>'0.9', 	'dis'=>120, 	'rate'=>600, 	'w'=>'5', 	'p'=>69300, 	'lvl'=>11,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['30'] = array(	'selector'=>'iw',	'fraction'=>5, 'img'=>'9a-91.png', 		'l'=>'tw58',	'armory'=>0, 	'isolation'=>0, 	'dmg'=>55, 	'pnt'=>22, 	'vrn'=>'1', 	'dis'=>60, 	'rate'=>700, 	'w'=>'1.8', 	'p'=>84000, 	'lvl'=>13,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['31'] = array(	'selector'=>'iw',	'fraction'=>5, 'img'=>'vsk-94.png', 		'l'=>'tw59',	'armory'=>0, 	'isolation'=>0, 	'dmg'=>55, 	'pnt'=>22, 	'vrn'=>'0.3', 	'dis'=>60, 	'rate'=>600, 	'w'=>'2.8', 	'p'=>113400, 	'lvl'=>14,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');

$items['32'] = array(	'selector'=>'ia',	'fraction'=>2, 'img'=>'a_2_1.png',		'l'=>'ta21',	'armory'=>10, 	'isolation'=>10,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0,	'w'=>'3', 	'p'=>1900, 	'lvl'=>1,	'mod'=>'p:1;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['33'] = array(	'selector'=>'if',	'fraction'=>2, 'img'=>'f_2_2.png',		'l'=>'ta22',	'armory'=>20, 	'isolation'=>50,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0,	'w'=>'1.2', 	'p'=>1190, 	'lvl'=>2,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['34'] = array(	'selector'=>'ib',	'fraction'=>2, 'img'=>'b_2_1.png',		'l'=>'ta23',	'armory'=>0, 	'isolation'=>0,		'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0,	'w'=>'3', 	'p'=>900, 	'lvl'=>1,	'mod'=>'p:0;c:1;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['35'] = array(	'selector'=>'ih',	'fraction'=>2, 'img'=>'h_2_2.png',		'l'=>'ta24',	'armory'=>20, 	'isolation'=>50,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0,	'w'=>'0.8', 	'p'=>1190, 	'lvl'=>2,	'mod'=>'p:0;c:0;a:0;s:5;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['36'] = array(	'selector'=>'if',	'fraction'=>2, 'img'=>'f_2_1.png',		'l'=>'ta25',	'armory'=>10, 	'isolation'=>5,		'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0,	'w'=>'0.7', 	'p'=>480, 	'lvl'=>1,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['37'] = array(	'selector'=>'ih',	'fraction'=>2, 'img'=>'h_2_1.png',		'l'=>'ta26',	'armory'=>10, 	'isolation'=>5,		'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0,	'w'=>'0.2', 	'p'=>480, 	'lvl'=>1,	'mod'=>'p:0;c:0;a:2;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['38'] = array(	'selector'=>'is',	'fraction'=>2, 'img'=>'s_2_1.png',		'l'=>'ta27',	'armory'=>10, 	'isolation'=>10,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0,	'w'=>'0.8', 	'p'=>950, 	'lvl'=>1,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['39'] = array(	'selector'=>'im',	'fraction'=>2, 'img'=>'m_2_1.png',		'l'=>'ta28',	'armory'=>5, 	'isolation'=>30,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0,	'w'=>'0.5', 	'p'=>1190, 	'lvl'=>3,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['40'] = array(	'selector'=>'ia',	'fraction'=>2, 'img'=>'a_2_2.png',		'l'=>'ta29',	'armory'=>20, 	'isolation'=>50,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0,	'w'=>'6', 	'p'=>4750, 	'lvl'=>3,	'mod'=>'p:0;c:1;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['41'] = array(	'selector'=>'ib',	'fraction'=>2, 'img'=>'b_2_2.png',		'l'=>'ta210',	'armory'=>0, 	'isolation'=>0,		'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0,	'w'=>'8', 	'p'=>2380, 	'lvl'=>3,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['42'] = array(	'selector'=>'is',	'fraction'=>2, 'img'=>'s_2_2.png',		'l'=>'ta211',	'armory'=>20, 	'isolation'=>50,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0,	'w'=>'2.5', 	'p'=>2380, 	'lvl'=>3,	'mod'=>'p:0;c:0;a:0;s:0;b:1;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['43'] = array(	'selector'=>'ie',	'fraction'=>2, 'img'=>'e_2_1.png',		'l'=>'ta212',	'armory'=>20, 	'isolation'=>5,		'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0,	'w'=>'1', 	'p'=>8080, 	'lvl'=>4,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['44'] = array(	'selector'=>'ia',	'fraction'=>2, 'img'=>'a_2_3.png',		'l'=>'ta213',	'armory'=>40, 	'isolation'=>10,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0,	'w'=>'8', 	'p'=>12350, 	'lvl'=>4,	'mod'=>'p:1;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['45'] = array(	'selector'=>'is',	'fraction'=>2, 'img'=>'s_2_3.png',		'l'=>'ta214',	'armory'=>40, 	'isolation'=>15,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0,	'w'=>'1.2', 	'p'=>6180, 	'lvl'=>4,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:4;r:0;q:0;t:0;g:0;k:0;v:0');
$items['46'] = array(	'selector'=>'if',	'fraction'=>2, 'img'=>'f_2_3.png',		'l'=>'ta215',	'armory'=>30, 	'isolation'=>10,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0,	'w'=>'0.8', 	'p'=>3090, 	'lvl'=>4,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:2;r:0;q:0;t:0;g:0;k:0;v:0');
$items['47'] = array(	'selector'=>'ia',	'fraction'=>2, 'img'=>'a_2_4.png',		'l'=>'ta216',	'armory'=>50, 	'isolation'=>10,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0,	'w'=>'9', 	'p'=>16150, 	'lvl'=>5,	'mod'=>'p:0;c:0;a:0;s:0;b:1;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['48'] = array(	'selector'=>'is',	'fraction'=>2, 'img'=>'s_2_4.png',		'l'=>'ta217',	'armory'=>50, 	'isolation'=>10,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0,	'w'=>'1.8', 	'p'=>8080, 	'lvl'=>5,	'mod'=>'p:1;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['49'] = array(	'selector'=>'ih',	'fraction'=>2, 'img'=>'h_2_3.png',		'l'=>'ta218',	'armory'=>50, 	'isolation'=>10,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0,	'w'=>'0.3', 	'p'=>4040, 	'lvl'=>5,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:5;q:0;t:0;g:0;k:0;v:0');

$items['50'] = array(	'selector'=>'ia',	'fraction'=>3, 'img'=>'a_3_1.png',		'l'=>'ta32', 	'armory'=>15, 	'isolation'=>5,		'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'3', 	'p'=>2100, 	'lvl'=>1,	'mod'=>'p:1;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['51'] = array(	'selector'=>'if',	'fraction'=>3, 'img'=>'f_3_1.png',		'l'=>'ta33', 	'armory'=>10, 	'isolation'=>0,		'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'0.8', 	'p'=>530, 	'lvl'=>1,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['52'] = array(	'selector'=>'is',	'fraction'=>3, 'img'=>'s_3_1.png',		'l'=>'ta34', 	'armory'=>10, 	'isolation'=>5,		'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'1', 	'p'=>1050, 	'lvl'=>1,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['53'] = array(	'selector'=>'ih',	'fraction'=>3, 'img'=>'h_3_1.png',		'l'=>'ta35', 	'armory'=>10, 	'isolation'=>5,		'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'0.2', 	'p'=>530, 	'lvl'=>1,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:5;q:0;t:0;g:0;k:0;v:0');
$items['54'] = array(	'selector'=>'ie',	'fraction'=>3, 'img'=>'e_3_1.png',		'l'=>'ta31', 	'armory'=>20, 	'isolation'=>0,		'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'1.2', 	'p'=>4730, 	'lvl'=>3,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['55'] = array(	'selector'=>'ia',	'fraction'=>3, 'img'=>'a_3_2.png',		'l'=>'ta36', 	'armory'=>35, 	'isolation'=>5,		'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'6.5', 	'p'=>9450, 	'lvl'=>3,	'mod'=>'p:1;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['56'] = array(	'selector'=>'ib',	'fraction'=>3, 'img'=>'b_3_1.png',		'l'=>'ta37', 	'armory'=>0, 	'isolation'=>0,		'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'5', 	'p'=>6650, 	'lvl'=>3,	'mod'=>'p:0;c:0;a:0;s:0;b:1;e:0;r:0;q:1;t:0;g:0;k:0;v:0');
$items['57'] = array(	'selector'=>'is',	'fraction'=>3, 'img'=>'s_3_2.png',		'l'=>'ta38', 	'armory'=>35, 	'isolation'=>5,		'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'1.4', 	'p'=>4730, 	'lvl'=>3,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:1;g:0;k:0;v:0');
$items['58'] = array(	'selector'=>'ie',	'fraction'=>3, 'img'=>'e_3_2.png',		'l'=>'ta39', 	'armory'=>25, 	'isolation'=>30,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'1.6', 	'p'=>9210, 	'lvl'=>4,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['59'] = array(	'selector'=>'ia',	'fraction'=>3, 'img'=>'a_3_3.png',		'l'=>'ta310', 	'armory'=>40, 	'isolation'=>30,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'9', 	'p'=>13650, 	'lvl'=>4,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:5;k:0;v:0');
$items['60'] = array(	'selector'=>'is',	'fraction'=>3, 'img'=>'s_3_3.png',		'l'=>'ta311', 	'armory'=>40, 	'isolation'=>30,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'1.6', 	'p'=>6830, 	'lvl'=>4,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:1;t:0;g:0;k:0;v:0');
$items['61'] = array(	'selector'=>'if',	'fraction'=>3, 'img'=>'f_3_2.png',		'l'=>'ta312', 	'armory'=>35, 	'isolation'=>5,		'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'0.9', 	'p'=>3410, 	'lvl'=>4,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:1;g:0;k:0;v:0');
$items['62'] = array(	'selector'=>'im',	'fraction'=>3, 'img'=>'m_3_2.png',		'l'=>'ta313', 	'armory'=>30, 	'isolation'=>5,		'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'1', 	'p'=>4460, 	'lvl'=>5,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['63'] = array(	'selector'=>'ia',	'fraction'=>3, 'img'=>'a_3_4.png',		'l'=>'ta314', 	'armory'=>55, 	'isolation'=>5,		'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'10', 	'p'=>17850, 	'lvl'=>5,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['64'] = array(	'selector'=>'ih',	'fraction'=>3, 'img'=>'h_3_2.png',		'l'=>'ta315', 	'armory'=>50, 	'isolation'=>10,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'0.3', 	'p'=>4460, 	'lvl'=>5,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');
$items['65'] = array(	'selector'=>'if',	'fraction'=>3, 'img'=>'f_3_3.png',		'l'=>'ta316', 	'armory'=>55, 	'isolation'=>10,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'1.1', 	'p'=>4460, 	'lvl'=>5,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0');

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

	function GetData($id)
	{
		global $items;
		$r = array(
		'id'		=> $id,
		'selector'	=> $items[$id]['selector'],
		'img'		=> $items[$id]['img'],
		'lang'		=> $items[$id]['l'],
		'armory'	=> $items[$id]['armory'],
		'isolation'	=> $items[$id]['isolation'],
		'dmg'		=> $items[$id]['dmg'],
		'pnt'		=> $items[$id]['pnt'],
		'vrn'		=> $items[$id]['vrn'],
		'dis'		=> $items[$id]['dis'],
		'rate'		=> $items[$id]['rate'],
		'w'		=> $items[$id]['w'],
		'p'		=> $items[$id]['p'],
		'level'		=> $items[$id]['lvl'],
		'mod'		=> $items[$id]['mod']);
		return $r;
	}

	/*
	* $TypeItem(2/1/0) - оружие/броня/все
	* $fraction - fraction
	*/
	function GetItems($TypeItem = 0, $faction = 0)
	{
		global $items;
		$result = array(); $icount = 0;
		for ($i = 0; $i < count($items); $i++)
		{
			if ($TypeItem == 0)
			{
				if ($faction == $items[$i]['fraction'])
				{
					$result[$icount] = array();
					$result[$icount] = GetData($i);
					$icount++;
				}
				else if ($faction == 0)
				{
					$result[$icount] = array();
					$result[$icount] = GetData($i);
					$icount++;
				}
			}
			else if ($TypeItem == 1)
			{
				if ($items[$i]['selector'] != 'iw' && $faction == $items[$i]['fraction'])
				{
					$result[$icount] = array();
					$result[$icount] = GetData($i);
					$icount++;
				}
				else if ($items[$i]['selector'] != 'iw' && $faction == 0)
				{
					$result[$icount] = array();
					$result[$icount] = GetData($i);
					$icount++;
				}
			}
			elseif ($TypeItem == 2)
			{
				if ($items[$i]['selector'] == 'iw' && $faction == $items[$i]['fraction'])
				{
					$result[$icount] = array();
					$result[$icount] = GetData($i);
					$icount++;
				}
				else if ($items[$i]['selector'] == 'iw' && $faction == 0)
				{
					$result[$icount] = array();
					$result[$icount] = GetData($i);
					$icount++;
				}
			}
		}
		return $result;
	}
?>