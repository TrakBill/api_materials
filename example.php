$url = 'https://api.trackbill.com/v1/report/';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);

$clientId = '<TB-CLIENT-ID>';
$clientSecret = '<TB-CLIENT-SECRET>';

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "TB-CLIENT-ID: $clientId",
    "TB-CLIENT-SECRET: $clientSecret"
));
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$return = curl_exec($ch);
curl_close($ch);

var_dump($return);
