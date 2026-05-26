<?php


if (isset($_POST["cpf"])) {

    function CalculoDV($cpf, $qtdeNumeros, $peso)
    {

        $soma = 0;
        $cpfVetor = str_split($cpf);

        for ($i = 0; $i < $qtdeNumeros; $i++) {
            $soma += (int)$cpfVetor[$i] * ($peso - $i);
        }
        $resto = $soma % 11;

        $digito = 0;
        if ($resto >= 2) {
            $digito = 11 - $resto;
        }
        return $digito;
    }

    $cpf = $_POST["cpf"];
    $cpf = preg_replace('/\D/', '', $cpf);

    $unico = array_unique(str_split($cpf));

    if (strlen($cpf) != 11)
        echo 'O cpf deve conter apenas 11 numeros';
    elseif (count($unico) == 1)
        echo "Os numeros não podem ser iguais";
    else {

        $digX = CalculoDV($cpf, 9, 10);
        $digY = CalculoDV($cpf, 10, 11);

        if (
            (int)$cpf[9] == $digX &&
            (int)$cpf[10] == $digY
        ) {
            echo "CPF válido";
        } else {
            echo "CPF Inválido";
        }
    }

    echo '<br><br><a href="07_validaCPF.html">Voltar</a>';
}
