<?php
require_once '../app/core/Database.php';
require_once '../app/models/userModel.php';
require_once '../app/config/config.php';

$userModel = new UserModel();


$data = [
    'nama' => 'Administrator',
    'username' => 'admin',
    'password' => 'admin123'
];
$cek = $userModel->cekUsername();
if ($cek) {
    echo "Username sudah ada!";
} else {
    $userModel->tambahUser($data);
    echo "User admin berhasil ditambahkan!";
}
