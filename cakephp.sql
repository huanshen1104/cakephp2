/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50716
Source Host           : localhost:3306
Source Database       : cakephp

Target Server Type    : MYSQL
Target Server Version : 50716
File Encoding         : 65001

Date: 2017-12-31 18:57:35
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for acos
-- ----------------------------
DROP TABLE IF EXISTS `acos`;
CREATE TABLE `acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_acos_lft_rght` (`lft`,`rght`),
  KEY `idx_acos_alias` (`alias`)
) ENGINE=InnoDB AUTO_INCREMENT=129 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of acos
-- ----------------------------
INSERT INTO `acos` VALUES ('67', null, null, null, 'controllers', '1', '124');
INSERT INTO `acos` VALUES ('68', '67', null, null, 'Categories', '2', '13');
INSERT INTO `acos` VALUES ('69', '68', null, null, 'index', '3', '4');
INSERT INTO `acos` VALUES ('70', '68', null, null, 'view', '5', '6');
INSERT INTO `acos` VALUES ('71', '68', null, null, 'add', '7', '8');
INSERT INTO `acos` VALUES ('72', '68', null, null, 'edit', '9', '10');
INSERT INTO `acos` VALUES ('73', '68', null, null, 'delete', '11', '12');
INSERT INTO `acos` VALUES ('74', '67', null, null, 'Groups', '14', '27');
INSERT INTO `acos` VALUES ('75', '74', null, null, 'index', '15', '16');
INSERT INTO `acos` VALUES ('76', '74', null, null, 'view', '17', '18');
INSERT INTO `acos` VALUES ('77', '74', null, null, 'add', '19', '20');
INSERT INTO `acos` VALUES ('78', '74', null, null, 'edit', '21', '22');
INSERT INTO `acos` VALUES ('79', '74', null, null, 'delete', '23', '24');
INSERT INTO `acos` VALUES ('80', '74', null, null, 'groupFunction', '25', '26');
INSERT INTO `acos` VALUES ('81', '67', null, null, 'GroupsMenus', '28', '41');
INSERT INTO `acos` VALUES ('82', '81', null, null, 'index', '29', '30');
INSERT INTO `acos` VALUES ('83', '81', null, null, 'view', '31', '32');
INSERT INTO `acos` VALUES ('84', '81', null, null, 'add', '33', '34');
INSERT INTO `acos` VALUES ('85', '81', null, null, 'oldEdit', '35', '36');
INSERT INTO `acos` VALUES ('86', '81', null, null, 'edit', '37', '38');
INSERT INTO `acos` VALUES ('87', '81', null, null, 'delete', '39', '40');
INSERT INTO `acos` VALUES ('88', '67', null, null, 'Jobs', '42', '53');
INSERT INTO `acos` VALUES ('89', '88', null, null, 'index', '43', '44');
INSERT INTO `acos` VALUES ('90', '88', null, null, 'view', '45', '46');
INSERT INTO `acos` VALUES ('91', '88', null, null, 'add', '47', '48');
INSERT INTO `acos` VALUES ('92', '88', null, null, 'edit', '49', '50');
INSERT INTO `acos` VALUES ('93', '88', null, null, 'delete', '51', '52');
INSERT INTO `acos` VALUES ('94', '67', null, null, 'Menus', '54', '65');
INSERT INTO `acos` VALUES ('95', '94', null, null, 'index', '55', '56');
INSERT INTO `acos` VALUES ('96', '94', null, null, 'view', '57', '58');
INSERT INTO `acos` VALUES ('97', '94', null, null, 'add', '59', '60');
INSERT INTO `acos` VALUES ('98', '94', null, null, 'edit', '61', '62');
INSERT INTO `acos` VALUES ('99', '94', null, null, 'delete', '63', '64');
INSERT INTO `acos` VALUES ('100', '67', null, null, 'Pages', '66', '69');
INSERT INTO `acos` VALUES ('101', '100', null, null, 'display', '67', '68');
INSERT INTO `acos` VALUES ('102', '67', null, null, 'Posts', '70', '81');
INSERT INTO `acos` VALUES ('103', '102', null, null, 'index', '71', '72');
INSERT INTO `acos` VALUES ('104', '102', null, null, 'view', '73', '74');
INSERT INTO `acos` VALUES ('105', '102', null, null, 'add', '75', '76');
INSERT INTO `acos` VALUES ('106', '102', null, null, 'edit', '77', '78');
INSERT INTO `acos` VALUES ('107', '102', null, null, 'delete', '79', '80');
INSERT INTO `acos` VALUES ('108', '67', null, null, 'Users', '82', '101');
INSERT INTO `acos` VALUES ('109', '108', null, null, 'index', '83', '84');
INSERT INTO `acos` VALUES ('110', '108', null, null, 'view', '85', '86');
INSERT INTO `acos` VALUES ('111', '108', null, null, 'add', '87', '88');
INSERT INTO `acos` VALUES ('112', '108', null, null, 'edit', '89', '90');
INSERT INTO `acos` VALUES ('113', '108', null, null, 'delete', '91', '92');
INSERT INTO `acos` VALUES ('114', '108', null, null, 'login', '93', '94');
INSERT INTO `acos` VALUES ('115', '108', null, null, 'logout', '95', '96');
INSERT INTO `acos` VALUES ('116', '108', null, null, 'changePassword', '97', '98');
INSERT INTO `acos` VALUES ('117', '108', null, null, 'initDB', '99', '100');
INSERT INTO `acos` VALUES ('118', '67', null, null, 'Widgets', '102', '113');
INSERT INTO `acos` VALUES ('119', '118', null, null, 'index', '103', '104');
INSERT INTO `acos` VALUES ('120', '118', null, null, 'view', '105', '106');
INSERT INTO `acos` VALUES ('121', '118', null, null, 'add', '107', '108');
INSERT INTO `acos` VALUES ('122', '118', null, null, 'edit', '109', '110');
INSERT INTO `acos` VALUES ('123', '118', null, null, 'delete', '111', '112');
INSERT INTO `acos` VALUES ('124', '67', null, null, 'AclExtras', '114', '115');
INSERT INTO `acos` VALUES ('125', '67', null, null, 'DebugKit', '116', '123');
INSERT INTO `acos` VALUES ('126', '125', null, null, 'ToolbarAccess', '117', '122');
INSERT INTO `acos` VALUES ('127', '126', null, null, 'history_state', '118', '119');
INSERT INTO `acos` VALUES ('128', '126', null, null, 'sql_explain', '120', '121');

-- ----------------------------
-- Table structure for aros
-- ----------------------------
DROP TABLE IF EXISTS `aros`;
CREATE TABLE `aros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_aros_lft_rght` (`lft`,`rght`),
  KEY `idx_aros_alias` (`alias`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of aros
-- ----------------------------
INSERT INTO `aros` VALUES ('1', null, 'Group', '1', null, '1', '4');
INSERT INTO `aros` VALUES ('2', null, 'Group', '2', null, '5', '8');
INSERT INTO `aros` VALUES ('4', '1', 'User', '1', null, '2', '3');
INSERT INTO `aros` VALUES ('5', null, 'Group', '4', null, '9', '12');
INSERT INTO `aros` VALUES ('7', '2', 'User', '3', null, '6', '7');
INSERT INTO `aros` VALUES ('8', '5', 'User', '4', null, '10', '11');
INSERT INTO `aros` VALUES ('10', null, 'Group', '6', null, '13', '14');

-- ----------------------------
-- Table structure for aros_acos
-- ----------------------------
DROP TABLE IF EXISTS `aros_acos`;
CREATE TABLE `aros_acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`),
  KEY `idx_aco_id` (`aco_id`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of aros_acos
-- ----------------------------
INSERT INTO `aros_acos` VALUES ('33', '1', '114', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('34', '1', '115', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('35', '1', '101', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('36', '2', '114', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('37', '2', '115', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('38', '2', '101', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('39', '5', '114', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('40', '5', '115', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('41', '5', '101', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('42', '1', '67', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('43', '1', '109', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('44', '1', '111', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('45', '1', '112', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('46', '1', '113', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('47', '1', '75', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('48', '1', '77', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('49', '1', '78', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('50', '1', '79', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('51', '1', '89', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('52', '1', '91', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('53', '1', '92', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('54', '1', '93', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('55', '1', '86', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('56', '5', '109', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('57', '5', '111', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('58', '5', '89', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('59', '5', '91', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('60', '5', '92', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('61', '5', '93', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('62', '10', '114', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('63', '10', '115', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('64', '10', '101', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('65', '2', '116', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('66', '5', '116', '1', '1', '1', '1');

-- ----------------------------
-- Table structure for groups
-- ----------------------------
DROP TABLE IF EXISTS `groups`;
CREATE TABLE `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `group_desc` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of groups
-- ----------------------------
INSERT INTO `groups` VALUES ('1', 'admin', 'admin', '2017-12-29 22:22:27', '2017-12-29 22:23:45');
INSERT INTO `groups` VALUES ('2', 'user', 'user', '2017-12-29 22:23:55', '2017-12-29 22:23:55');
INSERT INTO `groups` VALUES ('4', 'test', 'test', '2017-12-30 00:22:43', '2017-12-30 00:22:43');
INSERT INTO `groups` VALUES ('6', 'test2', 'test2', '2017-12-31 18:24:40', '2017-12-31 18:24:40');

-- ----------------------------
-- Table structure for groups_menus
-- ----------------------------
DROP TABLE IF EXISTS `groups_menus`;
CREATE TABLE `groups_menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL DEFAULT '0',
  `menu_id` int(11) NOT NULL DEFAULT '0',
  `row_status` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=99 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of groups_menus
-- ----------------------------
INSERT INTO `groups_menus` VALUES ('76', '1', '2', '1', '2017-12-31 18:22:53', '2017-12-31 18:22:53');
INSERT INTO `groups_menus` VALUES ('77', '1', '3', '1', '2017-12-31 18:22:53', '2017-12-31 18:22:53');
INSERT INTO `groups_menus` VALUES ('78', '1', '10', '1', '2017-12-31 18:22:53', '2017-12-31 18:22:53');
INSERT INTO `groups_menus` VALUES ('79', '1', '11', '1', '2017-12-31 18:22:53', '2017-12-31 18:22:53');
INSERT INTO `groups_menus` VALUES ('80', '1', '5', '1', '2017-12-31 18:22:53', '2017-12-31 18:22:53');
INSERT INTO `groups_menus` VALUES ('81', '1', '6', '1', '2017-12-31 18:22:53', '2017-12-31 18:22:53');
INSERT INTO `groups_menus` VALUES ('82', '1', '7', '1', '2017-12-31 18:22:53', '2017-12-31 18:22:53');
INSERT INTO `groups_menus` VALUES ('83', '1', '9', '1', '2017-12-31 18:22:53', '2017-12-31 18:22:53');
INSERT INTO `groups_menus` VALUES ('84', '1', '13', '1', '2017-12-31 18:22:53', '2017-12-31 18:22:53');
INSERT INTO `groups_menus` VALUES ('85', '1', '14', '1', '2017-12-31 18:22:53', '2017-12-31 18:22:53');
INSERT INTO `groups_menus` VALUES ('86', '1', '15', '1', '2017-12-31 18:22:53', '2017-12-31 18:22:53');
INSERT INTO `groups_menus` VALUES ('87', '1', '16', '1', '2017-12-31 18:22:54', '2017-12-31 18:22:54');
INSERT INTO `groups_menus` VALUES ('88', '1', '18', '1', '2017-12-31 18:22:54', '2017-12-31 18:22:54');
INSERT INTO `groups_menus` VALUES ('89', '1', '19', '1', '2017-12-31 18:22:54', '2017-12-31 18:22:54');
INSERT INTO `groups_menus` VALUES ('90', '1', '20', '1', '2017-12-31 18:22:54', '2017-12-31 18:22:54');
INSERT INTO `groups_menus` VALUES ('91', '1', '21', '1', '2017-12-31 18:22:54', '2017-12-31 18:22:54');
INSERT INTO `groups_menus` VALUES ('92', '1', '22', '1', '2017-12-31 18:22:54', '2017-12-31 18:22:54');
INSERT INTO `groups_menus` VALUES ('93', '4', '2', '1', '2017-12-31 18:23:22', '2017-12-31 18:23:22');
INSERT INTO `groups_menus` VALUES ('94', '4', '3', '1', '2017-12-31 18:23:22', '2017-12-31 18:23:22');
INSERT INTO `groups_menus` VALUES ('95', '4', '13', '1', '2017-12-31 18:23:22', '2017-12-31 18:23:22');
INSERT INTO `groups_menus` VALUES ('96', '4', '14', '1', '2017-12-31 18:23:22', '2017-12-31 18:23:22');
INSERT INTO `groups_menus` VALUES ('97', '4', '15', '1', '2017-12-31 18:23:22', '2017-12-31 18:23:22');
INSERT INTO `groups_menus` VALUES ('98', '4', '16', '1', '2017-12-31 18:23:22', '2017-12-31 18:23:22');

-- ----------------------------
-- Table structure for jobs
-- ----------------------------
DROP TABLE IF EXISTS `jobs`;
CREATE TABLE `jobs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job_code` varchar(20) NOT NULL DEFAULT '',
  `job_desc1` varchar(100) NOT NULL DEFAULT '',
  `job_desc2` varchar(100) NOT NULL DEFAULT '',
  `job_desc3` varchar(100) NOT NULL DEFAULT '',
  `is_enabled` tinyint(1) NOT NULL DEFAULT '1',
  `template_type` varchar(10) NOT NULL DEFAULT '',
  `template_content` text NOT NULL,
  `week_mask` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jobs
-- ----------------------------
INSERT INTO `jobs` VALUES ('1', '2017122701', '111111111111111', '2222222222222', '3333333333333', '1', 'SMS', 'ffffdhhhh', '');

-- ----------------------------
-- Table structure for menus
-- ----------------------------
DROP TABLE IF EXISTS `menus`;
CREATE TABLE `menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `menu_code` varchar(100) NOT NULL DEFAULT '',
  `menu_desc` varchar(100) NOT NULL DEFAULT '',
  `sort_num` int(11) NOT NULL DEFAULT '0',
  `row_status` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of menus
-- ----------------------------
INSERT INTO `menus` VALUES ('1', '0', 'Users', 'Users Managerment', '0', '1', '2017-12-29 22:44:49', '2017-12-29 22:44:49');
INSERT INTO `menus` VALUES ('2', '1', 'Users/index', 'Users Index', '1', '1', '2017-12-29 22:45:37', '2017-12-29 22:48:20');
INSERT INTO `menus` VALUES ('3', '1', 'Users/add', 'Users Add', '2', '1', '2017-12-29 22:46:12', '2017-12-29 22:48:08');
INSERT INTO `menus` VALUES ('4', '0', 'Groups', 'Groups Managerment', '4', '1', '2017-12-29 22:48:56', '2017-12-29 22:48:56');
INSERT INTO `menus` VALUES ('5', '4', 'Groups/index', 'Groups Index', '5', '1', '2017-12-29 22:50:11', '2017-12-29 22:51:27');
INSERT INTO `menus` VALUES ('6', '4', 'Groups/add', 'Groups Add', '6', '1', '2017-12-29 22:51:05', '2017-12-29 22:51:34');
INSERT INTO `menus` VALUES ('7', '4', 'Groups/edit', 'Groups Edit', '7', '1', '2017-12-29 22:52:17', '2017-12-29 22:52:17');
INSERT INTO `menus` VALUES ('9', '4', 'Groups/delete', 'Groups Delete', '8', '1', '2017-12-30 12:07:40', '2017-12-30 12:07:40');
INSERT INTO `menus` VALUES ('10', '1', 'Users/edit', 'Users Edit', '10', '1', '2017-12-30 12:11:42', '2017-12-30 12:11:42');
INSERT INTO `menus` VALUES ('11', '1', 'Users/delete', 'Users Delete', '11', '1', '2017-12-30 12:15:31', '2017-12-30 12:15:31');
INSERT INTO `menus` VALUES ('12', '0', 'Jobs', 'Jobs Managerment', '20', '1', '2017-12-31 16:42:10', '2017-12-31 16:42:10');
INSERT INTO `menus` VALUES ('13', '12', 'Jobs/index', 'Jobs Index', '21', '1', '2017-12-31 16:42:59', '2017-12-31 16:42:59');
INSERT INTO `menus` VALUES ('14', '12', 'Jobs/add', 'Jobs Add', '22', '1', '2017-12-31 16:43:31', '2017-12-31 16:43:31');
INSERT INTO `menus` VALUES ('15', '12', 'Jobs/edit', 'Jobs Edit', '23', '1', '2017-12-31 16:43:58', '2017-12-31 16:43:58');
INSERT INTO `menus` VALUES ('16', '12', 'Jobs/delete', 'Jobs Delete', '24', '1', '2017-12-31 16:44:23', '2017-12-31 16:44:23');
INSERT INTO `menus` VALUES ('17', '0', 'Roles', 'Roles Managerment', '25', '1', '2017-12-31 16:49:29', '2017-12-31 16:50:29');
INSERT INTO `menus` VALUES ('18', '17', 'Roles/index', 'Roles Index', '26', '1', '2017-12-31 16:51:01', '2017-12-31 16:51:01');
INSERT INTO `menus` VALUES ('19', '17', 'Roles/add', 'Roles Add', '26', '1', '2017-12-31 16:51:28', '2017-12-31 16:51:28');
INSERT INTO `menus` VALUES ('20', '17', 'Roles/edit', 'Roles Edit', '27', '1', '2017-12-31 16:52:03', '2017-12-31 16:52:03');
INSERT INTO `menus` VALUES ('21', '17', 'Roles/delete', 'Roles Delete', '28', '1', '2017-12-31 16:52:33', '2017-12-31 16:52:33');
INSERT INTO `menus` VALUES ('22', '17', 'GroupsMenus/edit', 'Function Authority', '29', '1', '2017-12-31 16:53:39', '2017-12-31 18:41:41');

-- ----------------------------
-- Table structure for posts
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of posts
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` char(40) NOT NULL,
  `group_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'user1', '01a396ae0c65a59db5d0801d59852d3554d4860d', '1', '2017-12-29 23:03:58', '2017-12-29 23:03:58');
INSERT INTO `users` VALUES ('3', 'user2', '01a396ae0c65a59db5d0801d59852d3554d4860d', '2', '2017-12-30 12:09:21', '2017-12-30 12:09:21');
INSERT INTO `users` VALUES ('4', 'test1', '01a396ae0c65a59db5d0801d59852d3554d4860d', '4', '2017-12-30 12:09:56', '2017-12-30 12:09:56');

-- ----------------------------
-- Table structure for widgets
-- ----------------------------
DROP TABLE IF EXISTS `widgets`;
CREATE TABLE `widgets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `part_no` varchar(12) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of widgets
-- ----------------------------
