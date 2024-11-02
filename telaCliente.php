<?php
include "incs/validar-sessao.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Queen Bank - Tela Inicial</title>
  <?php
  include "incs/css.php";
  ?>
</head>

<body class="">
  <?php
  include "incs/cabecalho.php";
  ?>
  <header class="navbar">
    <img src="img/Logo sem fundo.png" alt="Queen Bank" class="logo">
  </header>
  <main class="container">
    <div class="row">
      <div class="col">
        <section class="user-info">
          <img src="https://via.placeholder.com/50" alt="Avatar" class="user-avatar">
          <div>
            <h2>Olá, <?= $login ?></h2>
            <p>Conta Pessoal</p>
            <h3>Saldo Atual</h3>
            <p class="saldo">R$ 11.090,11</p>
          </div>
        </section>

        <div class="promo-banner">
          <img src="https://via.placeholder.com/200x100" alt="Promoção">
          <p>Traga seu salário para o QueenBank e aproveite todos os benefícios</p>
        </div>

        <section class="services">
          <div class="service-icon"><i class="fas fa-qrcode"></i>
            <p class="service-p">Área Pix</p>
          </div>
          <div class="service-icon"><i class="fas fa-upload"></i>
            <p class="service-p">Enviar</p>
          </div>
          <div class="service-icon"><i class="fas fa-download"></i>
            <p class="service-p">Receber</p>
          </div>
          <div class="service-icon"><i class="fas fa-money-bill"></i>
            <p class="service-p">Pagar</p>
          </div>
          <div class="service-icon"><i class="fas fa-credit-card"></i>
            <p class="service-p">Cartões</p>
          </div>
          <div class="service-icon"><i class="fas fa-file-invoice-dollar"></i>
            <p class="service-p">Faturas</p>
          </div>
          <div class="service-icon"><i class="fas fa-chart-line"></i>
            <p class="service-p">Investir</p>
          </div>
          <div class="service-icon"><i class="fas fa-question-circle"></i>
            <p class="service-p">Ajuda</p>
          </div>
        </section>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <section class="cards">
          <div class="card">
            <h4>Limite Disponível</h4>
            <p>R$ 5.000,00</p>
            <p>Aumente seu Limite até 20.000,00 reais</p>
            <button>Aumentar</button>
          </div>
          <div class="card">
            <h4>Total Guardado</h4>
            <p>R$ 602,27</p>
            <p>Já Rendeu <span class="green">+ R$ 138,49</span></p>
            <button>Transferir</button>
          </div>
          <div class="card">
            <h4>Simule seu empréstimo</h4>
            <p>Até R$25.000,00</p>
            <button>Simular</button>
          </div>
          <div class="card">
            <h4>Indique um amigo</h4>
            <p>Ganhe R$50,00</p>
            <button>Indicar</button>
          </div>
        </section>

      </div>
    </div>
  </main>

  <?php
  include "incs/rodape.php";
  ?>
</body>
<script src="js/sideNav.js"></script>

</html>