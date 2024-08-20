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
  <link rel="stylesheet" href="css/estilos.css">  <link rel="stylesheet" href="css/estilos.css">
  <title>Objetos de Aprendizaje</title>
</head>

<body>

<div class="container py-4">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
      <li class="breadcrumb-item active" aria-current="page">Categoria</li>
      </ol>
    </nav>
  </div>




  <div class="container">
    <h1>Categorías de objeto de aprendizaje</h1>
    <a href="anadircategoria.php" class="btn pulse-effect">Añadir categoría</a>

    <div class="box-container">
      <?php
      $sql = "SELECT * FROM `categorias`";
      $result = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_assoc($result)) {
      ?>
        <div class="box">
          <p><?php echo $row["titulo"] ?></p>
          <p><?php echo $row["descripcion"] ?></p>
          <a href="editarcategoria.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
          <a href="eliminarcategoria.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
          <div><a href="./subcategorias.php?category_id<?php echo $row["id"] ?>" class="btn">Ver subcategorías</a></div>
        </div>
      <?php
      }
      ?>
    </div>
  </div>
</body>
</html>