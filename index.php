<?php
// example of how to use basic selector to retrieve HTML contents
include('simple_html_dom.php');
 
// get DOM from URL or file
$html = file_get_html('http://www.google.com/');

// find all link
foreach($html->find('a') as $e) 
    echo $e->href . '<br>';

// find all image
foreach($html->find('img') as $e)
    echo $e->src . '<br>';
?>