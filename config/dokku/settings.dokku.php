<?php
/**
 * Local settings.
 */

/**
 * Database settings
 * Dokku retrieves database settings from DATABASE_URL environment variable
 */
$database_url = getenv("DATABASE_URL");
$components = parse_url($url);

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