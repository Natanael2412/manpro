<?php
$query = isset($_GET['q']) ? trim($_GET['q']) : '';

$data = [
    ['judul' => 'Profil Program Studi SIEGA', 'link' => 'tentang.php'],
    ['judul' => 'Kurikulum dan Mata Kuliah', 'link' => 'layanan.php'],
    ['judul' => 'Kontak dan Lokasi Kampus', 'link' => 'kontak.php'],
    ['judul' => 'Pendaftaran Mahasiswa Baru', 'link' => 'https://wa.me/6287779668055?text=Halo%20saya%20tertarik%20mendaftar%20SIEGA'],
];

$hasil = [];
if ($query != '') {
    foreach ($data as $item) {
        if (stripos($item['judul'], $query) !== false) {
            $hasil[] = $item;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pencarian - SIEGA</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans min-h-screen">

    <nav class="bg-blue-800 text-white shadow-md">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="index.php" class="flex items-center space-x-3">
                <img class="h-10 w-auto" src="img/logosieganew-250x141.png" alt="Logo SIEGA">
                <span class="text-xl font-bold text-white">SIEGA</span>
            </a>

            <form action="search.php" method="GET" class="flex items-center space-x-2">
                <input type="text" name="q" placeholder="Cari..." value="<?php echo htmlspecialchars($query); ?>"
                    class="px-3 py-1 rounded-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-300">
                <button type="submit" class="bg-blue-600 px-3 py-1 rounded-lg hover:bg-blue-700">🔍</button>
            </form>
        </div>
    </nav>

    <main class="container mx-auto px-6 py-8">

        <h1 class="text-2xl font-bold mb-6 text-gray-800">Hasil Pencarian</h1>

        <?php if ($query == ''): ?>
            <p class="text-gray-600">Masukkan kata kunci untuk mencari informasi.</p>

        <?php elseif (count($hasil) > 0): ?>
            <p class="text-gray-600 mb-4">Menampilkan hasil untuk: <span class="font-semibold">"<?php echo htmlspecialchars($query); ?>"</span></p>
            <ul class="space-y-4">
                <?php foreach ($hasil as $item): ?>
                    <li class="bg-white shadow-md p-4 rounded-lg hover:shadow-lg transition">
                        <a href="<?php echo $item['link']; ?>" class="text-blue-700 font-semibold hover:underline">
                            <?php echo $item['judul']; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>

        <?php else: ?>
            <p class="text-red-600">Tidak ada hasil yang cocok dengan "<strong><?php echo htmlspecialchars($query); ?></strong>".</p>
        <?php endif; ?>

        <div class="mt-8">
            <a href="index.php" class="text-blue-700 hover:underline">&larr; Kembali ke Beranda</a>
        </div>

    </main>

</body>
</html>
<?php
include 'partials/footer.php';
?>