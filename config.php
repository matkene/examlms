<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'examlasc_mo1';
$CFG->dbuser    = 'examlasc_mo1';
$CFG->dbpass    = 'C.diMWOxorCigy8nmAu03';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '',
  'dbcollation' => 'utf8mb4_general_ci',
);

$CFG->wwwroot   = 'http://exam.lascohet.com';
$CFG->dataroot  = '/home/examlascohet/moodledata';
$CFG->admin     = 'admin';

//$CFG->alternateloginurl = 'http://lascohet.com/portal';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
