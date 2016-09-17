<?php
/*
  Template Name: cwswelcomedisplay
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
?>
<head>
<script type="text/javascript" src="http://fast.fonts.com/jsapi/3f5ac1f8-244e-44e3-b2de-ce3537e43a2d.js"></script>         
        
<style>
.coworkerimg {
	padding-top: 10px;
	width: 80px;
}

.coworkerlogo img {
	width: 80px;
	
}
.coworkerlogo {
	text-align: center;
}

.coworkers {
	text-align:center;
	display: -webkit-flex;
	display: -moz-flex;
	display: -ms-flexbox;
	display: flex;
	flex-direction: row;
	-webkit-flex-wrap: wrap;
	flex-wrap: wrap;

	/*justify-content: center;
	-webkit-justify-content: center;
	-moz-justify-content: center;
	*/
}
.coworkeritem {
	margin: 5px;
	margin-bottom: 10px;

	display: none; 
	background-color: white;
	color: black;
	width: 100px;
	height: 140px;

}
.coworkercompanyname {
	font-size: 8px;
	font-family: "DIN Next W01 Regular";
	font-style: italic;
	text-align: center;
	color: #a5a5a5;
	height: 40px;
}
.coworkername {
	text-align: center;
	color: black;
	display: block;
	font-size: 12px;
	font-family: "DIN Next W01 Regular"
}
</style>
<link rel="stylesheet" type="text/css" href="/wp-content/themes/cws/chalkdust/stylesheet.css"></link>
<style>
body {
	background: url("/images/blackboard-coworkingspace.jpg");
	background-repeat: no-repeat;
	background-size: cover;
	margin: 0;
	padding: 0;
	overflow-x: hidden;
	font-family: chalkdustregular;
}
.logo {
	padding-top: 30px;
	height: 40px;
	position: absolute;
}

.today {
	font-size: 80px;
	padding-top: 50px;
}
.today, .whoishere, .event {
	text-align: center;
	color: white;
	text-transform: uppercase;
}
.whoishere {
	font-size: 70px;
}
.event {
	color: #f6e82d;
	font-size: 60px;
}
.coworkers {
	color: white;
}
.bus {
        font-size: 20px;
        color: #f6e82d;
        text-align: right;
        font-family: "DIN Next W01 Regular";
        position: absolute;
        left: 0;
        bottom: 0;

}
.clock {
	font-size: 20px;
	color: #f6e82d;
	text-align: right;
	font-family: "DIN Next W01 Regular"; 
	position: absolute;
	right: 0;
	bottom: 0;
}
</style>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script>

var present = [];

function rendercoworkers() {
	//console.log(coworkers);
	//console.log(present);
	$(".coworkers").empty();

	var test="";
	for (var k=0; k < present.length; k++) {
		for (var l=0; l<coworkers.length; l++) {
//			console.log(coworkers[l].id + "???" + present[k]);
			if (coworkers[l].id == present[k]) {
//				console.log("yes:" + coworkers[l].name);
				var newelement = $("#coworkeritem").clone();
				newelement.show(); //css("display","inline-block");

				var coworkername = coworkers[l].name;

				newelement.find('.coworkername').html(coworkername);
				newelement.find('.coworkercompanyname').html(coworkers[l].companyname);
				newelement.find('.coworkerimg').attr("src", coworkers[l].img_src);
			        $(".coworkers").append(newelement);
				test += coworkers[l].name + "<br />";			
				break;
			}
		}
	}



/*
                        $website = get_custom_field("cws_coworker_ownwebsite:to_string");
                        $website = htmlspecialchars($website);
                        $ahrefwebseite = $website == "" ? "" : '<a href="'. $website . '" target="_blank" class="coworker-link">';
                        $ahrefwebseiteclosing = $website == "" ? "" : '</a>';

                        $img_src = get_custom_field("cws_coworker_image:to_image_src");
                        $logo_src = get_custom_field("cws_coworker_logoimage:to_image_src");
                        $companyname = get_custom_field("cws_coworker_companyname:to_string");
                        $name = get_the_title();

*/



















	//$(".coworkers").html( test );
	
}

function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}

(function bus() {
	setTimeout(function () {
	$.ajax({
        	    type: 'GET',
		    url: '/wp-content/themes/cws/bus.php',
        	    success: function (data) {
        	        $(".bus").html(data);
			//console.log(data);
        	    },
        	    complete: function() {
        	    }
        	});

	bus();
	}, 10000);
})();


(function event() {
        setTimeout(function () {
        $.ajax({
                    type: 'GET',
                    url: '/events/',
		    dataType: 'json',
                    success: function (data) {
                        $(".today").html(data.when);
                        $(".event").html(data.event);
                        console.log(data);
                    },
                    complete: function() {
                    }
                });

        event();
        }, 60000);
})();



(function clock() {
	setTimeout(function () {
		var today = new Date();
		var h = today.getHours();
		var m = today.getMinutes();
		var s = today.getSeconds();
		m = checkTime(m);
		s = checkTime(s);
		$(".clock").html(h + ":" + m + ":" + s);
		clock();
	}, 500);
})();


(function poll() {
    setTimeout(function () {

	var persons = new Object();
	$.each(coworkers, function (j, item2) {
		var coworkername = item2.name.toLowerCase();
		if (coworkername.indexOf("sergio") >= 0)
			coworkername += " wolfcastle";
		if (coworkername.indexOf("luger") >= 0)
			coworkername += " chriss";
		if (coworkername.indexOf("trapp") >= 0)
			coworkername += " che-mobile-w8";
		if (coworkername.indexOf("mayer") >= 0)
			// nico, dotlabs
			coworkername += " DT-MA-6";
		if (coworkername.indexOf("peyman") >= 0)
			coworkername += " DT-MA-5";
		if (coworkername.indexOf("frauscher") >= 0)
			coworkername += " DT-MA-3";
		if (coworkername.indexOf("wögerbauer") >= 0)
			coworkername = "DT-MA-1";
		if (coworkername.indexOf("alfonso") >= 0)
			coworkername += " fonso-Redlink";
		if (coworkername.indexOf("craffonara") >= 0)
			coworkername += " aim";
		if (coworkername.indexOf("are part of") >= 0)
			return;
		if (coworkername.indexOf("hochstaff") >= 0)
			coworkername += " 3E-IT.AT";
		if (coworkername.indexOf("kanz") >= 0)
			coworkername += " cleoco";
		if (coworkername.indexOf("caitanya") >= 0)
			coworkername += " c002";
		persons[item2.id] = coworkername;
	});

	//console.log(persons);
	//console.log(JSON.stringify(persons));
        $.ajax({

            type: 'POST',
            dataType: 'json',
            url: 'http://10.100.1.252/index.php',
	    data: persons,
            success: function (data) {
		present = data;
		//console.log(data);
            },
            complete: function() {
		rendercoworkers();
		poll();
	    }
        });
    }, 2000); //20000
})();





</script>



<script>


var coworkers = JSON.parse('<?php
$query = new WP_Query(array(
	'post_type' => 'cws_coworkers',
	'post_status' => 'publish',
	'orderby' => 'title',
	'order' => 'asc',
	'posts_per_page' => 9999,
));

$coworkers = array();
if ($query->have_posts()) {
	while ($query->have_posts()) {
		$coworker = array();
		$query->the_post();
		$coworker["website"] = get_custom_field("cws_coworker_ownwebsite:to_string");
		$coworker["website"] = htmlspecialchars($website);
		$coworker["ahrefwebseite"] = $website == "" ? "" : '<a href="'. $website . '" target="_blank" class="coworker-link">';
		$coworker["ahrefwebseiteclosing"] = $website == "" ? "" : '</a>';
		$coworker["img_src"] = get_custom_field("cws_coworker_image:to_image_src");
		$coworker["logo_src"] = get_custom_field("cws_coworker_logoimage:to_image_src");
		$coworker["companyname"] = get_custom_field("cws_coworker_companyname:to_string");
		$coworker["name"] = get_the_title();
		$coworker["id"] = get_the_ID();
		$coworkers[] = $coworker;
	}
}

echo json_encode($coworkers);
                        
?>');
</script>


</head>

<body>
<img class="logo" src="http://coworkingsalzburg.com/images/logo_coworkingsalzburg.png" />
<div class="bus" ></div>
<div class="clock" ></div>

<div class="today">
</div>

<div class="event">
</div>

<div class="whoishere">
who is here now
</div>


<div class="coworkers">
</div>
	<div class="coworkeritem" id="coworkeritem"> 
	    <img class="coworkerimg" src="http://coworkingsalzburg.com/wp-content/uploads/citty-150x132.png" alt="name" /> 
	    <span class="coworkername"> 
		eva-maria brunnauer	
	    </span>
	    <span class="coworkercompanyname" >
		Democompany
	    </span>
	</div>


</body>
