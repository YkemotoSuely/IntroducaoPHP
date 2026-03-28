<?php 
    $nota1 = "4.0";
    $nota2 = "3.5";
    $nota3 = "5.0";

    $media = ($nota1 + $nota2 + $nota3)/3.0;
    $mediaformatada = number_format ($media,2);
?>

<!DOCTYPE html>

</html lang = 'pt-br'>
    <head>
        <meta charset="UTF-08" >
        
        <title>Media</title>
        
    </head>
    <body>
        <?php


         if($media > 7.0){
            echo "O status do aluno é: Aprovado!!";
         }elseif($media >= 5.0 && $media <= 7.0 ){
            echo "O status do aluno é: Em recuperação";
         }else{
        
            echo "O status do aluno é: Reprovado";
        
         }
            

        ?>
            
    </body>
    <!-- UTF-08:conjunto de caracteres usado para ler as letras e interpretar a mensagem -->
</html>