<?php
$config['db']['host']     = "127.0.0.1:3306"; // Database Host
$config['db']['username'] = "root"; // Database Connect Username
$config['db']['password'] = ""; // Database Connect Password

$config['db']['realmdb'] = "s_realmd"; // AccountDatabase
$config['db']['chardb']  = "s_characters"; // CharactersDatabase
$config['db']['webdb']   = "s_website";

$config['realmserver']['host'] = "127.0.0.1"; // Your Server Realmlist

$config['worldserver']['ip']   = "127.0.0.1";
$config['worldserver']['port'] = "3306";
$config['worldserver']['host'] = "localhost";

$config['root_url'] = "/website";
$config['root_host'] = "http://localhost:10088";
$config['root_path'] = "/Users/mriedmann/Projects/salja/Website";

$website = "website";
$cod = 'utf8';

$config['mail']['from'] = "no-reply@salja.com";
$config['mail']['reply'] = "webmaster@salja.com";

$config['cache'] = false;
$config['debug'] = true;

?>