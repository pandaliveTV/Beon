<?php
error_reporting(0);
ini_set('user_agent', 'Android Vinebre Software');
$homepage = file_get_contents('https://app.liveplanettv.com/beta/api.php?device_id=');
$pR = '/(?<=wmsAuthSign": ")(.*?)(?=")/';
 preg_match_all($pR, $homepage, $matches);
$page= implode(', ',$matches[1]);
header('Location: http://163.172.223.102:8081/arab@arb/beinsports4/playlist.m3u8?wmsAuthSign='.$page);
?>
