# IP-Info
Get information about you IP and connection. No logs!


<a href="https://ip.kocicak.xyz/">Check original!</a>


# Logs?

<p>No, we don't log anything from this code and our <a href="https://ip.kocicak.xyz/">original</a> is without logs too.</p>

# Requirements

- Apache (for web server) or webhosting
- PHP (I'm using v8.1)



<h2>Step 1)</h2>
<p>Make PHP file. Just create anything.php file.</p>
<h2>Step 2)</h2>
<p>Paste this code</p>

```<?php
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
?>```


