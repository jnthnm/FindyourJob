
/*********************
Carousel
*********************/
// Caroussel change de page au click et le temps de changement de page plus court
// Activate Carousel
$(".carousel").carousel();

// Enable Carousel Indicators
$(".item").click(function(){
    $(".carousel").carousel(1);
});

// Enable Carousel Controls
$(".left").click(function(){
    $(".carousel").carousel("prev");
});
$(".right").click(function(){
    $(".carousel").carousel("next");
});
//click sur la croix des pages
$(function(){
    $('.contact-form').hide(); /* Masquer le pied de page au chargement de la page */
    $('.btn-toggle').click(function(event){
        event.preventDefault(); /* au clic sur le bouton, ne pas suivre le lien */
        $('.contact-form').slideToggle(); /* deplier ou replier l'élément */
    });
});



/*********************
Fond écran animé pour les pop up !
*********************/
//effet fond d'ecran sur la page connection/inscription , page de contact et concour
$(document).mousemove(function(event) {
  windowWidth = $(window).width();
  windowHeight = $(window).height();

  mouseXpercentage = Math.round(event.pageX / windowWidth * 100);
  mouseYpercentage = Math.round(event.pageY / windowHeight * 100);

  $('.radial-gradient').css('background', 'radial-gradient(at ' + mouseXpercentage + '% ' + mouseYpercentage + '%, #3498db, #9b59b6)');
});$(document).mousemove(function(event) {
  windowWidth = $(window).width();
  windowHeight = $(window).height();


  mouseXpercentage = Math.round(event.pageX / windowWidth * 100);
  mouseYpercentage = Math.round(event.pageY / windowHeight * 100);

  $('.radial-gradient').css('background', 'radial-gradient(at ' + mouseXpercentage + '% ' + mouseYpercentage + '%, $color_blue, #9b59b6)');
});
