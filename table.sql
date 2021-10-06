CREATE TABLE `pc_example` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `gmt_create` datetime DEFAULT NULL COMMENT '创建时间',
  `gmt_modify` datetime DEFAULT NULL COMMENT '修改时间',
  `type_id` bigint(20) DEFAULT NULL COMMENT '实例类型id',
  `ex_name` varchar(128) DEFAULT NULL COMMENT '实例名字',
  `pic_url` varchar(128) DEFAULT NULL COMMENT '图片路径',
  `js_dir` varchar(128) DEFAULT NULL COMMENT 'js文件对应的路径',
  `ex_explain` text COMMENT '案例解释',
  `discription` varchar(1024) DEFAULT NULL COMMENT '简述',
  `ex_order` bigint(20) DEFAULT NULL COMMENT '顺序',
  `js_deps` varchar(1024) DEFAULT NULL COMMENT 'js依赖，逗号隔开',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8mb4 COMMENT='实例表';

CREATE TABLE `pc_example_type` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `gmt_create` datetime DEFAULT NULL COMMENT '创建时间',
  `gmt_modify` datetime DEFAULT NULL COMMENT '修改时间',
  `typename` varchar(64) DEFAULT NULL COMMENT '实例类型名称',
  `type_small_pic_url` varchar(128) DEFAULT NULL COMMENT '实例类型小图标',
  `type_big_pic_url` varchar(128) DEFAULT NULL COMMENT '实例类型大图标',
  `typecount` bigint(20) DEFAULT NULL COMMENT '实例数量',
  `discription` varchar(1024) DEFAULT NULL COMMENT '简述',
  `type_order` bigint(20) DEFAULT NULL COMMENT '顺序',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8mb4 COMMENT='实例类型表';

CREATE TABLE `pc_news` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `gmt_create` datetime DEFAULT NULL COMMENT '创建时间',
  `gmt_modify` datetime DEFAULT NULL COMMENT '修改时间',
  `title` varchar(1024) DEFAULT NULL COMMENT '标题',
  `author` varchar(128) DEFAULT NULL COMMENT '作者',
  `content` text COMMENT '正文',
  `keywords` varchar(512) DEFAULT NULL COMMENT '关键词，用于seo',
  `description` varchar(1024) DEFAULT NULL COMMENT '博客描述，用于seo',
  `news_order` bigint(20) DEFAULT NULL COMMENT '顺序',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8mb4 COMMENT='新闻表';

CREATE TABLE `pc_picture` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `gmt_create` datetime DEFAULT NULL COMMENT '创建时间',
  `gmt_modify` datetime DEFAULT NULL COMMENT '修改时间',
  `pic_name` varchar(512) DEFAULT NULL COMMENT '图片名称',
  `pic_url` varchar(512) DEFAULT NULL COMMENT '图片路径',
  `pic_size` varchar(128) DEFAULT NULL COMMENT '图片大小',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8mb4 COMMENT='图片表';

CREATE TABLE `pc_show` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `gmt_create` datetime DEFAULT NULL COMMENT '创建时间',
  `gmt_modify` datetime DEFAULT NULL COMMENT '修改时间',
  `game_url` varchar(128) DEFAULT NULL COMMENT '展示游戏名',
  `show_name` varchar(128) DEFAULT NULL COMMENT '展示中文名字',
  `show_author` varchar(128) DEFAULT NULL COMMENT '展示作者',
  `show_description` varchar(128) DEFAULT NULL COMMENT '展示简介',
  `show_play` varchar(128) DEFAULT NULL COMMENT '展示玩法',
  `pic_url` varchar(128) DEFAULT NULL COMMENT '图片路径',
  `show_order` bigint(20) DEFAULT NULL COMMENT '顺序',
  `game_type` tinyint(4) DEFAULT '2',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8mb4 COMMENT='展示表';

CREATE TABLE `pc_tutorial` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `gmt_create` datetime DEFAULT NULL COMMENT '创建时间',
  `gmt_modify` datetime DEFAULT NULL COMMENT '修改时间',
  `title` varchar(1024) DEFAULT NULL COMMENT '标题',
  `author` varchar(128) DEFAULT NULL COMMENT '作者',
  `pic` varchar(1024) DEFAULT NULL COMMENT '图片',
  `abstract` varchar(8196) DEFAULT NULL COMMENT '摘要',
  `content` mediumtext COMMENT '正文',
  `keywords` varchar(512) DEFAULT NULL COMMENT '关键词，用于seo',
  `description` varchar(1024) DEFAULT NULL COMMENT '博客描述，用于seo',
  `tutorial_order` bigint(20) DEFAULT NULL COMMENT '顺序',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8mb4 COMMENT='教程表';

CREATE TABLE `user_auth` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `gmt_create` datetime DEFAULT NULL COMMENT '创建时间',
  `gmt_modify` datetime DEFAULT NULL COMMENT '修改时间',
  `user_id` bigint(20) unsigned DEFAULT NULL COMMENT '用户id',
  `auth_type` tinyint(4) DEFAULT NULL COMMENT '认证类型，0--普通，1--微博，2--QQ',
  `open_id` varchar(128) DEFAULT NULL COMMENT '开放平台的唯一id',
  `access_token` varchar(128) DEFAULT NULL COMMENT '密码或者token',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8mb4 COMMENT='用户认证表';

CREATE TABLE `user_profile` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `gmt_create` datetime DEFAULT NULL COMMENT '创建时间',
  `gmt_modify` datetime DEFAULT NULL COMMENT '修改时间',
  `username` varchar(256) DEFAULT NULL COMMENT '用户名',
  `head_url` varchar(1024) DEFAULT NULL COMMENT '用户头像',
  `prioity` tinyint(4) DEFAULT NULL COMMENT '用户等级，0--管理员，1--普通用户',
  `score` bigint(20) unsigned DEFAULT NULL COMMENT '分数，用来评级',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8mb4 COMMENT='用户信息表';
