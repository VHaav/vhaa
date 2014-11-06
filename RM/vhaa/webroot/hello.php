<?php
    include(__DIR__ . '/config.php');
    
    $vhaa['title'] = "Hello";
        
    $vhaa['main'] = <<<EOD
    <article>              
        <h1>Hello</h1>
        <p>This is 'vhaa' webtemplet.</p>
    </article>
EOD;
    
    // include for rendering content
    include(THEME_PATH);
?>