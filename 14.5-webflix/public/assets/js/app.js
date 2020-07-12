console.log('It works !');

$(document).ready(function () {
    var stripe = Stripe('pk_test_zmrngxI2CM4yCuS4AjWKpV2T');
    var elements = stripe.elements();

    // Je crée un formulaire de CB
    var card = elements.create('card', {
        style: {
            base: {
                lineHeight: 1.75,
            }
        }
    });
    card.mount('#card-element');

    // Affichage des erreurs de la CB
    card.addEventListener('change', function (event) {
        var displayError = document.getElementById('card-errors');
        if (event.error) {
            displayError.textContent = event.error.message;
            $('#card-errors').show();
        } else {
            displayError.textContent = '';
            $('#card-errors').hide();
        }
    });

    // Envoi du paiement à Stripe
    var form = document.getElementById('payment-form');

    form.addEventListener('submit', function (event) {
        // On annule le formulaire
        event.preventDefault();

        // On envoie le client secret et la CB à Stripe
        stripe.confirmCardPayment(form.getAttribute('data-pi'), {
            payment_method: { card: card }
        }).then(function (result) {
            // result nous renvoie le résultat du paiement
            console.log(result);

            // Si le paiement a réussi
            if (result.paymentIntent.status === 'succeeded') {
                // On redirige
                window.location = './account.php?stripe_id='+result.paymentIntent.id;
            }
        });
    });
});
