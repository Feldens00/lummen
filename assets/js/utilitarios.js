
$(window).scroll(function(){ // função para pegar o movimento do scroll (barra de rolagem)
  var top = $(window).scrollTop(); // aqui vc pega a posição da página
  if(top > 400 && top <700){ // verifica a posição da página
     $("#div1").stop().animate({ opacity: 1.0 }, 800); // aqui vc tira o fade no menu
  }else{ 
     $("#div1").stop().animate({ opacity: 0 }, 800); // aqui vc aplica o fade no menu
  }
});

$(window).scroll(function(){ // função para pegar o movimento do scroll (barra de rolagem)
  var top = $(window).scrollTop(); // aqui vc pega a posição da página
  if(top > 700 && top < 1000){ // verifica a posição da página
     $("#div2").stop().animate({ opacity: 1.0 }, 800); // aqui vc tira o fade no menu
  }else{ 
      $("#div2").stop().animate({ opacity: 0 }, 800); //aqui vc aplica o fade no menu
  }
});

$(window).scroll(function(){ // função para pegar o movimento do scroll (barra de rolagem)
  var top = $(window).scrollTop(); // aqui vc pega a posição da página
  if(top > 1000){ // verifica a posição da página
     $("#div3").stop().animate({ opacity: 1.0 }, 800); // aqui vc tira o fade no menu
  }else{ 
     $("#div3").stop().animate({ opacity: 0 }, 800); //aqui vc aplica o fade no menu
  }
});