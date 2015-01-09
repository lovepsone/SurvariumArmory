<?php
/**
 * @package Survarium Armory
 * @version Release 2.0
 * @revision 77
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

class DB extends PDO
{
	public $error = false;
	public function __construct($dsn, $username='', $password='', $charset, $driver_options=array())
	{
		try
		{
			parent::__construct($dsn, $username, $password, $driver_options);
			$this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->setAttribute(PDO::ATTR_STATEMENT_CLASS, array('DBStatement', array($this)));
            
			$this->query("SET NAMES ".$charset);
	        }  
	        catch(PDOException $e)
		{  
			echo 'Error connect data base...';
			exit();
		}
	}
    
	public function prepare($sql, $driver_options=array())
	{
		try
		{
			return parent::prepare($sql, $driver_options);
		}  
		catch(PDOException $e)
		{  
			$this->error($e->getMessage());
		}
	}
    
	public function query($sql)
	{
		try
		{
			return parent::query($sql);
		}  
		catch(PDOException $e)
		{  
			$this->error($e->getMessage());
		}
	}
    
	public function exec($sql)
	{
		try
		{
			return parent::exec($sql);
		}  
		catch(PDOException $e)
		{  
			$this->error($e->getMessage());
		}
	}

	public function count($sql, $data)
	{
		$res = $this->prepare($sql);
		$res->execute($data);
        
		return $res->fetch(PDO::FETCH_OBJ);
	}

	public function error($msg)
	{
		if($this->error)
		{
			echo $msg;
		}
		else
		{
			echo 'An error occurred in the database...';
		}
		exit();
	}
}

class DBStatement extends PDOStatement 
{
	protected $DBH;
    
	protected function __construct($DBH)
	{
		$this->DBH = $DBH;
	}
    
	public function execute($data=array())
	{
		try
		{
			return parent::execute($data);
		}  
		catch(PDOException $e)
		{
			$this->DBH->error($e->getMessage());
		}
	}
}
?>