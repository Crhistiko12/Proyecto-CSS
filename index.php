<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Final</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <?php require_once "header.php"; ?>

    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="img/logoOficial.jpg" class="d-block w-100 " alt="logo">
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="img/Descargar fondos de pantalla por la mañana, lago, niebla, montañas, bosque, Alterschrofen, Baviera, Alemania libre_ Imágenes fondos de descarga gratuita.jpg" class="d-block w-100" alt="img">
          </div>
          <div class="carousel-item">
            <img src="img/portada.jpg" class="d-block w-100" alt="portada">
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

      <div class="card text-center">
        <div class="card-header">
          Acerca de...
        </div>
        <div class="card-body">
          <h5 class="card-title">PROMAC</h5>
          <p class="card-text">PROMAC es una empresa especializada en la producción y comercialización de productos naturales 100% puros, sin aditivos, conservantes ni químicos, comprometida con el bienestar y la salud de sus clientes. Su producto estrella, el vinagre de manzana, refleja su misión de ofrecer alternativas saludables que promuevan un estilo de vida más natural y equilibrado.

            Además de su enfoque en productos de alta calidad, PROMAC se distingue por su visión innovadora al apoyar a emprendedores y pequeñas empresas. Ofrecen una variedad de servicios como la creación de sitios web, desarrollo de aplicaciones móviles, estrategias de marketing digital y consultoría empresarial, ayudando a sus clientes a destacar en sus respectivos sectores. Con una mentalidad firme y determinada, PROMAC trabaja con objetivos claros para alcanzar el éxito y contribuir al crecimiento tanto de su propia marca como de los negocios con los que colabora. La empresa se guía por los principios de sostenibilidad y transparencia, garantizando que sus productos y servicios estén alineados con las necesidades de un mercado en constante evolución y en búsqueda de soluciones naturales.</p>
          <a href="productos.php" class="btn btn-primary">Ver Productos</a>
        </div>
        
      </div>
  

      <?php require_once "footer.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="app.js"></script>
</body>
</html>