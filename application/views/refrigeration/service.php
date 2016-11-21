<script type="text/javascript">
$(window).scroll(function(){ // função para pegar o movimento do scroll (barra de rolagem)
  var top = $(window).scrollTop(); // aqui vc pega a posição da página
  if(top > 200){ // verifica a posição da página
     $("#div1").stop().animate({ opacity: 0 }, 800); // aqui vc aplica o fade no menu
  }else{ 
     $("#div1").stop().animate({ opacity: 1.0 }, 800); // aqui vc tira o fade no menu
  }
});

$(window).scroll(function(){ // função para pegar o movimento do scroll (barra de rolagem)
  var top = $(window).scrollTop(); // aqui vc pega a posição da página
  if(top > 300 && top < 600){ // verifica a posição da página
     $("#div2").stop().animate({ opacity: 1.0 }, 800); // aqui vc aplica o fade no menu
  }else{ 
      $("#div2").stop().animate({ opacity: 0 }, 800); //aqui vc tira o fade no menu
  }
});

$(window).scroll(function(){ // função para pegar o movimento do scroll (barra de rolagem)
  var top = $(window).scrollTop(); // aqui vc pega a posição da página
  if(top > 600){ // verifica a posição da página
     $("#div3").stop().animate({ opacity: 1.0 }, 800); // aqui vc aplica o fade no menu
  }else{ 
     $("#div3").stop().animate({ opacity: 0 }, 800); //aqui vc tira o fade no menu
  }
});

</script>
<div class="row">
  <div class="col-md-12">
    <h1 style="margin-top:20px">Serviços</h1>
  
     <div id="div1" class="col-md-12 divInf">
      <div style="margin-top:20px" class="col-md-3">
        <img src="<?=base_url('assets/files/refrigeration/prof_refrigeracao.jpg');?>" class=" img-circle img-responsive "  style= 'width:500px; height:250px;'  alt="Image">
      </div>
      <div  style="margin-top:20px" class="col-md-8 tex-center">
        <h2><i>Profissionais qualificados e experientes para prestar o melhor serviço.</i></h2>
      </div>
    </div>
     
     <div id="div2" style="opacity: 0;" class="col-md-12 divInf">
      <div  style="margin-top:20px;" class="col-md-8 tex-center">
        <h2><i>Ferramentas de otima qualidade.</i></h2>
      </div>
       <div  style="margin-top:20px" class="col-md-3">
        <img src="<?=base_url('assets/files/refrigeration/ferramenta.jpg');?>" class=" img-circle img-responsive " style= 'width:500px; height:250px;'   alt="Image">
      </div>
    </div>

     <div id="div3" style="opacity:0;" class="col-md-12 divInf">
      <div style="margin-top:20px"  class="col-md-3">
        <img src="<?=base_url('assets/files/refrigeration/experiencia.png');?>" class=" img-circle img-responsive " style= 'width:500px; height:250px;'   alt="Image">
      </div>
      <div style="margin-top:20px"  class="col-md-8 tex-center">
        <h2><i>Experiência no mercado e satifação dos clientes.</i></h2>
      </div>
    </div>



    </div>
    </div>
  </div>
</div>
