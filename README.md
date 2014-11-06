RM
==
This is a example project using 'vhaa' webbtemplate.

Files are structured in basically three folders. These folders are src, theme, and webroot.

The 'src' folder contains all php classes and other files that contain functions.

The 'webroot' folder contains all created php pages, css and images. 
All pages set values to variables in a array. The array contains for example ['header'], ['footer'], ['stylesheet'] and ['navbar'] etc.
The array values contains html code, specified by each created page, which are then rendered by including render.php to each page, located in the 'theme' folder.

In the theme folder we have a render.php file which extracts all set variables from the array, and this file includes index.php to display content.
The index.php contains basic html document structure and elements, and the extracted variables are used to display content within the elements.

Author: Ville Haavisto
