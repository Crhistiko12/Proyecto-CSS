<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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
<button class="buttonpro">
<span> Comprar</span>
</button>
            </div>
          </div>
        </div>
      </div>


      /* From Uiverse.io by gharsh11032000 */ 
<div class="card">
  <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M20 5H4V19L13.2923 9.70649C13.6828 9.31595 14.3159 9.31591 14.7065 9.70641L20 15.0104V5ZM2 3.9934C2 3.44476 2.45531 3 2.9918 3H21.0082C21.556 3 22 3.44495 22 3.9934V20.0066C22 20.5552 21.5447 21 21.0082 21H2.9918C2.44405 21 2 20.5551 2 20.0066V3.9934ZM8 11C6.89543 11 6 10.1046 6 9C6 7.89543 6.89543 7 8 7C9.10457 7 10 7.89543 10 9C10 10.1046 9.10457 11 8 11Z"></path></svg>
  <div class="card__content">
    <p class="card__title">Vinagre de Manzana</p>
    </p><p class="card__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
  </div>
</div>





      <?php require_once "footer.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>