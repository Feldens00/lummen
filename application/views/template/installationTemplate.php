<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lummen</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
  <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.min.css');?>">
  <link rel="stylesheet" href="<?=base_url("assets/css/animate.css");?>">
  <script src="<?=base_url('assets/js/jquery.js');?>"></script>
  <script src="<?=base_url('assets/js/bootstrap.min.js');?>"></script>
  <script src="<?=base_url('assets/js/utilitarios.js');?>"></script>
  <script src="<?=base_url('assets/wow/dist/wow.min.js');?>"></script>
  <script>
   new WOW().init();
  </script>
  <style>

    .divInf{
    margin-top:50px;  
    border-top-width: 3px; 
    border-top-style: solid; 
    border-top-color:#e6e6e6;
    
    }
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      font-family: 'Ubuntu Condensed', sans-serif;
      margin-bottom: 0;
      border-radius: 0;
      background-color: #555;
      border-color: #555;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 1150px}
    
    /* Set gray background color and 100% height */
  
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
      margin-top:20px; 
    }
    html, body{
    height:100%; /* aqui definimos que o html e o body terão altura de 100% */
    }

    header{
       
        background: url(http://localhost/lummen/assets/files/img/ferramenta_header.jpg) no-repeat center top fixed;
        background-size:100% 100%;
        width:100%; height:auto; min-height:100%; /*aqui faz o header o cupar toda a altura da tela*/
        position: relative; 
    }

  </style>
</head>
<body  style=" background: url(http://localhost/lummen/assets/files/img/ferramentas_bckg.jpg) no-repeat center top fixed;  font-family: 'Ubuntu Condensed', sans-serif;">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?=base_url('');?>">Lumen</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Instalação</a></li>
        <li><a href="<?=base_url('service-installation');?>">Serviços</a></li>
        <li><a href="<?=base_url('contact-installation');?>">Contatos</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<header>
         <div class="container-fluid"> 
            <div class="row">
                <div  style="margin-top:200px;" class="col-md-12 text-center">
                  <h1  style="color: white;">Bem vindo</h1>
                </div>
                <div  class="col-md-12 text-center">
                   <marquee behavior="slide" direction="up">
                     <h1 align="center" style="font-size: 50px; color: white;">A Area de Instalação</h1>
                    </marquee>     
                </div>
            </div>
         </div>
</header>

<div class="container-fluid text-center">
    <div id="contents" style="background-color: white;" class=" col-sm-offset-2 col-sm-8 text-left">
      <?php echo $contents ?>
    </div>
</div>

<footer class="container-fluid text-center">
   <div class="col-md-offset-5 col-md-2" style="background-color:white;">
      <a href="https://www.facebook.com/profile.php?id=100009456956553&fref=ts"><i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i></a>
    </div>
</footer>

</body>
</html>

