<?php
/*
    | |
    | |     | || |                   | || |     | |  | | | | | | | | |     | || |               | |  
    | |     | | | |                 | | | |     | |                        | | | |              | |  
    | |     | |  | |               | |  | |     | |                        | |  | |             | |  
    | |     | |   | |             | |   | |     | |                        | |   | |            | |  
| | | |     | |    | |           | |    | |     | |                        | |    | |           | |  
| | | |     | |     | |         | |     | |     | |                        | |     | |          | |  
| | | |     | |      | |       | |      | |     | |  | | | | | | |         | |      | |         | |  
| |         | |       | |     | |       | |     | |                        | |       | |        | |  
| |         | |        | |   | |        | |     | |                        | |        | |       | |  
| | | |     | |         | | | |         | |     | |                        | |         | |      | |  
| | | |     | |           | |           | |     | |                        | |          | |     | |  
| | | |     | |                         | |     | |                        | |           | |    | |  
    | |     | |                         | |     | |                        | |            | |   | |  
    | |     | |                         | |     | |                        | |             | |  | |
    | |     | |                         | |     | |                        | |              | | | |
    | |     | |                         | |     | |                        | |               | || |

    DO NOT TOUCH ANYTHING UNLESS YOU KNOW WHAT YOU ARE DOING
*/

// WEB SERVER DEFAULT LOCATION	
define('WEBSERVER_LOCATION', 'C:/MWS/html');

// DEFAULT FILE LOCATIONS
define('ROOTPATH', '');
define('FILE', ROOTPATH.'src/file');
define('VIEW', ROOTPATH.'src/view');
define('COLLECTION', VIEW.'/collection');
define('CONTROL', ROOTPATH.'src/control');
define('ENGINE', ROOTPATH.'src/engine');
define('ROUTE', ROOTPATH.'src/route');
/* RESOURCE PATH FIX *****************************************************************/
define('RESOURCE_OLD', ROOTPATH.'src/resource');
define('RESOURCE', str_replace(WEBSERVER_LOCATION, '', realpath(RESOURCE_OLD)));
/*************************************************************************************/
define('IMAGE', RESOURCE.'/image');
define('CSS', RESOURCE.'/css');
define('JS', RESOURCE.'/js');
define('JSON', RESOURCE.'/json');
define('FONTS', RESOURCE.'/fonts');
define('LOGOUT', ROOTPATH.'src/engine/unset.php');
define('SCRIPT_ERROR', '/error/script');
define('DB_ERROR', '/error/database');
define('RESTRICTION_ERROR', '/error/restriction');
define('FRAMEWORK_VERSION', '1.0.0');

// SESSION VARIABLE
$session_login = &$_SESSION['login'];
$session_id = &$_SESSION['id'];
$session_role = &$_SESSION['role'];

// LOAD NEEDED FILES
require_once ENGINE.'/config.php';
require_once ENGINE.'/library.php';
require_once ENGINE.'/onload.php';
