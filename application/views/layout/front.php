<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Orquesta Sinfonica</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link href="<?php echo base_url() ?>componentes/bootstrap-3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url() ?>componentes/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Ionicons -->
    <link href="<?php echo base_url() ?>css/ionicons.min.css" rel="stylesheet">
    <!-- Theme style -->
    <link href="<?php echo base_url() ?>componentes/AdminLTE-2.3.0/css/AdminLTE.min.css" rel="stylesheet">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
	<link href="<?php echo base_url() ?>componentes/AdminLTE-2.3.0/css/skins/_all-skins.min.css" rel="stylesheet">

    <link href="<?php echo base_url() ?>css/colorbox/colorbox.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="<?php echo base_url() ?>js/jquery-1.11.2.min.js"></script>

    <script src="<?php echo base_url() ?>componentes/colorbox-master/jquery.colorbox.js"></script>

    <script src="<?php echo base_url() ?>componentes/datatables/media/js/jquery.dataTables.js"></script>


    <script src="<?php echo base_url() ?>componentes/jquery-ui-1.11.4.custom/jquery-ui.js"></script>

    <!-- jquery-ui CSS -->
	<link rel="stylesheet" href="<?php echo base_url() ?>componentes/jquery-ui-1.11.4.custom/jquery-ui.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>componentes/datatables/media/css/jquery.dataTables.css">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
     
  </head>
     <body class="hold-transition skin-blue layout-top-nav">
      <div class="wrapper"> <!-- INICIO wrapper EN HEADER CIERRA EN EL FOOTER -->
	    <?php 
	        if($header) echo $header ;
	        if($middle) echo $middle ;
	        if($footer) echo $footer ;
	    ?>
     </div><!-- FIN wrapper ABRIO EN  HEADER -->
    </body>
</html>