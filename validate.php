<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $creditCardNumber = $_POST["credit_card_number"];

    // Fungsi untuk memvalidasi nomor kartu kredit menggunakan algoritma Luhn
    function validateCreditCardNumber($number) {
        $number = preg_replace('/\D/', '', $number); // Hapus semua karakter non-digit

        $sum = 0;
        $shouldDouble = false; // Menandakan posisi digit yang akan digandakan sesuai algoritma Luhn

        // Lakukan iterasi digit dari kanan ke kiri
        for ($i = strlen($number) - 1; $i >= 0; $i--) {
            $digit = $number[$i];
            if ($shouldDouble) { // Jika posisi digit harus digandakan
                $digit *= 2;
                if ($digit > 9) { // Jika hasilnya lebih dari 9, kurangi 9 dari hasilnya
                    $digit -= 9;
                }
            }
            $sum += $digit; // Tambahkan digit ke jumlah total
            $shouldDouble = !$shouldDouble; // Posisi berikutnya akan kebalikan dari posisi saat ini
        }

        // Nomor kartu kredit valid jika total jumlah habis dibagi 10
        return $sum % 10 === 0;
    }

    // Validasi nomor kartu kredit
    $isValid = validateCreditCardNumber($creditCardNumber);

    // Output hasil validasi sebagai respons HTTP
    if ($isValid) {
        echo "<p class='valid'>Nomor kartu kredit VALID</p>";
    } else {
        echo "<p class='invalid'>Nomor kartu kredit TIDAK VALID</p>";
    }
    exit();
}
?>