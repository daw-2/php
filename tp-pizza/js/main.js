$(document).ready(function () {
    /*var texts = [
        'Bienvenue sur notre site',
        'Des pizzas',
        'Encore des pizzas'
    ];

    // Compteur de départ
    var i = 0;

    // On répéte une fonction toutes les X millisecondes
    setInterval(function() {
        if (i >= texts.length) {
            i = 0;
        }

        // console.log(texts[i++]);
        $('h1').html(texts[i++]);
    }, 2000);*/
    var texts = [
        'Bienvenue sur notre site',
        'Des pizzas',
        'Encore des pizzas'
    ];
    
    var countText = 1;
    
    var slideText = setInterval(function () {
        $('h1').fadeOut(1000, function () {
            if (countText >= texts.length) {
                countText = 0;
            }
    
            var text = texts[countText++];
            $('h1').html(text);
            $('h1').fadeIn();
        });
    }, 2000);
});

$('.pizza img').click(function () {
    // Récupére la div avec la classe pizza
    var pizza = $(this).parent();

    // Reset de toutes les pizzas
    // Cache toutes les pizzas déjà affichées
    $('.pizza').find('img').show();
    $('.pizza').find('div').hide();

    // On cache la pizza cliqué
    $(this).fadeOut(200, function () {
        pizza.find('div').show();
    });
});

$('.choosePizza').click(function () {
    $('#pizzaClick').html(
        'Vous avez choisi la pizza ' + $(this).parent().find('h2').html() +
        ' <img width="150" class="img-fluid" src="' + $(this).parent().parent().find('img').attr('src') + '" />'
    );
});

$('a.nav-link[href^="#"]').click(function(event) {
    // On désactive le comportement du a par défaut
    event.preventDefault();

    // On récupére la position de la cible
    // <a href="#id"> => $('#id')
    var targetOffset = $(this.hash).offset() ? $(this.hash).offset().top : 0;
    $('html, body').animate({scrollTop: targetOffset - 60}, 500);

    // Classe Bootstrap
    $('a.nav-link[href^="#"]').parent().removeClass('active');
    $(this).parent().addClass('active');
});

$(window).scroll(function () {
    if ($(window).scrollTop() > 400) {
        $('.navbar').addClass('fixed-top');
        $('body').css('padding-top', '80px');
    } else {
        $('.navbar').removeClass('fixed-top');
        $('body').css('padding-top', '0');
    }
});

function random(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);

    return Math.floor(Math.random() * (max - min + 1)) + min;
}
