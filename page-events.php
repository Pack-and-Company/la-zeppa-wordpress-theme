<?php
/*
Template Name: What's On
*/
?>

<?php get_header(); ?>

<!-- content left (main content column) -->
<div id="content_left">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	  <?php the_content(); ?>
	<?php endwhile; wp_reset_query(); ?>
<?php

function xmlToArray($xml,$ns=null){
	$a = array();

	for($xml->rewind(); $xml->valid(); $xml->next()) {
		$key = $xml->key();

		if(!isset($a[$key])) { 
			$a[$key] = array(); $i=0; 
		} else {
			$i = count($a[$key]);
		}

		$simple = true;

		foreach($xml->current()->attributes() as $k=>$v) {
			$a[$key][$i][$k]=(string)$v;
			$simple = false;
		}

		if($ns) foreach($ns as $nid=>$name) {
			foreach($xml->current()->attributes($name) as $k=>$v) {
				$a[$key][$i][$nid.':'.$k]=(string)$v;
				$simple = false;
			}
		}

		if($xml->hasChildren()) {
			if($simple) {
				$a[$key][$i] = xmlToArray($xml->current(), $ns);
			} else {
				$a[$key][$i]['content'] = xmlToArray($xml->current(), $ns);
			}
		} else {
			if($simple) {
				$a[$key][$i] = strval($xml->current());
			} else {
				$a[$key][$i]['content'] = strval($xml->current());
			}
		}
			$i++;
		}

	return $a;
}

// Grab the events list from mukuna.
// Setting m=x requests xml data.

$xmlPath = "http://www.mukuna.co.nz/getEvents.mkna?c=cu1b94xsv5&m=x";
libxml_use_internal_errors(true); // Suppress xml parsing errors
$xml = new SimpleXmlIterator($xmlPath, null, true);
$eventsData = xmlToArray($xml);

date_default_timezone_set("Pacific/Auckland");
$month = "";
$prevDate = "";
foreach ($eventsData['event'] as $event) {
	if ($event['content']['venue'][0]['name'][0] == "La Zeppa") {

		$dateTime = strtotime($event['content']['date'][0]['title'] . " " . $event['content']['starttime'][0]);
		if ( date("i", $dateTime) == "00" ) {
			$timeString = date("ga", $dateTime);
		} else {
			$timeString = date("g:ia", $dateTime);
		}

		if ($month != date("F", $dateTime)) {
			if ($month != "") {
				print "</table>\n\n";
			}

			$month = date("F", $dateTime);

			// Start Month
			printf("<h2>%s</h2>\n", $month);
			print '<table cellspacing="0" cellpadding="0">' . "\n";
			print '    <col width="110" />' . "\n";
			print '    <col width="400" />' . "\n";
		}
		
		$date = date("l jS", $event['content']['dateSecs'][0]);
		$title = $event['content']['title'][0];
		$link = $event['content']['mukunaGigDetailUrl'][0];

		if ($prevDate == $date) {
			$date = "";
		}
		$prevDate = $date;

		print "<tr>\n";
		printf("    <td>%s</td>\n", $date);
		printf("    <td>%s: %s <a href='%s' class='fa fa-info-circle'></a></td>\n", $timeString, $title, $link);
		print "</tr>\n";

	}
}
print "</table>\n";
?>
</div>
<!-- end of content left (main content column) -->
<!-- sidebar -->
<div id="sidebar">
	<?php
	if ( has_post_thumbnail() ) {
		the_post_thumbnail();
		the_post_thumbnail_caption();
	}
	?>
</div>
<!-- end of sidebar -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

