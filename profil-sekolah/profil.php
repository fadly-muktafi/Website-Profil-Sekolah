<?php
// profil.php - School Profile Page
$page_title = "Profil Sekolah";
$page_description = "Mengenal lebih dekat sejarah, visi misi, fasilitas, dan program unggulan sekolah kami yang telah berpengalaman puluhan tahun dalam dunia pendidikan.";
include 'inc/header.php';
?>

<section class="main-content">
    <div class="page-header">
        <h1 class="page-title">Profil Sekolah</h1>
        <p class="page-subtitle">Mengenal lebih dekat sejarah dan pencapaian sekolah kami</p>
    </div>

    <!-- Visi Misi Section -->
    <div class="grid-2" style="max-width: 1200px; margin: 0 auto;">
        <div class="content-card">
            <h3 style="font-size: 1.8rem; margin-bottom: 20px; display: flex; align-items: center; gap: 10px;">
                <i class="fas fa-eye" style="color: #ffd700;"></i>
                Visi Sekolah
            </h3>
            <p style="line-height: 1.8; opacity: 0.9; font-size: 1.1rem;">
                Menjadi lembaga pendidikan terdepan yang menghasilkan generasi cerdas, berkarakter, dan siap menghadapi tantangan global dengan berpegang teguh pada nilai-nilai moral dan etika.
            </p>
        </div>

        <div class="content-card">
            <h3 style="font-size: 1.8rem; margin-bottom: 20px; display: flex; align-items: center; gap: 10px;">
                <i class="fas fa-bullseye" style="color: #4ade80;"></i>
                Misi Sekolah
            </h3>
            <ul style="line-height: 1.8; opacity: 0.9; font-size: 1rem; list-style: none; padding: 0;">
                <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: #4ade80; margin-right: 10px;"></i>Menyelenggarakan pendidikan berkualitas tinggi</li>
                <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: #4ade80; margin-right: 10px;"></i>Mengembangkan karakter siswa yang berintegritas</li>
                <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: #4ade80; margin-right: 10px;"></i>Menciptakan lingkungan belajar yang kondusif</li>
                <li><i class="fas fa-check" style="color: #4ade80; margin-right: 10px;"></i>Mempersiapkan siswa untuk masa depan yang cerah</li>
            </ul>
        </div>
    </div>

    <!-- Sejarah Section -->
    <div class="content-card" style="max-width: 1200px; margin: 40px auto 0;">
        <h3 style="font-size: 1.8rem; margin-bottom: 25px; display: flex; align-items: center; gap: 10px;">
            <i class="fas fa-history" style="color: #60a5fa;"></i>
            Sejarah Sekolah
        </h3>
        <div class="grid-2" style="align-items: center;">
            <div>
                <p style="line-height: 1.8; opacity: 0.9; margin-bottom: 20px;">
                    Didirikan pada tahun 1998, sekolah kami telah menjadi pilihan utama bagi para orang tua yang menginginkan pendidikan berkualitas untuk anak-anak mereka. Berawal dari sebuah visi sederhana untuk memberikan pendidikan terbaik, kami terus berkembang dan berinovasi.
                </p>
                <p style="line-height: 1.8; opacity: 0.9;">
                    Selama lebih dari 25 tahun, kami telah meluluskan ribuan siswa yang kini berhasil dalam berbagai bidang profesi. Komitmen kami terhadap keunggulan akademik dan pembentukan karakter terus menjadi landasan dalam setiap langkah pengembangan sekolah.
                </p>
            </div>
            <div style="text-align: center;">
                <div style="background: rgba(255, 255, 255, 0.1); padding: 30px; border-radius: 15px; backdrop-filter: blur(5px);">
                    <div style="font-size: 3rem; font-weight: bold; color: #ffd700; margin-bottom: 10px;">1998</div>
                    <p style="font-size: 1.2rem; opacity: 0.9;">Tahun Didirikan</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Fasilitas Section -->
    <div class="content-card" style="max-width: 1200px; margin: 40px auto 0;">
        <h3 style="font-size: 1.8rem; margin-bottom: 30px; text-align: center; display: flex; align-items: center; justify-content: center; gap: 10px;">
            <i class="fas fa-building" style="color: #f59e0b;"></i>
            Fasilitas Sekolah
        </h3>
        <div class="grid-3">
            <div style="text-align: center; padding: 20px;">
                <i class="fas fa-book-open" style="font-size: 2.5rem; color: #60a5fa; margin-bottom: 15px;"></i>
                <h4 style="margin-bottom: 10px;">Perpustakaan Modern</h4>
                <p style="opacity: 0.9; font-size: 0.95rem;">Koleksi buku lengkap dengan sistem digital dan ruang baca yang nyaman</p>
            </div>
            <div style="text-align: center; padding: 20px;">
                <i class="fas fa-flask" style="font-size: 2.5rem; color: #10b981; margin-bottom: 15px;"></i>
                <h4 style="margin-bottom: 10px;">Laboratorium Sains</h4>
                <p style="opacity: 0.9; font-size: 0.95rem;">Lab fisika, kimia, dan biologi dengan peralatan standar internasional</p>
            </div>
            <div style="text-align: center; padding: 20px;">
                <i class="fas fa-desktop" style="font-size: 2.5rem; color: #8b5cf6; margin-bottom: 15px;"></i>
                <h4 style="margin-bottom: 10px;">Lab Komputer</h4>
                <p style="opacity: 0.9; font-size: 0.95rem;">Komputer terbaru dengan akses internet cepat untuk pembelajaran digital</p>
            </div>
            <div style="text-align: center; padding: 20px;">
                <i class="fas fa-dumbbell" style="font-size: 2.5rem; color: #f59e0b; margin-bottom: 15px;"></i>
                <h4 style="margin-bottom: 10px;">Fasilitas Olahraga</h4>
                <p style="opacity: 0.9; font-size: 0.95rem;">Lapangan basket, voli, dan gym untuk pengembangan fisik siswa</p>
            </div>
            <div style="text-align: center; padding: 20px;">
                <i class="fas fa-music" style="font-size: 2.5rem; color: #ec4899; margin-bottom: 15px;"></i>
                <h4 style="margin-bottom: 10px;">Studio Musik</h4>
                <p style="opacity: 0.9; font-size: 0.95rem;">Ruang musik lengkap dengan berbagai alat musik untuk pengembangan bakat</p>
            </div>
            <div style="text-align: center; padding: 20px;">
                <i class="fas fa-utensils" style="font-size: 2.5rem; color: #14b8a6; margin-bottom: 15px;"></i>
                <h4 style="margin-bottom: 10px;">Kantin Sehat</h4>
                <p style="opacity: 0.9; font-size: 0.95rem;">Menyediakan makanan bergizi dan sehat untuk mendukung tumbuh kembang siswa</p>
            </div>
        </div>
    </div>

    <!-- Program Unggulan Section -->
    <div class="content-card" style="max-width: 1200px; margin: 40px auto 0;">
        <h3 style="font-size: 1.8rem; margin-bottom: 30px; text-align: center; display: flex; align-items: center; justify-content: center; gap: 10px;">
            <i class="fas fa-star" style="color: #fbbf24;"></i>
            Program Unggulan
        </h3>
        <div class="grid-2">
            <div style="padding: 20px; border-left: 4px solid #fbbf24; background: rgba(251, 191, 36, 0.1); margin-bottom: 20px; border-radius: 0 10px 10px 0;">
                <h4 style="margin-bottom: 15px; color: #fbbf24;">Program STEM</h4>
                <p style="opacity: 0.9; line-height: 1.6;">Pendekatan pembelajaran terintegrasi antara Sains, Teknologi, Engineering, dan Matematika untuk mempersiapkan siswa menghadapi era digital.</p>
            </div>
            <div style="padding: 20px; border-left: 4px solid #10b981; background: rgba(16, 185, 129, 0.1); margin-bottom: 20px; border-radius: 0 10px 10px 0;">
                <h4 style="margin-bottom: 15px; color: #10b981;">Program Bahasa Internasional</h4>
                <p style="opacity: 0.9; line-height: 1.6;">Pembelajaran bahasa Inggris intensif dengan native speaker dan persiapan sertifikasi internasional seperti TOEFL dan IELTS.</p>
            </div>
            <div style="padding: 20px; border-left: 4px solid #8b5cf6; background: rgba(139, 92, 246, 0.1); margin-bottom: 20px; border-radius: 0 10px 10px 0;">
                <h4 style="margin-bottom: 15px; color: #8b5cf6;">Program Kewirausahaan</h4>
                <p style="opacity: 0.9; line-height: 1.6;">Mengembangkan jiwa entrepreneur siswa melalui praktik bisnis sederhana dan pembelajaran keterampilan hidup yang aplikatif.</p>
            </div>
            <div style="padding: 20px; border-left: 4px solid #f59e0b; background: rgba(245, 158, 11, 0.1); margin-bottom: 20px; border-radius: 0 10px 10px 0;">
                <h4 style="margin-bottom: 15px; color: #f59e0b;">Program Karakter Building</h4>
                <p style="opacity: 0.9; line-height: 1.6;">Pembentukan karakter melalui kegiatan kepemimpinan, service learning, dan program pengembangan soft skills yang komprehensif.</p>
            </div>
        </div>
    </div>
</section>

<?php include 'inc/footer.php'; ?>