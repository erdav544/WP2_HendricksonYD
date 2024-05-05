<html>

<head>
    <title>Tampil Data Siswa</title>
</head>

<body>
    <center>
        <table>
            <tr>
                <th colspan="3">
                    Tampil Data Siswa
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <td>NIS</td>
                <td>:</td>
                <td>
                    <?= $siswa['nis']; ?>
                </td>
            </tr>
            <tr>
                <td>Nama Siswa</td>
                <td>:</td>
                <td>
                    <?= $siswa['nama']; ?>
                </td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td>
                    <?= $siswa['kelas']; ?>
                </td>
            </tr>
            <tr>
                <td>Tempat dan Tanggal Lahir</td>
                <td>:</td>
                <td>
                    <?= $siswa['tmp_lahir']; ?>, <?= $siswa['tgl_lahir']; ?>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>
                    <?= $siswa['alamat']; ?>
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <?php
                    $jeniskel = $siswa['jk'];
                    if ($jeniskel == "l") {
                        echo "Laki - laki";
                    } elseif ($jeniskel == "p") {
                        echo "Perempuan";
                    } else {
                        echo "n/a";
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td>
                    <?= $siswa['agama']; ?>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <a href="<?= base_url('siswa'); ?>">Kembali</a>
                </td>
            </tr>
        </table>
    </center>
</body>

</html>