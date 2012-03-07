<?php 

include('simple_html_dom.php');
$raisedMax = 2650;
$results = array("thanks" => array());

#$page_url = 'http://pages.teamintraining.org/sf/bigktri11/ckwilcox';
$page_url = 'http://pages.teamintraining.org/sf/wildtri12/ckwilcox';

$html = file_get_html($page_url);

function cleanNum($s) {
	$s = str_replace(',','',$s);
	$s = str_replace('$','',$s);
	return floatVal($s);
}

foreach($html->find('span.raisedVal') as $e) {
    $results['raised'] = cleanNum($e->innertext);
}

foreach($html->find('#myThanksTo div.mythanks tr') as $tr) {
	foreach($tr->find('.nameThanks > span') as $td) {
		$name = trim($td->innertext);
	}
	foreach($tr->find('.fundsThanks') as $td) {
		$funds = cleanNum($td->innertext);
		if ($funds == 0) {
			$funds = NULL;
		}
	}
	$results["thanks"][] = array("name" => $name, "funds" => $funds);
}
echo json_encode($results);
?>
