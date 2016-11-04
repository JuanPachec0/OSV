 <div class="content-wrapper">
   <div class="container">
      <div class="row"> <!--  ROW 1 -->
	    <div class="col-lg-12"> 
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1><?php echo lang('index_heading');?>
              <small><p><?php echo lang('index_subheading');?></p></small>
            </h1>
            
            <ol class="breadcrumb">
              <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
              <li><a href="<?php echo $this->uri->segment(1)?>">Usuarios</a></li>
              <li class="active">Modulo</li>
            </ol>
          </section>
        </div> <!--  FIN col-lg-12 -->
      
		
	<div class="col-lg-12"> 
	<div class="box">
	 <div class="box-header">
                  <h3 class="box-title">Manejo de Usuarios</h3>
                </div><!-- /.box-header -->
	<div id="infoMessage"><?php echo $message;?></div>
	 
	 <div class="table-responsive box-body">
		<table id="usuarios" class="table table-bordered table-hover">
		  <thead>
			<tr>
				<th><?php echo lang('index_fname_th');?></th>
				<th><?php echo lang('index_lname_th');?></th>
				<th><?php echo lang('index_email_th');?></th>
				<th><?php echo lang('index_groups_th');?></th>
				<th><?php echo lang('index_status_th');?></th>
				<th><?php echo lang('index_action_th');?></th>
			</tr>
			</thead>
			<tbody>
			<?php foreach ($users as $user):?>
				<tr>
		            <td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
		            <td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
		            <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
					<td>
						<?php foreach ($user->groups as $group):?>
							<?php echo anchor("auth/edit_group/".$group->id, htmlspecialchars($group->name,ENT_QUOTES,'UTF-8')) ;?><br />
		                <?php endforeach?>
					</td>
					<td><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, lang('index_active_link')) : anchor("auth/activate/". $user->id, lang('index_inactive_link'));?></td>
					<td><?php echo anchor("auth/edit_user/".$user->id, 'Edit') ;?></td>
				</tr>
			<?php endforeach;?>
			<tbody>
		</table>
	</div>
	 <p><?php echo anchor('auth/create_user', lang('index_create_user_link'))?> | <?php echo anchor('auth/create_group', lang('index_create_group_link'))?></p>
     </div>
    </div>  <!--  FIN col-lg-12 -->
   </div><!--  FIN ROW 1 -->
  </div><!-- /.container -->
</div><!-- /.content-wrapper -->

    <!-- DataTables JavaScript -->
    <script src="<?php echo base_url('componentes/datatables/media/js/jquery.dataTables.min.js') ?>"></script>
    <script src="<?php echo base_url('componentes/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js') ?>"></script>
    <link href="<?php echo base_url() ?>componentes/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    
<script>
$(document).ready(function() {

	var table=$('#usuarios').DataTable({
        responsive: true,
        "columnDefs": [{
                        "targets": [ 0 ],
                        "visible": true,
                        "searchable": true
                        }    
                      ],
        "order": [[ 0, "desc" ]],
        "language": {
            "lengthMenu": "Mostrar _MENU_ registros por pagina",
            "zeroRecords": "Nada fue encontrado - lo siento",
            "info": "Mostrando página _PAGE_ de _PAGES_",
            "infoEmpty": "No registros disponibles",
            "infoFiltered": "(filtered from _MAX_ total records)",
            "search": "Buscar _INPUT_ registros:"
        }
});

 	
});

</script>