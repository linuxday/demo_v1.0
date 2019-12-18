<?php
return array(
	//'配置项'=>'配置值'
		//连接数据库
		'DB_TYPE' => 'mysql',
		'DB_HOST' => '127.0.0.1',
		'DB_NAME' => 'demo',
		'DB_USER' => 'demo_admin',
		'DB_PWD' => '24PGtkPe3JjwyE8U',
		'DB_PORT' => '3306',
		'DB_PREFIX' => 'demo_',
		'DB_CHARSET' => 'utf8',
		'DB_DEBUG' => TRUE,//数据库调试模式开启后可以记录SQL日志
		//微信常量
		'APPID' => '',
		'APPSECRET' => '',
		//使用重写模式
		'URL_MODEL' => 2,
		'MULTI_MODULE' => false,
		'DEFAULT_MODULE' => 'Home',
		// 开启路由
		'URL_ROUTER_ON' => true,
		'URL_ROUTE_RULES' => array(
				//"" => "",
		),
		//短信
		'SMSID' => '',
		'SMSKEY' => '',
		'SIGNNAME' => '',
		//域名
		'FAVICON_URL' => "",
		'SITE_NAME' => "DEMO",
		//favicon.ico
		/* end */
);