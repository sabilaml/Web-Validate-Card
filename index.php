<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Validator Nomor Kartu Kredit</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="background-video">
        <video autoplay loop muted playsinline>
            <source src="videogedung.mp4" type="video/mp4">
            Browser Anda tidak mendukung video tag.
        </video>
    </div>
    <div class="wrapper">
<div class="card-instruction">
    <img src="petunjukcardnumber.png" alt="Petunjuk Nomor Kartu Kredit" class="instruction-image"/>
</div>
<!-- Bagian sebelumnya tetap sama -->
<div class="card-validation">
    <div class="validation-box">
        <h1>Validasi Nomor Kartu Kredit</h1>
        <form action="validate.php" method="post" id="card-form">
            <input type="text" name="credit_card_number" id="credit_card_number" placeholder="Masukkan nomor kartu kredit">
            <button type="submit">Validasi</button>
        </form>
        <!-- Tempat untuk menampilkan hasil validasi -->
        <div id="validation-result"></div>
    </div>
</div>
<!-- Bagian selanjutnya tetap sama -->

    <div class="footer">
        Dibuat oleh Sabila &copy; 2024
    </div>
    <script src="js/script.js"></script>
</body>
</html>