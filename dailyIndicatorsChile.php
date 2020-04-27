$apiUrl = 'http://mindicador.cl/api';
if ( ini_get('allow_url_fopen') ) {
    $json = file_get_contents($apiUrl);
} else {
    $curl = curl_init($apiUrl);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $json = curl_exec($curl);
    curl_close($curl);
}
$dailyIndicators = json_decode($json);

/*
$dailyIndicators->uf->valor;
$dailyIndicators->dolar->valor;
$dailyIndicators->dolar_intercambio->valor;
$dailyIndicators->euro->valor;
$dailyIndicators->ipc->valor;
$dailyIndicators->utm->valor;
$dailyIndicators->ivp->valor;
$dailyIndicators->imacec->valor;
*/
