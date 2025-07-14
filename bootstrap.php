<?php
define('BASE_PATH', realpath(__DIR__));
define('HANDLERS_PATH', realpath(BASE_PATH . '/handlers'));
define('LAYOUTS_PATH', realpath(BASE_PATH . '/layouts'));
define('TEMPLATES_PATH', realpath(BASE_PATH . '/components/templates'));
define('STATICDATAS_PATH', realpath(BASE_PATH . '/staticDatas'));
define('UTILS_PATH', realpath(BASE_PATH . '/utils'));


chdir(BASE_PATH);
