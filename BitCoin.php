<?php
// Include the autoload.php from its vendor directory
require 'vendor/autoload.php';

//1DZhtv6eqsLKsaxFk5BsvNEzUJahvvPYzV

$api_code = "cd1ad1ab-48bd-4a06-869d-5d25da3b7efa";//"5d24c62a-6b21-419f-b777-106d9c20aa31";

$main_id = "41495b50-ab81-4e96-a15a-fe58f9cb21cf";
$main_password = "Cuong1122";
$address = "1DZhtv6eqsLKsaxFk5BsvNEzUJahvvPYzV";

$addressFrom = "1HUxSDvpfwNAHeezipk1CTJgMKEzJ2vEnJ";
$addressTo = "12njHVgryR7tZkW1JtM6cDRYSPJEzsowsn";

// Create the base Blockchain class instance
$Blockchain = new \Blockchain\Blockchain($api_code);

// Needed before calling $Blockchain->Wallet or $Blockchain->Create
$Blockchain->setServiceUrl('http://localhost:3000');

$hash = "000000000019d6689c085ae165831e934ff763ae46a2a6c172b3f1b60a8ce26f";

//Create a new wallet with a known private key. Returns a WalletResponse object.
//$wallet = $Blockchain->Create->createWithKey($password, $privKey, $email=null, $label=null);

//$password The password for the new wallet. Must be at least 10 characters in length.
$password = "testPassword01!";

//Create a new wallet, letting Blockchain generate a new private key. Returns a WalletResponse object.
/*$wallet = $Blockchain->Create->create($password, $email=null, $label="Tao label cho address");
if($_GET['method'] == 'createAddress')
{
	echo json_encode($wallet);
}
*/

//Exchange USD to BTC
if($_GET['method'] == 'changeCoin') {
	$btc_amount = $Blockchain->Rates->toBTC($_GET['coin'], 'USD');
	$output_coin = json_encode($btc_amount);
	echo $output_coin;
}

//Convert Bitcoin to Fiat Currency
//$one_btc_in_usd = $Blockchain->Rates->fromBTC(100000, 'USD');
//$stats = $Blockchain->Stats->get();
//print_r($btc_amount);

$Blockchain->Wallet->credentials($main_id, $main_password);

$balance = $Blockchain->Wallet->getBalance();
if($_GET['method'] == 'getBalance') {
	echo $balance;
}

$addressList = $Blockchain->Wallet->getAddresses();
if($_GET['method'] == 'getAddress')
{
	echo json_encode($addressList);
}

$address_new = $Blockchain->Wallet->getNewAddress("Tao address moi");
if($_GET['method'] == 'createAddress')
{
	echo json_encode($address_new);
}

//$balance = $Blockchain->Wallet->getAddressBalance($addressFrom);

//print_r($balance);

//$balanceTo = $Blockchain->Wallet->getAddressBalance($addressTo);

//print_r($balanceTo);

if($_GET['method'] == 'transaction') {

	try {
		$response = $Blockchain->Wallet->send($addressTo, "0.00000001", $addressFrom, "0.0001");
		print_r($response);

	} catch (Blockchain_ApiError $e) {
		echo $e->getMessage() . '<br />';
	}

}

?>