<?php
    $servidor = 'localhost';
    $usuario = 'root';
    $senha = '';
    $banco = 'loja';

//criar conexão

$conexao = new mysqli($servidor, $usuario, $senha, $banco);

if($conexao ->connect_error){
    die ('Erro na conexão');
}
//echo 'Conexão realizada com sucesso!';

$sql = "SELECT id, nome, preco, estoque FROM produtos";
$resultado = $conexao->query($sql);

    if ($resultado->num_rows > 0){
        while ($linha = $resultado->fetch_assoc()) 
        {
            //echo '<p> Código: '. $linha["id"] . ' /Produto: '. $linha["nome"] . ' /Preço: '. $linha["preco"] . ' /Estoque: '. $linha["estoque"];
            echo "<p> Código: $linha[id]  /Produto:  $linha[nome] /Preço:  $linha[preco]  /Estoque: $linha[estoque]";
        }
    }
?>