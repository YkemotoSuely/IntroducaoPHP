<?php
// 1. Configurações de Conexão
$conexao = new mysqli('localhost', 'root', '', 'loja');

if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}

// 2. Lógica de Inserção (O que acontece ao clicar no botão)
if (isset($_POST['btn_enviar'])) {
    $nome    = $_POST['nome_prod'];
    $preco   = $_POST['preco_prod'];
    $estoque = $_POST['estoque_prod'];

    $sql = "INSERT INTO produtos (nome, preco, estoque) 
            VALUES ('$nome', '$preco', '$estoque')";

    if ($conexao->query($sql) === TRUE) {
        echo "<h3 style='color: green;'>Sucesso: Produto '$nome' cadastrado!</h3>";
    } else {
        echo "<h3 style='color: red;'>Erro ao cadastrar: " . $conexao->error . "</h3>";
    }
} 

// --- AQUI ENTRA O TRECHO DE LISTAGEM ---

echo "<h3>Produtos no Banco:</h3>";

// Fazemos a consulta para buscar todos os produtos
$res = $conexao->query("SELECT * FROM produtos");

if ($res->num_rows > 0) {
    while($row = $res->fetch_assoc()){
        echo "ID: {$row['id']} - {$row['nome']} (R$ {$row['preco']}) - Estoque: {$row['estoque']}<br>";
    }
} else {
    echo "Nenhum produto encontrado.";
}

// --- FIM DA LISTAGEM ---

// 3. AGORA SIM, fechamos a conexão
$conexao->close();

echo "<br><a href='08_cadastrarproduto.html'>Voltar ao Formulário</a>";
?>

