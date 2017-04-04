<?php
namespace Config;

// Do not touch this!
require 'Medoo.php';
use Medoo\Medoo;

//======================================================================
// MSF - CONFIG FILE
// https://github.com/Nuro/MSF
//======================================================================

//-----------------------------------------------------
// MAP SETTINGS
//-----------------------------------------------------

/* Location Settings */

$startingLat = 50.879215;                                      // Starting latitude
$startingLng = 4.699935;                                      // Starting longitude

/* Map Title + Language */

$title = "PokeMapz";                                      // Title to display in title bar
$locale = "en";                                                 // Display language

/* Google Maps Key */

$gmapsKey = "AIzaSyBpkBz2Z-1Ce0L-1M6k0cy5oc1ljnimss0";          // Google Maps API Key


//-----------------------------------------------------
// DATA MANAGEMENT
//-----------------------------------------------------

// Clear pokemon from database this many hours after they disappear (0 to disable)
// This is recommended unless you wish to store a lot of backdata for statistics etc!

$purgeData = 6;


//-----------------------------------------------------
// DATABASE CONFIG
//-----------------------------------------------------

$db = new Medoo([// required
            'database_type' => 'mariadb',                                 // mysql/mariadb/pgsql/sybase/oracle/mssql/sqlite
            'database_name' => 'pokem_pokeminer',
            'server' => 'daldb.vpsdime.com',
            'username' => 'pokem_pokeuser',
            'password' => 'Bassie015319949',

            // [optional]
            //'charset' => 'utf8',
            //'port' => 5432,                                             // Comment out if not needed, just add // in front!
        ]);

