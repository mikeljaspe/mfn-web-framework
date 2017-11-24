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

// INITIALIZE
$test_load = explode(' ', microtime())[0] + explode(' ', microtime())[1];
// START SYSTEM SESSION
session_start();
// START SYSTEM ENGINE
require_once 'src/engine/engine.php';
// CALL MASTER PAGE VIEW
require_once 'src/view/master.php';
