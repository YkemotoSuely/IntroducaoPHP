<?php
if (isset($_POST['btn_gerar'])) {
    

    $estados = [
        ["uf" => $_POST['uf1'], "nome" => $_POST['nome1']],
        ["uf" => $_POST['uf2'], "nome" => $_POST['nome2']],
        ["uf" => $_POST['uf3'], "nome" => $_POST['nome3']],
        ["uf" => $_POST['uf4'], "nome" => $_POST['nome4']]
    ];

    echo "<h2>Estados Cadastrados:</h2>";
    echo "<table border='1' cellpadding='10'>";
    echo "<tr><th>UF</th><th>Nome do Estado</th></tr>";

    // O foreach percorre o array 
    foreach ($estados as $est) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($est['uf']) . "</td>";
        echo "<td>" . htmlspecialchars($est['nome']) . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    echo "<br><a href='04_arraymultidimensional.html'>Voltar para cadastrar mais</a>";
}
?>