<?php
include "db_conn.php";
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
  <link rel="stylesheet" href="css/estilos.css">
  <title>Objetos de Aprendizaje</title>
</head>

<body>
  <nav>
    <ul class="menu">
      <li><a href="./index.html">Inicio</a></li>
      <li><a href="./acerca/acerca.html">Acerca</a></li>
      <li><a href="">Servicios</a></li>
    </ul>
    <div class="search">

    </div>
  </nav>


  <div class="container py-4">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Categorías</a></li>
        <li class="breadcrumb-item active" aria-current="page">Subcategorías</li>
      </ol>
    </nav>
  </div>

  <div class="container">
    <h1>Subcategorías de objeto de aprendizaje</h1>
    <a href="anadirsubcategoria.php" class="btn pulse-effect">Añadir subcategoría</a>
    <div class="box-container">
      <?php
      $categoryId = $_GET['category_id'];
      $sql = "SELECT * FROM `subcategorias` WHERE category_id = $categoryId";
      $result = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_assoc($result)) {
      ?>
        <div class="box">
          <p><?php echo $row["titulo"] ?></p>
          <p><?php echo $row["descripcion"] ?></p>
          <a href="editarsubcategoria.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
          <a href="eliminarsubcategoria.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
          <div><a href="./folder/grado.php" class="btn">Leer más</a></div>
        </div>
      <?php
      }
      ?>
    </div>
  </div>
  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  <footer class="bg-body-tertiary text-center">
  <!-- Grid container -->
  <div class="container p-4"></div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2020 Copyright:
    <a class="text-body" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>



</body>

</html>