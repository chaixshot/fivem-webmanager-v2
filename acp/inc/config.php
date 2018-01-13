<?php
$websiteTitle = "MYWEBSITE";
$securityKey = "SUPER SECURE KEY";

$servers = array(
    array(
		"name"	=> "server1",
        "ip"	=> "301.46.3.67",
		"port"	=> "30170",
		"rcon"	=> "1234"
    ),
	array(
		"name"	=> "server2",
        "ip"	=> "301.46.3.67",
		"port"	=> "40000",
		"rcon"	=> "1234"
    )
);


$logins = array( // Username, Password (http://www.sha1-online.com/) 
	["user1", "HASH OF THE PASSWORD - VISIT WEBSITE ABOVE"],
	["user2", "HASH OF THE PASSWORD - VISIT WEBSITE ABOVE"],
	["user3", "HASH OF THE PASSWORD - VISIT WEBSITE ABOVE"]
);


$groups = array( // REAL STEAM IDS -> http://steamid.io | class names (colors) are from -> https://getbootstrap.com/docs/4.0/components/badge/#contextual-variations
	array(
		"name"	=> "Admin",
		"class" => "badge badge-danger",
        "members"	=> array(
			"user1" 	=> "steam:123234",
			"user2"		=> "steam:312323"
		),
	),
	array(
		"name"	=> "Moderator",
		"class" => "badge badge-info",
        "members"	=> array(
			"user3" 		=> "steam:4324564"
		),
	)
);
?>