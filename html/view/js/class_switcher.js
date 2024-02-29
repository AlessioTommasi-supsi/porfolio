// Funzione per cambiare la classe in base alla larghezza dello schermo e al tipo di dispositivo
function changeDivClass() {
    var divs = document.getElementsByClassName('responsive_div');
    for (var i = 0; i < divs.length; i++) {
        var div = divs[i];
        if (window.innerWidth <= 600 ) {
            div.classList.remove('image-with-text');
            div.classList.add('glass_content');
        } else {
            div.classList.remove('glass_content');
            div.classList.add('image-with-text');
        }
    }
}

function changeImgClass() {

    var images = document.getElementsByClassName('responsive_img');
    for (var i = 0; i < images.length; i++) {
        var image = images[i];
        if (window.innerWidth <= 600) {
            image.classList.remove('project_maxwidth');
            image.classList.add('cover_img');
        } else {
            image.classList.remove('cover_img');
            image.classList.add('project_maxwidth');
        }
    }
}

function changeTextClass() {

    var images = document.getElementsByClassName('responsive_text');
    for (var i = 0; i < images.length; i++) {
        var image = images[i];
        if (window.innerWidth <= 600) {
            image.classList.remove('project_maxwidth');
        } else {
            image.classList.add('project_maxwidth');
        }
    }
}


// Chiamata alla funzione quando la finestra viene ridimensionata
window.addEventListener('resize', changeDivClass);
window.addEventListener('resize', changeImgClass);
window.addEventListener('resize', changeTextClass);
// Chiamata iniziale per impostare la classe iniziale
changeDivClass();
changeImgClass();
changeTextClass();