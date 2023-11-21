<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./stylee.css">
    <title>Tugas Baru</title>
</head>

<body>
    <div class="formulir">
        <h1> TAMBAH TUGAS BARU</h1>
        <form action="proses_input.php" method="post">

            <label for="matakuliah">Mata Kuliah</label>
            <select name="matakuliah" id="matakuliah" class="form-input">
                <option value="Pemograman Web">Pemograman Web</option>
                <option value="Aljabar Linear">Aljabar Linear</option>
                <option value="Grafik Komputer">Grafik Komputer</option>
                <option value="Kewarganegaraan">Kewarganegaraan</option>
            </select>

            <label for="kelas">Pilih Kelas</label>
            <select name="kelas" id="kelas" class="form-input">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
            </select>

            <label for="judul">Judul Tugas</label>
            <input type="text" name="judul" id="judul" class="form-input" required>

            <label for="pertemuan">Tugas Peremuan ke</label>
            <input type="number" name="pertemuan" id="pertemuan" class="form-input" required>

            <label for="deskripsi">Deskripsi Tugas</label>
            <textarea name="deskripsi" id="deskripsi" cols="30" rows="5" class="form-input" requered></textarea>

            <label for="tanggal_mulai">Tanggal Mulai</label>
            <input type="datetime-local" id="tanggal_mulai" name="tanggal_mulai" class="form-input">

            <label for="tanggal_pengumpulan">Tanggal Pengumpulan</label>
            <input type="datetime-local" id="tanggal_pengumpulan" name="tanggal_pengumpulan" class="form-input" requered>

            <button type="submit" id="btn-kirim">Kirim</button>

        </form>
    </div>
</body>

</html>