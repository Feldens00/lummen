<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lummen</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed" rel="stylesheet">
  <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.min.css');?>">
  <script src="<?=base_url('assets/js/jquery.js');?>"></script>
  <script src="<?=base_url('assets/js/bootstrap.min.js');?>"></script>
  <style>
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
    .sidenav {
      padding-top: 20px;
      background-color: #e6e6e6;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;}
    }
  </style>
</head>
<body  style="font-family: 'Ubuntu Condensed', sans-serif;">

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
        <li><a href="#">Serviços</a></li>
        <li><a href="<?=base_url('contact-installation');?>">Contatos</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="<?=base_url('refrigeration');?>">Refrigeração</a></p>
      <p><a href="<?=base_url('irrigation');?>">Irrigação</a></p>
    </div>
    <div id="contents" class="col-sm-8 text-left">
      <?php echo $contents ?>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
   <div class="col-md-offset-5 col-md-2" style="background-color:white;">
      <a href="https://www.facebook.com/profile.php?id=100009456956553&fref=ts"><i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i></a>
    </div>
</footer>

</body>
</html>

