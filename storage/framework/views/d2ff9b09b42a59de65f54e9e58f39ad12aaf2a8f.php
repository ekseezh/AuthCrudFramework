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
    <?php if($message = Session::get('success')): ?>
    <div class="alert alert-success" role="alert">
        <?php echo e($message); ?>

    </div>
    <?php endif; ?>
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
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <th scope="row"><?php echo e($row->nim); ?></th>
                        <td><?php echo e($row->name); ?></td>
                        <td><?php echo e($row->umur); ?></td>
                        <td><?php echo e($row->alamat); ?></td>
                        <td><?php echo e($row->kota); ?></td>
                        <td><?php echo e($row->kelas); ?></td>
                        <td><?php echo e($row->jurusan); ?></td>
                        <td><?php echo e($row->created_at); ?></td>
                        <td>
                            <a href="/delete/<?php echo e($row->nim); ?>" class="btn btn-danger">Delete</a>
                            <a href="/edit/<?php echo e($row->nim); ?>" class="btn btn-info">Edit</a>
                        </td>
                      </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html><?php /**PATH C:\xampp\htdocs\LaravelForm\resources\views/datamahasiswa.blade.php ENDPATH**/ ?>