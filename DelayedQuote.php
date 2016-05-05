<?php

# An HTTP GET request example for DelayedQuote
# This method restricts user to specific symbol

$symbol = 'FBNH';
$token = '608-your-token-here-cb';

$url = 'http://marketdataapi.nse.com.ng/v1/odata/DelayedQuote(\'' . $symbol . '\')?_token=' . $token;
$unparsed_json = file_get_contents($url);
$json = json_decode($unparsed_json, true);

# Read json data
echo '<h1>#' . $json['Symbol'] . ' ' . $json['Last'] . ' @ ' . $json['LastTradeTime'] . '</h1>';

?>
