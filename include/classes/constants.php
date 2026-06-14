<?php

define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "filenodacademy");


// define("DB_SERVER", "localhost");
// define("DB_USER", "u166107842_tarecruit");
// define("DB_PASS", "Website2023!");
// define("DB_NAME", "u166107842_tarecruit");

// define("DB_PASS", "#Portal@thetax_consultant1");
// define("DB_NAME", "u842454973_taxconsultant");

// pre pass#Admin@123123
/**
 * Database Table Constants - these constants
 * hold the names of all the database tables used
 * in the script.
 */
define("TBL_USERS", "users");
define("TBL_ACTIVE_USERS",  "active_users");
define("TBL_ACTIVE_GUESTS", "active_guests");
define("TBL_BANNED_USERS",  "banned_users");


define("ADMIN_NAME", "admin");    //1. admin conrol all
define("MASTER_NAME", "master");   //master name
define("GUEST_NAME", "Guest");   
define("ADMIN_LEVEL", 3);        // 2. admin level .. control the master
define("MASTER_LEVEL", 8);       // 3. master level .. master control the agent
define("AGENT_LEVEL",  2);       // 4. agent level .. agent control the member
define("AGENT_MEMBER_LEVEL", 4); // 5. agent member level .. member control his/her own account
define("GUEST_LEVEL", 0);        // 6. guest level .. guest only control himself


define("TRACK_VISITORS", true);


define("USER_TIMEOUT", 10);
define("GUEST_TIMEOUT", 5);


define("COOKIE_EXPIRE", 60*60*2);  //2 days by now
define("COOKIE_PATH", "/");  //Avaible in whole domain


define("EMAIL_FROM_NAME", "ARMAN G. DE CASTRO");
define("EMAIL_FROM_ADDR", "armandecastro@gmail.com");
define("EMAIL_WELCOME", false);


define("ALL_LOWERCASE", false);
?>
