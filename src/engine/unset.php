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

// REMOVE ALL SESSION VARIABLE
session_unset();
$_SESSION = [];

// REMOVE ALL SESSION COOKIE
if (ini_get('session.use_cookies')) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params['path'], $params['domain'],
        $params['secure'], $params['httponly']
    );
}

// DESTROY SESSION
session_destroy(); 