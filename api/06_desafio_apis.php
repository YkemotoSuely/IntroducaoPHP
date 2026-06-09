
<?php

$url = "https://servicodados.ibge.gov.br/api/v1/localidades/municipios";

$resposta = file_get_contents($url);
$dados = json_decode($resposta, true);

echo "<form method='GET'>";
echo "<select name='cidade'>";

foreach ($dados as $municipio) {
    $nome = $municipio['nome'];
    $uf = $municipio['microrregiao']['mesorregiao']['UF']['sigla'];

    echo "<option value='{$nome},{$uf}'>{$nome} - {$uf}</option>";
}

echo "</select>";
echo "<button type='submit'>Consultar</button>";
echo "</form>";


// ✅ quando o usuário seleciona
if (isset($_GET['cidade'])) {

    $cidadeSelecionada = $_GET['cidade'];

    // ✅ URL correta
    $urlNominatim = "https://nominatim.openstreetmap.org/search?q={$cidadeSelecionada},Brasil&format=json&limit=1";

    $opcoes = [
        "http" => [
            "header" => "User-Agent: SistemaConsulta/1.0\r\n"
        ]
    ];

    $contexto = stream_context_create($opcoes);

    $resposta = file_get_contents($urlNominatim, false, $contexto);
    $dadosNominatim = json_decode($resposta, true);

    if (!empty($dadosNominatim)) {

        $lat = $dadosNominatim[0]['lat'];
        $lon = $dadosNominatim[0]['lon'];

        echo "<h3>Coordenadas</h3>";
        echo "Latitude: {$lat}<br>";
        echo "Longitude: {$lon}<br>";

        

        $apiKey = "SUA_CHAVE";

        $urlClima = "https://api.openweathermap.org/data/2.5/weather?lat={$lat}&lon={$lon}&appid={$apiKey}&units=metric&lang=pt_br";

        $respostaClima = file_get_contents($urlClima);
        $clima = json_decode($respostaClima, true);

        echo "<h3>Previsão do Tempo</h3>";
        echo "Município: {$clima["name"]}<br>";
        echo "Temperatura: {$clima["main"]["temp"]} °C<br>";
        echo "Sensação térmica: {$clima["main"]["feels_like"]} °C<br>";
        echo "Umidade: {$clima["main"]["humidity"]}%<br>";
        echo "Condição: {$clima["weather"][0]["description"]}<br>";
        echo "Velocidade do vento: {$clima["wind"]["speed"]} m/s<br>";
    }
}
