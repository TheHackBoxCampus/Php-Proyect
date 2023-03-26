<!DOCTYPE html>
<html lang="es">   
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1"/>
      <title>Portfolio</title>
      <!-- CSS -->
      <link rel="stylesheet" href="../assets/sass/style.css">
      <!--Bootstrap CSS-->
      <link 
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" 
      rel="stylesheet" 
      integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" 
      crossorigin="anonymous"
      >
      
      <!--Bootstrap JS -->
      <script 
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" 
      integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" 
      crossorigin="anonymous"></script>

      <!-- JS -->
      <script 
        src="../src/features/main.js" 
        defer>
      </script>
  </head>
  <body>
      <!--Navbar-->
      <?php include("../src/components/nav.php")?>
      <!--Welcome-->
      <div class="p-5 mb-4 bg-light rounded-3 d-flex flex-column">
        <div class="container-fluid py-5">
          <h1 class="display-5 fw-bold text-center">Bienvenid@s</h1>
          <p class="col-md-8 fs-4 w-100 text-center">Login creado con PHP</p>
        </div>
        </div>
  </body>
</html>
