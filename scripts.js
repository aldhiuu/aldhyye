// Gulir Halus untuk Tautan Navigasi
document.addEventListener('DOMContentLoaded', () => {
    const tautanNavigasi = document.querySelectorAll('.nav-link');

    tautanNavigasi.forEach(tautan => {
        tautan.addEventListener('click', function (e) {

            const tujuan = document.querySelector(this.getAttribute('href'));
            if (tujuan) {
                window.scrollTo({
                    top: tujuan.offsetTop - 80, // Menyesuaikan untuk tinggi navbar
                    behavior: 'smooth'
                });
            }
        });
    });
});

// Tambahkan kelas aktif ke item navbar saat menggulir
window.addEventListener('scroll', () => {
    const bagian = document.querySelectorAll('section');
    const tautanNavigasi = document.querySelectorAll('.nav-link');

    let bagianSaatIni = '';

    bagian.forEach(bagian => {
        const bagianAtas = bagian.offsetTop - 100; // Offset untuk kenyamanan
        if (window.scrollY >= bagianAtas) {
            bagianSaatIni = bagian.getAttribute('id');
        }
    });

    tautanNavigasi.forEach(tautan => {
        tautan.classList.remove('active');
        if (tautan.getAttribute('href').includes(bagianSaatIni)) {
            tautan.classList.add('active');
        }
    });
});
