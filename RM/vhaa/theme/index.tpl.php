<!doctype html>
<!--This file contains the html structure, and variables extracted in render.php are used to display content in the browser-->
<html lang='<?=$lang?>'>
    <head>
        <meta charset="utf-8" />
        <title><?=$title?></title>
        <link rel="stylesheet" type="text/css" href="<?=$stylesheet?>" />
    </head>
    <body>
        <div id="divBodyContent">
            <div id="header">
                <?=$header?>
            </div>
            <div id="main">            
                <?=$main?>
            </div>
            <div id="byline">
                <?=$byline?>
            </div>
            <div id="footer">
                <?=$footer?>
            </div>
        </div>
    </body>
</html>