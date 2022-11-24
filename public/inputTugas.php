<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input</title>
</head>

<body style="color: white;">
    <h1 align="center">Profile Mahasiswa</h1>
    <form action="proses.php" method="post">
        <table align="center" width="430px">
            <tr>
                <td>Nama Mahasiswa</td>
                <td>:</td>
                <td><input type="text" name="nama" placeholder="Nama Lengkap"></td>
            </tr>
            <tr>
                <td>Nim</td>
                <td>:</td>
                <td><input type="text" name="nama" placeholder="NIM"></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td>
                    <Select name="jurusan">
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                    </Select>
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <input type="radio" name="jk" value="Pria">Pria
                    <input type="radio" name="jk" value="Wanita">Wanita
                </td>
            </tr>
            <tr>
                <td>Nomor Handphone</td>
                <td>:</td>
                <td><input type="text" name="hp" placeholder="No Handphone"></td>
            </tr>
            <tr>
                <td colspan="3">
                    <input type="submit" value="Kirim"> &nbsp;
                    <input type="reset" value="Batal">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>