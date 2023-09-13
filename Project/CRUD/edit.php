<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="style.css">
    <title>Edit || CRUD Mahasiswa</title>
</head>

<body>
    <div class="table-wrapper">
        <div class="form-wrapper">
            <?php
            include 'action\conn.php';
            $id = $_GET['id'];
            $query = mysqli_query($conn, "SELECT * FROM mhs where id_mhs = '$id'");
            while ($data = mysqli_fetch_object($query)) {
            ?>
                <form action="action\update.php?id=<?php echo $id; ?>" method="post">
                    <label>
                        NIM
                        <input type="text" name="nim" value="<?php echo $data->nim; ?>">
                    </label>
                    <label>
                        Nama
                        <input type="text" name="nama" value="<?php echo $data->nama; ?>">
                    </label>
                    <label>
                        Jurusan
                        <select name="jurusan">
                            <option value="Teknologi Informasi" <?php if ($data->jurusan == 'Teknologi Informasi') {
                                echo 'selected';
                            } ?>>Teknologi Informasi</option>
                            <option value="Teknik Sipil" <?php if ($data->jurusan == 'Teknik Sipil') {
                                echo 'selected';
                            } ?>>Teknik Sipil</option>
                            <option value="Teknik Mesin" <?php if ($data->jurusan == 'Teknik Mesin') {
                                echo 'selected';
                            } ?>>Teknik Mesin</option>
                        </select>
                    </label>
                    <button type="submit">Edit</button>

                <?php
            }
                ?>
                </form>
        </div>
    </div>

</body>

</html>