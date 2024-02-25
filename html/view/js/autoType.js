document.addEventListener('DOMContentLoaded', function () {
    const text_to_keep = "I am:  "; // Testo da mantenere fisso
    const textArray = ["Developer", "Enginieer", "IT expert",  "electronics enthusiast", "ALESSIO"]; // Array di parole da scrivere
    let currentTextIndex = 0; // Indice della parola corrente
    

    // Funzione per cancellare e riscrivere l'ultima parola in loop
    function loopWriting() {
        let currentText = textArray[currentTextIndex];
        let newText = text_to_keep;


        // Aggiorna il testo con la stringa vuota per cancellare l'ultima parola
        document.getElementById("textTypingAnimation").innerHTML = newText;

        // Dopo un breve ritardo, avvia la scrittura della nuova parola
        setTimeout(function () {
            typeWriter(currentText, 0);
        }, 1000);

    }

    // Funzione per digitare il testo lettera per lettera
    function typeWriter(text, i) {

       try {
         if (i < text.length) {
             let newText = document.getElementById("textTypingAnimation").innerHTML;
             newText = newText.substring(0, newText.length - 1) + text.charAt(i) + '|'; // Aggiungi la lettera corrente al testo, sostituendo il cursore con '|'
             document.getElementById("textTypingAnimation").innerHTML = newText;
 
             // Richiama ricorsivamente la funzione per la prossima lettera
             setTimeout(function () {
                 typeWriter(text, i + 1);
             }, 100); // Tempo di attesa tra ogni lettera (in millisecondi)
         } else {
             // Quando la scrittura è completa, avvia nuovamente il loop per la prossima parola
             setTimeout(function () {
                 typeEraser(text, i + 1);
             }, 2000); // Tempo di attesa prima di avviare il loop di scrittura successivo (in millisecondi)
         }
       } catch (error) {
        //console.log(error);
       }
    }

    //FUNZIONE CHE CANCELLA LETTERA PER LETTERA
    function typeEraser(text, i) {
        if (i > 1) {
            let newText = document.getElementById("textTypingAnimation").innerHTML;
            newText = newText.substring(0, newText.length - 2) + '|'; // Aggiungi la lettera corrente al testo, sostituendo il cursore con '|'
            document.getElementById("textTypingAnimation").innerHTML = newText;

            // Richiama ricorsivamente la funzione per la prossima lettera
            setTimeout(function () {
                typeEraser(text, i - 1);
            }, 100); // Tempo di attesa tra ogni lettera (in millisecondi)
        } else {
            // Quando la cancellazione è completa, avvia nuovamente il loop per la prossima parola
            setTimeout(function () {
                currentTextIndex = (currentTextIndex + 1) % textArray.length; // Passa alla prossima parola
                let currentText = textArray[currentTextIndex];
                typeWriter(typeWriter(currentText, 0));
                
            }, 100); // Tempo di attesa prima di avviare il loop di scrittura successivo (in millisecondi)
        }
    }

    // Avvia il loop di scrittura per la prima volta
    loopWriting();
});