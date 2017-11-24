<!DOCTYPE html>
<!-- 
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
-->

<html lang="<?=PAGE['language']; ?>">
<head>
    <!--META-->
    <meta charset="<?=PAGE['charset']; ?>">
    <meta name="description" content="<?=PAGE['description']; ?>">
    <meta name="keywords" content="<?=PAGE['keywords']; ?>">
    <meta name="author" content="<?=PAGE['author']; ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="msapplication-tap-highlight" content="no" />
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="<?=IMAGE; ?>/favicon.png" />
    <link type="image/x-icon" rel="icon" href="<?=IMAGE; ?>/favicon.png" sizes="32x32" />
    <!-- Windows Phone Tile Color -->
    <meta name="msapplication-TileColor" content="<?=PAGE['tile_color']; ?>" />
    <meta name="msapplication-TileImage" content="<?=IMAGE; ?>/favicon.png" />
    <!--  Google Chrome Color--> 
    <meta name="theme-color" content="<?=PAGE['chrome_color']; ?>" />
    <!--CSS-->
    <link type="text/css" rel="stylesheet" href="<?=CSS; ?>/global.css" />
    <!-- JS -->
    <script type="text/javascript" src="<?=JS; ?>/init.js"></script>
</head>

<!-- BODY -->
<?php /* CALL PAGE ROUTE */ require_once ROUTE.'/master.php'; ?>

</html>
<?php statistics(); ?>
