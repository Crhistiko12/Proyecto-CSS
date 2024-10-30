<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php require_once "header.php"; ?>
      <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="img/Productos/Trabajos echos/piña.png" class="d-block w-100" alt="piña">
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="img/Productos/Trabajos echos/manzana.png" class="d-block w-100" alt="Manzana">
          </div>
          <div class="carousel-item">
            <img src="img/Productos/Trabajos echos/miel.png" class="d-block w-100" alt="miel">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card h-100 ">
            <img src="img/manzana-removebg-preview.png" class="card-img-top" alt="Vinagre de manzana">
            <div class="card-body">
              <h5 class="card-title">Vinagre de Manzana</h5>
              <p class="card-text">Limpia tu cuerpo de manera natural con nuestro vinagre de manzana puro.</p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">Actualizado hace 2 min.</small>
              <button type="button" class="btn btn-warning">Añadir al carrito</button>
<button class="buttonpro">
  <span> Comprar</span>
</button>

            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="img/mieljo-removebg-preview.png" class="card-img-top" alt="mieljo">
            <div class="card-body">
              <h5 class="card-title">Miel - Jo</h5>
              <p class="card-text">La miel, con sus antioxidantes, puede ayudar a proteger el corazón y reducir el riesgo de enfermedades cardiovasculares.
                <br>
                La miel también es antiinflamatoria y puede aliviar dolores relacionados con inflamaciones, como el dolor de garganta o las infecciones respiratorias.
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">Actualizado hace 2 min.</small>
              <button type="button" class="btn btn-warning">Añadir al carrito</button>
<button class="buttonpro">
<span> Comprar</span>
</button>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="img/piña-removebg-preview.png" class="card-img-top" alt="piña-removebg-preview">
            <div class="card-body">
              <h5 class="card-title">Vinagre de Piña</h5>
              <p class="card-text">La piña es rica en vitamina C y otros antioxidantes que ayudan a combatir el daño de los radicales libres, protegiendo las células del envejecimiento y reduciendo el riesgo de enfermedades crónicas.</p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">Actualizado hace 2 min.</small>
              <button type="button" class="btn btn-warning">Añadir al carrito</button>
<button class="buttonpro">
<span> Comprar</span>
</button>
            </div>
          </div>
        </div>
      </div>





      <?php require_once "footer.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>