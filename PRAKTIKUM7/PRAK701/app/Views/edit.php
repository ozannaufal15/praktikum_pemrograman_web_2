<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>

<body>
    <div class="container">


        <div class="row">
            <div class="col-12">
                <h2>Edit Data Buku</h2>
            </div>
        <?= var_dump($buku) ?>
            <div class="col-3">
                <form action="<?= base_url('/buku/'. $buku['id'] . '/edit') ?>" method="post">
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" value="<?= $buku['judul'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="penulis" class="form-label">penulis</label>
                        <input type="text" class="form-control" id="penulis" name="penulis" value="<?= $buku['penulis'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="penerbit" class="form-label">penerbit</label>
                        <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= $buku['penerbit'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="tahun_terbit" class="form-label">tahun terbit</label>
                        <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit" value="<?= $buku['tahun_terbit'] ?>">
                    </div>
                    <!-- <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div> -->
                    <button type="submit" class="btn btn-primary">edit</button>
                </form>
            </div>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
        </script>
</body>

</html>
