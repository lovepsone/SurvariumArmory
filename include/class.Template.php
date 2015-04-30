<?php
/**
 * @package Survarium Armory
 * @version Release 2.0
 * @revision 169
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

class Template
{
	private $dir_tmpl; // Директория с tpl-файлами
	private $data = array(); // Данные для вывода

	public function __construct($dir_tmpl)
	{
		$this->dir_tmpl = $dir_tmpl;
	}

	/* Метод для добавления новых значений в данные для вывода */ 
	public function set($name, $value)
	{
		$this->data[$name] = $value;
	}

	/* Метод для удаления значений из данных для вывода */ 
	public function delete($name)
	{
		unset($this->data[$name]);
	}

	/* При обращении, например, к $this->title будет выводиться $this->data["title"] */ 
	public function __get($name)
	{
		if (isset($this->data[$name]))
			return $this->data[$name];
		return '';
	}

	/* Вывод tpl-файла, в который подставляются все данные для вывода */ 
	public function display($template)
	{
		$template = $this->dir_tmpl.$template.".tpl";
		ob_start();
		include ($template);
		echo ob_get_clean();
	}
}

?>