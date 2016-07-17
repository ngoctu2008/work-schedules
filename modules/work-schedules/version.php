<?php

/**
 * @Project WORK SCHEDULES 4.X
 * @Author PHAN TAN DUNG (phantandung92@gmail.com)
 * @Copyright (C) 2016 PHAN TAN DUNG. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate Sat, 11 Jun 2016 23:45:51 GMT
 */

if (!defined('NV_ADMIN') or !defined('NV_MAINFILE'))
    die('Stop!!!');

$module_version = array(
    'name' => 'Work Schedules',
    'modfuncs' => 'main,manager,add,edit',
    'is_sysmod' => 0,
    'virtual' => 1,
    'version' => '4.0.30',
    'date' => 'Sun, 17 Jul 2016 10:09:27 GMT',
    'author' => 'PHAN TAN DUNG (phantandung92@gmail.com)',
    'note' => '',
    'uploads_dir' => array($module_upload)
);
