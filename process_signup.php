<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>
    
</body>
</html>
<?php
// Lokasi file untuk menyimpan data pengguna
$file = 'data_pendaftar.txt';

// Cek apakah form sudah dikirim melalui metode POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form sign-up
    $username = $_POST['newUsername'];
    $password = $_POST['newPassword'];

    // Siapkan data dalam format yang mudah dibaca (misalnya CSV)
    $data = "$username,$password\n";

    // Simpan data ke dalam file
    file_put_contents($file, $data, FILE_APPEND);

    // Jalankan SweetAlert menggunakan echo dengan JS
    echo "<script>
        Swal.fire({
            icon: 'success',
            title: 'Pendaftaran berhasil!',
            text: 'Silakan login.',
            confirmButtonText: 'OK'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = 'index.html'; // Redirect ke halaman login
            }
        });
    </script>";
}
?>
