class ScrollHandler {
    constructor() {
        this.scrollTop = 0;
        this.scrollLeft = 0;
        this.disableHorizontalScroll();
    }

    disableHorizontalScroll() {
        document.addEventListener('touchmove', function (event) {
            event.stopPropagation();
        });
        // Ottieni la posizione corrente dello scroll orizzontale
        this.scrollLeft = window.pageXOffset || document.documentElement.scrollLeft;

        // Impedisce lo scrolling orizzontale
        window.addEventListener('scroll', this.preventHorizontalScroll.bind(this), false);
    }

    preventHorizontalScroll(event) {
        // Se viene tentato uno scroll orizzontale, annulla l'evento
        if (window.pageXOffset !== this.scrollLeft) {
            window.scrollTo(this.scrollLeft, window.scrollY);
        }
    }

    enableScroll() {
        // Rimuove il listener per impedire lo scroll orizzontale
        window.removeEventListener('scroll', this.preventHorizontalScroll.bind(this), false);
    }
}

new ScrollHandler();