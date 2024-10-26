<?php
    session_start(); // iniciando a SESSION
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>CalcTEC</title>
</head>
<body>
    <header>
        <h1>CalcTEC</h1>
    </header>
    <nav class="menu">
        <ul>
            <li><a href="https://www.fatecpp.edu.br/">Sobre</a></li>
            <li><a href="index.php">Calculadora</a></li>
            <li><a href="temperatura.php">Temperatura</a></li>
            <li><a href="conversor.php">Conversão</a></li>
        </ul>
    </nav>
    
    <div class="div-conteudo">
        <form method="POST" action="logica/processamento.php">
            <!--O método GET mostra os inputs na URL, diferente do método POST-->
            <label>Temperatura:</label>
            <input type="text" name="inputMed1" placeholder="Digite a medida">
            <select name="selectMedida">
                <option value="metro">De Centrimetro para Metro </option>
                <option value="centimetro">De Metro para Centrimetro</option>
            </select>
            <input id="botao" type="submit" value="Converte">
        </form>
        <!--SESSION-->
        <!--Faz com que a variável resultado apareça em todas páginas do site-->
        <h1>
            <?php
                if(isset($_SESSION['resultado'])) // verifica se existe uma session 'resultado'
                {
                    echo $_SESSION['resultado'];
                }
            ?>
        </h1>
        <img src="img/google-play.png">
    </div>

    <footer>
        <p>Desenvolvido por FATEC - Análise e Desenvolvimento de Sistemas</p>
        <p>"Feliz é aquele que programa"</p>
        <p>Copyright © 2024 - Todos os direitos reservados</p>
    </footer>
</body>
</html>