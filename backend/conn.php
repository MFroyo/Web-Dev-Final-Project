<?php

// DB Connection Info
$dbHost = 'mysql-mariadb17-dal-104.zap-hosting.com';
$dbName = 'zap598145-2';
$dbUser = 'zap598145-2';
$dbPass = 'bLzIPP63Lo6j5gIR';

// Connect with DB
$conn = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>