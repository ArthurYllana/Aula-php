<?php
    require_once 'funcoesCalculo.php'; // incluindo um arquivo php externo
    session_start(); // iniciando a SESSION
    
    // checando se o formulário não está vazio
    if (!empty($_GET['inputNum1']) && !empty($_GET['inputNum2'])) // $_GET[] funciona como um array
    {
        $numero1 = $_GET['inputNum1']; // substitui as variáveis do input do tipo GET pelas novas
        $numero2 = $_GET['inputNum2']; // o código passa a usar as novas variáveis

        // código da parte de seleção do tipo de cálculo
        if($_GET['selectOperacoes'] == "adicao")
        {
            $resultado = $numero1 . "+" . $numero2 . "=" . adicao($numero1, $numero2);
        }
        else if($_GET['selectOperacoes'] == "subtracao")
        {
            $resultado = $numero1 . "-" . $numero2 . "=" . subtracao($numero1, $numero2);
        }
        else if($_GET['selectOperacoes'] == "multiplicacao")
        {
            $resultado = $numero1 . "x" . $numero2 . "=" . multiplicacao($numero1, $numero2);
        }
        else if($_GET['selectOperacoes'] == "divisao")
        {
            $resultado = $numero1 . "/" . $numero2 . "=" . divisao($numero1, $numero2);
        }
        // comando SESSION, inserindo o valor do resultado no conjunto _SESSION
        $_SESSION['resultado'] = $resultado;
        // comando HEADER redireciona para uma página específica
        // nesse caso, a página principal continua nela
        header('location: ../index.php'); // chega no arquivo index
        die(); // remove o seu caminho navegado
    }



    if (!empty($_POST['inputTemp1'])) // $_GET[] funciona como um array
    {
        $numero1 = $_POST['inputTemp1']; // substitui as variáveis do input do tipo GET pelas novas
        // o código passa a usar as novas variáveis

        if($_POST['selectTemperatura'] == "celsius")
        {
            $resultado = "De Fahrenheit para Celsius " . celsius($numero1) . " ºC" ;
        }
        else if($_POST['selectTemperatura'] == "fahrenheit")
        {
            $resultado = " De Celsius para Fahrenheit " . fahrenheit($numero1) . " ºF";
        }
        $_SESSION['resultado'] = $resultado;
        // comando HEADER redireciona para uma página específica
        // nesse caso, a página principal continua nela
        header('location: ../temperatura.php'); // chega no arquivo index
        die();
    }


    if (!empty($_POST['inputMed1'])) // $_GET[] funciona como um array
    {
        $numero1 = $_POST['inputMed1']; // substitui as variáveis do input do tipo GET pelas novas
        // o código passa a usar as novas variáveis

        if($_POST['selectMedida'] == "metro")
        {
            $resultado = "De Centrimetro para Metro " . metro($numero1) . "m" ;
        }
        else if($_POST['selectMedida'] == "centimetro")
        {
            $resultado = " De Metro para Centimetro " . centimetro($numero1) . "cm";
        }
        $_SESSION['resultado'] = $resultado;
        // comando HEADER redireciona para uma página específica
        // nesse caso, a página principal continua nela
        header('location: ../conversor.php'); // chega no arquivo index
        die();
    }
?>