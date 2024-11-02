//contraste preto
var link_contraste_preto = document.querySelector('#contraste_preto')
var todasAsTags = document.querySelectorAll('*', 'html')

link_contraste_preto.addEventListener('click', function () {
    console.log(todasAsTags);
    for (let i = 0; i < todasAsTags.length; i++) {
        let tag = todasAsTags[i]

        if (tag.nodeName == 'A') {
            tag.style.backgroundColor = 'white'
            tag.style.color = 'black'
        } else {
            tag.style.backgroundColor = 'black'
            tag.style.color = 'white'
        }
    }
})