<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Read Table</title>

  </head>
  <body>
    <h1 class="text-center mb-4">Data Mahasiswa</h1>
    @if ($message = Session::get('success'))
    <div class="alert alert-success" role="alert">
        {{ $message }}
    </div>
    @endif
        <div class="container">
            <a href="/create" class="btn btn-success">Tambah +</a>
            <div class="row">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">NIM</th>
                        <th scope="col">NAMA</th>
                        <th scope="col">UMUR</th>
                        <th scope="col">ALAMAT</th>
                        <th scope="col">KOTA</th>
                        <th scope="col">KELAS</th>
                        <th scope="col">JURUSAN</th>
                        <th scope="col">DIBUAT</th>
                        <th scope="col">AKSI</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $row)
                      <tr>
                        <th scope="row">{{ $row->nim }}</th>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->umur }}</td>
                        <td>{{ $row->alamat }}</td>
                        <td>{{ $row->kota }}</td>
                        <td>{{ $row->kelas }}</td>
                        <td>{{ $row->jurusan }}</td>
                        <td>{{ $row->created_at }}</td>
                        <td>
                            <a href="/delete/{{ $row->nim }}" class="btn btn-danger">Delete</a>
                            <a href="/edit/{{ $row->nim }}" class="btn btn-info">Edit</a>
                        </td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>