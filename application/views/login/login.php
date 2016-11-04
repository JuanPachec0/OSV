    <!DOCTYPE html>
<html>
  <head>
  <img class="cintillo" src="../../css/img/cintillo.jpg">  
  <div class="row">
			<nav class="navbar logo_back" role="navigation">
				<div class="container-fluid">
					<div class="navbar-header">
						<img src="../../css/img/logo.png">
                                        </div>
                                </div>
    </div>                        
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>OSV | Orquesta Sinfónica de Venezuela</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link href="<?php echo base_url() ?>componentes/bootstrap-3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <!-- Estilos  -->
    <link href="<?php echo base_url() ?>componentes/bootstrap-3.3.5/css/styles.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url() ?>componentes/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Ionicons -->
    <link href="<?php echo base_url() ?>css/ionicons.min.css" rel="stylesheet">
    <!-- signin -->
    <link href="<?php echo base_url() ?>css/signin.css" rel="stylesheet">
    <!-- Theme style -->
    <link href="<?php echo base_url() ?>componentes/AdminLTE-2.3.0/css/AdminLTE.min.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url() ?>componentes/AdminLTE-2.3.0/css/square/blue.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   <div class="container">
   <div class="row">
    <div class="login-box">
      <div class="login-logo">
        <a href="#"><b><?php echo NOMBRE_APLICACION?> </b></a>
      </div><!-- /.login-logo --> 
      <img src="<?php echo base_url('css/img/logo.jpg')?>" title="" style="width:354px;height:90px;">      
      <div class="login-box-body">
      
       
<p><?php echo lang('login_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>
        <?php echo form_open("auth/login");?>
          <div class="form-group has-feedback">
           
            <?php echo form_input($identity);?>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <?php echo form_password($password);?>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
            </div><!-- /.col -->
          </div>
        <?php echo form_close();?>
        
        <a href="#">Olvide la clave</a><br>
       
      </div><!-- /.login-box-body -->
      
    </div><!-- /.login-box -->
    
    </div>
    </div>

<footer>
  <div class="col-md-4">
    <div id="discografia">
    <a class="prev control" href="#">
    <span class="left"><i class="fa fa-angle-double-left fa-2x"></i></span>
    </a>
    <div class="viewport">
      <ul class="overview">
        <li><a href="http://www.osv.org.ve/navega.php?cont=24&id_disco=10"><img src="<?php echo base_url('css/img/galeria/foot0.jpg')?>"/></li></a>
        <li><a href="http://www.osv.org.ve/navega.php?cont=24&id_disco=11"><img src="<?php echo base_url('css/img/galeria/foot1.gif')?>"/></li></a>
        <li><a href="http://www.osv.org.ve/navega.php?cont=24&id_disco=12"><img src="<?php echo base_url('css/img/galeria/foot2.jpg')?>"/></li></a>
        <li><a href="http://www.osv.org.ve/navega.php?cont=24&id_disco=13"><img src="<?php echo base_url('css/img/galeria/foot3.gif')?>"/></li></a>
        <li><a href="http://www.osv.org.ve/navega.php?cont=24&id_disco=15"><img src="<?php echo base_url('css/img/galeria/foot4.jpg')?>"/></li></a>
        <li><a href="http://www.osv.org.ve/navega.php?cont=24&id_disco=16"><img src="<?php echo base_url('css/img/galeria/foot5.jpg')?>"/></li></a>
        <li><a href="http://www.osv.org.ve/navega.php?cont=24&id_disco=5"><img src="<?php echo base_url('css/img/galeria/foot6.gif')?>"/></li></a>
        <li><a href="http://www.osv.org.ve/navega.php?cont=24&id_disco=6"><img src="<?php echo base_url('css/img/galeria/foot7.gif')?>"/></li></a>
        <li><a href="http://www.osv.org.ve/navega.php?cont=24&id_disco=7"><img src="<?php echo base_url('css/img/galeria/foot8.gif')?>"/></li></a>
        <li><a href="http://www.osv.org.ve/navega.php?cont=24&id_disco=8"><img src="<?php echo base_url('css/img/galeria/foot9.gif')?>"/></li></a>
        <li><a href="http://www.osv.org.ve/navega.php?cont=24&id_disco=14"><img src="<?php echo base_url('css/img/galeria/foot10.jpg')?>"/></li></a>
        <li><a href="http://www.osv.org.ve/navega.php?cont=24&id_disco=17"><img src="<?php echo base_url('css/img/galeria/foot11.jpg')?>"/></li></a>
        <li><a href="http://www.osv.org.ve/navega.php?cont=24&id_disco=18"><img src="<?php echo base_url('css/img/galeria/foot12.jpg')?>"/></li></a>
        <li><a href="http://www.osv.org.ve/navega.php?cont=24&id_disco=9"><img src="<?php echo base_url('css/img/galeria/foot13.jpg')?>"/></li></a>
      </ul>
    </div>
    <a class="next control" href="#">
      <span class="right"><i class="fa fa-angle-double-right fa-2x"></i></span>
    </a>
  </div>
  <br>
  Todos los derechos reservados. © 2016
  </div>
  <div class="col-md-4">
  <ul class="footer-0">
    <li><i class="fa fa-map-marker "></i>Urb. Bellas Artes, Teatro Teresa Carreño - Caracas</li>
      <li><i class="fa fa-phone "></i> (0212) 578-2825 / (0212) 578-1266</li>
      <li><i class="fa fa-envelope "></i> administracion@sinfonicadevenezuela.org</li>
  </ul>
  </div>
  <div class="col-md-4">
  <ul class="footer-1">
    <li><h4>Sociedad Orquesta Sinfónica de Venezuela</h4></li>
    <li>Fundada en 1930</li>
    <li>Patrimonio Artístico de la Nación</li>
    <li>Fundador: Maestro Vicente Emilio Sojo (1887 - 1974)</li>
    <li>Sede Permanente: Sala Pedro Antonio Ríos-Reyna del Complejo Cultural Teatro Teresa Carreño</li>
  </ul>
  </div>
</footer>

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url() ?>componentes/jquery/dist/jquery.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url() ?>componentes/bootstrap-3.3.5/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url() ?>componentes/tiny-carousel/jquery.tinycarousel.js"></script>


   <!--
    <script src="<?php echo base_url() ?>componentes/AdminLTE-2.3.0/js/icheck.min.js"></script>
     <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script> -->

    <script type="text/javascript">
          $(document).ready(function() {
      $('#discografia').tinycarousel({ interval: true });

    });
    </script>

  </body>
</html>