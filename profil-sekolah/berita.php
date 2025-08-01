<?php
// berita.php - News Page
$page_title = "Berita & Pengumuman";
$page_description = "Ikuti berita terbaru, pengumuman penting, dan kegiatan menarik di sekolah kami. Update informasi seputar prestasi siswa dan program sekolah.";
include 'inc/header.php';

// Sample news data - in real application, this would come from database
$news = [
    [
        'id' => 1,
        'title' => 'Siswa Sekolah Kami Raih Juara 1 Olimpiade Matematika Nasional',
        'date' => '2024-01-15',
        'category' => 'Prestasi',
        'excerpt' => 'Tim olimpiade matematika sekolah kami berhasil meraih juara 1 dalam kompetisi tingkat nasional yang diikuti oleh 500 sekolah dari seluruh Indonesia.',
        'image' => 'https://images.unsplash.com/photo-1596495577886-d920f1fb7238?w=400&h=250&fit=crop'
    ],
    [
        'id' => 2,
        'title' => 'Pembukaan Pendaftaran Siswa Baru Tahun Ajaran 2024/2025',
        'date' => '2024-01-10',
        'category' => 'Pengumuman',
        'excerpt' => 'Pendaftaran siswa baru untuk tahun ajaran 2024/2025 telah dibuka. Daftar sekarang dan dapatkan kesempatan mengikuti tes masuk dengan berbagai program unggulan.',
        'image' => 'https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=400&h=250&fit=crop'
    ],
    [
        'id' => 3,
        'title' => 'Workshop Coding untuk Siswa: Membangun Aplikasi Mobile',
        'date' => '2024-01-08',
        'category' => 'Kegiatan',
        'excerpt' => 'Workshop intensif coding selama 3 hari yang mengajarkan siswa cara membuat aplikasi mobile sederhana menggunakan teknologi terbaru.',
        'image' => 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?w=400&h=250&fit=crop'
    ],
    [
        'id' => 4,
        'title' => 'Festival Seni dan Budaya 2024: Menampilkan Kreativitas Siswa',
        'date' => '2024-01-05',
        'category' => 'Event',
        'excerpt' => 'Festival tahunan yang menampilkan berbagai pertunjukan seni dari siswa termasuk musik, tari, teater, dan pameran karya seni rupa.',
        'image' => 'https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?w=400&h=250&fit=crop'
    ],
    [
        'id' => 5,
        'title' => 'Kerjasama dengan Universitas Terkemuka untuk Program Beasiswa',
        'date' => '2024-01-03',
        'category' => 'Pengumuman',
        'excerpt' => 'Sekolah menjalin kerjasama dengan 5 universitas terkemuka untuk memberikan program beasiswa kepada siswa berprestasi.',
        'image' => 'https://images.unsplash.com/photo-1562774053-701939374585?w=400&h=250&fit=crop'
    ],
    [
        'id' => 6,
        'title' => 'Renovasi Laboratorium Sains dengan Teknologi Terbaru',
        'date' => '2024-01-01',
        'category' => 'Fasilitas',
        'excerpt' => 'Laboratorium sains sekolah telah selesai direnovasi dengan peralatan modern dan teknologi pembelajaran interaktif untuk mendukung proses belajar mengajar.',
        'image' => 'https://images.unsplash.com/photo-1582719471384-894fbb16e074?w=400&h=250&fit=crop'
    ]
];
?>

<section class="main-content">
    <div class="page-header">
        <h1 class="page-title">Berita & Pengumuman</h1>
        <p class="page-subtitle">Ikuti update terbaru seputar kegiatan dan pencapaian sekolah</p>
    </div>

    <!-- Search Bar -->
    <div class="content-card" style="max-width: 800px; margin: 0 auto 40px; text-align: center;">
        <div style="position: relative; max-width: 500px; margin: 0 auto;">
            <input type="text" id="searchNews" placeholder="Cari berita..." style="width: 100%; padding: 15px 50px 15px 20px; border: none; border-radius: 25px; background: rgba(255, 255, 255, 0.9); color: #333; font-size: 16px; outline: none;">
            <i class="fas fa-search" style="position: absolute; right: 20px; top: 50%; transform: translateY(-50%); color: #666;"></i>
        </div>
    </div>

    <!-- Category Filter -->
    <div style="text-align: center; margin-bottom: 40px;">
        <button class="category-filter active" data-category="all" style="margin: 5px; padding: 10px 20px; border: none; border-radius: 20px; background: rgba(255, 255, 255, 0.3); color: white; cursor: pointer; transition: all 0.3s ease;">Semua</button>
        <button class="category-filter" data-category="Prestasi" style="margin: 5px; padding: 10px 20px; border: none; border-radius: 20px; background: rgba(255, 255, 255, 0.1); color: white; cursor: pointer; transition: all 0.3s ease;">Prestasi</button>
        <button class="category-filter" data-category="Pengumuman" style="margin: 5px; padding: 10px 20px; border: none; border-radius: 20px; background: rgba(255, 255, 255, 0.1); color: white; cursor: pointer; transition: all 0.3s ease;">Pengumuman</button>
        <button class="category-filter" data-category="Kegiatan" style="margin: 5px; padding: 10px 20px; border: none; border-radius: 20px; background: rgba(255, 255, 255, 0.1); color: white; cursor: pointer; transition: all 0.3s ease;">Kegiatan</button>
        <button class="category-filter" data-category="Event" style="margin: 5px; padding: 10px 20px; border: none; border-radius: 20px; background: rgba(255, 255, 255, 0.1); color: white; cursor: pointer; transition: all 0.3s ease;">Event</button>
    </div>

    <!-- News Grid -->
    <div class="grid-2" style="max-width: 1200px; margin: 0 auto;" id="newsContainer">
        <?php foreach($news as $article): ?>
        <div class="content-card news-card" data-category="<?php echo $article['category']; ?>">
            <div style="margin-bottom: 20px;">
                <img src="<?php echo $article['image']; ?>" alt="<?php echo htmlspecialchars($article['title']); ?>" style="width: 100%; height: 200px; object-fit: cover; border-radius: 10px;">
            </div>
            
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px;">
                <span style="background: rgba(255, 255, 255, 0.2); padding: 5px 15px; border-radius: 15px; font-size: 0.85rem; font-weight: 500;">
                    <?php echo $article['category']; ?>
                </span>
                <span style="opacity: 0.7; font-size: 0.9rem;">
                    <i class="fas fa-calendar-alt"></i> <?php echo date('d M Y', strtotime($article['date'])); ?>
                </span>
            </div>
            
            <h3 class="news-title" style="font-size: 1.3rem; font-weight: 600; margin-bottom: 15px; line-height: 1.4;">
                <?php echo htmlspecialchars($article['title']); ?>
            </h3>
            
            <p class="news-excerpt" style="opacity: 0.9; line-height: 1.6; margin-bottom: 20px;">
                <?php echo htmlspecialchars($article['excerpt']); ?>
            </p>
            
            <a href="detail-berita.php?id=<?php echo $article['id']; ?>" style="display: inline-flex; align-items: center; gap: 8px; color: white; text-decoration: none; font-weight: 500; opacity: 0.9; transition: all 0.3s ease;">
                Baca Selengkapnya <i class="fas fa-arrow-right"></i>
            </a>
        </div>
        <?php endforeach; ?>
    </div>

    <!-- Load More Button -->
    <div style="text-align: center; margin-top: 50px;">
        <button id="loadMore" style="padding: 15px 35px; background: rgba(255, 255, 255, 0.2); color: white; border: 2px solid rgba(255, 255, 255, 0.3); border-radius: 25px; font-weight: 600; cursor: pointer; transition: all 0.3s ease;">
            <i class="fas fa-plus"></i> Muat Lebih Banyak
        </button>
    </div>
</section>

<style>
/* News specific styles */
.news-card:hover {
    transform: translateY(-8px);
}

.news-card img {
    transition: transform 0.3s ease;
}

.news-card:hover img {
    transform: scale(1.05);
}

.category-filter:hover, .category-filter.active {
    background: rgba(255, 255, 255, 0.3);
    transform: translateY(-2px);
}

#loadMore:hover {
    background: white;
    color: #667eea;
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
}

.news-card a:hover {
    opacity: 1;
    transform: translateX(5px);
}

@media (max-width: 768px) {
    .category-filter {
        display: block;
        width: 100%;
        margin: 5px 0;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Category filtering
    const categoryFilters = document.querySelectorAll('.category-filter');
    const newsCards = document.querySelectorAll('.news-card');

    categoryFilters.forEach(filter => {
        filter.addEventListener('click', function() {
            // Update active filter
            categoryFilters.forEach(f => f.classList.remove('active'));
            this.classList.add('active');

            const category = this.dataset.category;

            // Filter news cards
            newsCards.forEach(card => {
                if (category === 'all' || card.dataset.category === category) {
                    card.style.display = 'block';
                    card.style.animation = 'slideUp 0.3s ease-out';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });

    // Search functionality (enhanced from main.js)
    const searchInput = document.getElementById('searchNews');
    if (searchInput) {
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            
            newsCards.forEach(card => {
                const title = card.querySelector('.news-title').textContent.toLowerCase();
                const excerpt = card.querySelector('.news-excerpt').textContent.toLowerCase();
                
                if (title.includes(searchTerm) || excerpt.includes(searchTerm)) {
                    card.style.display = 'block';
                    card.style.animation = 'slideUp 0.3s ease-out';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    }

    // Load more functionality (placeholder)
    const loadMoreBtn = document.getElementById('loadMore');
    if (loadMoreBtn) {
        loadMoreBtn.addEventListener('click', function() {
            // In real application, this would load more news from server
            showNotification('Fitur "Muat Lebih Banyak" akan segera tersedia!', 'info');
        });
    }
});
</script>

<?php include 'inc/footer.php'; ?>