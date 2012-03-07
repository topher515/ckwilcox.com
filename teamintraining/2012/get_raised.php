<?php 

include('simple_html_dom.php');
$raisedMax = 2650;
$html = file_get_html('http://pages.teamintraining.org/sf/wildtri12/ckwilcox');
// find all link
foreach($html->find('span.raisedVal') as $e) 
    $raisedVal = floatval(substr($e->innertext,1));

echo $raisedVal;
?>
