<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="style.css">
    <title>CRUD Mahasiswa</title>
</head>

<body>
    <div class="table-wrapper">
        <div class="form-wrapper">
            <h2>CRUD Data Mahasiswa</h2>
            <form action="action\save.php" method="post">
                <label>
                    NIM
                    <input type="text" name="nim">
                </label>
                <label>
                    Nama
                    <input type="text" name="nama">
                </label>
                <label>
                    Jurusan
                    <select name="jurusan">
                        <option value="Teknologi Informasi">Teknologi Informasi</option>
                        <option value="Teknik Sipil">Teknik Sipil</option>
                        <option value="Teknik Mesin">Teknik Mesin</option>
                    </select>
                </label>
                <button type="submit">Save</button>
            </form>
        </div>
    </div>
</body>

</html>