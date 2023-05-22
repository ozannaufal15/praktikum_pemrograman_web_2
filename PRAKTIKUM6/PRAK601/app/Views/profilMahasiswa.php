<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
      .bg-grey{
        background-color: grey;
      }
    </style>
</head>
<body>
<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <div class="col-md-3 mb-2 mb-md-0">
      </div>
    <nav>
    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="/" class="nav-link px-2 <?=($context == 'index')? "link-secondary":""?>">Home</a></li>
        <li><a href="/profil" class="nav-link px-2 <?=($context == 'profil')? "link-secondary":""?>">Profil</a></li>
      </ul>
    </nav>
      <div class="col-md-3 text-end">
      </div>
    </header>
    <section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center h-100">
      <div class="col col-lg-6 mb-4 mb-lg-0">
        <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">
            <div class="col-md-4 bg-grey text-center text-white"
              style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3-bg.webp"
                alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
              <h5><?=$mahasiswa->nama?></h5>
              <p><?=$mahasiswa->nim?></p>
            </div>
            <div class="col-md-8">
              <div class="card-body p-4">
                <h6>Profil</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Prodi</h6>
                    <p class="text-muted"><?=$mahasiswa->prodi?></p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Email</h6>
                    <p class="text-muted"><?=$mahasiswa->email?></p>
                  </div>
                </div>
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Hobi</h6>
                    <ul class="list-group">
                      <?php 
                        foreach($mahasiswa->hobi as $hobi){
                          echo "<li class=\"list-group-item text-muted\">".$hobi."</li>";
                        }
                      ?>
                    </ul>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Skill</h6>
                    <ul class="list-group">
                      <?php 
                        foreach($mahasiswa->skill as $skill){
                          echo "<li class=\"list-group-item text-muted\">".$skill."</li>";
                        }
                      ?>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>