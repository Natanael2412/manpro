<?php
$title = "Kurikulum";
include 'partials/header.php';
?>

<div class="bg-white p-8 rounded-lg shadow-lg">
    <h1 class="text-4xl font-bold text-gray-800 mb-6">Kurikulum & Mata Kuliah</h1>
    <p class="text-lg text-gray-600 mb-8">Kami menawarkan kurikulum yang berfokus pada keahlian praktis dan teoritis.</p>

    <div class="grid md:grid-cols-2 gap-8">
        <div class="border p-6 rounded-lg shadow-sm">
            <h3 class="text-2xl font-semibold text-blue-800 mb-3">Bidang Peminatan / Konsentrasi</h3>
            <ul class="list-disc list-inside text-gray-700">
                <li>[Peminatan 1, misal: Software Engineering]</li>
                <li>[Peminatan 2, misal: Data Science]</li>
                <li>[Peminatan 3, misal: Jaringan Komputer]</li>
            </ul>
        </div>
        <div class="border p-6 rounded-lg shadow-sm">
            <h3 class="text-2xl font-semibold text-blue-800 mb-3">Mata Kuliah Unggulan</h3>
            <ul class="list-disc list-inside text-gray-700">
                <li>Pemrograman Berbasis Objek</li>
                <li>Kecerdasan Buatan (AI)</li>
                <li>Manajemen Proyek TI</li>
                <li>Keamanan Informasi</li>
            </ul>
        </div>
    </div>
</div>

<?php
include 'partials/footer.php';
?>
