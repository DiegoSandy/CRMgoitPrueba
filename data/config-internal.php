<?php
return [
  'database' => [
    'host' => 'espocrm-db',
    'port' => '',
    'charset' => NULL,
    'dbname' => 'espocrm',
    'user' => 'espocrm',
    'password' => 'database_password',
    'platform' => 'Mysql'
  ],
  'smtpPassword' => NULL,
  'logger' => [
    'path' => 'data/logs/espo.log',
    'level' => 'WARNING',
    'rotation' => true,
    'maxFileNumber' => 30,
    'printTrace' => false,
    'databaseHandler' => false,
    'sql' => false,
    'sqlFailed' => false
  ],
  'restrictedMode' => false,
  'cleanupAppLog' => true,
  'cleanupAppLogPeriod' => '30 days',
  'webSocketMessager' => 'ZeroMQ',
  'clientSecurityHeadersDisabled' => false,
  'clientCspDisabled' => false,
  'clientCspScriptSourceList' => [
    0 => 'https://maps.googleapis.com'
  ],
  'adminUpgradeDisabled' => false,
  'isInstalled' => true,
  'microtimeInternal' => 1769620872.486007,
  'cryptKey' => '1fabfec5ebe25bfe5ba1ecf4bea47cbd',
  'hashSecretKey' => 'de975d22421c72fc1ac17901c9e1020b',
  'defaultPermissions' => [
    'user' => 'www-data',
    'group' => 'www-data'
  ],
  'actualDatabaseType' => 'mariadb',
  'actualDatabaseVersion' => '12.1.2',
  'instanceId' => '3f3f0ddb-6a98-4446-97a5-16021e5d2ab6',
  'apiSecretKeys' => (object) []
];
