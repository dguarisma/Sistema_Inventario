<?php 

if ($_SESSION['permisos_acceso']=='Administrador') { ?>

    <ul class="sidebar-menu">
        <li class="header">MENU</li>

	<?php 

	if ($_GET["module"]=="start") { 
		$active_home="active";
	} else {
		$active_home="";
	}
	?>
		<li class="<?php echo $active_home;?>">
			<a href="?module=start"><i class="fa fa-home"></i> Inicio </a>
	  	</li>
		<li class="header">USUARIOS</li>
	<?php

	if ($_GET["module"]=="user" || $_GET["module"]=="form_user") { ?>
		<li class="active">
			<a href="?module=user"><i class="fa fa-user"></i> Administrar usuarios</a>
	  	</li>
		<li class="header">SERVICIOS</li>
	<?php
	}

	else { ?>
		<li>
			<a href="?module=user"><i class="fa fa-user"></i> Administrar usuarios</a>
	  	</li>
		<li class="header">SERVICIOS</li>
	<?php
	}

	if ($_GET["module"]=="product_transaction" || $_GET["module"]=="form_product_transaction") { ?>
		<li class="active">
		  <a href="?module=product_transaction"><i class="fa fa-credit-card"></i> Administrar ordenes </a>
		  </li>
	  <?php
	  }
	
	  else { ?>
		<li>
		  <a href="?module=product_transaction"><i class="fa fa-credit-card"></i> Administrar ordenes </a>
		  </li>
	  <?php
	  }

	if ($_GET["module"]=="menu" || $_GET["module"]=="menu") { ?>
		<li class="active">
			<a href="./modules/menu/IMG-20220314-WA0002.pdf"><i class="fa fa-list"></i> Lista de precios - Menú</a>
	  	</li>
		<li class="header">INVENTARIO</li>
	<?php
	}

	else { ?>
		<li>
			<a href="./modules/menu/IMG-20220314-WA0002.pdf"><i class="fa fa-list"></i> Lista de precios - Menú</a>
	  	</li>
		<li class="header">INVENTARIO</li>
	<?php
	}

	if ($_GET["module"]=="inventory" || $_GET["module"]=="form_inventory") { ?>
		<li class="active">
		  <a href="?module=inventory"><i class="fa fa-folder"></i> Productos escenciales </a>
		  </li>
	  <?php
	}
	
	else { ?>
		<li>
		  <a href="?module=inventory"><i class="fa fa-folder"></i> Productos escenciales </a>
		  </li>
	  <?php
	}

	if ($_GET["module"]=="inventory_transaction" || $_GET["module"]=="form_inventory_transaction") { ?>
		<li class="active">
		  <a href="?module=inventory_transaction"><i class="fa fa-clone"></i> Entrada de productos </a>
		  </li>
		  <li class="header">PERFIL</li>
	  <?php
	  }
	
	  else { ?>
		<li>
		  <a href="?module=inventory_transaction"><i class="fa fa-clone"></i> Entrada de productos </a>
		  </li>
		  <li class="header">PERFIL</li>
	  <?php
	  }

	if ($_GET["module"]=="password") { ?>
		<li class="active">
			<a href="?module=password"><i class="fa fa-lock"></i> Cambiar contraseña</a>
		</li>
	<?php
	}

	else { ?>
		<li>
			<a href="?module=password"><i class="fa fa-lock"></i> Cambiar contraseña</a>
		</li>
	<?php
	}
	?>
	</ul>

<?php
}
if ($_SESSION['permisos_acceso']=='Asistente') { ?>

    <ul class="sidebar-menu">
        <li class="header">MENU</li>

	<?php 

  if ($_GET["module"]=="start") { ?>
    <li class="active">
      <a href="?module=start"><i class="fa fa-home"></i> Inicio </a>
      </li>
  <?php
  }

  else { ?>
    <li>
      <a href="?module=start"><i class="fa fa-home"></i> Inicio </a>
      </li>
  <?php
  }

	if ($_GET["module"]=="password") { ?>
		<li class="active">
			<a href="?module=password"><i class="fa fa-lock"></i> Cambiar contraseña</a>
		</li>
	<?php
	}
	else { ?>
		<li>
			<a href="?module=password"><i class="fa fa-lock"></i> Cambiar contraseña</a>
		</li>
	<?php
	}
	?>
	</ul>
<?php
}
?>