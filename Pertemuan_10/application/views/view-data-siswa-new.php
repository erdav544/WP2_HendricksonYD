<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seluruh Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        html,
        body {
            height: 100%;
        }
    </style>
</head>

<body>
    <main>
        <div class="container py-4">
            <h1 class="text-center text-uppercase">Seluruh Data User</h1>

            <div class="table-responsive my-4">
                <table class="table table-primary table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIS</th>
                            <th>Nama Siswa</th>
                            <th>Kelas</th>
                            <th>Tempat, Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamis</th>
                            <th>Agama</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <?php $i = 1; ?>
                        <?php foreach ($records as $siswa) : ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?= $siswa->nis; ?></td>
                                <td><?= $siswa->nama; ?></td>
                                <td><?= $siswa->kelas; ?></td>
                                <td><?= $siswa->tmp_lahir; ?>, <?= date("d-m-Y", strtotime($siswa->tgl_lahir)); ?></td>
                                <td><?= $siswa->alamat; ?></td>
                                <td><?php echo ($siswa->jk == 'l') ? "Laki - laki" : (($siswa->jk == 'p') ? "Perempuan" : "n/a"); ?></td>
                                <td><?= $siswa->agama; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <div class="d-flex justify-content-center align-items-center">
                <a href="<?= base_url('siswa'); ?>" class="btn btn-primary" role="button">Kembali</a>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>