<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Matakuliah</title>
</head>
<body style="background-color: #dedede;" >
    <center>
    <form style="background-color: #dedede;"  action="<?= base_url() ?>matakuliah/cetak" method="post" >
        <table>
            <tr>
                <th colspan="3">
                    Form Input Data Mata Kuliah
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>KODE MTK</th>
                <th>:</th>
                <td>
                    
                    <input type="text" name="kode" id="kode" autocomplete="off"> 
                    <br>
                    <?= form_error('kode','<small style="color:red">','</small>'); ?>
                    
                </td>
            </tr>
            <tr>
                <th>NAMA</th>
                <th>:</th>
                <td>
                    
                    <input type="text" name="nama" id="nama" autocomplete="off">
                    <br>
                    <?= form_error('nama','<small style="color:red">','</small>'); ?>
                </td>
            </tr>
            <tr>
                <th>SKS</th>
                <td>:</td>
                <td>
                    <select name="sks" id="sks">
                        <option value="">Pilih SKS</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                    <br>
                    <?= form_error('sks','<small style="color:red">','</small>'); ?>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <input type="submit" value="Kirim" >
                </td>
            </tr>
        </table>
    </form>
</body>
</html>