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
    <link rel="shortcut icon" href="img/Logo sem fundo.png" type="image/x-icon">

    <?php include "incs/css.php"; ?>
</head>

<body>
    <?php include "incs/cabecalho.php"; ?>

    <img id="logo" src="img/Logo sem fundo.png" alt="Logo do Queen Bank">
    <div class="login">
        <h1>Crie sua conta</h1>
        <br>
        <form id="formCadastro" action="fcadastrarUsuario.php" method="get">
            <input type="text" id="nome" name="nome" placeholder="Digite seu nome completo">
            <input type="text" id="cpf" name="cpf" placeholder="Digite seu CPF" required oninput="validarInputCPF()" onkeyup="handleCpf(event)">
            <input type="date" id="dt_nascimento" name="dt_nascimento" placeholder="Digite sua data de nascimento">
            <input type="email" id="email" name="email" placeholder="Digite seu email">
            <input type="text" id="telefone" name="telefone" placeholder="Digite seu telefone" name="senha1" onkeyup="handlePhone(event)">
            <input type="password" placeholder="Senha" name="senha" id="senha" max="8" required>
            <input type="password" placeholder="Confirme a senha" id="senha1" max="8" required>
            <div id="campoBotao">
                <input type="submit" value="Criar conta" id="enviar" disabled>
            </div>
        </form>
    </div>

    <?php include "incs/rodape.php"; ?>

    <script>
        const senha = document.getElementById("senha");
        const senha1 = document.getElementById("senha1");
        const campoBotao = document.getElementById("campoBotao");

        function verificarSenhas() {
            if (senha.value === senha1.value && senha.value !== "") {
                campoBotao.innerHTML = `<input type="submit" value="Criar conta" id="enviar">`;
            }
        }

        senha.addEventListener('input', verificarSenhas);
        senha1.addEventListener('input', verificarSenhas);
    </script>

    <script src="js/zNav.js"></script>
    <script>
        window.addEventListener('scroll', function() {
            var scrollPosition = window.scrollY;
            var image = document.getElementById('logo');
            var scale = 1 - (scrollPosition * 0.001);
            if (scale < 0.5) {
                scale = 0.5;
            }
            var translateX = scrollPosition * 2;
            image.style.transform = 'scale(' + scale + ') translateX(' + translateX + 'px)';
        });
    </script>
</body>

</html>