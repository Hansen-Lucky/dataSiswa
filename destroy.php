<?php

session_start();

if (!empty($_SESSION['dataSiswa'])) {
    session_destroy();
    $_SESSION['info'] = 'Berhasil menghapus semua data';
    header('Location: index.php');
    exit;
} else {
    header('location:index.php');
}
