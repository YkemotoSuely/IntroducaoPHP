<?php   
// Informar o End-Point
$url = 
"https://servicodados.ibge.gov.br/api/v1/localidades/municipios?orderBy=nome";
// Iniciar o cURL(inicializar uma biblioteca de PHP para fazer requisições HTTP)
$cURL = curl_init($url);


//cURL_RETURNTRANSFER: Retorna a resposta da requisição como uma string, em vez de exibi-la diretamente, deninindo que o resultado será armazenado em uma variável, para que possa ser processado posteriormente. Se essa opção não for definida, a resposta será exibida diretamente na saída padrão (geralmente o navegador).
curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);

//executa a requisição e armazena a resposta na variável $response
$response = curl_exec($cURL);

// fecha a conexão URl e libera a memória do servidor
//obsoleto pois o PHP já automatizou o processo de fechamento de conexão e liberação de memória, mas é recomendado para garantir que os recursos sejam liberados imediatamente após o uso.
curl_close($cURL);
// transforma a resposta JSON em um array associativo do PHP, permitindo acessar os dados de forma estruturada e fácil de manipular. O segundo parâmetro "true" indica que o resultado deve ser retornado como um array associativo, em vez de um objeto.
$cidades = json_decode($response);

// percorrer o array de cidades e exibir o nome de cada cidade                  
foreach ($cidades as $cid) {

    echo "<h3>$cid->nome</h3>";
    echo "ID Cidade: " . $cid->id . "<br>";

    echo "Microrregião: ";
    if ($cid->microrregiao != null) {
        echo $cid->microrregiao->nome . "<br>";


        echo "Mesorregião: ";
        echo $cid->microrregiao->mesorregiao->nome . "<br>";

        echo "UF: ";
        echo $cid->microrregiao->mesorregiao->UF->sigla . "<br>";
        echo "Estado: ";
        echo $cid->microrregiao->mesorregiao->UF->nome . "<br>";

        echo "Região: ";
        echo $cid->microrregiao->mesorregiao->UF->regiao->nome . "<br>";
           }
    echo "<hr>";
}


