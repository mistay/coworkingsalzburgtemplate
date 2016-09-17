<?php
/*
  Template Name: cwsevents
 */
?>
<?php

global $wpdb;

$DISPLAYEVENTS=1;
// wenn moeglich 1 events inda zukunft anzeigen
// wenn keine zukuenftigen events da sind die fehlenden mit vergangenen events auffuellen
$myrows = $wpdb->get_results("SELECT * FROM fbevents order by start_time asc", "ARRAY_A");

$rest = $wpdb->num_rows;
$displayed=0;
$event = null;
foreach ($myrows as $row) {
	$rest--;
	if ($row["uts_starttime"] > time() || $rest <=$DISPLAYEVENTS-1) {
		$displayed++;
		if ($displayed==$DISPLAYEVENTS+1) {
			break;
		}
		$event = $row;
	}
}

$ret = array();
if (isset($event["uts_starttime"])) {
	$days = $event["uts_starttime"] - time();
	$days = ceil($days/60/60/24);
	$ret['when'] = "";
	if ($days < 0) {
		$ret['when'] = $days . " days ago";
	} elseif ($days == 0) {
		$ret['when'] = "today";
	} elseif ($days == 1 ) {
		$ret['when'] = "tomorrow";
	} elseif ($days > 1) {
		$ret['when'] = "in $days days";
	} 
}


if (isset($event["uts_starttime"])) {
	$ret['event'] = $event["name"];
	$ret['event'] .= " ";
	$ret['event'] .= date("H:i ", ($event["uts_starttime"]));
}



echo json_encode($ret);

?>
