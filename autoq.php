<?php
header("Content-Type: application/vnd.apple.mpegurl");
echo '#EXTM3U'.PHP_EOL;
echo '#EXT-X-VERSION:3'.PHP_EOL;
echo '#EXT-X-STREAM-INF:PROGRAM-ID=1,CLOSED-CAPTIONS=NONE,BANDWIDTH=1200000,RESOLUTION=1280x720'.PHP_EOL;
printf("live.php?c=%s&q=1200&e=.m3u8".PHP_EOL, $_GET['c']);
?>
