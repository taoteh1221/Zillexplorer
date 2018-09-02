<?php
/*
 * Copyright 2018 GPLv3, Zillexplorer by Mike Kilday: http://DragonFrugal.com
 */


error_reporting(0); // Turn off all error reporting (disable for debugging staging install)
//ini_set('display_errors', '0');     # don't show any errors...
//error_reporting(E_ALL | E_STRICT);  # ...but do log them

// Forbid direct access to config.php
if ( realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME']) ) {
    header('HTTP/1.0 403 Forbidden', TRUE, 403);
    exit;
}

//apc_clear_cache(); apcu_clear_cache(); opcache_reset();  // DEBUGGING ONLY

/////////////////////////////////////////////////////


$version = '0.1.0';  // 2018/SEPTEMBER/2ND

$from_email = '';  // "From" address for email sent by website...MUST BE SET FOR EMAIL SENDING TO WORK.

//$api_server = 'https://api.zilliqa.com/';
$api_server = 'https://api-scilla.zilliqa.com/';
//$api_server = 'https://testnet-n-api.aws.zilliqa.com/';

$api_timeout = 10; // Seconds to wait for response from API

$paginated_rows = 40; // Number of rows of data on pagination-split result pages

$stats_max = '22'; // Front page limit on stats shown per section

$chart_blocks = '100000'; // Number of blocks used to calculate charts

$error_scan = '10000'; // Number of data rows to scan in website database for missing blockchain data

$btc_in_usd = 'coinbase'; // Default Bitcoin value in USD: coinbase / bitfinex / gemini / okcoin / bitstamp / kraken / hitbtc / gatecion / livecoin


$db_host = 'localhost';
$db_user = 'zillexplorer';
$db_name = 'zillexplorer';
$db_pass = '';
 

////////////////////////////////////////////////////////

include('lib/php/core/init.php'); 

?>