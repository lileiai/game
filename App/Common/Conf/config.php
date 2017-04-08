<?php
return array(
    //'配置项'=>'配置值'
//    'TMPL_L_DELIM' => '<{',
//    'TMPL_R_DELIM' => '}>',
    'DB_TYPE'               =>  'MySQL',     // 数据库类型
    'DB_HOST'               =>  '127.0.0.1', // 服务器地址
    'DB_NAME'               =>  'gamebbs',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'root',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'game_',    // 数据库表前缀
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8


    //开启trace页面
    'SHOW_PAGE_TRACE' => true,

    //配置加载应用级别的自定义函数库文件
    //'LOAD_EXT_FILE' => 'tree,abc',

    //RBAC权限控制配置文件
    'USER_AUTH_ON' => false,  // 是否需要认证
    'USER_AUTH_TYPE' => 1,  // 认证类型 1表示实时认证 2表示登录认证
    'USER_AUTH_KEY' => 'authId',  // 认证识别号，随意填，一般填authId
    //'REQUIRE_AUTH_MODULE' => '',  //  需要认证模块
    'NOT_AUTH_MODULE' => 'Index',  // 无需认证模块，只需要填控制器名，多个控制器用,隔开
    //'USER_AUTH_GATEWAY' => '',  // 认证网关
    //'RBAC_DB_DSN' => '',  //  数据库连接DSN
    'RBAC_ROLE_TABLE' => 'oa_role',  // 角色表名称
    'RBAC_USER_TABLE' => 'oa_role_user',  // 用户表和角色关联表的名称
    'RBAC_ACCESS_TABLE' => 'oa_access',  // 权限表名称
    'RBAC_NODE_TABLE' => 'oa_node',  // 节点表名称
);