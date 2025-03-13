<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bukti Daftar Kursus</title>
</head>
<style>
    .container {
        background: linear-gradient(-135deg, #CBE4FF, #f2f2f2);
        margin-left: 27%;
        padding: 20px;
        max-width: 500px;
        border:solid black 1px;
        border-radius: 20px;
        box-shadow: 15px 15px 15px rgba(0, 0, 0, 0.7), inset 25px 25px 25px rgba(255, 255, 255, 0.7);
    }
</style>
<body>
    <h2 style="text-align:center;">LEMBAGA KURSUS KOMPUTER<br>"ANDA PASTI BISA"</h2>
    <hr>

    <?php
    $nama_petugas = "<< isikan nama Anda di script >>";
    $nama_peserta = isset($_POST['nama']) ? $_POST['nama'] : "Tidak ada nama";
    $waktu = isset($_POST['waktu']) ? $_POST['waktu'] : "Tidak dipilih";
    $paket_dipilih = isset($_POST['paket']) ? $_POST['paket'] : [];

    $biaya_kursus = [
        "Web Programming" => 550000,
        "JAVA" => 450000,
        "Mobile Programming" => 650000,
        "Phyton" => 750000
    ];

    $total_biaya = 0;
    ?>

    <div class="container">
        <p>Nama Petugas: <?= $nama_petugas; ?></p>
        <p>Nama Peserta: <?= $nama_peserta; ?></p>
        <p>Pilihan Paket Kursus:</p>
        <ul>
            <?php 
            if (!empty($paket_dipilih)) {
                foreach ($paket_dipilih as $paket) {
                    echo "<li>$paket - " . number_format($biaya_kursus[$paket], 0, ',', '.') . "</li>";
                    $total_biaya += $biaya_kursus[$paket];
                }
            } else {
                echo "<li>Tidak ada paket yang dipilih</li>";
            }
            ?>
        </ul>
    
        <p>Pilihan Waktu Kursus: <?= $waktu; ?></p>
        <hr>
        <p><strong>Total Biaya Kursus: <?= number_format($total_biaya, 0, ',', '.'); ?></strong></p>
    </div>
</body>
</html>
