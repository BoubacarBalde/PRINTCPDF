<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1 class="text-center">Table Buku</h1><br>

        <a href="<?= base_url('print') ?> " target="_blank" class="btn btn-primary">Print PDF</a>

        <table class="table table-bordered mt-5">
            <tr>
                <th>No</th>
                <th>Kode Buku</th>
                <th>Judul Buku</th>
                <th>Harga</th>
            </tr>
            <?php $no = 1; 
               foreach($data as $key => $valeur) { ?>
                  <tr>
                     <td><?= $no++ ?></td>
                     <td><?= $valeur['kode_buku'] ?></td>
                     <td><?= $valeur['judul_buku'] ?></td>
                     <td><?= $valeur['harga'] ?></td>
                  </tr>
            <?php } ?>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>