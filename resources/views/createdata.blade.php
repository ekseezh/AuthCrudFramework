<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Create Data</title>
  </head>
  <body>
    <h1 class="text-center mb-4">Create Data Mahasiswa</h1>
        <div class="container">
            <div class="row justify-content-center">
              <div class="col-8">
                <div class="card">
                  <div class="card-body">
                    <form action="/insert" method="POST">
                      @csrf
                      <div class="mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="string" name="nim" class="form-control" id="nim" aria-describedby="nim">
                      </div>
                      <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="string" name="nama" class="form-control" id="nama" aria-describedby="nama">
                      </div>
                      <div class="mb-3">
                        <label for="umur" class="form-label">Umur</label>
                        <input type="integer" name="umur" class="form-control" id="umur" aria-describedby="emailHelp">
                      </div>
                      <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="alamat" aria-describedby="emailHelp">
                      </div>
                      <div class="mb-3">
                        <label for="kota" class="form-label">Kota</label>
                        <input type="string" name="kota" class="form-control" id="kota" aria-describedby="emailHelp">
                      </div>
                      <div class="mb-3">
                        <label for="kelas" class="form-label">Kelas</label>
                        <input type="string" name="kelas" class="form-control" id="kelas" aria-describedby="emailHelp">
                      </div>
                      <div class="mb-3">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <input type="string" name="jurusan" class="form-control" id="jurusan" aria-describedby="emailHelp">
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>