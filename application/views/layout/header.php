		   <header class="main-header">
	        <nav class="navbar navbar-static-top">
	          <div class="container">
	            <div class="navbar-header">     
	              <a href="<?php echo site_url('/inicio/index/') ?>" class="navbar-brand"><b>Orquesta Sinfonica</b></a>
	              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
	                <i class="fa fa-bars"></i>
	              </button>
	            </div>
	            <!-- Collect the nav links, forms, and other content for toggling -->
	            <!-- MENU -->
	            <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
	              <ul class="nav navbar-nav">
	                <!-- <li><a href="#">Link1</a></li> -->

	                <!--<?php// if ($this->ion_auth->in_group(array(GRUPO_VENDEDOR,GRUPO_ADMIN))):?> -->
	                <?php if ($this->ion_auth->is_admin()):?>	
		                <li class="dropdown">
		                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administración<span class="caret"></span></a>
		                   <ul class="dropdown-menu" role="menu">
		                        <li><a href="<?php echo site_url('Usuarios')?>">Usuarios</a></li>
		                    <li class="divider"></li>
		                    <li ><?php echo anchor('/mis_publicaciones_admin/', 'Publicaciones en MediNet') ?></li>
		                  </ul>
		                </li>
		                
		             <?php endif;?>
						<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Mi empresa<span class="caret"></span></a>
						<ul class="dropdown-menu">
						<li ><?php echo anchor('/mis_productos/', 'Mis Productos') ?></li>
						</ul>
						</li>

	                <li><a href="<?php echo site_url('auth/logout')?>">Salir</a></li>
	              </ul>  
	            </div><!-- /.navbar-collapse --> <!-- FIN MENU -->
	            
	            
	            <!-- Navbar Right Menu -->
	              <div class="navbar-custom-menu">
	                <ul class="nav navbar-nav">

	                  
	                  <!-- User Account Menu -->
	                  <li class="dropdown user user-menu">
	                    <!-- Menu Toggle Button -->
	                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
	                      <!-- The user image in the navbar-->
	                      <!-- <img src="../../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">-->
	                      <!-- hidden-xs hides the username on small devices so only the image appears. -->
	                      <span class="hidden-xs"><?php echo $this->ion_auth->get_nombres();?></span>
	                    </a>
	                    <ul class="dropdown-menu">
	                      <!-- The user image in the menu -->
	                      <li class="user-header">
	                        <!--  <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">-->
	                        <p>
	                           <?php echo $this->ion_auth->get_nombres();?>
	                          <small>Perfil del usuario</small>
	                        </p>
	                      </li>
	                      <!-- Menu Body -->

	                      <!-- Menu Footer-->
	                      <li class="user-footer">
	                        <div class="pull-left">
	                          <a href="<?php echo site_url('perfil/index')?>" class="btn btn-default btn-flat">Perfil</a>
	                        </div>
	                        <div class="pull-right">
	                          <a href="<?php echo site_url('auth/logout')?>" class="btn btn-default btn-flat">Salir</a>
	                        </div>
	                      </li>
	                    </ul>
	                  </li>
	                </ul>
	              </div><!-- /.navbar-custom-menu -->
	          </div><!-- /.container-fluid -->
	        </nav>
	      </header>