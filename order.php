<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $film = $_POST["film"];
    $jumlahTiket = $_POST["jumlahTiket"];
    $hargaTiket = 50000; // Harga tiket per satuannya

    // Hitung total harga tiket
    $totalHarga = $hargaTiket * $jumlahTiket;

    // Cek apakah customer adalah member tetap (diskon 30%)
    $diskon = 0;
    $isMember = true; // Ganti menjadi false jika customer bukan member tetap
    if ($isMember) {
        $diskon = $totalHarga * 0.3;
        $totalHarga -= $diskon;
    }

    // Simpan orderan ke dalam file.txt
    $orderDate = date("Y-m-d H:i:s");
    $orderContent = "Film: $film, Jumlah Tiket: $jumlahTiket, Total Harga: $totalHarga, Diskon: $diskon, Tanggal Pesan: $orderDate\n";
    file_put_contents("order.txt", $orderContent, FILE_APPEND);

    // Redirect kembali ke halaman booking.php
    header("Location: booking.html");
    exit();
}
