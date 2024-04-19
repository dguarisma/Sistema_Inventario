<?php
require_once "config/database.php";
require_once "config/fungsi_tanggal.php";
require_once "config/fungsi_rupiah.php";


if (empty($_SESSION['username']) && empty($_SESSION['password'])){
	echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}
else {
	if ($_GET['module'] == 'start') {
		include "modules/start/view.php";
	}

	elseif ($_GET['module'] == 'user') {
		include "modules/user/view.php";
	}

	elseif ($_GET['module'] == 'form_user') {
		include "modules/user/form.php";
	}

	elseif ($_GET['module'] == 'product_transaction') {
		include "modules/product_transaction/view.php";
	}

	elseif ($_GET['module'] == 'form_product_transaction') {
		include "modules/product_transaction/form.php";
	}

	elseif ($_GET['module'] == 'menu') {
		include "modules/menu/view.html";
	}

	elseif ($_GET['module'] == 'inventory') {
		include "modules/inventory/view.php";
	}

	elseif ($_GET['module'] == 'form_inventory') {
		include "modules/inventory/form.php";
	}

	elseif ($_GET['module'] == 'inventory_transaction') {
		include "modules/inventory_transaction/view.php";
	}

	elseif ($_GET['module'] == 'form_inventory_transaction') {
		include "modules/inventory_transaction/form.php";
	}

	elseif ($_GET['module'] == 'profile') {
		include "modules/profile/view.php";
		}

	elseif ($_GET['module'] == 'form_profile') {
		include "modules/profile/form.php";
	}

	elseif ($_GET['module'] == 'password') {
		include "modules/password/view.php";
	}
}
?>