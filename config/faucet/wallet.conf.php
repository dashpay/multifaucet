<?php
define("PAYMENT_GW_RPC_HOST", getenv("MULTIFAUCET_PAYMENT_GW_RPC_HOST"));
define("PAYMENT_GW_RPC_PORT", getenv("MULTIFAUCET_PAYMENT_GW_RPC_PORT"));
define("PAYMENT_GW_RPC_USER", getenv("MULTIFAUCET_PAYMENT_GW_RPC_USER"));
define("PAYMENT_GW_RPC_PASS", getenv("MULTIFAUCET_PAYMENT_GW_RPC_PASS"));
define("ADDRESS_VERSION", getenv("MULTIFAUCET_ADDRESS_VERSION"));

define("PAYMENT_GW_DATAFILE", "/var/db/multifaucet/balance.dat");
define("PAYMENT_GW_RPC_ENCR", getenv("MULTIFAUCET_PAYMENT_GW_RPC_ENCR"));

?>
