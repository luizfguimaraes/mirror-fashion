/*home.js*/

$('.novidades').addClass('painel-compacto');

$('.novidades button').click(function() {
  $('.novidades').removeClass('painel-compacto');
})


function verMais(){
  painel.toggle('painel-compacto');
  if(!painel.hasClass('painel-compacto')){
    verMais.html("Ver menos");
  } else {
    verMais.html("Ver mais");
  }

}
