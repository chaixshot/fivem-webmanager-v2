<?php

$websiteTitle = "My website name";
$securityKey = "change to anything and never share"; // basically prevents others from sending rcon commands by exploiting the site
$timeoutAfterSeconds = 3; // more seconds means a longer site load when a server is not reachable

$servers = array(
    array(
		"name"	=> "server1",
        "ip"	=> "1.23.23.123",
		"port"	=> "30170",
		"rcon"	=> "server rcon password"
    ),
	array(
		"name"	=> "server2",
        "ip"	=> "1.23.23.123",
		"port"	=> "30180",
		"rcon"	=> "server rcon password"
    )
);



// REAL STEAM IDS (64) -> http://steamid.io
// class names (colors) are from -> https://getbootstrap.com/docs/4.0/components/badge/#contextual-variations
// pasword hashes are generated from -> http://www.sha1-online.com/
// rights are : login, kick, ban, rcon - should be self explanatory

$groups = array( 
	array(
		"name"	=> "Admin",
		"class" => "badge badge-danger",
        "members"	=> array(
			array(
				"username"	=> "user1",
				"password" 	=> "HASH OF THE PASSWORD",
				"steam"		=> "steam:REAL STEAM IDS (64)",
			),
			array(
				"username"	=> "user2",
				"password" 	=> "HASH OF THE PASSWORD",
				"steam"		=> "steam:REAL STEAM IDS (64)",
			),
		),
		"rights"	=> ["login", "kick", "ban", "rcon"],
	),
	
	array(
		"name"	=> "Moderators",
		"class" => "badge badge-warning",
		"members"			=> array(
			array(
				"username"	=> "user3",
				"password" 	=> "HASH OF THE PASSWORD",
				"steam"		=> "steam:REAL STEAM IDS (64)",
			)
		),
		"rights"	=> ["login", "kick"],
	),
	
	array(
		"name"	=> "Donators",
		"class" => "badge badge-success",
		"members"			=> array(
			array(
				"username"	=> "user4",
				"password" 	=> "PASSWORD HASH",
				"steam"		=> "steam:REAL STEAM IDS (64)",
			)
		),
		"rights"	=> [],
	)
);
?>