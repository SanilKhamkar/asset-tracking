<?php
// Option #1
// include this file into the method needed
// Connect to toolkit to call RPG
$dsn = getenv('TK_DB_DSN');
$username = getenv('TK_DB_USERNAME');
$password = getenv('TK_DB_PASSWORD');

//$namingMode = DB2_I5_NAMING_OFF;
$namingMode = 0; // 0 = SQL naming. 1 = System naming (enable library lists)
$connString = "odbc:DSN=$dsn;NAM=$namingMode";
$dbConnectionType = 'pdo';

// create db connection
try {
    $dbconn = new PDO($connString, $username, $password, array(
        PDO::ATTR_PERSISTENT => false,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
    ));
} catch (PDOException $e) {
    die ('PDO connection failed: ' . $e->getMessage());
}

// use your existing database connection when creating toolkit object
$conn = ToolkitService::getInstance($dbconn, $namingMode, '', $dbConnectionType);
// simplest is stateless mode, but could set InternalKey to a directory name instead for a stateful connection.
$conn->setOptions(array('stateless' => true));


// Option #2 (preffered)
// pass in existing db connection, place directly into method
// $dbConn is passed in from method
// place this code into your RPG toolkit method
require_once 'ToolkitService.php';
$conn = ToolkitService::getInstance($dbConn, 0, '', 'pdo');
$conn->setOptions(array('stateless' => true));

?>