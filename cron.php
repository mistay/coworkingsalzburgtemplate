<?php
/*
  Template Name: cwscron
 */
?>
<?php
global $wpdb;
$fb = file_get_contents("https://graph.facebook.com/Coworking.Salzburg/events?access_token=403765876374173|6_2KB5fPuWk-Zu5SiF7WvRHH74U");
$decoded_json = json_decode($fb);
//echo "<pre>";
//print_r($decoded_json->data);

$count=0;
foreach ($decoded_json->data as $event) {
    $array_event=array();
    $array_event["name"]=$event->name;
    $array_event["start_time"]=$event->start_time;
	// e.g. "2013-04-18T17:34:56+0200";
	$foo = $event->start_time;
	$year=substr($foo, 0,4);
	$month= substr($foo, 5,2);
	$day= substr($foo, 8,2);
	$hour= substr($foo, 11,2);
	$min=  substr($foo, 14,2);
	$sec= substr($foo, 17,2);

	$uts_starttime=mktime($hour,$min,$sec,$month,$day,$year);
    $array_event["uts_starttime"]=$uts_starttime;
    $array_event["end_time"]=$event->end_time;
    $array_event["timezone"]=$event->timezone;
    $array_event["location"]=$event->location;
    $array_event["id"]=$event->id;
    
    $insert = $wpdb->insert('fbevents', $array_event);
    if ($insert === false) {
	/*
    	print "<pre>";
	echo "error inserting record\n";
	print_r($event);
	$wpdb->show_errors = true;
	$wpdb->print_error();
	echo "tried to insert the following array\n";
	print_r($array_event);
	echo "</pre>";
	*/
    }
    $count += $insert;

    if ($insert == 0) {
    	// bereits in db, dann updaten (weil romy andert oft nachtraeglich startzeiten oder locations, ... das wollen wir geradeziehen
        $updates += $wpdb->update('fbevents', $array_event, array("id" => $event->id));
    }
}
echo "inserted " . $count . " new events\n";
echo "updated " . $updates . " events";
?>
