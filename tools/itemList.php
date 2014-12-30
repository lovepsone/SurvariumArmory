<?php 
/**
 * @package Survarium Armory
 * @version Release 1.3
 * @revision 76
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
// id двухслотовых шлемов 58, 81, 94, 128
/*
* fraction
* 1 - независимые
* 2 - бродяги
* 3 - черный рынок
* 4 - армия возражденных
* 5 - поселение край
*
* selector
* iw - оружие основное 7
* ie - голова 0
* im - маска 1
* ia - броня 2
* ib - спина 3
* ih - рука 4
* is - ноги 5
* if - ступни 6
*
* modifiers
* p - подсумки для патронов
* c - Контейнер артефактов
* a - Время прицеливания
* s - время поиска
* b - вместимость карманов
* e - затраты энергии
* r - время перезарядки
* q - слот для спецсредств
* t - скорость передвижения
* g - регенерация
* k - отдача оружия
* v - востоновление энергии
* d - разброс от бедра
*/


$items = array();

$items['1'] = array(	'selector'=>'iw',	'fraction'=>1, 'img'=>'1', 	'rank'=>0,	'l'=>'tw11',	'armory'=>0, 	'isolation'=>0,		'dmg'=>110, 	'pnt'=>25, 	'vrn'=>'0.2', 	'dis'=>150, 	'rate'=>27, 	'w'=>'3.5', 	'p'=>0, 	'lvl'=>0,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['2'] = array(	'selector'=>'iw',	'fraction'=>1, 'img'=>'2', 	'rank'=>0,	'l'=>'tw12',	'armory'=>0, 	'isolation'=>0,		'dmg'=>30, 	'pnt'=>20, 	'vrn'=>'2', 	'dis'=>50, 	'rate'=>1000, 	'w'=>'3.6', 	'p'=>0, 	'lvl'=>0,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['3'] = array(	'selector'=>'iw',	'fraction'=>1, 'img'=>'3',		'rank'=>0,	'l'=>'tw13',	'armory'=>0, 	'isolation'=>0, 	'dmg'=>30, 	'pnt'=>20, 	'vrn'=>'2', 	'dis'=>50, 	'rate'=>220, 	'w'=>'0.8', 	'p'=>0, 	'lvl'=>0,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');

$items['4'] = array(	'selector'=>'iw',	'fraction'=>2, 'img'=>'4', 	'rank'=>0,	'l'=>'tw21',	'armory'=>0, 	'isolation'=>0, 	'dmg'=>100, 	'pnt'=>10, 	'vrn'=>'1', 	'dis'=>30, 	'rate'=>240, 	'w'=>'3.2', 	'p'=>2100, 	'lvl'=>1,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['5'] = array(	'selector'=>'iw',	'fraction'=>2, 'img'=>'5', 	'rank'=>2,	'l'=>'tw22',	'armory'=>0, 	'isolation'=>0, 	'dmg'=>110, 	'pnt'=>30, 	'vrn'=>'0.3', 	'dis'=>150, 	'rate'=>40, 	'w'=>'3.5', 	'p'=>11340, 	'lvl'=>3,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['6'] = array(	'selector'=>'iw',	'fraction'=>2, 'img'=>'6', 		'rank'=>1,	'l'=>'tw23',	'armory'=>0, 	'isolation'=>0, 	'dmg'=>35, 	'pnt'=>15, 	'vrn'=>'2', 	'dis'=>50, 	'rate'=>800, 	'w'=>'1.5', 	'p'=>4200, 	'lvl'=>2,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['7'] = array(	'selector'=>'iw',	'fraction'=>2, 'img'=>'7', 		'rank'=>1,	'l'=>'tw24',	'armory'=>0, 	'isolation'=>0, 	'dmg'=>35, 	'pnt'=>15, 	'vrn'=>'2', 	'dis'=>50, 	'rate'=>250, 	'w'=>'0.8', 	'p'=>2630, 	'lvl'=>2,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['8'] = array(	'selector'=>'iw',	'fraction'=>2, 'img'=>'8', 	'rank'=>3,	'l'=>'tw25',	'armory'=>0, 	'isolation'=>0, 	'dmg'=>100, 	'pnt'=>10, 	'vrn'=>'1.6', 	'dis'=>30, 	'rate'=>20, 	'w'=>'3.5', 	'p'=>13650, 	'lvl'=>4,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['9'] = array(	'selector'=>'iw',	'fraction'=>2, 'img'=>'9', 	'rank'=>4,	'l'=>'tw26',	'armory'=>0, 	'isolation'=>0, 	'dmg'=>120, 	'pnt'=>30, 	'vrn'=>'0.2', 	'dis'=>150, 	'rate'=>32, 	'w'=>'3.6', 	'p'=>21420, 	'lvl'=>5,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');

$items['10'] = array(	'selector'=>'iw',	'fraction'=>3, 'img'=>'10', 	'rank'=>0,	'l'=>'tw31',	'armory'=>0,	'isolation'=>0, 	'dmg'=>100, 	'pnt'=>10, 	'vrn'=>'2', 	'dis'=>10, 	'rate'=>300, 	'w'=>'1.8', 	'p'=>1900, 	'lvl'=>1,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['11'] = array(	'selector'=>'iw',	'fraction'=>3, 'img'=>'11', 		'rank'=>1,	'l'=>'tw32',	'armory'=>0, 	'isolation'=>0, 	'dmg'=>36, 	'pnt'=>16, 	'vrn'=>'1.8', 	'dis'=>60, 	'rate'=>600, 	'w'=>'3.5', 	'p'=>3800, 	'lvl'=>2,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['12'] = array(	'selector'=>'iw',	'fraction'=>3, 'img'=>'12', 		'rank'=>2,	'l'=>'tw33',	'armory'=>0, 	'isolation'=>0, 	'dmg'=>60, 	'pnt'=>20, 	'vrn'=>'1' , 	'dis'=>60, 	'rate'=>200, 	'w'=>'1.1', 	'p'=>4280, 	'lvl'=>3,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['13'] = array(	'selector'=>'iw',	'fraction'=>3, 'img'=>'13', 'rank'=>2,	'l'=>'tw34',	'armory'=>0, 	'isolation'=>0, 	'dmg'=>85, 	'pnt'=>28, 	'vrn'=>'0.5', 	'dis'=>100, 	'rate'=>89, 	'w'=>'3.1', 	'p'=>10260, 	'lvl'=>3,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['14'] = array(	'selector'=>'iw',	'fraction'=>3, 'img'=>'14', 	'rank'=>3,	'l'=>'tw35',	'armory'=>0, 	'isolation'=>0, 	'dmg'=>110, 	'pnt'=>10, 	'vrn'=>'1.8', 	'dis'=>30, 	'rate'=>52, 	'w'=>'3.5', 	'p'=>12350, 	'lvl'=>4,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['15'] = array(	'selector'=>'iw',	'fraction'=>3, 'img'=>'15', 	'rank'=>4,	'l'=>'tw36',	'armory'=>0, 	'isolation'=>0, 	'dmg'=>47, 	'pnt'=>18, 	'vrn'=>'1.5', 	'dis'=>80, 	'rate'=>650, 	'w'=>'2.7', 	'p'=>12920, 	'lvl'=>5,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');

$items['16'] = array(	'selector'=>'iw',	'fraction'=>4, 'img'=>'16', 		'rank'=>0,	'l'=>'tw41',	'armory'=>0, 	'isolation'=>0, 	'dmg'=>45, 	'pnt'=>25, 	'vrn'=>'1', 	'dis'=>100, 	'rate'=>600, 	'w'=>'3.6', 	'p'=>20900, 	'lvl'=>6,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['17'] = array(	'selector'=>'iw',	'fraction'=>4, 'img'=>'17', 	'rank'=>1,	'l'=>'tw42',	'armory'=>0, 	'isolation'=>0, 	'dmg'=>38, 	'pnt'=>16, 	'vrn'=>'1.5', 	'dis'=>50, 	'rate'=>300, 	'w'=>'0.8', 	'p'=>12830, 	'lvl'=>6,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['18'] = array(	'selector'=>'iw',	'fraction'=>4, 'img'=>'18', 	'rank'=>1,	'l'=>'tw43',	'armory'=>0, 	'isolation'=>0, 	'dmg'=>120, 	'pnt'=>10, 	'vrn'=>'1.6', 	'dis'=>30, 	'rate'=>240, 	'w'=>'4.4', 	'p'=>25650, 	'lvl'=>7,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['19'] = array(	'selector'=>'iw',	'fraction'=>4, 'img'=>'19', 		'rank'=>2,	'l'=>'tw44',	'armory'=>0, 	'isolation'=>0, 	'dmg'=>39, 	'pnt'=>18, 	'vrn'=>'1.6', 	'dis'=>60, 	'rate'=>900, 	'w'=>'1.6', 	'p'=>25080, 	'lvl'=>8,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['20'] = array(	'selector'=>'iw',	'fraction'=>4, 'img'=>'20', 		'rank'=>3,	'l'=>'tw45',	'armory'=>0, 	'isolation'=>0, 	'dmg'=>45, 	'pnt'=>25, 	'vrn'=>'0.8', 	'dis'=>120, 	'rate'=>600, 	'w'=>'7', 	'p'=>34490, 	'lvl'=>9,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['21'] = array(	'selector'=>'iw',	'fraction'=>4, 'img'=>'21', 	'rank'=>4,	'l'=>'tw46',	'armory'=>0, 	'isolation'=>0, 	'dmg'=>48, 	'pnt'=>22, 	'vrn'=>'1.2', 	'dis'=>100, 	'rate'=>650, 	'w'=>'3.4', 	'p'=>47500, 	'lvl'=>10,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['22'] = array(	'selector'=>'iw',	'fraction'=>4, 'img'=>'22', 	'rank'=>7,	'l'=>'tw47',	'armory'=>0, 	'isolation'=>0, 	'dmg'=>55, 	'pnt'=>22, 	'vrn'=>'1.2', 	'dis'=>60, 	'rate'=>800, 	'w'=>'2.5', 	'p'=>76000, 	'lvl'=>13,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['23'] = array(	'selector'=>'iw',	'fraction'=>4, 'img'=>'23', 		'rank'=>8,	'l'=>'tw48',	'armory'=>0, 	'isolation'=>0, 	'dmg'=>48, 	'pnt'=>22, 	'vrn'=>'0.9', 	'dis'=>100, 	'rate'=>900, 	'w'=>'3.3', 	'p'=>85500, 	'lvl'=>14,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');

$items['24'] = array(	'selector'=>'iw',	'fraction'=>5, 'img'=>'24', 		'rank'=>0,	'l'=>'tw51',	'armory'=>0, 	'isolation'=>0, 	'dmg'=>70, 	'pnt'=>25, 	'vrn'=>'0.8', 	'dis'=>100, 	'rate'=>300, 	'w'=>'3.8', 	'p'=>23100, 	'lvl'=>6,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['25'] = array(	'selector'=>'iw',	'fraction'=>5, 'img'=>'25', 		'rank'=>1,	'l'=>'tw52',	'armory'=>0, 	'isolation'=>0, 	'dmg'=>36, 	'pnt'=>16, 	'vrn'=>'2', 	'dis'=>40, 	'rate'=>400, 	'w'=>'1.2', 	'p'=>12830, 	'lvl'=>6,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['26'] = array(	'selector'=>'iw',	'fraction'=>5, 'img'=>'26', 	'rank'=>1,	'l'=>'tw53',	'armory'=>0, 	'isolation'=>0, 	'dmg'=>120, 	'pnt'=>10, 	'vrn'=>'1.8', 	'dis'=>30, 	'rate'=>280, 	'w'=>'3.8', 	'p'=>28350, 	'lvl'=>7,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['27'] = array(	'selector'=>'iw',	'fraction'=>5, 'img'=>'27', 	'rank'=>2,	'l'=>'tw54',	'armory'=>0, 	'isolation'=>0, 	'dmg'=>46, 	'pnt'=>16, 	'vrn'=>'1.4', 	'dis'=>70, 	'rate'=>600, 	'w'=>'2.5', 	'p'=>27720, 	'lvl'=>8,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['28'] = array(	'selector'=>'iw',	'fraction'=>5, 'img'=>'28', 		'rank'=>3,	'l'=>'tw55',	'armory'=>0, 	'isolation'=>0, 	'dmg'=>150, 	'pnt'=>40, 	'vrn'=>'0.1', 	'dis'=>200, 	'rate'=>21, 	'w'=>'6.2', 	'p'=>63000, 	'lvl'=>9,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['29'] = array(	'selector'=>'iw',	'fraction'=>5, 'img'=>'29', 		'rank'=>4,	'l'=>'tw56',	'armory'=>0, 	'isolation'=>0, 	'dmg'=>48, 	'pnt'=>22, 	'vrn'=>'1.3', 	'dis'=>100, 	'rate'=>650, 	'w'=>'3.1', 	'p'=>52500, 	'lvl'=>10,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['30'] = array(	'selector'=>'iw',	'fraction'=>5, 'img'=>'30', 	'rank'=>6,	'l'=>'tw57',	'armory'=>0, 	'isolation'=>0, 	'dmg'=>48, 	'pnt'=>22, 	'vrn'=>'0.9', 	'dis'=>120, 	'rate'=>600, 	'w'=>'5', 	'p'=>69300, 	'lvl'=>11,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['31'] = array(	'selector'=>'iw',	'fraction'=>5, 'img'=>'31', 		'rank'=>7,	'l'=>'tw58',	'armory'=>0, 	'isolation'=>0, 	'dmg'=>55, 	'pnt'=>22, 	'vrn'=>'1', 	'dis'=>60, 	'rate'=>700, 	'w'=>'1.8', 	'p'=>84000, 	'lvl'=>13,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['32'] = array(	'selector'=>'iw',	'fraction'=>5, 'img'=>'32', 	'rank'=>8,	'l'=>'tw59',	'armory'=>0, 	'isolation'=>0, 	'dmg'=>55, 	'pnt'=>22, 	'vrn'=>'0.3', 	'dis'=>60, 	'rate'=>600, 	'w'=>'2.8', 	'p'=>113400, 	'lvl'=>14,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');

$items['33'] = array(	'selector'=>'ia',	'fraction'=>2, 'img'=>'33',		'rank'=>0,	'l'=>'ta21',	'armory'=>10, 	'isolation'=>10,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0,	'w'=>'3', 	'p'=>1900, 	'lvl'=>1,	'mod'=>'p:1;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['34'] = array(	'selector'=>'if',	'fraction'=>2, 'img'=>'34',		'rank'=>0,	'l'=>'ta22',	'armory'=>20, 	'isolation'=>50,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0,	'w'=>'1.2', 	'p'=>1190, 	'lvl'=>2,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['35'] = array(	'selector'=>'ib',	'fraction'=>2, 'img'=>'35',		'rank'=>0,	'l'=>'ta23',	'armory'=>0, 	'isolation'=>0,		'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0,	'w'=>'3', 	'p'=>900, 	'lvl'=>1,	'mod'=>'p:0;c:1;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['36'] = array(	'selector'=>'ih',	'fraction'=>2, 'img'=>'36',		'rank'=>0,	'l'=>'ta24',	'armory'=>20, 	'isolation'=>50,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0,	'w'=>'0.8', 	'p'=>1190, 	'lvl'=>2,	'mod'=>'p:0;c:0;a:0;s:5;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['37'] = array(	'selector'=>'if',	'fraction'=>2, 'img'=>'37',		'rank'=>0,	'l'=>'ta25',	'armory'=>10, 	'isolation'=>5,		'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0,	'w'=>'0.7', 	'p'=>480, 	'lvl'=>1,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['38'] = array(	'selector'=>'ih',	'fraction'=>2, 'img'=>'38',		'rank'=>0,	'l'=>'ta26',	'armory'=>10, 	'isolation'=>5,		'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0,	'w'=>'0.2', 	'p'=>480, 	'lvl'=>1,	'mod'=>'p:0;c:0;a:2;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['39'] = array(	'selector'=>'is',	'fraction'=>2, 'img'=>'39',		'rank'=>0,	'l'=>'ta27',	'armory'=>10, 	'isolation'=>10,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0,	'w'=>'0.8', 	'p'=>950, 	'lvl'=>1,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['40'] = array(	'selector'=>'im',	'fraction'=>2, 'img'=>'40',		'rank'=>0,	'l'=>'ta28',	'armory'=>5, 	'isolation'=>30,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0,	'w'=>'0.5', 	'p'=>1190, 	'lvl'=>3,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['41'] = array(	'selector'=>'ia',	'fraction'=>2, 'img'=>'41',		'rank'=>0,	'l'=>'ta29',	'armory'=>20, 	'isolation'=>50,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0,	'w'=>'6', 	'p'=>4750, 	'lvl'=>3,	'mod'=>'p:0;c:1;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['42'] = array(	'selector'=>'ib',	'fraction'=>2, 'img'=>'42',		'rank'=>0,	'l'=>'ta210',	'armory'=>0, 	'isolation'=>0,		'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0,	'w'=>'8', 	'p'=>2380, 	'lvl'=>3,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['43'] = array(	'selector'=>'is',	'fraction'=>2, 'img'=>'43',		'rank'=>0,	'l'=>'ta211',	'armory'=>20, 	'isolation'=>50,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0,	'w'=>'2.5', 	'p'=>2380, 	'lvl'=>3,	'mod'=>'p:0;c:0;a:0;s:0;b:1;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['44'] = array(	'selector'=>'ie',	'fraction'=>2, 'img'=>'44',		'rank'=>0,	'l'=>'ta212',	'armory'=>20, 	'isolation'=>5,		'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0,	'w'=>'1', 	'p'=>8080, 	'lvl'=>4,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['45'] = array(	'selector'=>'ia',	'fraction'=>2, 'img'=>'45',		'rank'=>0,	'l'=>'ta213',	'armory'=>40, 	'isolation'=>10,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0,	'w'=>'8', 	'p'=>12350, 	'lvl'=>4,	'mod'=>'p:1;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['46'] = array(	'selector'=>'is',	'fraction'=>2, 'img'=>'46',		'rank'=>0,	'l'=>'ta214',	'armory'=>40, 	'isolation'=>15,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0,	'w'=>'1.2', 	'p'=>6180, 	'lvl'=>4,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:4;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['47'] = array(	'selector'=>'if',	'fraction'=>2, 'img'=>'47',		'rank'=>0,	'l'=>'ta215',	'armory'=>30, 	'isolation'=>10,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0,	'w'=>'0.8', 	'p'=>3090, 	'lvl'=>4,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:2;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['48'] = array(	'selector'=>'ia',	'fraction'=>2, 'img'=>'48',		'rank'=>0,	'l'=>'ta216',	'armory'=>50, 	'isolation'=>10,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0,	'w'=>'9', 	'p'=>16150, 	'lvl'=>5,	'mod'=>'p:0;c:0;a:0;s:0;b:1;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['49'] = array(	'selector'=>'is',	'fraction'=>2, 'img'=>'49',		'rank'=>0,	'l'=>'ta217',	'armory'=>50, 	'isolation'=>10,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0,	'w'=>'1.8', 	'p'=>8080, 	'lvl'=>5,	'mod'=>'p:1;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['50'] = array(	'selector'=>'ih',	'fraction'=>2, 'img'=>'50',		'rank'=>0,	'l'=>'ta218',	'armory'=>50, 	'isolation'=>10,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0,	'w'=>'0.3', 	'p'=>4040, 	'lvl'=>5,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:5;q:0;t:0;g:0;k:0;v:0;d:0');

$items['51'] = array(	'selector'=>'ia',	'fraction'=>3, 'img'=>'51',		'rank'=>0,	'l'=>'ta32', 	'armory'=>15, 	'isolation'=>5,		'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'3', 	'p'=>2100, 	'lvl'=>1,	'mod'=>'p:1;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['52'] = array(	'selector'=>'if',	'fraction'=>3, 'img'=>'52',		'rank'=>0,	'l'=>'ta33', 	'armory'=>10, 	'isolation'=>0,		'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'0.8', 	'p'=>530, 	'lvl'=>1,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['53'] = array(	'selector'=>'is',	'fraction'=>3, 'img'=>'53',		'rank'=>0,	'l'=>'ta34', 	'armory'=>10, 	'isolation'=>5,		'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'1', 	'p'=>1050, 	'lvl'=>1,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['54'] = array(	'selector'=>'ih',	'fraction'=>3, 'img'=>'54',		'rank'=>0,	'l'=>'ta35', 	'armory'=>10, 	'isolation'=>5,		'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'0.2', 	'p'=>530, 	'lvl'=>1,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:5;q:0;t:0;g:0;k:0;v:0;d:0');
$items['55'] = array(	'selector'=>'ie',	'fraction'=>3, 'img'=>'55',		'rank'=>0,	'l'=>'ta31', 	'armory'=>20, 	'isolation'=>0,		'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'1.2', 	'p'=>4730, 	'lvl'=>3,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['56'] = array(	'selector'=>'ia',	'fraction'=>3, 'img'=>'56',		'rank'=>0,	'l'=>'ta36', 	'armory'=>35, 	'isolation'=>5,		'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'6.5', 	'p'=>9450, 	'lvl'=>3,	'mod'=>'p:1;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['57'] = array(	'selector'=>'ib',	'fraction'=>3, 'img'=>'57',		'rank'=>0,	'l'=>'ta37', 	'armory'=>0, 	'isolation'=>0,		'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'5', 	'p'=>6650, 	'lvl'=>3,	'mod'=>'p:0;c:0;a:0;s:0;b:1;e:0;r:0;q:1;t:0;g:0;k:0;v:0;d:0');
$items['58'] = array(	'selector'=>'is',	'fraction'=>3, 'img'=>'58',		'rank'=>0,	'l'=>'ta38', 	'armory'=>35, 	'isolation'=>5,		'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'1.4', 	'p'=>4730, 	'lvl'=>3,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:1;g:0;k:0;v:0;d:0');
$items['59'] = array(	'selector'=>'ie',	'fraction'=>3, 'img'=>'59',		'rank'=>0,	'l'=>'ta39', 	'armory'=>25, 	'isolation'=>30,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'1.6', 	'p'=>9210, 	'lvl'=>4,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['60'] = array(	'selector'=>'ia',	'fraction'=>3, 'img'=>'60',		'rank'=>0,	'l'=>'ta310', 	'armory'=>40, 	'isolation'=>30,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'9', 	'p'=>13650, 	'lvl'=>4,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:5;k:0;v:0;d:0');
$items['61'] = array(	'selector'=>'is',	'fraction'=>3, 'img'=>'61',		'rank'=>0,	'l'=>'ta311', 	'armory'=>40, 	'isolation'=>30,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'1.6', 	'p'=>6830, 	'lvl'=>4,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:1;t:0;g:0;k:0;v:0;d:0');
$items['62'] = array(	'selector'=>'if',	'fraction'=>3, 'img'=>'62',		'rank'=>0,	'l'=>'ta312', 	'armory'=>35, 	'isolation'=>5,		'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'0.9', 	'p'=>3410, 	'lvl'=>4,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:1;g:0;k:0;v:0;d:0');
$items['63'] = array(	'selector'=>'im',	'fraction'=>3, 'img'=>'63',		'rank'=>0,	'l'=>'ta313', 	'armory'=>30, 	'isolation'=>5,		'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'1', 	'p'=>4460, 	'lvl'=>5,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['64'] = array(	'selector'=>'ia',	'fraction'=>3, 'img'=>'64',		'rank'=>0,	'l'=>'ta314', 	'armory'=>55, 	'isolation'=>5,		'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'10', 	'p'=>17850, 	'lvl'=>5,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['65'] = array(	'selector'=>'ih',	'fraction'=>3, 'img'=>'65',		'rank'=>0,	'l'=>'ta315', 	'armory'=>50, 	'isolation'=>10,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'0.3', 	'p'=>4460, 	'lvl'=>5,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['66'] = array(	'selector'=>'if',	'fraction'=>3, 'img'=>'66',		'rank'=>0,	'l'=>'ta316', 	'armory'=>55, 	'isolation'=>10,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'1.1', 	'p'=>4460, 	'lvl'=>5,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');

$items['67'] = array(	'selector'=>'ie',	'fraction'=>4, 'img'=>'67',		'rank'=>0,	'l'=>'ta41', 	'armory'=>25, 	'isolation'=>0,		'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'1.4', 	'p'=>11550, 	'lvl'=>6,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['68'] = array(	'selector'=>'ia',	'fraction'=>4, 'img'=>'68',		'rank'=>0,	'l'=>'ta42', 	'armory'=>60, 	'isolation'=>5,		'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'10', 	'p'=>23100, 	'lvl'=>6,	'mod'=>'p:1;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['69'] = array(	'selector'=>'is',	'fraction'=>4, 'img'=>'69',		'rank'=>0,	'l'=>'ta43', 	'armory'=>60, 	'isolation'=>10,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'2.1', 	'p'=>11550, 	'lvl'=>6,	'mod'=>'p:1;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['70'] = array(	'selector'=>'if',	'fraction'=>4, 'img'=>'70',		'rank'=>0,	'l'=>'ta44', 	'armory'=>60, 	'isolation'=>10,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'1.2', 	'p'=>5780, 	'lvl'=>6,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:2;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['71'] = array(	'selector'=>'ie',	'fraction'=>4, 'img'=>'71',		'rank'=>0,	'l'=>'ta45', 	'armory'=>30, 	'isolation'=>40,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'1.6', 	'p'=>17330, 	'lvl'=>8,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['72'] = array(	'selector'=>'im',	'fraction'=>4, 'img'=>'72',		'rank'=>0,	'l'=>'ta46', 	'armory'=>15, 	'isolation'=>50,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'0.8', 	'p'=>8660, 	'lvl'=>8,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['73'] = array(	'selector'=>'ia',	'fraction'=>4, 'img'=>'73',		'rank'=>0,	'l'=>'ta47', 	'armory'=>60, 	'isolation'=>45,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'6.5', 	'p'=>34650, 	'lvl'=>8,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:1;t:0;g:0;k:0;v:0;d:0');
$items['74'] = array(	'selector'=>'ib',	'fraction'=>4, 'img'=>'74',		'rank'=>0,	'l'=>'ta48', 	'armory'=>0, 	'isolation'=>0,		'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'5', 	'p'=>17330, 	'lvl'=>8,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['75'] = array(	'selector'=>'is',	'fraction'=>4, 'img'=>'75',		'rank'=>0,	'l'=>'ta49', 	'armory'=>50, 	'isolation'=>40,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'1.2', 	'p'=>17330, 	'lvl'=>8,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:2;g:0;k:0;v:0;d:0');
$items['76'] = array(	'selector'=>'if',	'fraction'=>4, 'img'=>'76',		'rank'=>0,	'l'=>'ta410', 	'armory'=>50, 	'isolation'=>40,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'1', 	'p'=>8660, 	'lvl'=>8,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:2;g:0;k:0;v:0;d:0');
$items['77'] = array(	'selector'=>'ie',	'fraction'=>4, 'img'=>'77',		'rank'=>0,	'l'=>'ta411', 	'armory'=>40, 	'isolation'=>10,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'1.8', 	'p'=>26250, 	'lvl'=>9,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['78'] = array(	'selector'=>'im',	'fraction'=>4, 'img'=>'78',		'rank'=>0,	'l'=>'ta412', 	'armory'=>40, 	'isolation'=>5,		'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'1.5', 	'p'=>13130, 	'lvl'=>9,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['79'] = array(	'selector'=>'ia',	'fraction'=>4, 'img'=>'79',		'rank'=>0,	'l'=>'ta413', 	'armory'=>70, 	'isolation'=>15,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'12', 	'p'=>52500, 	'lvl'=>9,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:1;t:0;g:0;k:0;v:0;d:0');
$items['80'] = array(	'selector'=>'is',	'fraction'=>4, 'img'=>'80',		'rank'=>0,	'l'=>'ta414', 	'armory'=>70, 	'isolation'=>10,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'2.5', 	'p'=>26250, 	'lvl'=>9,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['81'] = array(	'selector'=>'ih',	'fraction'=>4, 'img'=>'81',		'rank'=>0,	'l'=>'ta415', 	'armory'=>60, 	'isolation'=>10,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'0.3', 	'p'=>13130, 	'lvl'=>9,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:2;v:0;d:0');
$items['82'] = array(	'selector'=>'ie',	'fraction'=>4, 'img'=>'82',		'rank'=>0,	'l'=>'ta416', 	'armory'=>55, 	'isolation'=>30,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'4.5', 	'p'=>54250, 	'lvl'=>12,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['83'] = array(	'selector'=>'ia',	'fraction'=>4, 'img'=>'83',		'rank'=>0,	'l'=>'ta417', 	'armory'=>80, 	'isolation'=>20,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'15', 	'p'=>73500, 	'lvl'=>12,	'mod'=>'p:2;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['84'] = array(	'selector'=>'is',	'fraction'=>4, 'img'=>'84',		'rank'=>0,	'l'=>'ta418', 	'armory'=>80, 	'isolation'=>15,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'3.5', 	'p'=>33750, 	'lvl'=>12,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:2;d:0');
$items['85'] = array(	'selector'=>'ih',	'fraction'=>4, 'img'=>'85',		'rank'=>0,	'l'=>'ta419', 	'armory'=>80, 	'isolation'=>20,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'0.4', 	'p'=>18380, 	'lvl'=>12,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:4;v:0;d:0');
$items['86'] = array(	'selector'=>'if',	'fraction'=>4, 'img'=>'86',		'rank'=>0,	'l'=>'ta420', 	'armory'=>80, 	'isolation'=>10,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'2', 	'p'=>18380, 	'lvl'=>12,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['87'] = array(	'selector'=>'ie',	'fraction'=>4, 'img'=>'87',		'rank'=>0,	'l'=>'ta421', 	'armory'=>35, 	'isolation'=>70,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'2', 	'p'=>47250, 	'lvl'=>14,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['88'] = array(	'selector'=>'im',	'fraction'=>4, 'img'=>'88',		'rank'=>0,	'l'=>'ta422', 	'armory'=>35, 	'isolation'=>70,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'1.2', 	'p'=>23630, 	'lvl'=>14,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['89'] = array(	'selector'=>'ia',	'fraction'=>4, 'img'=>'89',		'rank'=>0,	'l'=>'ta423', 	'armory'=>70, 	'isolation'=>75,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'13.5', 	'p'=>94500, 	'lvl'=>14,	'mod'=>'p:0;c:0;a:0;s:0;b:1;e:0;r:0;q:1;t:0;g:0;k:0;v:0;d:0');
$items['90'] = array(	'selector'=>'ib',	'fraction'=>4, 'img'=>'90',		'rank'=>0,	'l'=>'ta424', 	'armory'=>0, 	'isolation'=>0,		'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'8', 	'p'=>55250, 	'lvl'=>14,	'mod'=>'p:0;c:0;a:0;s:0;b:2;e:0;r:0;q:2;t:0;g:0;k:0;v:0;d:0');
$items['91'] = array(	'selector'=>'ib',	'fraction'=>4, 'img'=>'91',		'rank'=>0,	'l'=>'ta425', 	'armory'=>0, 	'isolation'=>0,		'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'8', 	'p'=>47250, 	'lvl'=>14,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['92'] = array(	'selector'=>'is',	'fraction'=>4, 'img'=>'92',		'rank'=>0,	'l'=>'ta426', 	'armory'=>60, 	'isolation'=>70,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'1.8', 	'p'=>47250, 	'lvl'=>14,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:1;t:0;g:0;k:0;v:0;d:0');
$items['93'] = array(	'selector'=>'ih',	'fraction'=>4, 'img'=>'93',		'rank'=>0,	'l'=>'ta427', 	'armory'=>70, 	'isolation'=>70,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'0.5', 	'p'=>23530, 	'lvl'=>14,	'mod'=>'p:0;c:0;a:0;s:10;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['94'] = array(	'selector'=>'if',	'fraction'=>4, 'img'=>'94',		'rank'=>0,	'l'=>'ta428', 	'armory'=>70, 	'isolation'=>70,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'2.5', 	'p'=>23630, 	'lvl'=>14,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:2;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['95'] = array(	'selector'=>'ie',	'fraction'=>4, 'img'=>'95',		'rank'=>9,	'l'=>'ta429', 	'armory'=>90, 	'isolation'=>50,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'6', 	'p'=>77500, 	'lvl'=>15,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['96'] = array(	'selector'=>'ia',	'fraction'=>4, 'img'=>'96',		'rank'=>9,	'l'=>'ta430', 	'armory'=>90, 	'isolation'=>50,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'20', 	'p'=>105000, 	'lvl'=>15,	'mod'=>'p:2;c:0;a:0;s:0;b:1;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['97'] = array(	'selector'=>'is',	'fraction'=>4, 'img'=>'97',		'rank'=>9,	'l'=>'ta431', 	'armory'=>90, 	'isolation'=>50,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'5', 	'p'=>52500, 	'lvl'=>15,	'mod'=>'p:1;c:0;a:0;s:0;b:0;e:0;r:0;q:1;t:0;g:0;k:0;v:0;d:0');
$items['98'] = array(	'selector'=>'ih',	'fraction'=>4, 'img'=>'98',		'rank'=>9,	'l'=>'ta432', 	'armory'=>90, 	'isolation'=>50,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'0.6', 	'p'=>26250, 	'lvl'=>15,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['99'] = array(	'selector'=>'if',	'fraction'=>4, 'img'=>'99',		'rank'=>9,	'l'=>'ta433', 	'armory'=>90, 	'isolation'=>50,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'3', 	'p'=>26250, 	'lvl'=>15,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');

$items['100'] = array(	'selector'=>'ie',	'fraction'=>5, 'img'=>'100',		'rank'=>0,	'l'=>'ta51', 	'armory'=>20, 	'isolation'=>20,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'1', 	'p'=>10450, 	'lvl'=>6,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['101'] = array(	'selector'=>'im',	'fraction'=>5, 'img'=>'101',		'rank'=>0,	'l'=>'ta52', 	'armory'=>10, 	'isolation'=>50,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'0.8', 	'p'=>5230, 	'lvl'=>6,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['102'] = array(	'selector'=>'ia',	'fraction'=>5, 'img'=>'102',		'rank'=>0,	'l'=>'ta53', 	'armory'=>50, 	'isolation'=>20,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'6', 	'p'=>20900, 	'lvl'=>6,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:1;t:0;g:0;k:0;v:0;d:0');
$items['103'] = array(	'selector'=>'ib',	'fraction'=>5, 'img'=>'103',		'rank'=>0,	'l'=>'ta54', 	'armory'=>0, 	'isolation'=>0,		'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'6', 	'p'=>10450, 	'lvl'=>6,	'mod'=>'p:0;c:2;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['104'] = array(	'selector'=>'is',	'fraction'=>5, 'img'=>'104',		'rank'=>0,	'l'=>'ta55', 	'armory'=>50, 	'isolation'=>20,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'1.6', 	'p'=>10450, 	'lvl'=>6,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:4;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['105'] = array(	'selector'=>'if',	'fraction'=>5, 'img'=>'105',		'rank'=>0,	'l'=>'ta56', 	'armory'=>50, 	'isolation'=>20,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'1', 	'p'=>5230, 	'lvl'=>6,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:1;g:0;k:0;v:0;d:0');
$items['106'] = array(	'selector'=>'ie',	'fraction'=>5, 'img'=>'106',		'rank'=>0,	'l'=>'ta57', 	'armory'=>20, 	'isolation'=>40,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'0.5', 	'p'=>15680, 	'lvl'=>8,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['107'] = array(	'selector'=>'im',	'fraction'=>5, 'img'=>'107',		'rank'=>0,	'l'=>'ta58', 	'armory'=>20, 	'isolation'=>65,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'1', 	'p'=>7840, 	'lvl'=>8,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['108'] = array(	'selector'=>'ia',	'fraction'=>5, 'img'=>'108',		'rank'=>0,	'l'=>'ta59', 	'armory'=>50, 	'isolation'=>65,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'6', 	'p'=>31350, 	'lvl'=>8,	'mod'=>'p:0;c:1;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['109'] = array(	'selector'=>'ib',	'fraction'=>5, 'img'=>'109',		'rank'=>0,	'l'=>'ta510', 	'armory'=>0, 	'isolation'=>0,		'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'6', 	'p'=>15680, 	'lvl'=>8,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['110'] = array(	'selector'=>'is',	'fraction'=>5, 'img'=>'110',		'rank'=>0,	'l'=>'ta511', 	'armory'=>50, 	'isolation'=>60,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'2', 	'p'=>15680, 	'lvl'=>8,	'mod'=>'p:0;c:1;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['111'] = array(	'selector'=>'ih',	'fraction'=>5, 'img'=>'111',		'rank'=>0,	'l'=>'ta512', 	'armory'=>50, 	'isolation'=>60,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'0.3', 	'p'=>7840, 	'lvl'=>8,	'mod'=>'p:0;c:0;a:0;s:10;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['112'] = array(	'selector'=>'if',	'fraction'=>5, 'img'=>'112',		'rank'=>0,	'l'=>'ta513', 	'armory'=>50, 	'isolation'=>20,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'1', 	'p'=>7840, 	'lvl'=>8,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:4;d:0');
$items['113'] = array(	'selector'=>'ia',	'fraction'=>5, 'img'=>'113',		'rank'=>0,	'l'=>'ta514', 	'armory'=>60, 	'isolation'=>20,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'8', 	'p'=>47500, 	'lvl'=>9,	'mod'=>'p:1;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['114'] = array(	'selector'=>'is',	'fraction'=>5, 'img'=>'114',		'rank'=>0,	'l'=>'ta515', 	'armory'=>60, 	'isolation'=>20,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'1.8', 	'p'=>23750, 	'lvl'=>9,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:2;g:0;k:0;v:0;d:0');
$items['115'] = array(	'selector'=>'ih',	'fraction'=>5, 'img'=>'115',		'rank'=>0,	'l'=>'ta516', 	'armory'=>60, 	'isolation'=>25,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'0.2', 	'p'=>11880, 	'lvl'=>9,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:8;q:0;t:0;g:0;k:0;v:0;d:0');
$items['116'] = array(	'selector'=>'if',	'fraction'=>5, 'img'=>'116',		'rank'=>0,	'l'=>'ta517', 	'armory'=>60, 	'isolation'=>20,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'1.2', 	'p'=>11880, 	'lvl'=>9,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:2;g:0;k:0;v:0;d:0');
$items['117'] = array(	'selector'=>'ie',	'fraction'=>5, 'img'=>'117',		'rank'=>0,	'l'=>'ta518', 	'armory'=>20, 	'isolation'=>25,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'0.1', 	'p'=>33250, 	'lvl'=>12,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['118'] = array(	'selector'=>'ia',	'fraction'=>5, 'img'=>'118',		'rank'=>0,	'l'=>'ta519', 	'armory'=>65, 	'isolation'=>25,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'7', 	'p'=>66500, 	'lvl'=>12,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:8;k:0;v:0;d:0');
$items['119'] = array(	'selector'=>'is',	'fraction'=>5, 'img'=>'119',		'rank'=>0,	'l'=>'ta520', 	'armory'=>65, 	'isolation'=>25,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'2', 	'p'=>33250, 	'lvl'=>12,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:1;t:0;g:0;k:0;v:0;d:0');
$items['120'] = array(	'selector'=>'ih',	'fraction'=>5, 'img'=>'120',		'rank'=>0,	'l'=>'ta521', 	'armory'=>65, 	'isolation'=>25,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'0.3', 	'p'=>16630, 	'lvl'=>12,	'mod'=>'p:0;c:0;a:4;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['121'] = array(	'selector'=>'if',	'fraction'=>5, 'img'=>'121',		'rank'=>0,	'l'=>'ta522', 	'armory'=>65, 	'isolation'=>25,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'1', 	'p'=>16630, 	'lvl'=>12,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:4;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['122'] = array(	'selector'=>'ie',	'fraction'=>5, 'img'=>'122',		'rank'=>0,	'l'=>'ta523', 	'armory'=>50, 	'isolation'=>25,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'2', 	'p'=>42750, 	'lvl'=>14,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['123'] = array(	'selector'=>'im',	'fraction'=>5, 'img'=>'123',		'rank'=>0,	'l'=>'ta524', 	'armory'=>50, 	'isolation'=>25,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'2', 	'p'=>21380, 	'lvl'=>14,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['124'] = array(	'selector'=>'ia',	'fraction'=>5, 'img'=>'124',		'rank'=>0,	'l'=>'ta525', 	'armory'=>75, 	'isolation'=>25,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'10', 	'p'=>85500, 	'lvl'=>14,	'mod'=>'p:1;c:0;a:0;s:0;b:0;e:0;r:0;q:1;t:0;g:0;k:0;v:0;d:0');
$items['125'] = array(	'selector'=>'ib',	'fraction'=>5, 'img'=>'125',		'rank'=>0,	'l'=>'ta526', 	'armory'=>0, 	'isolation'=>0,		'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'4', 	'p'=>42750, 	'lvl'=>14,	'mod'=>'p:0;c:1;a:0;s:0;b:1;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['126'] = array(	'selector'=>'is',	'fraction'=>5, 'img'=>'126',		'rank'=>0,	'l'=>'ta527', 	'armory'=>75, 	'isolation'=>30,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'3', 	'p'=>42750, 	'lvl'=>14,	'mod'=>'p:1;c:0;a:0;s:0;b:0;e:0;r:0;q:1;t:0;g:0;k:0;v:0;d:0');
$items['127'] = array(	'selector'=>'ih',	'fraction'=>5, 'img'=>'127',		'rank'=>0,	'l'=>'ta528', 	'armory'=>75, 	'isolation'=>30,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'0.3', 	'p'=>21380, 	'lvl'=>14,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:4');
$items['128'] = array(	'selector'=>'if',	'fraction'=>5, 'img'=>'128',		'rank'=>0,	'l'=>'ta529', 	'armory'=>75, 	'isolation'=>30,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'2.2', 	'p'=>21380, 	'lvl'=>14,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:3;g:0;k:0;v:0;d:0');
$items['129'] = array(	'selector'=>'ie',	'fraction'=>5, 'img'=>'129',		'rank'=>9,	'l'=>'ta530', 	'armory'=>80, 	'isolation'=>90,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'5', 	'p'=>72500, 	'lvl'=>15,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['130'] = array(	'selector'=>'ia',	'fraction'=>5, 'img'=>'130',		'rank'=>9,	'l'=>'ta531', 	'armory'=>85, 	'isolation'=>90,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'17', 	'p'=>95000, 	'lvl'=>15,	'mod'=>'p:0;c:1;a:0;s:0;b:0;e:0;r:0;q:1;t:0;g:0;k:0;v:0;d:0');
$items['131'] = array(	'selector'=>'ib',	'fraction'=>5, 'img'=>'131',		'rank'=>9,	'l'=>'ta532', 	'armory'=>0, 	'isolation'=>0,		'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'7', 	'p'=>47500, 	'lvl'=>15,	'mod'=>'p:0;c:1;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:15;k:0;v:0;d:0');
$items['132'] = array(	'selector'=>'is',	'fraction'=>5, 'img'=>'132',		'rank'=>9,	'l'=>'ta533', 	'armory'=>85, 	'isolation'=>90,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'4', 	'p'=>47500, 	'lvl'=>15,	'mod'=>'p:0;c:1;a:0;s:0;b:0;e:0;r:0;q:1;t:0;g:0;k:0;v:0;d:0');
$items['133'] = array(	'selector'=>'ih',	'fraction'=>5, 'img'=>'133',		'rank'=>9,	'l'=>'ta534', 	'armory'=>85, 	'isolation'=>90,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'0.4', 	'p'=>23750, 	'lvl'=>15,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');
$items['134'] = array(	'selector'=>'if',	'fraction'=>5, 'img'=>'134',		'rank'=>9,	'l'=>'ta535', 	'armory'=>85, 	'isolation'=>90,	'dmg'=>0, 	'pnt'=>0, 	'vrn'=>'0', 	'dis'=>0, 	'rate'=>0, 	'w'=>'1.9', 	'p'=>43750, 	'lvl'=>15,	'mod'=>'p:0;c:0;a:0;s:0;b:0;e:0;r:0;q:0;t:0;g:0;k:0;v:0;d:0');

?>