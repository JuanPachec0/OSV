<div class="content-wrapper">
   <div class="container">
     <section class="content">
      <div class="row"> <!--  ROW 1 -->

  		<div class="col-md-12">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1><?php echo lang('edit_group_heading');?>
              <small><p><?php echo lang('edit_group_subheading');?></p></small>
            </h1>
            
            <ol class="breadcrumb">
              <li><a href="<?php echo site_url('inicio/')?>"><i class="fa fa-dashboard"></i> Inicio</a></li>
              <li><a href="<?php echo site_url('auth/')?>">Usuarios</a></li>
              <li class="active">Edición</li>
            </ol>
          </section>
        </div> <!--  FIN col-md-12 -->  

		<div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Edición de Grupo</h3>
                </div><!-- /.box-header -->
					<div id="infoMessage"><?php echo $message;?></div>
					<div class="box-body"> <!-- Inicio box-body -->
						<?php echo form_open(current_url());?>
						      <div class="col-md-6">
						        <div class="form-group">
						            <?php echo lang('edit_group_name_label', 'group_name');?> <br />
						            <?php echo form_input($group_name);?>
						        </div>    
						      </div>
						
						      <div class="col-md-6">
						        <div class="form-group">
						            <?php echo lang('edit_group_desc_label', 'description');?> <br />
						            <?php echo form_input($group_description);?>
						      </div>
						     </div> 
							 <div class="col-md-12 text-center">
						      <p><?php echo form_submit('submit', lang('edit_group_submit_btn'),$submit);?></p>
				        	 </div>     
						<?php echo form_close();?>
					</div> <!-- FIN box-body -->		
		</div> <!-- box box-primary -->
	   </div> <!--  FIN col-md-12 -->  			
    </div><!--  FIN ROW 1 -->
   </section>
  </div><!-- /.container -->
</div><!-- /.content-wrapper -->