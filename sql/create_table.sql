/*
Navicat MySQL Data Transfer

Source Server         : server
Source Server Version : 50621
Source Host           : localhost:3306
Source Database       : armory

Target Server Type    : MYSQL
Target Server Version : 50621
File Encoding         : 65001

Date: 2015-02-11 20:11:30
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `armory_items`
-- ----------------------------
DROP TABLE IF EXISTS `armory_items`;
CREATE TABLE `armory_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `typeItem` int(3) NOT NULL DEFAULT '0',
  `selector` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fraction` int(11) NOT NULL DEFAULT '1',
  `images` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twoslots` int(1) NOT NULL DEFAULT '0',
  `rank` int(11) NOT NULL DEFAULT '1',
  `locale` int(11) NOT NULL DEFAULT '1',
  `defence` int(11) NOT NULL DEFAULT '0',
  `isolation` int(11) NOT NULL DEFAULT '0',
  `typeib` int(3) NOT NULL DEFAULT '0',
  `typeweapon` int(3) NOT NULL DEFAULT '0',
  `damage` int(11) NOT NULL DEFAULT '0',
  `piercing` int(11) NOT NULL DEFAULT '0',
  `sighting` float NOT NULL DEFAULT '0',
  `stoppower` int(11) NOT NULL DEFAULT '0',
  `dispersion` float NOT NULL DEFAULT '0',
  `distance` int(11) NOT NULL DEFAULT '0',
  `rate` int(11) NOT NULL DEFAULT '0',
  `weight` float NOT NULL DEFAULT '0',
  `cost` int(11) NOT NULL DEFAULT '0',
  `level` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=135 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Table structure for `armory_items_mods`
-- ----------------------------
DROP TABLE IF EXISTS `armory_items_mods`;
CREATE TABLE `armory_items_mods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idItem` int(11) NOT NULL DEFAULT '0',
  `idMod` int(11) NOT NULL DEFAULT '0',
  `value` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=73 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for `armory_mods`
-- ----------------------------
DROP TABLE IF EXISTS `armory_mods`;
CREATE TABLE `armory_mods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imgMod` varchar(10) DEFAULT NULL,
  `localeMod` int(11) NOT NULL DEFAULT '0',
  `mathsign` varchar(1) NOT NULL DEFAULT '',
  `txtsign` varchar(1) NOT NULL DEFAULT '',
  `values` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for `armory_settings`
-- ----------------------------
DROP TABLE IF EXISTS `armory_settings`;
CREATE TABLE `armory_settings` (
  `settings_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `settings_value` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`settings_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
