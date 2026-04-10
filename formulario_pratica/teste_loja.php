<?php
// 1. CONEXÃO (Fica no topo)
$conexao = new mysqli('localhost', 'root', '', 'loja');

if ($conexao->connect_error) {
    die("Erro: " . $conexao->connect_error);
}

$mensagem = "";

// 2. LÓGICA DE INSERÇÃO (Só roda se clicar no botão)
if (isset($_POST['btn_enviar'])) {
    $nome = $_POST['nome_prod'];
    $preco = $_POST['preco_prod'];
    $estoque = $_POST['estoque_prod'];

    $sql = "INSERT INTO produtos (nome, preco, estoque) VALUES ('$nome', '$preco', '$estoque')";

    if ($conexao->query($sql) === TRUE) {
        $mensagem = "<b style='color:green'>Cadastrado com sucesso!</b>";
    } else {
        $mensagem = "<b style='color:red'>Erro: " . $conexao->error . "</b>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Teste Loja</title>
</head>
<body>
    <h2>Cadastro de Produto</h2>
    
    <form action="" method="POST">
        Nome: <input type="text" name="nome_prod" required><br><br>
        Preço: <input type="number" name="preco_prod" step="0.01" required><br><br>
        Estoque: <input type="number" name="estoque_prod" required><br><br>
        <button type="submit" name="btn_enviar">Salvar</button>
    </form>

    <hr>
    <?php echo $mensagem; ?>
    
    <h3>Produtos no Banco:</h3>
    <?php
    // Lista os produtos logo abaixo para você ver se funcionou
    $res = $conexao->query("SELECT * FROM produtos");
    while($row = $res->fetch_assoc()){
        echo "ID: {$row['id']} - {$row['nome']} (R$ {$row['preco']})<br>";
    }
    ?>
</body>
</html>