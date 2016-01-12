<?php

require("../phpMQTT.php");

/*
  This example is tested against Mosquitto MQTT 1.4.7
*/

$cafile = "path to file";
$clientCrt = "path to file";
$clientKey = "path to file";
	
$mqtt = new phpMQTT("example.com", 8883, "phpMQTT Pub Example", $cafile, $clientCrt, $clientKey); //Change client name to something unique

if ($mqtt->connect()) {
	$mqtt->publish("bluerhinos/phpMQTT/examples/publishtest","Hello World! at ".date("r"),0);
	$mqtt->close();
}

?>
