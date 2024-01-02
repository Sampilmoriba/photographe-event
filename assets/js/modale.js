console.log(" modale.js est lancé ")

// Attends que le document soit prêt
$(document).ready(function() {
    // Sélectionne le bouton de contact et l'overlay de la modale
    const boutonContact = $('#menu-item-27');
    const boutonContact2 = $('#boutonContact');
    const modaleOverlay = $('.popup-overlay');

    // Fonction pour ouvrir la modale
    function openModal() {
        modaleOverlay.css('display', 'flex');
    }

    // Fonction pour fermer la modale
    function closeModal() {
        modaleOverlay.css('display', 'none');
    }

    // Ajoute des écouteurs d'événements aux boutons
    boutonContact.click(openModal);
    boutonContact2.click(openModal);

    // Ajoute un écouteur d'événements pour fermer la modale
    modaleOverlay.click(closeModal);
});
