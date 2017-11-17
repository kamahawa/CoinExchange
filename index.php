<?php
// Include the autoload.php from its vendor directory
require 'vendor/autoload.php';

//1DZhtv6eqsLKsaxFk5BsvNEzUJahvvPYzV

//41495b50-ab81-4e96-a15a-fe58f9cb21cf

//address 1 : 1HUxSDvpfwNAHeezipk1CTJgMKEzJ2vEnJ
//address 2 : 12njHVgryR7tZkW1JtM6cDRYSPJEzsowsn

$api_code = "5d24c62a-6b21-419f-b777-106d9c20aa31";

// Create the base Blockchain class instance
$Blockchain = new \Blockchain\Blockchain($api_code);

// Needed before calling $Blockchain->Wallet or $Blockchain->Create
$Blockchain->setServiceUrl('http://localhost:3000');

$hash = "000000000019d6689c085ae165831e934ff763ae46a2a6c172b3f1b60a8ce26f";

//Create a new wallet with a known private key. Returns a WalletResponse object.
//$wallet = $Blockchain->Create->createWithKey($password, $privKey, $email=null, $label=null);

$password = "Cuong1122";
$address = "1DZhtv6eqsLKsaxFk5BsvNEzUJahvvPYzV";

$addressFrom = "1HUxSDvpfwNAHeezipk1CTJgMKEzJ2vEnJ";
$addressTo = "12njHVgryR7tZkW1JtM6cDRYSPJEzsowsn";

//Create a new wallet, letting Blockchain generate a new private key. Returns a WalletResponse object.
//$wallet = $Blockchain->Create->create($password, $email=null, $label=null);

//Exchange USD to BTC
//$btc_amount = $Blockchain->Rates->toBTC(6000, 'USD');
//Convert Bitcoin to Fiat Currency
//$one_btc_in_usd = $Blockchain->Rates->fromBTC(100000, 'USD');

//$stats = $Blockchain->Stats->get();


//print_r($btc_amount);

$Blockchain->Wallet->credentials('41495b50-ab81-4e96-a15a-fe58f9cb21cf', $password);

//$balance = $Blockchain->Wallet->getBalance();
//print_r($balance);

//$balance = $Blockchain->Wallet->getAddressBalance($addressFrom);

//print_r($balance);

//$balanceTo = $Blockchain->Wallet->getAddressBalance($addressTo);

//print_r($balanceTo);

$response = $Blockchain->Wallet->send($addressTo, "0.00000000", $addressFrom, "0.0000");

print_r($response);

?>