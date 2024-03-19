<!DOCTYPE html>
<html lang="en">
<!-- Tugas Pertemuan 4 -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
</head>

<body>
    <center>
        <table>
            <tr>
                <th colspan="3">
                    Tampil Data Mata Kuliah
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>Kode MTK</th>
                <th>:</th>
                <td>
                    <?= esc($kode); ?>
                </td>
            </tr>
            <tr>
                <td>Nama MTK</td>
                <td>:</td>
                <td>
                    <?= esc($nama); ?>
                </td>
            </tr>
            <tr>
                <td>SKS</td>
                <td>:</td>
                <td>
                    <?= esc($sks); ?>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <a href="<?= base_url('matakuliah'); ?>">Kembali</a>
                </td>
            </tr>
        </table>
    </center>
</body>

</html>