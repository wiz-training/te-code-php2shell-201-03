<?php
// Fleet data exporter: formats the telemetry batch for the requested consumer.
$user_format = $_GET['format'];
$res = shell_exec("php /opt/export.php " . $user_format);
echo $res;
