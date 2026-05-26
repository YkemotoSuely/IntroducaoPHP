
<?php

// Verifica se o CEP foi enviado
if (!isset($_GET['cep'])) {
    echo "CEP não informado!";
    exit;
}

// Remove tudo que não é número
$cep = preg_replace('/[^0-9]/', '', $_GET['cep']);

// Monta a URL correta
$url = "https://viacep.com.br/ws/$cep/json/";

// Inicia cURL
$cURL = curl_init($url);
curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);

// Executa a requisição
$response = curl_exec($cURL);

// Fecha conexão
curl_close($cURL);

// Verifica erro de conexão
if ($response === false) {
    echo "Erro ao consultar a API!";
    exit;
}

// Converte JSON para objeto
$dados = json_decode($response);

// Verifica se o CEP existe
if (isset($dados->erro)) {
    echo "<h3>CEP não encontrado!</h3>";
} else {
    echo "<h2>Resultado da Consulta</h2>";

    echo "CEP: {$dados->cep}<br>";
    echo "Logradouro: {$dados->logradouro}<br>";
    echo "Bairro: {$dados->bairro}<br>";
    echo "Cidade: {$dados->localidade}<br>";
    echo "Estado: {$dados->uf}<br>";
}




