window.addEventListener('scroll', function () {
    const scrollTop = window.scrollY; // Posizione verticale dello scroll
    const rotationAngle = scrollTop * 0.1; // Calcola l'angolo di rotazione (ad esempio, proporzionale alla posizione dello scroll)

    const rotatingElements = document.querySelectorAll('.gear_container_left'); // Seleziona tutti gli elementi con la classe "rotating-element"

    rotatingElements.forEach(function (element) {
        
        element.style.transform = 'translate(-50%, -50%) rotate(' + rotationAngle + 'deg)'; // Applica la trasformazione CSS con l'angolo di rotazione calcolato
        //css di gear_container_left
        element.style.width = 'auto';
        element.style.height = '100%';
        element.style.position = 'fixed';
        element.style.left = '0%';
        element.style.top = '50%';
        element.style.zIndex = '500';

    });

    const rotatingReverseElements = document.querySelectorAll('.gear_container_bottom'); // Seleziona tutti gli elementi con la classe "rotating-element"

    rotatingReverseElements.forEach(function (element) {

        element.style.transform = 'translate(-50%, -50%) rotate(' + (-rotationAngle) + 'deg)'; // Applica la trasformazione CSS con l'angolo di rotazione calcolato
        //css di gear_container_left
        element.style.width = 'auto';
        element.style.height = '100%';
        element.style.bottom = '-100%';
        element.style.position = 'fixed';
        element.style.left = '700px';
        element.style.zIndex = '500';

    });
});
