// Dapatkan elemen tombol dan menu
const menuButton = document.getElementById('mobile-menu-button');
const mobileMenu = document.getElementById('mobile-menu');

// Tambahkan event listener 'click' pada tombol
menuButton.addEventListener('click', () => {
    // Toggle class 'hidden' pada menu mobile
    mobileMenu.classList.toggle('hidden');
});
