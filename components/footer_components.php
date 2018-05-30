	<div class="row xs_hidden">
		<div class="col align-left menu-list">
			<h2><?php echo $core->lang("Más ","More "); ?></h2>
			<ul>
			<li><a class="menu-link" href="/<?php echo $core->lang("es","en"); ?>/pages/profile">Mi cuenta</a></li>
			<li><a class="menu-link" href="/<?php echo $core->lang("es","en"); ?>/pages/contact">Contacto</a></li>
			</ul>
		</div><!-- /.col -->
	</div><!-- /.row -->
	<div class="row justify-content-end flex-row">
		<div class="col-sm-2 text-right">
			<a  href="/<?php echo $core->lang("en","es").$core->current_url; ?>" class="btn btn-outline-dark btn-sm"><i class="fa fa-globe" aria-hidden="true"></i> <?php echo $core->lang("go to English","ir a Español"); ?></a>
		</div><!-- /.col-sm-2 -->  			
		<div class="col-12 text-center m-2">
			<p class="text-muted"><small>
			<a href="/es/pages/privacy" target="_blank">Aviso de Privacidad</a> | 
			<a href="/es/pages/terms_conditions" target="_blank">Términos y Condiciones</a>
			Foo® <?php echo date("Y"); ?> <?php echo $core->lang("Todos los Derechos Reservados","All Rights Reserved"); ?></small></p>
		</div><!-- /.col-12  -->
		
	</div><!-- /.row -->