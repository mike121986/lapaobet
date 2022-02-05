   $('.carousel').carousel({
  interval: 4000
})

function animationHover(element, animation){
    element = $(element);
    element.hover(
        function() {
            element.addClass('animated ' + animation);
        },
        function(){
            //wait for animation to finish before removing classes
            window.setTimeout( function(){
                element.removeClass('animated ' + animation);
            }, 2000);
        });
}

$(document).ready(function(){
    $('#animacion').each(function() {
        animationHover(this, 'pulse');
    });
    $('#animacion1').each(function() {
        animationHover(this, 'pulse');
    });
    $('#animacion2').each(function() {
        animationHover(this, 'pulse');
    });
    $('#animacion3').each(function() {
        animationHover(this, 'pulse');
    });
    $('#animacion5').each(function() {
        animationHover(this, 'pulse');
    });
    $('#animacion6').each(function() {
        animationHover(this, 'pulse');
    });
    $('#animacion7').each(function() {
        animationHover(this, 'pulse');
    });
    $('#animacion8').each(function() {
        animationHover(this, 'pulse');
    });
    $('#animacion9').each(function() {
        animationHover(this, 'pulse');
    });
    $('#animacion10').each(function() {
        animationHover(this, 'flipInX');
    });
    $('#animacion11').each(function() {
        animationHover(this, 'flipInX');
    });
    $('#animacion12').each(function() {
        animationHover(this, 'flipInX');
    });
});
