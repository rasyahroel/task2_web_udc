<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="style.css">
    <title>CRUD Mahasiswa</title>
</head>

<body>
    <div class="table-wrapper">
        <h2>CRUD Data Mahasiswa</h2>
        <button onclick="window.location.href='create.php'">
            Create Data
        </button>
        <table border="1" cellpadding="10" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'action\conn.php';
                $no = 1;
                $query = mysqli_query($conn, "SELECT * FROM mhs");
                while ($data = mysqli_fetch_object($query)) {
                ?>
                    <tr>
                        <td class="center"><?php echo $no ?></td>
                        <td><?php echo $data->nim ?></td>
                        <td><?php echo $data->nama ?></td>
                        <td><?php echo $data->jurusan ?></td>
                        <td class="center">
                            <a href="edit.php?id=<?php echo $data->id_mhs ?>">Edit</a> ||
                            <a href="action\delete.php?id=<?php echo $data->id_mhs ?>">Delete</a>
                        </td>
                    </tr>
                <?php
                    $no++;
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>