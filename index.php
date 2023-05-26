<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>







<form action="" method="post" class="container">
  <div class="input-container">
      <div class="input-content">
          <div class="input-dist">
              <div class="input-type">
                  <input placeholder="Usuario" required=""  name="nombre" type="text" class="input-is">  
                  <input placeholder="Password" required=""  name="contraseña" type="password" class="input-is"> 
                  <input type="submit" name="registrar">

              </div>
          </div>
      </div>
  </div>
</form>
        <?php 
        include("registro.php");
        ?>
</body>
</html>