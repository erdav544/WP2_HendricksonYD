<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        html,
        body {
            height: 100%;
        }

        .form-container {
            min-width: 35rem;
            min-height: 40rem;
            border-radius: .85rem;
            border: .075rem solid #748B9C;
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
            justify-content: space-evenly;
        }
    </style>
</head>

<body>
    <main>
        <div class="container d-flex justify-content-center align-items-center">
            <div class="form-container my-5 p-5">
                <div class="form-header">
                    <h2 class="text-center text-uppercase">Form Data Siswa</h2>
                </div>
                <form action="<?= base_url('siswa/simpan'); ?>" method="POST">
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" name="nis" id="nis" placeholder="0000xxxx">
                        <label for="nis">NIS</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="John Doe" required>
                        <label for="nama">Nama Siswa</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="kelas" id="kelas" placeholder="15.xx.xx" required>
                        <label for="kelas">Kelas</label>
                    </div>
                    <div class="row g-2">
                        <div class="col-md">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="tmp_lahir" id="tmp_lahir" placeholder="Bumi" required>
                                <label for="tmp_lahir">Tempat Lahir</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" required>
                                <label for="tgl_lahir">Tanggal Lahir</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" name="alamat" id="alamat" style="height: 100px" placeholder="Bumi" required></textarea>
                        <label for="alamat">Alamat</label>
                    </div>
                    <div class="mb-3 d-flex align-items-center gap-2">
                        <p class="mb-0">Jenis Kelamin : </p>

                        <div class="btn-group" role="group">
                            <input type="radio" class="btn-check" name="jk" id="l" autocomplete="off" value="l" required>
                            <label class="btn btn-outline-primary" for="l">Laki - laki</label>

                            <input type="radio" class="btn-check" name="jk" id="p" autocomplete="off" value="p">
                            <label class="btn btn-outline-primary" for="p">Perempuan</label>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select" name="agama" id="agama" required>
                            <option selected>Pilih Agama</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Budha">Budha</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Protestan">Protestan</option>
                            <option value="Khonghucu">Khonghucu</option>
                        </select>
                        <label for="agama">Agama</label>
                    </div>
                    <input type="submit" class="btn btn-primary w-100" value="Submit">
                </form>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>