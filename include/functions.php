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
	function GetParseId($str)
	{
		//preg_match_all('/<img[^>]+id=([\'"])?((?(1).+?|[^\s>]+))(?(1)\1)/', $str, $result);
		//$result = explode('\"', $result[2][0]);
		$result = explode('\"', $str);
		return $result[5];
	}

	function GetLoadWeapon($id, $item)
	{
		if ($item[$id]['selector'] == "iw")
		{
			return $item[$id]['dmg'].':'.$item[$id]['pnt'].':'.$item[$id]['vrn'].':'.$item[$id]['dis'].':'.$item[$id]['rate'].':'.$item[$id]['w'].':'.$item[$id]['p'].':'.$item[$id]['lvl'].':'.$item[$id]['l'].':'.$id;
		}
		return "0:0:0:0:0:0:0:0:iw:0";
	}

	function GetLoadArmory($id, $item)
	{
		if ($item[$id]['selector'] != "iw")
		{
			return $item[$id]['armory'].':'.$item[$id]['isolation'].':'.$item[$id]['w'].':'.$item[$id]['p'].':'.$item[$id]['lvl'].':'.$item[$id]['l'].':'.$id;
		}
		return "0:0:0:0:0:ia:0";
	}

	function GetParseArmory($w, $s = 'a')
	{
		$result = '0';
		$data = explode(":", $w);
		switch ($s)
		{
		  case 'a':
		    $result = $data[0];
		    break;
		  case 'i':
		    $result = $data[1];
		    break;
		  case 'w':
		    $result = $data[2];
		    break;
		  case 'p':
		    $result = $data[3];
		    break;
		  case 'lvl':
		    $result = $data[4];
		    break;
		  case 'l':
		    $result = $data[5];
		    break;
		  case 'id':
		    $result = $data[6];
		    break;
		  default:
		    $result = $data[0];
		    break;
		}
		return $result;
	}

	function GetParseWeapon($w, $s = 'dmg')
	{
		$result = '0';
		$data = explode(":", $w);
		switch ($s)
		{
		  case 'dmg':
		    $result = $data[0];
		    break;
		  case 'pnt':
		    $result = $data[1];
		    break;
		  case 'vrn':
		    $result = $data[2];
		    break;
		  case 'dis':
		    $result = $data[3];
		    break;
		  case 'rate':
		    $result = $data[4];
		    break;
		  case 'w':
		    $result = $data[5];
		    break;
		  case 'p':
		    $result = $data[6];
		    break;
		  case 'lvl':
		    $result = $data[7];
		    break;
		  case 'l':
		    $result = $data[8];
		    break;
		  case 'id':
		    $result = $data[9];
		    break;
		  default:
		    $result = $data[0];
		    break;
		}
		return $result;
	}

	function GetSmallImgFaction($data, $id)
	{
		return "<img src='images/smallicon/".$data[$id]['fraction'].".png'/>";
	}

	function GetPlusMinus($m)
	{
		if ($m == 'p' || $m == 'c' || $m == 'r' || $m == 'b' || $m == 'g' || $m == 't' || $m == 'v')
			return '+';
		return '-';
	}

	function GetImgMod($m = 'p')
	{
		return "<img src='images/mod/".$m.".png' style='position: relative; left: 0px; top: 3px;'/>";
	}
?>