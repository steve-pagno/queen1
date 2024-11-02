<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/validacao.js" defer></script>
    <script src="js/mascara.js" defer></script>
    <script src="https://kit.fontawesome.com/bae5127ccf.js" crossorigin="anonymous"></script>
    <title>Tela de Login</title>
    <link rel="shortcut icon" href="img/Logo sem fundo.png" type="image x-icon">

    <?php
    include "incs/css.php";
    ?>
</head>

<body>
    <?php
    include "incs/cabecalho.php";
    ?>

    <img id="logo" src="img/Logo sem fundo.png" alt="Logo do Queen Bank">
    <div class="login">
        <h1>Acesse sua Conta</h1>
        <br>
        <form class="" action="login.php" method="get">
            <input type="text" id="cpf" name="cpf" placeholder="Digite seu CPF" required onkeyup="handleCpf(event)" oninput="validarInputCPF()">
            <input type="password" name="password" placeholder="Senha" id="senha" max="8" required>
            <input type="submit" value="Entrar" id="enviar">
            <p>Esqueceu sua senha? <a href="#">Clique aqui!</a></p>
            <p>Quer abrir uma conta? <a href="form-cadastro.php">Clique aqui!</a></p>
        </form>

    </div>


    <?php
    include "incs/rodape.php";
    ?>


    <script src="js/sideNav.js"></script>
    <script>
        window.addEventListener('scroll', function() {
            var scrollPosition = window.scrollY; // Obtém a posição atual do scroll
            var image = document.getElementById('logo');

            // Define a escala com base na posição do scroll
            var scale = 1 - (scrollPosition * 0.001); // Ajuste o valor 0.001 para controlar a velocidade da diminuição

            // Limita a escala mínima para evitar que a imagem desapareça completamente
            if (scale < 0.5) {
                scale = 0.5;
            }

            // Define o deslocamento horizontal com base na posição do scroll
            var translateX = scrollPosition * 2; // Ajuste o valor 0.5 para controlar a velocidade do deslocamento

            // Aplica a escala e o deslocamento à imagem usando a propriedade transform
            image.style.transform = 'scale(' + scale + ') translateX(' + translateX + 'px)';
        });
    </script>
</body>

</html>