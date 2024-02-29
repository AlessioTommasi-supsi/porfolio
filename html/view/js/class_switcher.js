class ResponsiveClassManager {
    constructor(maxWidth) {
        // Imposta la larghezza massima
        this.minWidth = maxWidth;

        // Aggiungi le classi che devono essere gestite dalla classe
        this.divs = document.getElementsByClassName('responsive_div');
        this.images = document.getElementsByClassName('responsive_img');
        this.texts = document.getElementsByClassName('responsive_text');

        // Chiama il metodo per gestire le classi iniziali
        this.handleResizeDiv();
        this.handleResizeImg();
        this.handleResizeText();

        // Aggiungi l'ascoltatore per il ridimensionamento della finestra
        window.addEventListener('resize', () => {
            this.handleResizeDiv();
            this.handleResizeImg();
            this.handleResizeText();
        });
    }

    handleResizeDiv() {
        // Gestisci le classi per i div
        for (let i = 0; i < this.divs.length; i++) {
            const div = this.divs[i];
            if (window.innerWidth <= this.minWidth) {
                div.classList.remove('image-with-text');
                div.classList.add('glass_content');
            } else {
                div.classList.remove('glass_content');
                div.classList.add('image-with-text');
            }
        }
    }

    handleResizeImg() {
        // Gestisci le classi per le immagini
        for (let i = 0; i < this.images.length; i++) {
            const image = this.images[i];
            if (window.innerWidth <= this.minWidth) {
                image.classList.remove('project_maxwidth');
                image.classList.add('cover_img');
            } else {
                image.classList.remove('cover_img');
                image.classList.add('project_maxwidth');
            }
        }
    }

    handleResizeText() {
        // Gestisci le classi per i testi
        for (let i = 0; i < this.texts.length; i++) {
            const text = this.texts[i];
            if (window.innerWidth <= this.minWidth) {
                text.classList.remove('project_maxwidth');
            } else {
                text.classList.add('project_maxwidth');
            }
        }
    }
}

// Creazione di un'istanza della classe ResponsiveClassManager con larghezza massima di 600px
new ResponsiveClassManager(1000);