<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?> - [Nama Prodi Anda]</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

    <nav class="bg-blue-800 text-white shadow-md">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            
            <a href="index.php" class="text-xl font-bold">[Nama Prodi Anda]</a>

            <div class="hidden md:flex items-center space-x-6">
                <a href="index.php" class="<?php echo ($current_page == 'index.php') ? 'border-b-2' : ''; ?> hover:text-blue-200">Home</a>
                <a href="tentang.php" class="<?php echo ($current_page == 'tentang.php') ? 'border-b-2' : ''; ?> hover:text-blue-200">Tentang Prodi</a>
                <a href="layanan.php" class="<?php echo ($current_page == 'layanan.php') ? 'border-b-2' : ''; ?> hover:text-blue-200">Kurikulum</a>
                <a href="kontak.php" class="<?php echo ($current_page == 'kontak.php') ? 'border-b-2' : ''; ?> hover:text-blue-200">Kontak</a>
                
                <a href="httpsPOST" class="bg-yellow-400 text-blue-900 font-bold py-2 px-4 rounded hover:bg-yellow-300">Pendaftaran</a>
            </div>

            <button id="mobile-menu-button" class="md:hidden flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>

        <div id="mobile-menu" class="hidden md:hidden px-6 pb-4 space-y-2">
            <a href="index.php" class="block hover:text-blue-200">Home</a>
            <a href="tentang.php" class="block hover:text-blue-200">Tentang Prodi</a>
            <a href="layanan.php" class="block hover:text-blue-200">Kurikulum</a>
            <a href="kontak.php" class="block hover:text-blue-200">Kontak</a>
            <a href="httpsPOST" class="mt-2 block bg-yellow-400 text-blue-900 font-bold py-2 px-4 rounded text-center">Pendaftaran</a>
        </div>
    </nav>

    <main class="container mx-auto px-6 py-8">
