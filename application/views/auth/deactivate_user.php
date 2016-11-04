<div class="content-wrapper">
   <div class="container">
     <section class="content">
      <div class="row"> <!--  ROW 1 -->
  		<div class="col-md-12">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1><?php echo lang('deactivate_heading');?>
              <small><p><?php echo sprintf(lang('deactivate_subheading'), $user->username);?></p></small>
            </h1>
            <ol class="breadcrumb">
              <li><a href="<?php echo site_url('inicio/')?>"><i class="fa fa-dashboard"></i> Inicio</a></li>
              <li><a href="<?php echo site_url('auth/')?>">Usuarios</a></li>
              <li class="active">Desactivación</li>
            </ol>
          </section>
        </div> <!--  FIN col-md-12 -->  
		<div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Desactivar Usuario</h3>
                </div><!-- /.box-header -->
					<div class="box-body"> <!-- Inicio box-body -->
					<?php echo form_open("auth/deactivate/".$user->id);?>
					
						  <div class="col-md-12 form-group">
						     <div class="checkbox text-center">
							  	<?php echo lang('deactivate_confirm_y_label', 'confirm');?>
							    <input type="radio"  name="confirm" value="yes" checked="checked" />
							    <?php echo lang('deactivate_confirm_n_label', 'confirm');?>
							    <input  type="radio" name="confirm" value="no" />
						     </div>    
						 </div>			
						  <?php echo form_hidden($csrf); ?>
						  <?php echo form_hidden(array('id'=>$user->id)); ?>
						<div class="col-md-12 text-center">
						  <p><?php echo form_submit('submit', lang('deactivate_submit_btn'),$submit);?></p>
						</div>
						<?php echo form_close();?>
					</div> <!-- FIN box-body -->		
		</div> <!-- box box-primary -->
	   </div> <!--  FIN col-md-12 -->  			
    </div><!--  FIN ROW 1 -->
   </section>
  </div><!-- /.container -->
</div><!-- /.content-wrapper -->