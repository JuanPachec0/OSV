<div class="content-wrapper">
   <div class="container">
     <section class="content">
      <div class="row"> <!--  ROW 1 -->
   	    
   		<div class="col-md-12">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1><?php echo lang('edit_user_heading');?>
              <small><p><?php echo lang('edit_user_subheading');?></p></small>
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
                  <h3 class="box-title">Edición de usuario</h3>
                </div><!-- /.box-header -->

			<div class="alert alert-danger alert-dismissable" id="infoMessage"><?php echo $message;?></div>
			
			<?php echo form_open(uri_string(),$form);?>
			<div class="box-body"> <!-- Inicio box-body -->
			<div class="col-md-6">
			     <div class="form-group">
			      
			            <?php echo lang('edit_user_fname_label', 'first_name');?> <br />
			            <?php echo form_input($first_name);?>
			      
				</div>
			</div>
			<div class="col-md-6">	
			    <div class="form-group">
			            <?php echo lang('edit_user_lname_label', 'last_name');?> <br />
			            <?php echo form_input($last_name);?>
			    </div>
			</div>
			<div class="col-md-6">	
			    <div class="form-group">
			            <?php echo lang('edit_user_company_label', 'company');?> <br />
			            <?php echo form_input($company);?>
			    </div>
			</div>
			<div class="col-md-6">	    
			    <div class="form-group">
			            <?php echo lang('edit_user_phone_label', 'phone');?> <br />
			            <?php echo form_input($phone);?>
			    </div>
			</div>    
			<div class="col-md-6">
			    <div class="form-group">
			            <?php echo lang('edit_user_password_label', 'password');?> <br />
			            <?php echo form_input($password);?>
			    </div>
			 </div> 
			 <div class="col-md-6">   
			    <div class="form-group">
			            <?php echo lang('edit_user_password_confirm_label', 'password_confirm');?><br />
			            <?php echo form_input($password_confirm);?>
			    </div>
			    </div> 
			      <?php if ($this->ion_auth->is_admin()): ?>
			
			          <h3><?php echo lang('edit_user_groups_heading');?></h3>
			          <div class="form-group">
			          <?php foreach ($groups as $group):?>
			            <div class="checkbox">
			              <label class="checkbox">
			              <?php
			                  $gID=$group['id'];
			                  $checked = null;
			                  $item = null;
			                  $flag_gerente=FALSE;
			                  $flag_banca=FALSE;
			                  foreach($currentGroups as $grp) {
			                      if ($gID == $grp->id) {
			                          $checked= ' checked="checked"';	                          
			                      break;
			                      }
			                  }
			              ?>
			              <input type="checkbox"  name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
			              <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
			              </label>
			              </div>
			          <?php endforeach?>
			          </div>			        
			      <?php endif ?>
			
			      <?php echo form_hidden('id', $user->id);?>
			      <?php echo form_hidden($csrf); ?>
				  <div class="col-md-12 text-center">
			      	<p><?php echo form_submit('submit', lang('edit_user_submit_btn'),$submit);?></p>
			      </div>
				</div> <!-- FIN box-body -->
			    <?php echo form_close();?>
			     </div> <!-- box box-primary -->
			    </div> <!--  FIN col-md-12 -->  
			     
   
 </div><!--  FIN ROW 1 -->
 </section>
  </div><!-- /.container -->
</div><!-- /.content-wrapper -->

<<script type="text/javascript">
	$(document).ready(function(){
		
			


			
	});


</script>