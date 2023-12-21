<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anket Formu</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form verilerini işleme
    $ad = $_POST["ad"];
    $soyad = $_POST["soyad"];
    $yas = $_POST["yas"];
    $cinsiyet = $_POST["cinsiyet"];
    $meslek = $_POST["meslek"];

    // Veritabanına kaydetme, dosyaya yazma veya başka bir işlem yapma
    // Bu örnekte sadece ekrana yazdırıyoruz
    echo "<h2>Teşekkürler, Anketi Doldurdunuz!</h2>";
    echo "<p>Ad: $ad</p>";
    echo "<p>Soyad: $soyad</p>";
    echo "<p>Yaş: $yas</p>";
    echo "<p>Cinsiyet: $cinsiyet</p>";
    echo "<p>Meslek: $meslek</p>";
} else {
    // Anket formunu gösterme
?>
    <h2>Anket Formu</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Ad: <input type="text" name="ad" required><br>
        Soyad: <input type="text" name="soyad" required><br>
        Yaş: <input type="number" name="yas" required><br>
        Cinsiyet: 
        <input type="radio" name="cinsiyet" value="Erkek" checked> Erkek
        <input type="radio" name="cinsiyet" value="Kadın"> Kadın<br>
        Meslek: 
        <select name="meslek">
            <option value="Öğrenci">Öğrenci</option>
            <option value="Çalışan">Çalışan</option>
            <option value="Serbest Meslek">Serbest Meslek</option>
        </select><br>
        <input type="submit" value="Gönder">
    </form>
<?php } ?>

</body>
</html>
