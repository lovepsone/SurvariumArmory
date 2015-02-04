/*
Navicat MySQL Data Transfer

Source Server         : server
Source Server Version : 50621
Source Host           : localhost:3306
Source Database       : armory

Target Server Type    : MYSQL
Target Server Version : 50621
File Encoding         : 65001

Date: 2015-02-05 01:37:23
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
-- Records of armory_items
-- ----------------------------
INSERT INTO `armory_items` VALUES ('1', '2', 'iw', '1', '1_1', '0', '0', '1111', '0', '0', '110', '25', '0', '0', '0.2', '150', '27', '3.5', '0', '0');
INSERT INTO `armory_items` VALUES ('2', '2', 'iw', '1', '1_2', '0', '0', '1112', '0', '0', '30', '20', '0', '0', '2', '50', '1000', '3.6', '0', '0');
INSERT INTO `armory_items` VALUES ('3', '2', 'iw', '1', '1_3', '0', '0', '1113', '0', '0', '30', '20', '0', '0', '2', '50', '220', '0.8', '0', '0');
INSERT INTO `armory_items` VALUES ('4', '2', 'iw', '2', '2_4', '0', '0', '1121', '0', '0', '100', '10', '0', '0', '1', '30', '240', '3.2', '2100', '1');
INSERT INTO `armory_items` VALUES ('5', '2', 'iw', '2', '2_5', '0', '2', '1122', '0', '0', '110', '30', '0', '0', '0.3', '150', '40', '3.5', '11340', '3');
INSERT INTO `armory_items` VALUES ('6', '2', 'iw', '2', '2_6', '0', '1', '1123', '0', '0', '35', '15', '0', '0', '2', '50', '800', '1.5', '4200', '2');
INSERT INTO `armory_items` VALUES ('7', '2', 'iw', '2', '2_7', '0', '1', '1124', '0', '0', '35', '15', '0', '0', '2', '50', '250', '0.8', '2630', '2');
INSERT INTO `armory_items` VALUES ('8', '2', 'iw', '2', '2_8', '0', '3', '1125', '0', '0', '100', '10', '0', '0', '1.6', '30', '20', '3.5', '13650', '4');
INSERT INTO `armory_items` VALUES ('9', '2', 'iw', '2', '2_9', '0', '4', '1126', '0', '0', '120', '30', '0', '0', '0.2', '150', '32', '3.6', '21420', '5');
INSERT INTO `armory_items` VALUES ('10', '2', 'iw', '3', '3_10', '0', '0', '1131', '0', '0', '100', '10', '0', '0', '2', '10', '300', '1.8', '1900', '1');
INSERT INTO `armory_items` VALUES ('11', '2', 'iw', '3', '3_11', '0', '1', '1132', '0', '0', '36', '16', '0', '0', '1.8', '60', '600', '3.5', '3800', '2');
INSERT INTO `armory_items` VALUES ('12', '2', 'iw', '3', '3_12', '0', '2', '1133', '0', '0', '60', '20', '0', '0', '1', '60', '200', '1.1', '4280', '3');
INSERT INTO `armory_items` VALUES ('13', '2', 'iw', '3', '3_13', '0', '2', '1134', '0', '0', '85', '28', '0', '0', '0.5', '100', '89', '3.1', '10260', '3');
INSERT INTO `armory_items` VALUES ('14', '2', 'iw', '3', '3_14', '0', '3', '1135', '0', '0', '110', '10', '0', '0', '1.8', '30', '52', '3.5', '12350', '4');
INSERT INTO `armory_items` VALUES ('15', '2', 'iw', '3', '3_15', '0', '4', '1136', '0', '0', '47', '18', '0', '0', '1.5', '80', '650', '2.7', '12920', '5');
INSERT INTO `armory_items` VALUES ('16', '2', 'iw', '4', '4_16', '0', '0', '1141', '0', '0', '45', '25', '0', '0', '1', '100', '600', '3.6', '20900', '6');
INSERT INTO `armory_items` VALUES ('17', '2', 'iw', '4', '4_17', '0', '1', '1142', '0', '0', '38', '16', '0', '0', '1.5', '50', '300', '0.8', '12830', '6');
INSERT INTO `armory_items` VALUES ('18', '2', 'iw', '4', '4_18', '0', '1', '1143', '0', '0', '120', '10', '0', '0', '1.6', '30', '240', '4.4', '25650', '7');
INSERT INTO `armory_items` VALUES ('19', '2', 'iw', '4', '4_19', '0', '2', '1144', '0', '0', '39', '18', '0', '0', '1.6', '60', '900', '1.6', '25080', '8');
INSERT INTO `armory_items` VALUES ('20', '2', 'iw', '4', '4_20', '0', '3', '1145', '0', '0', '45', '25', '0', '0', '0.8', '120', '600', '7', '34490', '9');
INSERT INTO `armory_items` VALUES ('21', '2', 'iw', '4', '4_21', '0', '4', '1146', '0', '0', '48', '22', '0', '0', '1.2', '100', '650', '3.4', '47500', '10');
INSERT INTO `armory_items` VALUES ('22', '2', 'iw', '4', '4_22', '0', '7', '1147', '0', '0', '55', '22', '0', '0', '1.2', '60', '800', '2.5', '76000', '13');
INSERT INTO `armory_items` VALUES ('23', '2', 'iw', '4', '4_23', '0', '8', '1148', '0', '0', '48', '22', '0', '0', '0.9', '100', '900', '3.3', '85500', '14');
INSERT INTO `armory_items` VALUES ('24', '2', 'iw', '5', '5_24', '0', '0', '1151', '0', '0', '70', '25', '0', '0', '0.8', '100', '300', '3.8', '23100', '6');
INSERT INTO `armory_items` VALUES ('25', '2', 'iw', '5', '5_25', '0', '1', '1152', '0', '0', '36', '16', '0', '0', '2', '40', '400', '1.2', '12830', '6');
INSERT INTO `armory_items` VALUES ('26', '2', 'iw', '5', '5_26', '0', '1', '1153', '0', '0', '120', '10', '0', '0', '1.8', '30', '280', '3.8', '28350', '7');
INSERT INTO `armory_items` VALUES ('27', '2', 'iw', '5', '5_27', '0', '2', '1154', '0', '0', '46', '16', '0', '0', '1.4', '70', '600', '2.5', '27720', '8');
INSERT INTO `armory_items` VALUES ('28', '2', 'iw', '5', '5_28', '0', '3', '1155', '0', '0', '150', '40', '0', '0', '0.1', '200', '21', '6.2', '63000', '9');
INSERT INTO `armory_items` VALUES ('29', '2', 'iw', '5', '5_29', '0', '4', '1156', '0', '0', '48', '22', '0', '0', '1.3', '100', '650', '3.1', '52500', '10');
INSERT INTO `armory_items` VALUES ('30', '2', 'iw', '5', '5_30', '0', '6', '1157', '0', '0', '48', '22', '0', '0', '0.9', '120', '600', '5', '69300', '11');
INSERT INTO `armory_items` VALUES ('31', '2', 'iw', '5', '5_31', '0', '7', '1158', '0', '0', '55', '22', '0', '0', '1', '60', '700', '1.8', '84000', '13');
INSERT INTO `armory_items` VALUES ('32', '2', 'iw', '5', '5_32', '0', '8', '1159', '0', '0', '55', '22', '0', '0', '0.3', '60', '600', '2.8', '113400', '14');
INSERT INTO `armory_items` VALUES ('33', '1', 'ia', '2', '2_33', '0', '0', '21', '10', '10', '0', '0', '0', '0', '0', '0', '0', '3', '1900', '1');
INSERT INTO `armory_items` VALUES ('34', '1', 'if', '2', '2_34', '0', '0', '22', '20', '50', '0', '0', '0', '0', '0', '0', '0', '1.2', '1190', '2');
INSERT INTO `armory_items` VALUES ('35', '1', 'ib', '2', '2_35', '0', '0', '23', '0', '0', '0', '0', '0', '0', '0', '0', '0', '3', '900', '1');
INSERT INTO `armory_items` VALUES ('36', '1', 'ih', '2', '2_36', '0', '0', '24', '20', '50', '0', '0', '0', '0', '0', '0', '0', '0.8', '1190', '2');
INSERT INTO `armory_items` VALUES ('37', '1', 'if', '2', '2_37', '0', '0', '25', '10', '5', '0', '0', '0', '0', '0', '0', '0', '0.7', '480', '1');
INSERT INTO `armory_items` VALUES ('38', '1', 'ih', '2', '2_38', '0', '0', '26', '10', '5', '0', '0', '0', '0', '0', '0', '0', '0.2', '480', '1');
INSERT INTO `armory_items` VALUES ('39', '1', 'is', '2', '2_39', '0', '0', '27', '10', '10', '0', '0', '0', '0', '0', '0', '0', '0.8', '950', '1');
INSERT INTO `armory_items` VALUES ('40', '1', 'im', '2', '2_40', '0', '0', '28', '5', '30', '0', '0', '0', '0', '0', '0', '0', '0.5', '1190', '3');
INSERT INTO `armory_items` VALUES ('41', '1', 'ia', '2', '2_41', '0', '0', '29', '20', '50', '0', '0', '0', '0', '0', '0', '0', '6', '4750', '3');
INSERT INTO `armory_items` VALUES ('42', '1', 'ib', '2', '2_42', '0', '0', '210', '0', '0', '0', '0', '0', '0', '0', '0', '0', '8', '2380', '3');
INSERT INTO `armory_items` VALUES ('43', '1', 'is', '2', '2_43', '0', '0', '211', '20', '50', '0', '0', '0', '0', '0', '0', '0', '2.5', '2380', '3');
INSERT INTO `armory_items` VALUES ('44', '1', 'ie', '2', '2_44', '0', '0', '212', '20', '5', '0', '0', '0', '0', '0', '0', '0', '1', '8080', '4');
INSERT INTO `armory_items` VALUES ('45', '1', 'ia', '2', '2_45', '0', '0', '213', '40', '10', '0', '0', '0', '0', '0', '0', '0', '8', '12350', '4');
INSERT INTO `armory_items` VALUES ('46', '1', 'is', '2', '2_46', '0', '0', '214', '40', '15', '0', '0', '0', '0', '0', '0', '0', '1.2', '6180', '4');
INSERT INTO `armory_items` VALUES ('47', '1', 'if', '2', '2_47', '0', '0', '215', '30', '10', '0', '0', '0', '0', '0', '0', '0', '0.8', '3090', '4');
INSERT INTO `armory_items` VALUES ('48', '1', 'ia', '2', '2_48', '0', '0', '216', '50', '10', '0', '0', '0', '0', '0', '0', '0', '9', '16150', '5');
INSERT INTO `armory_items` VALUES ('49', '1', 'is', '2', '2_49', '0', '0', '217', '50', '10', '0', '0', '0', '0', '0', '0', '0', '1.8', '8080', '5');
INSERT INTO `armory_items` VALUES ('50', '1', 'ih', '2', '2_50', '0', '0', '218', '50', '10', '0', '0', '0', '0', '0', '0', '0', '0.3', '4040', '5');
INSERT INTO `armory_items` VALUES ('51', '1', 'ia', '3', '3_51', '0', '0', '32', '15', '5', '0', '0', '0', '0', '0', '0', '0', '3', '2100', '1');
INSERT INTO `armory_items` VALUES ('52', '1', 'if', '3', '3_52', '0', '0', '33', '10', '0', '0', '0', '0', '0', '0', '0', '0', '0.8', '530', '1');
INSERT INTO `armory_items` VALUES ('53', '1', 'is', '3', '3_53', '0', '0', '34', '10', '5', '0', '0', '0', '0', '0', '0', '0', '1', '1050', '1');
INSERT INTO `armory_items` VALUES ('54', '1', 'ih', '3', '3_54', '0', '0', '35', '10', '5', '0', '0', '0', '0', '0', '0', '0', '0.2', '530', '1');
INSERT INTO `armory_items` VALUES ('55', '1', 'ie', '3', '3_55', '0', '0', '31', '20', '0', '0', '0', '0', '0', '0', '0', '0', '1.2', '4730', '3');
INSERT INTO `armory_items` VALUES ('56', '1', 'ia', '3', '3_56', '0', '0', '36', '35', '5', '0', '0', '0', '0', '0', '0', '0', '6.5', '9450', '3');
INSERT INTO `armory_items` VALUES ('57', '1', 'ib', '3', '3_57', '0', '0', '37', '0', '0', '0', '0', '0', '0', '0', '0', '0', '5', '6650', '3');
INSERT INTO `armory_items` VALUES ('58', '1', 'is', '3', '3_58', '0', '0', '38', '35', '5', '0', '0', '0', '0', '0', '0', '0', '1.4', '4730', '3');
INSERT INTO `armory_items` VALUES ('59', '1', 'ie', '3', '3_59', '1', '0', '39', '25', '30', '0', '0', '0', '0', '0', '0', '0', '1.6', '9210', '4');
INSERT INTO `armory_items` VALUES ('60', '1', 'ia', '3', '3_60', '0', '0', '310', '40', '30', '0', '0', '0', '0', '0', '0', '0', '9', '13650', '4');
INSERT INTO `armory_items` VALUES ('61', '1', 'is', '3', '3_61', '0', '0', '311', '40', '30', '0', '0', '0', '0', '0', '0', '0', '1.6', '6830', '4');
INSERT INTO `armory_items` VALUES ('62', '1', 'if', '3', '3_62', '0', '0', '312', '35', '5', '0', '0', '0', '0', '0', '0', '0', '0.9', '3410', '4');
INSERT INTO `armory_items` VALUES ('63', '1', 'im', '3', '3_63', '0', '0', '313', '30', '5', '0', '0', '0', '0', '0', '0', '0', '1', '4460', '5');
INSERT INTO `armory_items` VALUES ('64', '1', 'ia', '3', '3_64', '0', '0', '314', '55', '5', '0', '0', '0', '0', '0', '0', '0', '10', '17850', '5');
INSERT INTO `armory_items` VALUES ('65', '1', 'ih', '3', '3_65', '0', '0', '315', '50', '10', '0', '0', '0', '0', '0', '0', '0', '0.3', '4460', '5');
INSERT INTO `armory_items` VALUES ('66', '1', 'if', '3', '3_66', '0', '0', '316', '55', '10', '0', '0', '0', '0', '0', '0', '0', '1.1', '4460', '5');
INSERT INTO `armory_items` VALUES ('67', '1', 'ie', '4', '4_67', '0', '0', '41', '25', '0', '0', '0', '0', '0', '0', '0', '0', '1.4', '11550', '6');
INSERT INTO `armory_items` VALUES ('68', '1', 'ia', '4', '4_68', '0', '0', '42', '60', '5', '0', '0', '0', '0', '0', '0', '0', '10', '23100', '6');
INSERT INTO `armory_items` VALUES ('69', '1', 'is', '4', '4_69', '0', '0', '43', '60', '10', '0', '0', '0', '0', '0', '0', '0', '2.1', '11550', '6');
INSERT INTO `armory_items` VALUES ('70', '1', 'if', '4', '4_70', '0', '0', '44', '60', '10', '0', '0', '0', '0', '0', '0', '0', '1.2', '5780', '6');
INSERT INTO `armory_items` VALUES ('71', '1', 'ie', '4', '4_71', '0', '0', '45', '30', '40', '0', '0', '0', '0', '0', '0', '0', '1.6', '17330', '8');
INSERT INTO `armory_items` VALUES ('72', '1', 'im', '4', '4_72', '0', '0', '46', '15', '50', '0', '0', '0', '0', '0', '0', '0', '0.8', '8660', '8');
INSERT INTO `armory_items` VALUES ('73', '1', 'ia', '4', '4_73', '0', '0', '47', '60', '45', '0', '0', '0', '0', '0', '0', '0', '6.5', '34650', '8');
INSERT INTO `armory_items` VALUES ('74', '1', 'ib', '4', '4_74', '0', '0', '48', '0', '0', '0', '0', '0', '0', '0', '0', '0', '5', '17330', '8');
INSERT INTO `armory_items` VALUES ('75', '1', 'is', '4', '4_75', '0', '0', '49', '50', '40', '0', '0', '0', '0', '0', '0', '0', '1.2', '17330', '8');
INSERT INTO `armory_items` VALUES ('76', '1', 'if', '4', '4_76', '0', '0', '410', '50', '40', '0', '0', '0', '0', '0', '0', '0', '1', '8660', '8');
INSERT INTO `armory_items` VALUES ('77', '1', 'ie', '4', '4_77', '0', '0', '411', '40', '10', '0', '0', '0', '0', '0', '0', '0', '1.8', '26250', '9');
INSERT INTO `armory_items` VALUES ('78', '1', 'im', '4', '4_78', '0', '0', '412', '40', '5', '0', '0', '0', '0', '0', '0', '0', '1.5', '13130', '9');
INSERT INTO `armory_items` VALUES ('79', '1', 'ia', '4', '4_79', '0', '0', '413', '70', '15', '0', '0', '0', '0', '0', '0', '0', '12', '52500', '9');
INSERT INTO `armory_items` VALUES ('80', '1', 'is', '4', '4_80', '0', '0', '414', '70', '10', '0', '0', '0', '0', '0', '0', '0', '2.5', '26250', '9');
INSERT INTO `armory_items` VALUES ('81', '1', 'ih', '4', '4_81', '0', '0', '415', '60', '10', '0', '0', '0', '0', '0', '0', '0', '0.3', '13130', '9');
INSERT INTO `armory_items` VALUES ('82', '1', 'ie', '4', '4_82', '1', '0', '416', '55', '30', '0', '0', '0', '0', '0', '0', '0', '4.5', '54250', '12');
INSERT INTO `armory_items` VALUES ('83', '1', 'ia', '4', '4_83', '0', '0', '417', '80', '20', '0', '0', '0', '0', '0', '0', '0', '15', '73500', '12');
INSERT INTO `armory_items` VALUES ('84', '1', 'is', '4', '4_84', '0', '0', '418', '80', '15', '0', '0', '0', '0', '0', '0', '0', '3.5', '33750', '12');
INSERT INTO `armory_items` VALUES ('85', '1', 'ih', '4', '4_85', '0', '0', '419', '80', '20', '0', '0', '0', '0', '0', '0', '0', '0.4', '18380', '12');
INSERT INTO `armory_items` VALUES ('86', '1', 'if', '4', '4_86', '0', '0', '420', '80', '10', '0', '0', '0', '0', '0', '0', '0', '2', '18380', '12');
INSERT INTO `armory_items` VALUES ('87', '1', 'ie', '4', '4_87', '0', '0', '421', '35', '70', '0', '0', '0', '0', '0', '0', '0', '2', '47250', '14');
INSERT INTO `armory_items` VALUES ('88', '1', 'im', '4', '4_88', '0', '0', '422', '35', '70', '0', '0', '0', '0', '0', '0', '0', '1.2', '23630', '14');
INSERT INTO `armory_items` VALUES ('89', '1', 'ia', '4', '4_89', '0', '0', '423', '70', '75', '0', '0', '0', '0', '0', '0', '0', '13.5', '94500', '14');
INSERT INTO `armory_items` VALUES ('90', '1', 'ib', '4', '4_90', '0', '0', '424', '0', '0', '0', '0', '0', '0', '0', '0', '0', '8', '55250', '14');
INSERT INTO `armory_items` VALUES ('91', '1', 'ib', '4', '4_91', '0', '0', '425', '0', '0', '0', '0', '0', '0', '0', '0', '0', '8', '47250', '14');
INSERT INTO `armory_items` VALUES ('92', '1', 'is', '4', '4_92', '0', '0', '426', '60', '70', '0', '0', '0', '0', '0', '0', '0', '1.8', '47250', '14');
INSERT INTO `armory_items` VALUES ('93', '1', 'ih', '4', '4_93', '0', '0', '427', '70', '70', '0', '0', '0', '0', '0', '0', '0', '0.5', '23530', '14');
INSERT INTO `armory_items` VALUES ('94', '1', 'if', '4', '4_94', '0', '0', '428', '70', '70', '0', '0', '0', '0', '0', '0', '0', '2.5', '23630', '14');
INSERT INTO `armory_items` VALUES ('95', '1', 'ie', '4', '4_95', '1', '9', '429', '90', '50', '0', '0', '0', '0', '0', '0', '0', '6', '77500', '15');
INSERT INTO `armory_items` VALUES ('96', '1', 'ia', '4', '4_96', '0', '9', '430', '90', '50', '0', '0', '0', '0', '0', '0', '0', '20', '105000', '15');
INSERT INTO `armory_items` VALUES ('97', '1', 'is', '4', '4_97', '0', '9', '431', '90', '50', '0', '0', '0', '0', '0', '0', '0', '5', '52500', '15');
INSERT INTO `armory_items` VALUES ('98', '1', 'ih', '4', '4_98', '0', '9', '432', '90', '50', '0', '0', '0', '0', '0', '0', '0', '0.6', '26250', '15');
INSERT INTO `armory_items` VALUES ('99', '1', 'if', '4', '4_99', '0', '9', '433', '90', '50', '0', '0', '0', '0', '0', '0', '0', '3', '26250', '15');
INSERT INTO `armory_items` VALUES ('100', '1', 'ie', '5', '5_100', '0', '0', '51', '20', '20', '0', '0', '0', '0', '0', '0', '0', '1', '10450', '6');
INSERT INTO `armory_items` VALUES ('101', '1', 'im', '5', '5_101', '0', '0', '52', '10', '50', '0', '0', '0', '0', '0', '0', '0', '0.8', '5230', '6');
INSERT INTO `armory_items` VALUES ('102', '1', 'ia', '5', '5_102', '0', '0', '53', '50', '20', '0', '0', '0', '0', '0', '0', '0', '6', '20900', '6');
INSERT INTO `armory_items` VALUES ('103', '1', 'ib', '5', '5_103', '0', '0', '54', '0', '0', '0', '0', '0', '0', '0', '0', '0', '6', '10450', '6');
INSERT INTO `armory_items` VALUES ('104', '1', 'is', '5', '5_104', '0', '0', '55', '50', '20', '0', '0', '0', '0', '0', '0', '0', '1.6', '10450', '6');
INSERT INTO `armory_items` VALUES ('105', '1', 'if', '5', '5_105', '0', '0', '56', '50', '20', '0', '0', '0', '0', '0', '0', '0', '1', '5230', '6');
INSERT INTO `armory_items` VALUES ('106', '1', 'ie', '5', '5_106', '0', '0', '57', '20', '40', '0', '0', '0', '0', '0', '0', '0', '0.5', '15680', '8');
INSERT INTO `armory_items` VALUES ('107', '1', 'im', '5', '5_107', '0', '0', '58', '20', '65', '0', '0', '0', '0', '0', '0', '0', '1', '7840', '8');
INSERT INTO `armory_items` VALUES ('108', '1', 'ia', '5', '5_108', '0', '0', '59', '50', '65', '0', '0', '0', '0', '0', '0', '0', '6', '31350', '8');
INSERT INTO `armory_items` VALUES ('109', '1', 'ib', '5', '5_109', '0', '0', '510', '0', '0', '0', '0', '0', '0', '0', '0', '0', '6', '15680', '8');
INSERT INTO `armory_items` VALUES ('110', '1', 'is', '5', '5_110', '0', '0', '511', '50', '60', '0', '0', '0', '0', '0', '0', '0', '2', '15680', '8');
INSERT INTO `armory_items` VALUES ('111', '1', 'ih', '5', '5_111', '0', '0', '512', '50', '60', '0', '0', '0', '0', '0', '0', '0', '0.3', '7840', '8');
INSERT INTO `armory_items` VALUES ('112', '1', 'if', '5', '5_112', '0', '0', '513', '50', '20', '0', '0', '0', '0', '0', '0', '0', '1', '7840', '8');
INSERT INTO `armory_items` VALUES ('113', '1', 'ia', '5', '5_113', '0', '0', '514', '60', '20', '0', '0', '0', '0', '0', '0', '0', '8', '47500', '9');
INSERT INTO `armory_items` VALUES ('114', '1', 'is', '5', '5_114', '0', '0', '515', '60', '20', '0', '0', '0', '0', '0', '0', '0', '1.8', '23750', '9');
INSERT INTO `armory_items` VALUES ('115', '1', 'ih', '5', '5_115', '0', '0', '516', '60', '25', '0', '0', '0', '0', '0', '0', '0', '0.2', '11880', '9');
INSERT INTO `armory_items` VALUES ('116', '1', 'if', '5', '5_116', '0', '0', '517', '60', '20', '0', '0', '0', '0', '0', '0', '0', '1.2', '11880', '9');
INSERT INTO `armory_items` VALUES ('117', '1', 'ie', '5', '5_117', '0', '0', '518', '20', '25', '0', '0', '0', '0', '0', '0', '0', '0.1', '33250', '12');
INSERT INTO `armory_items` VALUES ('118', '1', 'ia', '5', '5_118', '0', '0', '519', '65', '25', '0', '0', '0', '0', '0', '0', '0', '7', '66500', '12');
INSERT INTO `armory_items` VALUES ('119', '1', 'is', '5', '5_119', '0', '0', '520', '65', '25', '0', '0', '0', '0', '0', '0', '0', '2', '33250', '12');
INSERT INTO `armory_items` VALUES ('120', '1', 'ih', '5', '5_120', '0', '0', '521', '65', '25', '0', '0', '0', '0', '0', '0', '0', '0.3', '16630', '12');
INSERT INTO `armory_items` VALUES ('121', '1', 'if', '5', '5_121', '0', '0', '522', '65', '25', '0', '0', '0', '0', '0', '0', '0', '1', '16630', '12');
INSERT INTO `armory_items` VALUES ('122', '1', 'ie', '5', '5_122', '0', '0', '523', '50', '25', '0', '0', '0', '0', '0', '0', '0', '2', '42750', '14');
INSERT INTO `armory_items` VALUES ('123', '1', 'im', '5', '5_123', '0', '0', '524', '50', '25', '0', '0', '0', '0', '0', '0', '0', '2', '21380', '14');
INSERT INTO `armory_items` VALUES ('124', '1', 'ia', '5', '5_124', '0', '0', '525', '75', '25', '0', '0', '0', '0', '0', '0', '0', '10', '85500', '14');
INSERT INTO `armory_items` VALUES ('125', '1', 'ib', '5', '5_125', '0', '0', '526', '0', '0', '0', '0', '0', '0', '0', '0', '0', '4', '42750', '14');
INSERT INTO `armory_items` VALUES ('126', '1', 'is', '5', '5_126', '0', '0', '527', '75', '30', '0', '0', '0', '0', '0', '0', '0', '3', '42750', '14');
INSERT INTO `armory_items` VALUES ('127', '1', 'ih', '5', '5_127', '0', '0', '528', '75', '30', '0', '0', '0', '0', '0', '0', '0', '0.3', '21380', '14');
INSERT INTO `armory_items` VALUES ('128', '1', 'if', '5', '5_128', '0', '0', '529', '75', '30', '0', '0', '0', '0', '0', '0', '0', '2.2', '21380', '14');
INSERT INTO `armory_items` VALUES ('129', '1', 'ie', '5', '5_129', '1', '9', '530', '80', '90', '0', '0', '0', '0', '0', '0', '0', '5', '72500', '15');
INSERT INTO `armory_items` VALUES ('130', '1', 'ia', '5', '5_130', '0', '9', '531', '85', '90', '0', '0', '0', '0', '0', '0', '0', '17', '95000', '15');
INSERT INTO `armory_items` VALUES ('131', '1', 'ib', '5', '5_131', '0', '9', '532', '0', '0', '0', '0', '0', '0', '0', '0', '0', '7', '47500', '15');
INSERT INTO `armory_items` VALUES ('132', '1', 'is', '5', '5_132', '0', '9', '533', '85', '90', '0', '0', '0', '0', '0', '0', '0', '4', '47500', '15');
INSERT INTO `armory_items` VALUES ('133', '1', 'ih', '5', '5_133', '0', '9', '534', '85', '90', '0', '0', '0', '0', '0', '0', '0', '0.4', '23750', '15');
INSERT INTO `armory_items` VALUES ('134', '1', 'if', '5', '5_134', '0', '9', '535', '85', '90', '0', '0', '0', '0', '0', '0', '0', '1.9', '43750', '15');

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
-- Records of armory_items_mods
-- ----------------------------
INSERT INTO `armory_items_mods` VALUES ('1', '33', '1', '1');
INSERT INTO `armory_items_mods` VALUES ('2', '45', '1', '1');
INSERT INTO `armory_items_mods` VALUES ('3', '49', '1', '1');
INSERT INTO `armory_items_mods` VALUES ('4', '51', '1', '1');
INSERT INTO `armory_items_mods` VALUES ('5', '56', '1', '1');
INSERT INTO `armory_items_mods` VALUES ('6', '68', '1', '1');
INSERT INTO `armory_items_mods` VALUES ('7', '69', '1', '1');
INSERT INTO `armory_items_mods` VALUES ('8', '83', '1', '2');
INSERT INTO `armory_items_mods` VALUES ('9', '96', '1', '2');
INSERT INTO `armory_items_mods` VALUES ('10', '97', '1', '1');
INSERT INTO `armory_items_mods` VALUES ('11', '113', '1', '1');
INSERT INTO `armory_items_mods` VALUES ('12', '124', '1', '1');
INSERT INTO `armory_items_mods` VALUES ('13', '35', '2', '1');
INSERT INTO `armory_items_mods` VALUES ('14', '41', '2', '1');
INSERT INTO `armory_items_mods` VALUES ('15', '103', '2', '2');
INSERT INTO `armory_items_mods` VALUES ('16', '108', '2', '1');
INSERT INTO `armory_items_mods` VALUES ('17', '110', '2', '1');
INSERT INTO `armory_items_mods` VALUES ('18', '125', '2', '1');
INSERT INTO `armory_items_mods` VALUES ('19', '130', '2', '1');
INSERT INTO `armory_items_mods` VALUES ('20', '131', '2', '1');
INSERT INTO `armory_items_mods` VALUES ('21', '132', '2', '1');
INSERT INTO `armory_items_mods` VALUES ('22', '38', '3', '2');
INSERT INTO `armory_items_mods` VALUES ('23', '120', '3', '4');
INSERT INTO `armory_items_mods` VALUES ('24', '36', '4', '5');
INSERT INTO `armory_items_mods` VALUES ('25', '93', '4', '10');
INSERT INTO `armory_items_mods` VALUES ('26', '111', '4', '10');
INSERT INTO `armory_items_mods` VALUES ('27', '43', '5', '1');
INSERT INTO `armory_items_mods` VALUES ('28', '48', '5', '1');
INSERT INTO `armory_items_mods` VALUES ('29', '57', '5', '1');
INSERT INTO `armory_items_mods` VALUES ('30', '89', '5', '1');
INSERT INTO `armory_items_mods` VALUES ('31', '90', '5', '2');
INSERT INTO `armory_items_mods` VALUES ('32', '96', '5', '1');
INSERT INTO `armory_items_mods` VALUES ('33', '125', '5', '1');
INSERT INTO `armory_items_mods` VALUES ('34', '46', '6', '4');
INSERT INTO `armory_items_mods` VALUES ('35', '47', '6', '2');
INSERT INTO `armory_items_mods` VALUES ('36', '70', '6', '2');
INSERT INTO `armory_items_mods` VALUES ('37', '94', '6', '2');
INSERT INTO `armory_items_mods` VALUES ('38', '104', '6', '4');
INSERT INTO `armory_items_mods` VALUES ('39', '121', '6', '4');
INSERT INTO `armory_items_mods` VALUES ('40', '84', '7', '2');
INSERT INTO `armory_items_mods` VALUES ('41', '112', '7', '4');
INSERT INTO `armory_items_mods` VALUES ('42', '50', '8', '5');
INSERT INTO `armory_items_mods` VALUES ('43', '54', '8', '5');
INSERT INTO `armory_items_mods` VALUES ('44', '115', '8', '8');
INSERT INTO `armory_items_mods` VALUES ('45', '57', '9', '1');
INSERT INTO `armory_items_mods` VALUES ('46', '61', '9', '1');
INSERT INTO `armory_items_mods` VALUES ('47', '73', '9', '1');
INSERT INTO `armory_items_mods` VALUES ('48', '79', '9', '1');
INSERT INTO `armory_items_mods` VALUES ('49', '89', '9', '1');
INSERT INTO `armory_items_mods` VALUES ('50', '90', '9', '2');
INSERT INTO `armory_items_mods` VALUES ('51', '92', '9', '1');
INSERT INTO `armory_items_mods` VALUES ('52', '97', '9', '1');
INSERT INTO `armory_items_mods` VALUES ('53', '102', '9', '1');
INSERT INTO `armory_items_mods` VALUES ('54', '119', '9', '1');
INSERT INTO `armory_items_mods` VALUES ('55', '124', '9', '1');
INSERT INTO `armory_items_mods` VALUES ('56', '126', '9', '1');
INSERT INTO `armory_items_mods` VALUES ('57', '130', '9', '1');
INSERT INTO `armory_items_mods` VALUES ('58', '132', '9', '1');
INSERT INTO `armory_items_mods` VALUES ('59', '58', '10', '1');
INSERT INTO `armory_items_mods` VALUES ('60', '62', '10', '1');
INSERT INTO `armory_items_mods` VALUES ('61', '75', '10', '2');
INSERT INTO `armory_items_mods` VALUES ('62', '76', '10', '2');
INSERT INTO `armory_items_mods` VALUES ('63', '105', '10', '1');
INSERT INTO `armory_items_mods` VALUES ('64', '114', '10', '2');
INSERT INTO `armory_items_mods` VALUES ('65', '116', '10', '2');
INSERT INTO `armory_items_mods` VALUES ('66', '128', '10', '3');
INSERT INTO `armory_items_mods` VALUES ('67', '60', '11', '5');
INSERT INTO `armory_items_mods` VALUES ('68', '118', '11', '8');
INSERT INTO `armory_items_mods` VALUES ('69', '131', '11', '15');
INSERT INTO `armory_items_mods` VALUES ('70', '81', '12', '2');
INSERT INTO `armory_items_mods` VALUES ('71', '85', '12', '4');
INSERT INTO `armory_items_mods` VALUES ('72', '127', '13', '4');

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
-- Records of armory_mods
-- ----------------------------
INSERT INTO `armory_mods` VALUES ('1', '1.png', '1', '+', '', null);
INSERT INTO `armory_mods` VALUES ('2', '2.png', '2', '+', '', null);
INSERT INTO `armory_mods` VALUES ('3', '3.png', '3', '-', '%', '5/8/10/12/15');
INSERT INTO `armory_mods` VALUES ('4', '4.png', '4', '-', '%', '5/10/15/20/25');
INSERT INTO `armory_mods` VALUES ('5', '5.png', '5', '+', '', null);
INSERT INTO `armory_mods` VALUES ('6', '6.png', '6', '-', '%', '2/4/6/8/10');
INSERT INTO `armory_mods` VALUES ('7', '7.png', '7', '+', '%', '2/4/6/8/10');
INSERT INTO `armory_mods` VALUES ('8', '8.png', '8', '+', '%', '5/8/10/12/15');
INSERT INTO `armory_mods` VALUES ('9', '9.png', '9', '+', '', null);
INSERT INTO `armory_mods` VALUES ('10', '10.png', '10', '+', '%', '1/2/3/4/5');
INSERT INTO `armory_mods` VALUES ('11', '11.png', '11', '+', '%', '5/8/10/12/15');
INSERT INTO `armory_mods` VALUES ('12', '12.png', '12', '-', '%', '2/4/6/8/10');
INSERT INTO `armory_mods` VALUES ('13', '13.png', '13', '-', '%', '2/4/6/8/10');
INSERT INTO `armory_mods` VALUES ('14', '14.png', '14', '+', '%', '1/2/3/4/5');
INSERT INTO `armory_mods` VALUES ('15', '15.png', '15', '+', '%', '1/2/3/4/5');
INSERT INTO `armory_mods` VALUES ('16', '16.png', '16', '+', '', '2/3/4/5/8');
INSERT INTO `armory_mods` VALUES ('17', '17.png', '17', '-', '%', '2/4/6/8/10');
INSERT INTO `armory_mods` VALUES ('18', '18.png', '18', '+', '%', '2/4/6/8/10');
INSERT INTO `armory_mods` VALUES ('19', '19.png', '19', '-', '%', '5/8/10/12/15');
INSERT INTO `armory_mods` VALUES ('20', '20.png', '20', '+', '%', ' 5/10/15/20/25');
INSERT INTO `armory_mods` VALUES ('21', '21.png', '21', '+', '%', ' 5/10/15/20/25');
INSERT INTO `armory_mods` VALUES ('22', '22.png', '22', '+', '', '5/10/15/20/25');
INSERT INTO `armory_mods` VALUES ('23', '23.png', '23', '+', '', '1/2/3/4/5');
INSERT INTO `armory_mods` VALUES ('24', '24.png', '24', '-', '%', '5/8/10/12/15');
INSERT INTO `armory_mods` VALUES ('25', '25.png', '25', '+', 'c', '5/10/15/20/25');
