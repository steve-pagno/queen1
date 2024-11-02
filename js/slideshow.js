var slideIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
    x[i].style.opacity = 0; // Definir a opacidade inicialmente como 0
  }
  slideIndex++;
  if (slideIndex > x.length) {
    slideIndex = 1;
  }
  x[slideIndex - 1].style.display = "block";
  fadeIn(x[slideIndex - 1]); // Aplicar a animação de fade para mostrar a imagem
  setTimeout(carousel, 5000); // Alterar a imagem a cada 2 segundos
}

function fadeIn(element) {
  var opacity = 0;
  var timer = setInterval(function () {
    if (opacity >= 1) {
      clearInterval(timer);
    }
    element.style.opacity = opacity;
    opacity += 0.2; // Ajuste o valor para controlar a velocidade da animação de fade
  }, 70); // Ajuste o valor para controlar a frequência da atualização da opacidade
}