<?php

if (isset($_POST['nome_usuario'])) {
    
    
    $nome = $_POST['nome_usuario'];
    $dataNascimento = $_POST['data_nasc']; 
    $curso = $_POST['curso_escolhido'];

   
    $nascimento = new DateTime($dataNascimento); 
    $hoje = new DateTime(); 

   
    $idade = $hoje->diff($nascimento);

    
    echo "<h2>Resultado do Processamento:</h2>";
    echo "Nome: " . htmlspecialchars($nome) . "<br>";
    echo "Curso: " . htmlspecialchars($curso) . "<br>";
    echo "Idade: {$idade->y} anos, {$idade->m} meses e {$idade->d} dias";
} else {
    echo "Aguardando preenchimento do formulário...";
}
?>