<div class="content-wrapper">
   <div class="container">
     <section class="content">
      <div class="row"> <!--  ROW 1 -->

  		<div class="col-md-12">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1><?php echo lang('create_user_heading');?>
              <small><p><?php echo lang('create_user_subheading');?></p></small>
            </h1>
            
            <ol class="breadcrumb">
              <li><a href="<?php echo site_url('inicio/')?>"><i class="fa fa-dashboard"></i> Inicio</a></li>
              <li><a href="<?php echo site_url('auth/')?>">Usuarios</a></li>
              <li class="active">Creación</li>
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

						<?php echo form_open("auth/create_user");?>
						
						      <div class="col-md-6">
						        <div class="form-group">
						            <?php echo lang('create_user_fname_label', 'first_name');?> <br />
						            <?php echo form_input($first_name);?>
						       </div>
						      </div>
						
						      <div class="col-md-6">
						        <div class="form-group">
						            <?php echo lang('create_user_lname_label', 'last_name');?> <br />
						            <?php echo form_input($last_name);?>
						        </div>
						      </div>  
						      
						      <?php
						      if($identity_column!=='email') {
						          echo '<div class="col-md-6"><div class="form-group">';
						          echo lang('create_user_identity_label', 'identity');
						          echo '<br />';
						          echo form_error('identity');
						          echo form_input($identity);
						          echo '</div></div>';
						      }
						      ?>
						
						      <div class="col-md-6">
						        <div class="form-group">
						            <?php echo lang('create_user_company_label', 'company');?> <br />
						            <?php echo form_input($company);?>
						        </div>
						      </div>  
						
						      <div class="col-md-6">
						        <div class="form-group">
						            <?php echo lang('create_user_email_label', 'email');?> <br />
						            <?php echo form_input($email);?>
						        </div>
						      </div>  
						
						      <div class="col-md-12">
						        <div class="form-group">
						            <?php echo lang('create_user_phone_label', 'phone');?> <br />
						            <?php echo form_input($phone);?>
						        </div>
						     </div>   
						
						      <div class="col-md-6">
						        <div class="form-group">
						            <?php echo lang('create_user_password_label', 'password');?> <br />
						            <?php echo form_input($password);?>
						        </div>
						     </div>   
						
						      <div class="col-md-6">
						        <div class="form-group">
						            <?php echo lang('create_user_password_confirm_label', 'password_confirm');?> <br />
						            <?php echo form_input($password_confirm);?>
						       </div>
						      </div> 
						
						      <div class="col-md-12 text-center">
						      <p><?php echo form_submit('submit', lang('create_user_submit_btn'),$submit);?></p>
						      </div>
						
						<?php echo form_close();?>
             </div> <!-- FIN box-body -->		
		</div> <!-- box box-primary -->
	   </div> <!--  FIN col-md-12 -->  			
    </div><!--  FIN ROW 1 -->
   </section>
  </div><!-- /.container -->
</div><!-- /.content-wrapper -->