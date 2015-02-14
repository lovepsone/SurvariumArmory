<?php 
/**
 * @package Survarium Armory
 * @version Release 2.0
 * @revision 153
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
#######################################
# Survarium Armory configuration file #
#######################################
$Config = array();
$Config['mysql'] = array();
$Config['settings'] = array();
##############################################################################################
# MySQL Database Configuration
# 	$WCFConfig['mysql']['hostname']
# 	$WCFConfig['mysql']['username']
# 	$WCFConfig['mysql']['password']
# 	$WCFConfig['mysql']['dbname']
# 	$WCFConfig['mysql']['charset']
# 	$WCFConfig['mysql']['prefix']
#
# Database connection settings for different databases
# 	Default:
# 	hostname: localhost
# 	username: root
# 	password:
# 	charset: UTF8
# 	prefix: armory_
#	error: flase
##############################################################################################

$Config['mysql']['hostname'] = '127.0.0.1';
$Config['mysql']['username'] = 'root';
$Config['mysql']['password'] = 'mangos';
$Config['mysql']['dbname'] = 'armory';
$Config['mysql']['charset'] = 'UTF8';
$Config['mysql']['prefix'] = 'armory_';
$Config['mysql']['error'] = true;

$Config['settings']['locale'] = 'ru';
$Config['settings']['version'] = '0.2.1';
?>