<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Kursus</title>
</head>
<style>
    body {
        justify-content: center;   
        align-items: center;
    }
    form {
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

    <form action="kursus_action.php" method="POST">
        <label for="nama">Nama Peserta</label>
        <input type="text" name="nama" required><br><br>

        <label>Pilih Paket Kursus</label><br>
        <input type="checkbox" name="paket[]" value="Web Programming"> Web Programming<br>
        <input type="checkbox" name="paket[]" value="JAVA"> JAVA<br>
        <input type="checkbox" name="paket[]" value="Mobile Programming"> Mobile Programming<br>
        <input type="checkbox" name="paket[]" value="Phyton"> Phyton<br><br>

        <label for="waktu">Pilih Waktu Kursus</label>
        <select name="waktu">
            <option value="Pagi / Siang">Pagi / Siang</option>
            <option value="Sore / Malam">Sore / Malam</option>
        </select><br><br>

        <button type="submit">Kirim</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>
