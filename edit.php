<?php
session_start();

if (!isset($_SESSION['dataSiswa'][$_GET['index']])) {
    header('Location: index.php');
    exit;
}

if (isset($_POST['submit'])) {
    $data = [
        'nis' => $_POST['nis'],
        'nama' => $_POST['nama'],
        'rayon' => $_POST['rayon'],
    ];
    if ($_SESSION['dataSiswa'][$_GET['index']] != $data) {
        $_SESSION['dataSiswa'][$_GET['index']] = $data;
        $_SESSION['info'] = 'Berhasil diubah';
    }
    header('Location: index.php');
    exit;
}
?>

<!doctype html>
<html lang="en">

<head>
    <title>Edit Data Siswa</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    <main class="container d-flex flex-column gap-3 pt-3">
        <div class="add bg-light rounded border shadow container text-center py-3">
            <h1 class="bg-warning text-center">Edit Data Siswa</h1>
            <form action="" method="post" class="row row-cols-md-2 gap-2 justify-content-evenly form-group p-3 rounded">
                <section class="d-flex flex-xl-row flex-column gap-3">
                    <div class="form-group">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukan Nama" required value="<?= $_SESSION['dataSiswa'][$_GET['index']]['nama'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="nis" class="form-label">NIS</label>
                        <input type="number" id="nis" name="nis" class="form-control" placeholder="Masukan NIS" required value="<?= $_SESSION['dataSiswa'][$_GET['index']]['nis'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="rayon" class="form-label">Rayon</label>
                        <input type="text" id="rayon" name="rayon" class="form-control" placeholder="Masukan Rayon" required value="<?= $_SESSION['dataSiswa'][$_GET['index']]['rayon'] ?>">
                    </div>
                </section>
                <div class="text-start text-xl-center mt-3">
                    <button type="submit" name="submit" class="btn btn-primary">Edit</button>
                    <a onclick="return confirm('Apakah anda yakin ingin membatalkan perubahan?')" href="index.php" class="btn btn-danger">Batal</a>
                </div>
            </form>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>

</html>