<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/validacao.js" defer></script>
    <script src="js/slideshow.js" defer></script>
    <title>Início</title>
    <link rel="shortcut icon" href="img/Logo sem fundo.png" type="image x-icon">
    <link rel="stylesheet" href="css/inicio.css">
    <?php
    include "incs/css.php";
    ?>
</head>

<body>
    <div class="sidebar">
        <img src="img/Logo sem fundo.png" alt="Logo do Queen Bank" id="imagem">

        <ul class="menu">
            <li class="dropdown">

            </li>
            <li class="dropdown">
                <a href="#">Para você</a>
                <ul class="dropdown-menu">
                    <li><a href="#">Contas</a></li>
                    <li><a href="cartoes.php">Cartões</a></li>
                    <li><a href="#">Empréstimos</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#">Abra sua conta</a>
                <ul class="dropdown-menu">
                    <li><a href="#">Conta corrente</a></li>
                    <li><a href="#">Conta poupança</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#">Sobre nós</a>
                <ul class="dropdown-menu">
                    <li><a href="#">Quem somos</a></li>
                    <li><a href="#">Premiações</a></li>
                    <li><a href="#">Equipe</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#">Contato</a>
                <ul class="dropdown-menu">
                    <li><a href="#">WhatsApp</a></li>
                    <li><a href="#">Formulário Online</a></li>
                    <li><a href="#">Redes Sociais</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#">Faça Login</a>
                <ul class="dropdown-menu">
                    <li><a href="loginCliente.php">Sou Cliente</a></li>
                    <li><a href="loginFuncionario.php">Sou Funcionário</a></li>
                </ul>
            </li>
        </ul>
    </div>



    <div class="slide">

        <img class="mySlides" src="img/banner.jpg">
        <img class="mySlides" src="img/Logo.PNG">
        <img class="mySlides" src="img/banner.jpg">
        <img class="mySlides" src="img/banner 2.jpg">

    </div>



    <div class="container">

    </div>


    <?php
    include "incs/rodape.php";
    ?>
</body>

</html>