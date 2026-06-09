
<?php
header('Content-Type: application/json');

// Dados fixos (você pode mudar depois para receber por GET)
$latitude = -22.2138900;
$longitude = -49.9458300;
$apiKey = "da25542ab78978bde76458bde23494a4";

// URL da API
$url = "https://api.openweathermap.org/data/2.5/weather?lat={$latitude}&lon={$longitude}&appid={$apiKey}&units=metric&lang=pt_br";

// Consome a API externa
$resposta = file_get_contents($url);

$dados = json_decode($resposta, true);

// Converte JSON para array PHP
if($resposta !== false){

// Monta uma "consulta" com os dados que você quer
    
echo "<h3>Consulta Meteorológica</h3>";

echo "Cidade: {$dados["name"]}<br>";
echo "Temperatura: {$dados["main"]["temp"]} °C<br>";
echo "Sensação térmica: {$dados["main"]["feels_like"]} °C<br>";
echo "Umidade: {$dados["main"]["humidity"]}%<br>";
echo "Condição: {$dados["weather"][0]["description"]}<br>";


}else{

echo "Erro ao consultar a API.";
}
// Retorna como JSON


?>
