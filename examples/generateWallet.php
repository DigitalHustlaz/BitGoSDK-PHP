<?php

require 'vendor/autoload.php';

use dhtech\BitGoSDK\BitGoExpress;
use dhtech\BitGoSDK\Enum\CurrencyCode;

$hostname = 'localhost';
$port = 3080;
$coin = CurrencyCode::BITCOIN_TESTNET;

$bitgoExpress = new BitGoExpress($hostname, $port, $coin);
$bitgoExpress->accessToken = 'YOUR_API_KEY_HERE';

$generateWallet = $bitgoExpress->generateWallet('LABEL_HERE', 'CREATE_A_NEW_PASSPHRASE_HERE');
var_dump($generateWallet);