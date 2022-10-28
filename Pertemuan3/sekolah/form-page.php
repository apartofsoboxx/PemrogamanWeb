<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Data Peserta Didik</h1>
    <div class="kotakform">
        <form action="form.php" method="POST">
            <label for="nis">NIS</label>
            <input type="text" name="nis" id="nis" placeholder="NIS anda">
            <label for="name">Nama Lengkap</label>
            <input type="text" name="nama" id="nama" placeholder="Nama Lengkap Anda">
            <label for="addr">Alamat</label>
            <input type="text" name="alamat" id="addr" placeholder="Alamat anda">
            <label for="kelas">Kelas</label>
            <select name="kelas" id="kelas">
                <option value="10">X</option>
                <option value="11">XI</option>
                <option value="12">XII</option>
            </select>
            <label for="jurusan">Jurusan</label>
            <select name="jurusan" id="jurusan">
                <option value="MM">Multimedia</option>
                <option value="RPL">Rekayasa Perangkat Lunak</option>
                <option value="TKJ">Teknik Komputer Jaringan</option>
            </select>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>

</html>