<?php 

include("db.php");

if (isset($_POST['registrar'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['contraseña']) >= 1) {
	    $name = trim($_POST['name']);
	    $contra = trim($_POST['contraseña']);
	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO datos(nombre, contraseña, fecha_reg) VALUES ('$name','$contra','$fechareg')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡bienvenido!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">revisa denuevo</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡animal llena todos los campos!</h3>
           <?php
    }
}

?>