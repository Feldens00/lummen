<style type="text/css">

#mouse {
 
 fonte-size:16px;
 position: relative;


}
#comentario {
 position:relative; top:-150px;
 width:100%;
 height:150px;
 padding:2px;
 line-height:20px;
 background:#333;
 color:#fff;
 display: block;
 opacity: 0;

        -webkit-transition: all 300ms ease;
 -moz-transition: all 300ms ease;
 -ms-transition: all 300ms ease;
 -o-transition: all 300ms ease;
 transition: all 300ms ease;
}
#mouse:hover  #comentario{
      opacity: 0.7;
}
</style>
<div class="row">
  <div class="col-md-12">
    <h1>Irrigação</h1>
    
       <?php foreach($products as $pd) { ?>
     <div id="mouse" class="col-md-4">
      <img src="<?=base_url($pd->url);?>" class="img-responsive " style="width:500px; height: 250px;" alt="Image">
       <div class="col-md-4" id="comentario">
         <h5><?=$pd->name_product;?></h5>
          <h5>Largura: <?=$pd->width;?> / Altura: <?=$pd->height;?></h5>
           <h5>Circunferência: <?=$pd->circunference;?> / Radio: <?=$pd->radius;?></h5>
            <h5>Tam. da Rosca: <?=$pd->screw_size;?> /  Fluxo: <?=$pd->flow_rate;?></h5>
             <h5>Aspersor: <?=$pd->aspersor;?></h5>
       </div>
    </div>

    
    <?php } ?>
  </div>
</div>