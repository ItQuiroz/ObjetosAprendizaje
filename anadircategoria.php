<?php
include "db_conn.php";

if (isset($_POST["submit"])) {
   $titulo = $_POST['titulo'];
   $descripcion = $_POST['descripcion'];

   $sql = "INSERT INTO `categorias`(`id`, `titulo`, `descripcion`) VALUES (NULL,'$titulo','$descripcion')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: index.php?msg=New record created successfully");
   } else {
      echo "Failed: " . mysqli_error($conn);
   }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="css/styles.css">
   <title>Objetos de Aprendizaje</title>
</head>

<body>
   <nav>
      <ul class="menu">
         <li><a href="./index.html">Inicio</a></li>
         <li><a href="./acerca/acerca.html">Acerca1</a></li>
         <li><a href="">Servicios</a></li>
      </ul>
      <div class="search">

      </div>
   </nav>

   <h1>Añadir una categoria de un objeto de aprendizaje</h1>
   <div class="contact_form">
      <div class="formulario">
         <form action="" method="post" style="width:10vw; min-width:100px;">
            <div>
               <label  class=" ">Titulo
                  <span class="obligatorio">*</span>
               </label>
               <input type="text" name="titulo" id="" required="obligatorio" placeholder="Ejemplo: Inteligencia Artificial">
            </div>

            <div>
               <label  class="">Descripción
                  <span class="obligatorio">*</span>
               </label>
               <input type="text" name="descripcion"  required="obligatorio" placeholder="Ejemplo: Objeto de Aprendizaje">
            </div>

            <div class="form">
               <button type="submit" class="btn pulse-effect" name="submit">Guardar</button>
               <a href="index.php" class="btn pulse-effect">Cancelar</a>
            </div><br>


            <div class="aviso">
               <span class="obligatorio"> * </span>Los campos son obligatorios.
            </div>

         </form>
      </div>
   </div>
</body>

</html>