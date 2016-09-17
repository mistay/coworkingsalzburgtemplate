<?php

$raw=file_get_contents("http://m.salzburg.qando.at/salzburgag_mpo_mobileweb/ws/monitor?diva=60650976&_=1452969663376");

$data = json_decode($raw);
foreach($data->data->monitors as $monitor) {
//	print_r($monitor);

	foreach ($monitor->lines as $line) {
		if (isset($line -> departures -> departure [0] ->departureTime -> timeReal))
			if (isset($line->name))
				if (isset($line -> towards))
					echo "Linie " . $line->name . " Richtung " . $line -> towards . ": " .date("H:i", strtotime($line -> departures -> departure [0] ->departureTime -> timeReal)) . "h. ";
	} 

/*
    [lines] => Array
        (
            [0] => stdClass Object
                (
                    [name] => 6
                    [towards] => Itzling West
                    [direction] => H
                    [richtungsId] => H
                    [barrierFree] => 
                    [realtimeSupported] => 1
                    [trafficjam] => 
                    [departures] => stdClass Object
                        (
                            [departure] => Array
                                (
                                    [0] => stdClass Object
                                        (
                                            [departureTime] => stdClass Object
                                                (
                                                    [timePlanned] => 2016-01-16T19:58:00.000+0100
                                                    [timeReal] => 2016-01-16T20:00:31.000+0100
                                                    [countdown] => 8
                                                )

*/

}



?>

