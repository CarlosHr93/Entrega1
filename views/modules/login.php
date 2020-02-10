<html>
   
   <head>
   <header>
    <h1>LOGOTIPO</h1>
   <header>
      

      <title>PAGINA DE INICIO</title>
      <link rel="stylesheet" type="text/css" href="estilos.css">
   </head>
   <body>
   <div id="login">
         <form action= "controllers/usuario.php" method="GET">
            <label>Usuario: </label>
            <input type="text" name="user"/>
            <label>Contraseña: </label>
            <input type="password" name="password"/>
            <input type="submit" value="Enviar"/>
         </form>
      </div>
  <?php
   include "modules/navegacion.php";
  ?>
   
</body>
</html>