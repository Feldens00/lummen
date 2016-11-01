<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lummen</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.min.css');?>">
  <script src="<?=base_url('assets/js/jquery.js');?>"></script>
  <script src="<?=base_url('assets/js/bootstrap.min.js');?>"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none;
    }
  }
  </style>
</head>
<body style="background-color: #696969;">

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="<?=base_url('assets/files/img/lummen_carrosel1.jpg');?>" alt="Image">
        
      </div>

      <div class="item">
        <img src="<?=base_url('assets/files/img/lummen_carrosel2.jpg');?>" alt="Image">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container text-center">
  <h3><font color="white">Áreas</h3><br>
  <div class="row">

    <div class="col-sm-4">
      <a href="<?=base_url('installation');?>">
        <img src="<?=base_url('assets/files/img/ferramenta.png');?>"  class="img-responsive" style="width:100%"  alt="Image">
      </a>
      <p><font color="white">Instalação</p>
    </div>

    <div class="col-sm-4">
      <a href="<?=base_url('refrigeration');?>">
        <img src="<?=base_url('assets/files/img/refrigeracao.png');?>" class="img-responsive " style="width:100%"  alt="Image">
      </a>
      <p><font color="white">Refrigeração</p>
    </div>

    <div class="col-sm-4">
      <a href="<?=base_url('irrigation');?>">
        <img src="<?=base_url('assets/files/img/planta.png');?>" class="img-responsive " style="width:100%" alt="Image">
      </a>
      <p><font color="white">Irrigação</p>
    </div>
 
  </div>
</div><br>

<footer class="container-fluid text-center">
  <a href="https://www.facebook.com/profile.php?id=100009456956553&fref=ts">
    <i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i>
  </a>
</footer>

</body>
</html>

