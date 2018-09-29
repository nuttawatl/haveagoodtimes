<?php
  if ($driver == "mssql") {
    $db = ADONewConnection($driver);
    $db->Connect($host, $dbuser, $dbpassword, $dbname);
  } else { // Default $config[driver] == "mysql"
    $dsn = "{$driver}://{$dbuser}:{$dbpassword}@{$host}/{$dbname}";
    $db = &ADONewConnection($dsn);
    if ($utf8) @$db->Execute("SET NAMES utf8");
  }
  $db->SetFetchMode(ADODB_FETCH_BOTH);
  $db->autoRollback = true; // default is false
  $db->debug = $debug; // default is false
  ADOdb_Active_Record::SetDatabaseAdapter($db);
  if (!$db)  {
  die("Connection failed");
  $ADODB_CACHE_DIR = "cache"; 
  }
  
?>


