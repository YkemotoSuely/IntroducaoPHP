<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coloque aqui todo o código que pega os dados e dá echo
} else {
    echo "Acesso inválido! Por favor, use o formulário para enviar os dados.";
}
// 1. Capturando textos e números simples
$nome  = $_POST['nome'];
$email = $_POST['email'];
$idade = $_POST['idade'];

// 2. Capturando cores e datas (que chegam como texto)
$cor   = $_POST['cor_cracha'];
$data  = $_POST['data_nasc'];

// 3. Capturando o Radio (Gênero)
$genero = $_POST['genero']; 

echo "<h2>Resumo do Cadastro</h2>";
echo "<b>Nome:</b> $nome <br>";
echo "<b>E-mail:</b> $email <br>";
echo "<b>Idade:</b> $idade anos <br>";
echo "<b>Data de Nascimento:</b> $data <br>";
echo "<b>Gênero:</b> $genero <br>";
echo "<b>Cor do Crachá:</b> <span style='color:$cor'>$cor</span>";

// 4. Verificando os Checkboxes (Interesses)
if (isset($_POST['interesses'])) {
    echo "<br><b>Interesses:</b> " . implode(", ", $_POST['interesses']);
}
?>