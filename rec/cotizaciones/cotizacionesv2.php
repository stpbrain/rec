<!DOCTYPE html>
<html>

<head>
		<title>Cotizaciones</title>
	  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

</head>
<body>

<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Bienvenido al Sistema de Cotizaciones de Recuerdame</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Ingrese su nombre</label>  
  <div class="col-md-3">
  <input id="textinput" name="textinput" type="text" placeholder="Ingrese su nombre" class="form-control input-md">
  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Ingrese su mail</label>  
  <div class="col-md-3">
  <input id="textinput" name="textinput" type="text" placeholder="Ingrese su mail" class="form-control input-md">
  
  </div>
</div>

</fieldset>
</form>

<div class="container-fluid">
<ins><h5>Producto Chapita</h5></ins>
<img src="../img/descarga.jpg" class="pull-right"> 

<div class="container">
<div class="col-md-3">
<h5>Chapitas Prendedor 56 mm</h5>
</div>
  <div class="col-md-1">
  <input id="prod1" name="pro2" type="text" placeholder="Unid." class="form-control input-md"> 
  </div>
  <div>
    <button id="agregarprod1" name="agregarprod1" class="btn btn-success"> Agregar </button>
  
    </div>
  </div>
  <br>
<div class="container">
<div class="col-md-3">
  <h5>Chapitas Prendedor 44 mm</<h5></h5>
</div>
  <div class="col-md-1">
  <input id="prod2" name="prod1" type="text" placeholder="Unid." class="form-control input-md" >
  </div>

  <div>
    <button id="agregarprod2" name="agregarprod2" class="btn btn-success"> Agregar </button>
   
  </div>
</div>
  <br>
<div class="container">
<div class="col-md-3">
<h6>Chapitas Prendedor 25 mm</h6>
</div>
  <div class="col-md-1">
  <input id="prod3" name="pro2" type="text" placeholder="Unid." class="form-control input-md"> 
  </div>
  <div>
    <button id="agregarprod3" name="agregarprod3" class="btn btn-success"> Agregar </button>

    </div>
  </div>
  <br>
<ins><h5> Producto LLavero </h5></ins>
  <div class="container">
<div class="col-md-3">
<h6>Llaveros Fondo Plastico 56 mm</h6>
</div>
  <div class="col-md-1">
  <input id="prod4" name="pro2" type="text" placeholder="Unid." class="form-control input-md"> 
  </div>
  <div>
    <button id="agregarprod4" name="agregarprod4" class="btn btn-success"> Agregar </button>
    </div>
  </div>

<div class="container">
<div class="col-md-3">
<h6>Llaveros Fondo Plastico 44 mm</h6>
</div>
  <div class="col-md-1">
  <input id="prod4" name="pro2" type="text" placeholder="Unid." class="form-control input-md"> 
  </div>
  <div>
    <button id="agregarprod4" name="agregarprod4" class="btn btn-success"> Agregar </button>
    </div>
  </div>

<div class="container">
<div class="col-md-3">
<h6>Llaveros Fondo Destapador 56 mm</h6>
</div>
  <div class="col-md-1">
  <input id="prod4" name="pro2" type="text" placeholder="Unid." class="form-control input-md"> 
  </div>
  <div>
    <button id="agregarprod4" name="agregarprod4" class="btn btn-success"> Agregar </button>
    </div>
  </div>

<div class="container">
<div class="col-md-3">
<h6>Llaveros Fondo Destapador 44 mm</h6>
</div>
  <div class="col-md-1">
  <input id="prod4" name="pro2" type="text" placeholder="Unid." class="form-control input-md"> 
  </div>
  <div>
    <button id="agregarprod4" name="agregarprod4" class="btn btn-success"> Agregar </button>
    </div>
  </div>

<div class="container">
<div class="col-md-3">
<h6>Llaveros Fondo Espejo 56 mm</h6>
</div>
  <div class="col-md-1">

  <!-- <input id="prod4" name="pro2" type="text" placeholder="Unid." class="form-control input-md " > -->
  <!--esto es para ocultar la casilla de unidades -->
  <input id="prod4" name="pro2" type="text" placeholder="Unid." class="form-control input-md hide" > 
  </div>
  <div>
   <!-- <button id="agregarprod4" name="agregarprod4" class="btn btn-success"> Agregar </button> -->
    <button id="agregarprod4" name="agregarprod4" class="btn btn-danger "> Agotado </button>
    </div>
  </div>

<div class="container">
<div class="col-md-3">
<h6>Llaveros Fondo Espejo 44 mm</h6>
</div>
  <div class="col-md-1">
  
  <!--<input id="prod4" name="pro2" type="text" placeholder="Unid." class="form-control input-md" > -->
  <!--esto es para ocultar la casilla de unidades -->
  <input id="prod4" name="pro2" type="text" placeholder="Unid." class="form-control input-md hide" > 
  </div>
  <div>
    <!-- <button id="agregarprod4" name="agregarprod4" class="btn btn-success"> Agregar </button> -->
    <button id="agregarprod4" name="agregarprod4" class="btn btn-danger"> Agotado </button>
    </div>
  </div>
<ins><h5>Producto Lápices</h5></ins>
<div class="container">
<div class="col-md-3">
<h6>Lápiz Perosnalizado 25 mm</h6>
</div>
  <div class="col-md-1">
  <input id="prod4" name="pro2" type="text" placeholder="Unid." class="form-control input-md"> 
  </div>
  <div>
    <button id="agregarprod4" name="agregarprod4" class="btn btn-success"> Agregar </button>
    </div>
  </div>
</div>




</body>
</html>