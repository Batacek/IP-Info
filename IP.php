<!DOCTYPE HTML>
<HTML>
<head>
<title>Your IP - Kocicak.xyz</title>
</head>
<body>
<h1>Connection info:</h1><?php 

    $protocol = $_SERVER['SERVER_PROTOCOL'];
    $ip = $_SERVER['REMOTE_ADDR'];
    $port = $_SERVER['REMOTE_PORT'];
    $agent = $_SERVER['HTTP_USER_AGENT'];
    $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);

    echo('IP Address: '."".$ip ."\n");
        echo("<br>");
    echo('Hostname: '."".$hostname ."\n");
        echo("<br>");
    echo('Port Number: '."".$port ."\n");
        echo("<br>");
    echo('User Agent: '."".$agent ."\n");
        echo("<br>");
    echo('Protocol type: '."".$protocol ."\n");
?>
</body>
</HTML>
