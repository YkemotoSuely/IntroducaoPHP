<?php

// 1. Configuração da API do IBGE (Listagem de Cidades)
$url_ibge = "https://servicodados.ibge.gov.br/api/v1/localidades/municipios?orderBy=nome";

$cURL = curl_init($url_ibge);
curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);
$response_ibge = curl_exec($cURL);

if (curl_errno($cURL)) {
    // Trata erro de conexão com o IBGE, se necessário
    $cidades = [];
} else {
    $cidades = json_decode($response_ibge);
}
curl_close($cURL);


// 2. Processamento do Formulário (Busca de CEP)
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cep'])) {
    
    // Limpa o CEP (mantém apenas números)
    $cep = preg_replace('/[^0-9]/', '', $_POST['cep']);

    // Valida se o CEP tem o formato correto (8 dígitos)
    // A cep padrão do url pode ser substituida pela variável $cep, para que a consulta seja feita com o cep digitado pelo usuário.

    if (strlen($cep) === 8) {
        $url_viacep = "https://viacep.com.br/ws/$cep/json/";
        
        $cURL = curl_init($url_viacep);
        curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($cURL, CURLOPT_TIMEOUT, 10);
        $response_viacep = curl_exec($cURL);
        
        if (curl_errno($cURL)) {
            echo "<p style='color: red;'>Erro ao conectar com o serviço de CEP.</p>";
        } else {
            $endereco = json_decode($response_viacep);

            // Verifica se o ViaCEP retornou erro (CEP válido no formato, mas inexistente na base)
            if (isset($endereco->erro) && $endereco->erro === true) {
                echo "<p style='color: red;'>CEP não encontrado.</p>";
            } else {
                //Se não der erro, exibe os dados do endereço encontrado. 
                echo "CEP: " . htmlspecialchars($cep) . "<br>";
                echo "Logradouro: " . htmlspecialchars($endereco->logradouro ?? 'Não informado') . "<br>";
                echo "Bairro: " . htmlspecialchars($endereco->bairro ?? 'Não informado') . "<br>";
                echo "Cidade: " . htmlspecialchars($endereco->localidade ?? 'Não informado') . "<br>";
                echo "Estado: " . htmlspecialchars($endereco->uf ?? 'Não informado') . "<br>";
            }
        }
        curl_close($cURL);
    } else {
        echo "<p style='color: red;'>Por favor, insira um CEP válido com 8 dígitos.</p>";
    }

    echo '<br><a href="consulta_cep_luis.html"> <button>Voltar</button></a>';
}
?>