<?php
session_start();

if (!empty($_SESSION['dataSiswa'] && isset($_GET['index']))) {
    unset($_SESSION['dataSiswa'][$_GET['index']]);
    $_SESSION['info'] = 'Berhasil dihapus';
    header('Location: index.php');
    exit;
} else {
    header('location : index.php');
}
