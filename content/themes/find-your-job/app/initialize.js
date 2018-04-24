
//Caroussel change de page au click et le temps de changement de page plus court
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


//Ajout des action js dans la fontion init!
$(app.init);




// if (window.matchMedia("(min-width: 767px)").matches) {
//
// $('test').removeClass('section_img');
//
// } else if (window.matchMedia("(min-width: 768px)").matches) {
//
//   $('test').addClass('section_img');
//   $('test').animate({
//     opacity:0.5;
//   })
//   });
//
// }
//
//
//
//
//
// });
