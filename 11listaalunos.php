<h1 style="color:green">Lista de Alunos</h1>

<?php
    $servidor = 'localhost';
    $usuario = 'root';
    $senha = '';
    $banco = 'escola_suely';

//criar conexão

    $conexao = new mysqli($servidor, $usuario, $senha, $banco);

    if($conexao ->connect_error){
     die ('Erro na conexão');
    }

  // Caminho da imagem no servidor
  $imagem = "pasta_imagens/relatorio.png";
  
  // Exibindo no HTML
  echo "<h1>Relatório</h1>";
  echo "<img src='" . $imagem . "' alt='Relatório PNG' />";


    $sql = "SELECT id, nome, idade, uf, cidade FROM alunos";
    $resultado = $conexao->query($sql);

    if ($resultado->num_rows > 0){
        while ($linha = $resultado->fetch_assoc()) 
        {
            //echo '<p> Código: '. $linha["id"] . ' /Produto: '. $linha["nome"] . ' /Preço: '. $linha["preco"] . ' /Estoque: '. $linha["estoque"];
            echo "<p> <hr style='background-color: green; border: none; height: 2px;'><strong>Matricula: </strong> $linha[id]<br>  <strong>Aluno:</strong>  $linha[nome]<br> <strong>Idade:</strong>  $linha[idade]<br> <strong>UF:</strong> $linha[uf]<br> <strong>Cidade:</strong> $linha[cidade]";
        }
    }
?>