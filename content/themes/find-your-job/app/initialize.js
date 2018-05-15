

/*********************
Carousel
*********************/
// Caroussel change de page au click et le temps de changement de page plus court
// Activate Carousel
// $(".carousel").carousel();
//
// // Enable Carousel Indicators
// $(".item").click(function(){
//     $(".carousel").carousel(1);
// });
//
// // Enable Carousel Controls
// $(".left").click(function(){
//     $(".carousel").carousel("prev");
// });
// $(".right").click(function(){
//     $(".carousel").carousel("next");
// });
// //click sur la croix des pages
// $(function(){
//     $('.contact-form').hide(); /* Masquer le pied de page au chargement de la page */
//     $('.btn-toggle').click(function(event){
//         event.preventDefault(); /* au clic sur le bouton, ne pas suivre le lien */
//         $('.contact-form').slideToggle(); /* deplier ou replier l'élément */
//     });
// });

//Jarallax
//initiation du jarallax avec la classe jarallax


/*********************
Fond écran animé pour les pop up !
*********************/
//effet fond d'ecran sur la page connection/inscription , page de contact
// $(document).mousemove(function(event) {
//   windowWidth = $(window).width();
//   windowHeight = $(window).height();
//
//   mouseXpercentage = Math.round(event.pageX / windowWidth * 100);
//   mouseYpercentage = Math.round(event.pageY / windowHeight * 100);
//
//   $('.radial-gradient').css('background', 'radial-gradient(at ' + mouseXpercentage + '% ' + mouseYpercentage + '%, #3498db, #9b59b6)');
// });$(document).mousemove(function(event) {
//   windowWidth = $(window).width();
//   windowHeight = $(window).height();
//
//
//   mouseXpercentage = Math.round(event.pageX / windowWidth * 100);
//   mouseYpercentage = Math.round(event.pageY / windowHeight * 100);
//
//   $('.radial-gradient').css('background', 'radial-gradient(at ' + mouseXpercentage + '% ' + mouseYpercentage + '%, $color_blue, #9b59b6)');
// });


//////////////////////////////////////////////////
/// Pop up Jeu Concours  Cyril
//////////////////////////////////////////////////
var Rellax = require('rellax');
var counter = require ('jquery.counterup');


var app = {

  init: function(){
    console.log('app.init');

    $('body').on('click', '.ui-button', app.visibleMenu);
//
    $('.number').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});
//   $('.counter').counterUp({
//     delay: 10,
//     time: 1000,
//     offset: 70,
//     beginAt: 100,
//
// });


    // var relax_elem = new Rellax('.jarallax-img', {
    //   callback: function(positions) {
    //     // callback every position change
    //     console.log(positions);
    //   }
    // });

  },

  visibleMenu: function(evt){
    console.log('visibleMenu');
    evt.preventDefault();
    $('body').toggleClass('visible');
  }
};
$(app.init);
