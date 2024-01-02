// Attends que le document soit prêt
$(document).ready(function() {
    // Sélectionne le bouton de contact et l'overlay de la modale
    const boutonContact = $('#menu-item-27');
    const boutonContact2 = $('#boutonContact');
    const modaleOverlay = $('.popup-overlay');
    const modalecontactform = $('.popup-contact');

    // Fonction pour ouvrir la modale
    function openModal() {
        event.preventDefault();
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
    modaleOverlay.click(function(event) {
        // Vérifie si l'élément cliqué n'est pas un descendant de la modale,
        // ne fait pas partie de la classe .popup-contact, et n'a pas lui-même la classe .popup-contact
        if (
            !modalecontactform.is(event.target) &&
            modalecontactform.has(event.target).length === 0 &&
            !$(event.target).hasClass('popup-contact')
        ) {
            closeModal();
        }
    });
});
