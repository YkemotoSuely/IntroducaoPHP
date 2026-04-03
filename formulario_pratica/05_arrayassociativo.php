<?php   
if (isset($_POST['btn_enviar'])) {
    
    // 1. Criando o Array Associativo 
    $endereco = [
        'Cep'    => $_POST['txt_cep'],
        'Rua'    => $_POST['txt_rua'],
        'Bairro' => $_POST['txt_bairro'],
        'Cidade' => $_POST['txt_cidade'],
        'Uf'     => $_POST['txt_uf']
    ];

    // 2. Exibindo os dados na tela
    echo "<h2>Endereço Cadastrado com Sucesso!</h2>";
    echo "<ul>";
    echo "<li><strong>CEP:</strong> " . htmlspecialchars($endereco['Cep']) . "</li>";
    echo "<li><strong>Rua:</strong> " . htmlspecialchars($endereco['Rua']) . "</li>";
    echo "<li><strong>Bairro:</strong> " . htmlspecialchars($endereco['Bairro']) . "</li>";
    echo "<li><strong>Cidade:</strong> " . htmlspecialchars($endereco['Cidade']) . "</li>";
    echo "<li><strong>Estado (UF):</strong> " . htmlspecialchars($endereco['Uf']) . "</li>";
    echo "</ul>";

    echo "<br><a href='05_arrayassociativo.html'>Voltar</a>";
}
?>


