<?php
    /**
    * Render content to theme
    */
    
    //extract the data to be displayed, for easier access in template files
    extract($vhaa);
    
    //include functions
    include(__DIR__ . '/functions.php');
    //include template file
    include(__DIR__ . '/index.tpl.php');
?>