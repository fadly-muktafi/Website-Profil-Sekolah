<?php
// index.php - Homepage
$page_title = "Beranda";
$page_description = "Selamat datang di website resmi sekolah kami. Temukan informasi lengkap tentang profil sekolah, berita terkini, dan fasilitas pendidikan modern.";
include 'inc/header.php';
?>

<!-- Hero Section -->
<section class="main-content">
    <div class="page-header">
        <h1 class="page-title">Selamat Datang di SMK Negeri 64</h1>
        <p class="page-subtitle">Membangun masa depan melalui pendidikan berkualitas dan inovasi pembelajaran</p>
    </div>

    <!-- Features Section -->
    <div class="grid-3" style="max-width: 1200px; margin: 0 auto;">
        <div class="content-card feature-card">
            <div style="text-align: center; margin-bottom: 20px;">
                <i class="fas fa-graduation-cap" style="font-size: 3rem; background: linear-gradient(45deg, #fff, #f0f0f0); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;"></i>
            </div>
            <h3 style="font-size: 1.5rem; font-weight: 600; margin-bottom: 15px; text-align: center;">Pendidikan Berkualitas</h3>
            <p style="opacity: 0.9; line-height: 1.6; text-align: center;">Kurikulum terdepan yang mempersiapkan siswa untuk masa depan yang cerah dengan pendekatan pembelajaran modern dan teknologi terkini.</p>
        </div>

        <div class="content-card feature-card">
            <div style="text-align: center; margin-bottom: 20px;">
                <i class="fas fa-users" style="font-size: 3rem; background: linear-gradient(45deg, #fff, #f0f0f0); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;"></i>
            </div>
            <h3 style="font-size: 1.5rem; font-weight: 600; margin-bottom: 15px; text-align: center;">Tenaga Pengajar Berpengalaman</h3>
            <p style="opacity: 0.9; line-height: 1.6; text-align: center;">Tim guru profesional dan berpengalaman yang berkomitmen untuk memberikan yang terbaik bagi setiap siswa dengan dedikasi tinggi.</p>
        </div>

        <div class="content-card feature-card">
            <div style="text-align: center; margin-bottom: 20px;">
                <i class="fas fa-laptop-code" style="font-size: 3rem; background: linear-gradient(45deg, #fff, #f0f0f0); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;"></i>
            </div>
            <h3 style="font-size: 1.5rem; font-weight: 600; margin-bottom: 15px; text-align: center;">Fasilitas Modern</h3>
            <p style="opacity: 0.9; line-height: 1.6; text-align: center;">Dilengkapi dengan teknologi terkini dan fasilitas pembelajaran yang mendukung proses belajar mengajar yang efektif dan menyenangkan.</p>
        </div>
    </div>

    <!-- Quick Links Section -->
    <div class="grid-2" style="max-width: 1000px; margin: 60px auto 0;">
        <div class="content-card">
            <h3 style="font-size: 1.8rem; margin-bottom: 20px; display: flex; align-items: center; gap: 10px;">
                <i class="fas fa-newspaper" style="color: #ffd700;"></i>
                Berita Terbaru
            </h3>
            <p style="margin-bottom: 20px; opacity: 0.9;">Ikuti perkembangan terbaru dan kegiatan menarik di sekolah kami. Dapatkan informasi update tentang prestasi siswa, kegiatan ekstrakurikuler, dan pengumuman penting.</p>
            <a href="berita.php" style="display: inline-block; padding: 12px 25px; background: rgba(255, 255, 255, 0.2); color: white; text-decoration: none; border-radius: 25px; font-weight: 600; transition: all 0.3s ease; border: 2px solid rgba(255, 255, 255, 0.3);">
                Lihat Semua Berita <i class="fas fa-arrow-right" style="margin-left: 8px;"></i>
            </a>
        </div>

        <div class="content-card">
            <h3 style="font-size: 1.8rem; margin-bottom: 20px; display: flex; align-items: center; gap: 10px;">
                <i class="fas fa-envelope" style="color: #4ade80;"></i>
                Hubungi Kami
            </h3>
            <p style="margin-bottom: 20px; opacity: 0.9;">Butuh informasi lebih lanjut? Tim kami siap membantu menjawab pertanyaan Anda tentang pendaftaran, program sekolah, atau hal lainnya.</p>
            <a href="kontak.php" style="display: inline-block; padding: 12px 25px; background: rgba(255, 255, 255, 0.2); color: white; text-decoration: none; border-radius: 25px; font-weight: 600; transition: all 0.3s ease; border: 2px solid rgba(255, 255, 255, 0.3);">
                Kontak Kami <i class="fas fa-arrow-right" style="margin-left: 8px;"></i>
            </a>
        </div>
    </div>

    <!-- Statistics Section -->
    <div class="content-card" style="max-width: 1000px; margin: 60px auto 0; text-align: center;">
        <h3 style="font-size: 2rem; margin-bottom: 40px;">Pencapaian Kami</h3>
        <div class="grid-3">
            <div style="padding: 20px;">
                <div style="font-size: 3rem; font-weight: bold; color: #ffd700; margin-bottom: 10px;">500+</div>
                <p style="font-size: 1.1rem; opacity: 0.9;">Siswa Aktif</p>
            </div>
            <div style="padding: 20px;">
                <div style="font-size: 3rem; font-weight: bold; color: #4ade80; margin-bottom: 10px;">50+</div>
                <p style="font-size: 1.1rem; opacity: 0.9;">Guru Berkualitas</p>
            </div>
            <div style="padding: 20px;">
                <div style="font-size: 3rem; font-weight: bold; color: #60a5fa; margin-bottom: 10px;">25+</div>
                <p style="font-size: 1.1rem; opacity: 0.9;">Tahun Pengalaman</p>
            </div>
        </div>
    </div>
</section>

<style>
/* Additional styles for homepage */
.content-card a:hover {
    background: white;
    color: #667eea;
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
}
</style>

<?php include 'inc/footer.php'; ?>