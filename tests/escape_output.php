<?php

$fh = fopen('php://stdin', 'r') or die('error opening stdin');
echo preg_quote(stream_get_contents($fh), '/');
