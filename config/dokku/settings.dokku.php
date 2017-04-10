<?php/**
 * Database settings
 * Retrieves database settings from DATABASE_URL environment variable
 */
$database_url = getenv("DATABASE_URL");
$components = parse_url($database_url);

if (empty($database_url)) {
  print "No database settings found";
  exit;
}

if ($components) {
  $host = $components['host'];
  $username = $components['user'];
  $password = $components['pass'];
  $dbname = substr($components['path'], 1);
  $port = $components['port'];
}

$databases = array (
  'default' =>
    array (
      'default' =>
        array (
          'database' => $dbname,
          'username' => $username,
          'password' => $password,
          'host' => $host,
          'port' => $port,
          'driver' => 'mysql',
          'prefix' => '',
        ),
    ),
);
