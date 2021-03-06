<html>
<head>
<!-- https://github.com/LeoWinterDE/TS3SSV -->
<title>TeamSpeak Server Status Viewer</title>
<link rel="stylesheet" type="text/css" href="/ts3ssv.css" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<script type="text/javascript" src="/ts3ssv.js"></script>
</head>
<body>
<?php
require_once("ts3ssv.php");
$host = getenv('TS_HOST');
$port = getenv('TS_PORT');
$queryLogin = getenv('TS_QUERY_LOGIN');
$queryPass = getenv('TS_QUERY_PASS');
$serverPort = getenv('TS_SERVER_PORT');
$lightMode = getenv('TS_VIEWER_LIGHT_MODE');
$cacheTime = getenv('TS_VIEWER_CACHE_TIME');

$ts3ssv = new ts3ssv($host, $port);
$ts3ssv->useServerPort($serverPort);
$ts3ssv->setCache($cacheTime);
if ($lightMode == "true") {
    $ts3ssv->lightMode = true;
}

/*
$ts3ssv->hideEmptyChannels = true;
$ts3ssv->hideParentChannels = false;
$ts3ssv->showNicknameBox = true;
$ts3ssv->showPasswordBox = false;
*/

$ts3ssv->setLoginPassword($queryLogin, $queryPass);

echo $ts3ssv->render();
?>
</body>
</html>
