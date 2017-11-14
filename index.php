<?php
// Include the autoload.php from its vendor directory
require 'vendor/autoload.php';

//1DZhtv6eqsLKsaxFk5BsvNEzUJahvvPYzV

//41495b50-ab81-4e96-a15a-fe58f9cb21cf

$api_code = "1234567890";

// Create the base Blockchain class instance
$Blockchain = new \Blockchain\Blockchain($api_code);

// Needed before calling $Blockchain->Wallet or $Blockchain->Create
$Blockchain->setServiceUrl('http://localhost:3000');

$hash = "000000000019d6689c085ae165831e934ff763ae46a2a6c172b3f1b60a8ce26f";

//Create a new wallet with a known private key. Returns a WalletResponse object.
//$wallet = $Blockchain->Create->createWithKey($password, $privKey, $email=null, $label=null);

//Create a new wallet, letting Blockchain generate a new private key. Returns a WalletResponse object.
$wallet = $Blockchain->Create->create($password, $email=null, $label=null);

?>