<html>

<head>
    <title>Form Input Siswa</title>
</head>

<body>
    <center>
        <form action="<?= base_url('siswa/simpan'); ?>" method="post">
            <table>
                <tr>
                    <th colspan="3">
                        Form Input Data Siswa
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>NIS</th>
                    <td>:</td>
                    <td>
                        <input type="number" name="nis" id="nis">
                    </td>
                </tr>
                <tr>
                    <th>Nama Siswa</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" id="nama">
                    </td>
                </tr>
                <tr>
                    <th>Kelas</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="kelas" id="kelas">
                    </td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td>:</td>
                    <td>
                        <input type="date" name="tgl_lahir" id="tgl_lahir">
                    </td>
                </tr>
                <tr>
                    <th>Tempat Lahir</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="tmp_lahir" id="tmp_lahir">
                    </td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>:</td>
                    <td>
                        <textarea name="alamat" id="alamat" cols="21" rows="6"></textarea>
                    </td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jk" id="l" value="l">
                        <label for="l">Laki - laki</label>
                        <input type="radio" name="jk" id="p" value="p">
                        <label for="p">Perempuan</label>
                    </td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <td>:</td>
                    <td>
                        <select name="agama" id="agama">
                            <option value="">Pilih Agama</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Budha">Budha</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Protestan">Protestan</option>
                            <option value="Khonghucu">Khonghucu</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>