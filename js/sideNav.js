function openNav() {
    document.querySelector(".sideNav").style.left = "0"; // Mostra a nav
    document.getElementById("open").style.visibility = "hidden"; // Oculta o botão
}

function closeNav() {
    document.querySelector(".sideNav").style.left = "-180px"; // Oculta a nav
    document.getElementById("open").style.visibility = "visible"; // Mostra o botão
}
