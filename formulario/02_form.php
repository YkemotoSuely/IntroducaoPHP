 
    <?php
        //isset: verifica se a variável existe e se ela é diferente de null
        //$_POST: recupera o valor de uma variável do formulário
        if(isset($_POST["nome"])){

            $nome = $_POST["nome"];
            $idade = $_POST["idade"];

            echo "<h2>Dados Recebidos<h2>";
            echo "Nome: ". $nome . "<br>";
            echo "Idade: ". $idade . "<br><br>";

            echo '<a href="02_form.html">Voltar</a>';
       }else {
        //incluir o else, caso a variável NOME não exista ou eteja nula
            echo "Acesso inválido";

       }
    ?>  
