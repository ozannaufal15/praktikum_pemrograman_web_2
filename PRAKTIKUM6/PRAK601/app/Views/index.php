<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
  <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <div class="col-md-3 mb-2 mb-md-0">
      </div>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="/" class="nav-link px-2 <?=($context == 'index')? "link-secondary":""?>">Home</a></li>
        <li><a href="/profil" class="nav-link px-2 <?=($context == 'profil')? "link-secondary":""?>">Profil</a></li>
      </ul>
      <div class="col-md-3 text-end">
      </div>
    </header>

    <div class="px-4 py-5 my-5 text-center">
      <h1 class="display-5 fw-bold text-body-emphasis"><?=$mahasiswa->nama?></h1>
      <div class="col-lg-6 mx-auto">
        <p class="lead mb-4"><?=$mahasiswa->nim?></p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
          <!-- <a href="/profil" class="btn btn-primary btn-lg px-4 gap-3">Profil</a> -->
          <!-- <a class="btn btn-outline-secondary btn-lg px-4">Secondary</a> -->
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>