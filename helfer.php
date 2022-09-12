<?php
if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {        
  header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
  die( header( 'location: /wbsprojekt_risteski/index.php' ) );
}
//Lib
require_once 'lib/authentication.php';
require_once 'lib/database.php';
require_once 'lib/request.php';
require_once 'lib/response.php';
require_once 'lib/session.php';
require_once 'lib/view.php';

$database_connection = db_connect([
  'host' => 'localhost',
  'user' => 'root',
  'password' => '',
  'database' => 'wbsprojekt_risteski'
]);

session_start();

$errors = [];

