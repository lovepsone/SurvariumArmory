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

$txt = array();
$txt['dmg'] = 'Урон';
$txt['pnt'] = 'Бронебойность';
$txt['vrn'] = 'Дисперсия';
$txt['dis'] = 'Дистанция';
$txt['rate'] = 'Скорострельность';
$txt['armory'] = 'Броня';
$txt['isolation'] = 'Изоляция';

$txt['w'] = 'Вес';
$txt['p'] = 'Цена';
$txt['m'] = ' м';
$txt['k'] = ' кг';
$txt['tw11'] = 'Карабин Мосина';
$txt['tw12'] = 'ППШ-41';
$txt['tw13'] = 'ТТ-33';
$txt['tw21'] = 'ТОЗ-34';
$txt['tw22'] = 'ТОЗ-122';
$txt['tw23'] = 'ОЦ-02 Кипариз';

$txt['tw31'] = 'ТОЗ-66';
$txt['tw32'] = 'Узи';
$txt['tw33'] = 'Кольт Питон';
$txt['tw34'] = 'Winchester 1894';
$txt['tw35'] = 'Remington 870';

$txt['ta11'] = 'Телогрейка';
$txt['ta12'] = 'Сапоги Химзащиты';
$txt['ta13'] = 'Рюкзак с контейнерам';
$txt['ta14'] = 'Перчатки Химзащиты';
$txt['ta15'] = 'Кожаные ботинки';
$txt['ta16'] = 'Обрезанные перчатки';
$txt['ta17'] = 'Холщевые штаны';

$txt['ta21'] = 'Каска байкера';
$txt['ta22'] = 'Кожаная безрукавка';
$txt['ta23'] = 'Казаки';
$txt['ta24'] = 'Джинсы';
$txt['ta25'] = 'Байкерские перчатки';

$txt['iw'] = 'Пусто';
$txt['weapon'] = 'Оружие:';
$txt['head'] = 'Голова';
$txt['body'] = 'Тело';
$txt['hand'] = 'Руки';
$txt['footer'] = 'Ноги и ступни';
$txt['stats'] = 'Статистика по экиперовке';
$txt['t_armory'] = 'Общая защита:';
$txt['t_isolation'] = 'Общая изоляция:';
$txt['t_w'] = 'Общий вес:';
$txt['t_p'] = 'Общая стоимоть:';
$txt['t_lvl'] = 'Уровень экипировки:';
$txt['t_b'] = 'Бонусы экиперовки:';


$txt['pm'] = ' Подсумки для патронов: ';
$txt['cm'] = ' Контейнер артефактов: ';
$txt['am'] = ' Время прицеливания: ';
$txt['sm'] = ' Время поиска: ';
$txt['bm'] = ' Вместимость карманов: ';
$txt['em'] = ' Затраты энергии: ';
$txt['rm'] = ' Время перезарядки: ';
$txt['qm'] = ' Слот для спецсредств: ';
$txt['tm'] = ' Скорость передвижения: ';
$txt['gm'] = ' Регенерация: ';
$txt['km'] = ' Отдача оружия: ';
$txt['vm'] = ' Восстановление энергии: ';

function GetTxtMod($m = 'p')
{
	global $txt;
	$result = '';
	switch ($m)
	{
	  case 'p':
	    $result = $txt['pm'];
	    break;
	  case 'c':
	    $result = $txt['cm'];
	    break;
	  case 'a':
	    $result = $txt['am'];
	    break;
	  case 's':
	    $result = $txt['sm'];
	    break;
	  case 'b':
	    $result = $txt['bm'];
	    break;
	  case 'e':
	    $result = $txt['em'];
	    break;
	  case 'r':
	    $result = $txt['rm'];
	    break;
	  case 'q':
	    $result = $txt['qm'];
	    break;
	  case 't':
	    $result = $txt['tm'];
	    break;
	  case 'g':
	    $result = $txt['gm'];
	    break;
	  case 'k':
	    $result = $txt['km'];
	    break;
	}
	return $result;
}

function GetTxtModType($m = 'a')
{
	if ($m == 'a' || $m == 's' || $m == 'e' || $m == 'r' || $m == 't' || $m == 'q' || $m == 'k')
		return '%';
	return '';
}
?>