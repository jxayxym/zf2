<?php
return array(
    'modules' => array(
        'Application',
        'Account',
        'ZfcBase',
        'ZfcUser',
    ),
    'listeners'=>array(//对MVCEVENT事件对象进行监听
    ),
    'module_listener_options' => array(
        'config_glob_paths'    => array(
            'config/autoload/{,*.}{global,local}.php',
        ),
        'config_cache_enabled'    => false,
        'cache_dir'    =>'data/cache',
        'config_cache_key'=>'application',
        'module_paths' => array(
            './module',//默认查找模块类的路径
            './vendor',//默认查找模块类的路径
            'Application'=>'./module/Application'//模块类名=>路径
        ),
        'module_map_cache_enabled'=>false,
        'module_map_cache_key'=>'modules',
        'check_dependencies'=>true,//是否进行模块间的依赖性检测
    ),
);
